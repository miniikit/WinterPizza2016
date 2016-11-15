@extends('layouts.app')

@section('title','注文完了')

@section('contents')
    <h1>注文が完了しました。</h1>

    <p>ご利用ありがとうございました。</p><br><br>
    <p>注文番号は、103938300になります。</p><br>
    <p>お問い合わせの際には上記の注文番号が必要になります。</p><br>
    <p>商品のお届けまで、今しばらくお待ちください。</p>

    <form action="/">
        <input type="submit" name="" value="ホームへ戻る">
    </form>
@endsection
