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
      $id = $request->get("id"); //idを取得
      $item = DB::table('pizza')->where('id', $id)->first(); //idが一致するものをテーブルから検索、取得
      $items = session()->get("items",[]); //セッションデータを取得、nullの場合は空の配列

      //個数の処理
          $num = 0;
          $num = $request->get("num");  //個数を取得
          if($num > 0){
            for($i=0;$i<$num;$i++){
              $items[] = $item; // 取得したデータにオブジェクトを保存
            }
          }
      session()->put("items", $items);
      return redirect("cart"); //カートのページへリダイレクト
  });



  // カートの中を一覧表示
  Route::get('/cart', function(){
      $items = session()->get("items",[]); //セッションデータを取得、nullの場合は空の配列
      $itemCount = []; // id => num
      $itemMap = []; // id => $item
      $totalSum = 0;  //合計金額
      foreach ($items as  $item) {
        if(isset($itemCount[$item->id])){
          $itemCount[$item->id] = $itemCount[$item->id] + 1;  //カウントを追加
        }else{
          $itemCount[$item->id] = 1;
          $itemMap[$item->id] = $item; //？
        }
        $totalSum = $totalSum + $item->price;
      }

      return view("pizza_ec.cart", [ //データを渡してビューを表示
          "items" => $items ,
          "count" => $itemCount ,
          "itemMap" => $itemMap ,
          "sum" => $totalSum
      ]);
  });


  // カートを空にする
  Route::get('/delete/all', function(){
      session()->flush(); //sessionの全データを削除
      return redirect("/cart"); //カートのページへリダイレクト
  });


  // カートの一部商品を削除する
 Route::get('/delete', function(Request $request){
    $index = $request->get("index"); //削除した商品のindexを取得
    session()->forget("items.$index");
    return redirect("/cart");
});
