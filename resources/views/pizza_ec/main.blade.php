<html>
<head>
	<meta charset="utf-8">
	<title>PHP</title>
<!--	<link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
!-->

<!--	@@@@CSS一覧		!-->
		<!--	@@@@　Google Fonts タイトル向け		!-->
		<link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
		<!--	@@@@ CSS		!-->
		<link rel="stylesheet" href="style.css" media="screen" title="no title">
		<!--	@@@@リセットCSS		!-->
		<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
		<!--	@@@@カートアイコン CSS!-->
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<body>



	<!--	@@@@ header		!-->
		<div class="top">
			<ul>
				<li><a href="/"><span>Mini-Pizza</span></a></span></li>
					<li><a href="#">My Page</a></li>
					<li><a href="/cart"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
			</ul>
		</div>

<div class="news">
	<div class="news-img">
		<img src="news02.jpg" alt="" />
	</div>
</div>

<!-- グラデーション用div要素　top-bottom!-->
<div class="top-bottom"></div>


<!--	@@@@アイテム一覧		!-->

<div class="item-list-ul">
<ul>
@foreach($pizza as $pizza)
	<li>
		<a href="/detail?id={{ $pizza->id }}">
		<!--	@@@@アイテム単位	!-->
		<div class="item">
			<!--	@@@@アイテム画像		!-->
			<div class="item-img">
				<img src="/images/pizza_{{ $pizza->id }}.jpg" alt="" />
			</div>
			<!--	@@@@アイテム名前		!-->
			<div class="item-name">
 				<a href="/detail?id={{ $pizza->id }}">{{ $pizza->name }}</a>
			</div>
			<!--	@@@@アイテム価格		!-->
			<div class="item-price">
				¥ {{ number_format($pizza->price)}} 円
			</div>
		</div>
	</a>
	</li>
@endforeach



</ul>
</div>	<!-- 	#item-list-ulの終わり!-->

<!--
<table>

	<img src="pizza_1.jpeg" alt="" />
	<button type="button" name="button"></button>
</table>
!-->


<div class="footer">
	<p>copyright PIZZA  ALL RIGHTS RESERVERD.</p>
</div>
</body>
</html>
