

@extends('layouts.app')


@section('js')
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/order.css" media="screen" title="no title">
@endsection


@section('contents')
    <form action="/order/confirm" method="POST" id="address">
        <table class="table table-bordered">
            <tr>
                <th>氏名</th>
                <td><input type="text"></td>
            </tr>
            <tr>
                <th>フリガナ</th>
                <td><input type="text"></td>
            </tr>
            <tr>
                <th>性別</th>
                <td><input type="radio" name="gender" value="man">男
                    <input type="radio" name="gender" value="woman">女
                    <input type="radio" name="gender" value="other">その他
                </td>
            </tr>
            <tr>
                <th>郵便番号</th>
                <td>
                    〒<input type="text" name="zip31" size="4" maxlength="3"> － <input type="text" name="zip32" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip31','zip32','pref31','addr31','addr31');">
                </td>
            </tr>
            <tr>
                <th>住所</th>
                <td>
                    <input type="text" name="pref" size="8" maxlength="20">
                    <input type="text" name="address" size="20" maxlength="40">
                </td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td><input type="text" name="phone" size="4"> - <input type="text" name="phone" size="4"> - <input type="text" name="phone" size="4"></td>
            </tr>
            <tr>
                <td colspan="2" class="button">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="clear" name="clear" value="クリア">
                    <input type="submit" name="submit" value="登録">
                </td>
            </tr>
        </table>
    </form>
@endsection