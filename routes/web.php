<?php
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/pizza_1', function () {
    return view('pizza_ec/about_pizza_01');
});
*/


//トップページ
Route::get('/', function () {
    $pizza = DB::table('pizza')->get();
    return view('/pizza_ec/main',[
        "pizza" => $pizza
    ]);
});



//ショッピングカート
// Route::get('/cart', function () {
//     return view('pizza_ec.cart');
// });



//ピザ詳細ページ
Route::get('/detail', function (Request $request) {
     $id = $request->get("id");
     $pizza = DB::table('pizza')->where('id', $id)->first();
     return view('pizza_ec.detail', [
         "pizza" => $pizza
    //  基本的な書式　return view('pizza_ec.detail',[]
    ]);

  });




// カートに追加
  Route::post('/cart', function(Request $request){
      //idを取得し、$idに商品idを、$itemに商品データを格納
        $id = $request->get("id"); //idを取得
      //個数の処理
        $num = 0;   //0で初期化
        $num = $request->get("num");  //個数を取得
      //クラス読み込み
        $cart = new \App\Service\CartService();
        $cart->addItem($id,$num);
      return redirect("cart"); //カートのページへリダイレクト
  });




  // カートの中を一覧表示
  Route::get('/cart', function(){
      //クラス読み込み　オブジェクト生成
         $cart = new \App\Service\CartService();
      //list(変数名,変数名) = 配列とかにすると、配列の中身を受け渡すことができる
         list($items,$itemCount,$itemMap,$totalSum) = $cart->showCart();

      return view("pizza_ec.cart", [ //データを渡してビューを表示
          "items" => $items ,
          "count" => $itemCount ,
          "itemMap" => $itemMap ,
          "sum" => $totalSum
      ]);
  });




  // カートを空にする
  Route::get('/delete/all', function(){
      //クラス読み込み　オブジェクト生成
        $cart = new \App\Service\CartService();
        $cart->clear();

      return redirect("/cart"); //カートのページへリダイレクト
  });




  // カートの一部商品を削除する
  Route::get('/delete', function(Request $request){
      //itemIdに、削除された商品のidを入れる。
        $itemId = $request->get("id"); //削除した商品のidを取得。 delete?id=Xの値が入る
      //クラス読み込み　オブジェクト生成
        $cart = new \App\Service\CartService();
        $cart->removeItem($itemId);
    return redirect("/cart");
});
