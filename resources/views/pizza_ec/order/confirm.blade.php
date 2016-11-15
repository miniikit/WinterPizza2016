@extends('layouts.app')
<?php
/**
 * カード決済ボタン、戻るボタンの処理振り分け
 * http://qiita.com/irxground/items/c8537d30e9760c5b3e5c
 */

?>
@section('js')
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="order.css" media="screen" title="no title">
@endsection

@section('title','注文確認')

@section('contents')

    <h1>注文確認</h1>
    <form action="/order/pay" action="post">
        <table class="table">
            <tr><h4>お届け先住所</h4></tr>
            <tr><th>郵便番号</th>
                <td>111-1111</td>
            </tr>
            <tr><th>住所</th>
                <td>滋賀県大津市　旭山動物園</td>
            </tr>
            <tr><th>氏名</th>
                <td>mini</td>
            </tr>
            <tr><th>電話番号</th>
                <td>080-1111-1111</td>
            </tr>
        </table>
        <table class="table">
            <tr><h4>注文内容</h4></tr>
            <tr><th>商品名</th><th>数量</th><th>合計金額</th>
            </tr>
            <tr>
                <td>パン</td><td>1</td><td>¥ 3,000円</td>
            </tr>
            <tr>
                <td>粉</td><td>1</td><td>¥ 9,000円</td>
            </tr>
            <tr><th colspan="2">合計金額</th><td>¥ 12,000円</td></tr>
        </table>
        <table class="table">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <input type="submit" name="confirm" value="戻る">
            <input type="submit" name="confirm" value="カード決済へ">
        </table>
    </form>
@endsection