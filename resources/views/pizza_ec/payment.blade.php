<?php
/**
 * Created by PhpStorm.
 * User: minion
 * Date: 2016/11/09
 * Time: 12:12
 */

?>
@extends('layouts/app')

<html>
<head>
    @section('title', 'お支払い')
    <script type="text/javascript" src="https://js.pay.jp/"></script>
</head>
<body>
@section('contents')
<form action="/stripe/pay" method="POST">
    <script
            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="pk_test_zD2Cld6fOOiWPRgo7FQrDYWJ"
            data-amount="1000"
            data-name="Demo Site"
            data-description="Widget"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="ja"
            data-currency="jpy">
    </script>
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
</form>
@endsection


</body>
</html>


