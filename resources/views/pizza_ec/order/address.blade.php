@extends('layouts.app')


@section('css')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/order.css" media="screen" title="no title">
@endsection

@section('js')
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
@endsection

@section('contents')
    <div id="content">
        <h1>お届け先住所</h1>
        <form class="form" action="/order/confirm" method="POST" id="address">
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
                        <input type="text" name="postal" size="10" maxlength="8" onKeyUp="AjaxZip3.zip2addr(this,'','address1','address2');">
                    </td>
                </tr>
                <tr>
                    <th>都道府県</th>
                    <td><input type="text" name="address1" size="8" maxlength="20"></td>
                <tr>
                <tr>
                    <th>住所１</th>
                    <td><input type="text" name="address2" size="30" maxlength="40"></td>
                </tr>
                <tr>
                    <th>住所２</th>
                    <td><input type="text" name="address3" size="30" maxlength="40"></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><input type="text" name="phone" size="14" maxlength="11">
                </tr>
                <tr>
                    <td colspan="2" class="buttons">
                        <input class="button" type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <input class="button" type="button" name="clear" value="クリア">
                        <input class="button" type="submit" name="submit" value="登録">
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection