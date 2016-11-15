<?php
/**
 * Created by PhpStorm.
 * User: minion
 * Date: 2016/11/09
 * Time: 21:45
 */

?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--	@@@@CSS一覧		!-->
    <!--	@@@@　Google Fonts タイトル向け		!-->
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!--	@@@@ CSS		!-->
        <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <!--	@@@@リセットCSS		!-->
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <!--	@@@@カートアイコン CSS!-->
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <title> @yield('title') | MiniPizza</title>


</head>
<body>

<!--	@@@@ header		!-->
<div class="top">
    <ul>
        <li><a href="/"><span>Mini-Pizza</span></a></li>
        <li><a href="#">My Page</a></li>
        <li><a href="/cart"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
    </ul>
</div>

@yield('header-img')

<!-- グラデーション用div要素　top-bottom!-->
<div class="top-bottom"></div>



@yield('contents')



<div class="footer">
    <p>copyright PIZZA  ALL RIGHTS RESERVERD.</p>
</div>
</body>
</html>


</body>
</html>