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
<link rel="stylesheet" href="../style.css" media="screen" title="no title">
<!--	@@@@リセットCSS		!-->
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">

<!--  @@@@ Google Fonts 商品詳細のタイトル向け		!-->
<link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/notosansjp.css">
</head>
<body>


	<!--	@@@@ header		!-->
		<div class="top">
			<ul>
				<li><a href="/"><span>Mini-Pizza</span></a></span></li>
					<li><a href="#">My Page</a></li>
					<li><a href="/cart"><i class="fa fa-shopping-cart"></i>My Cart</a></li>
			</ul>
		</div>

<!-- グラデーション用div要素　top-bottom!-->
<div class="top-bottom"></div>

<!--	@@@@ コンテンツ		!-->
<div class="contents">

		<!--	@@@@アイテム詳細画面		!-->
			<div class="about-item">
				<ul>

						<li>
								<!--	@@@@アイテム名前		!-->
								<div class="about-item-name">
										<h2>{{ $pizza->name }}<span> by {{ $pizza->by }}</span></h2>
								</div>
								<!--	@@@@アイテム画像		!-->
								<div class="about-item-img">
									<img src="{{ $pizza->img }}" alt="" />
								</div>
								<!--  @@@@価格・説明欄		!-->
								<div class="about-item-contents">
												<!--	@@@@辛さ		!-->
												<div class="about-item-rank">
														<div class="about-item-left">
															辛さ
														</div>
														<div class="about-item-right">
															{{ $pizza->hot }}
														</div>
												</div>
												<!--	@@@@アイテム価格		!-->
												<div class="about-item-price">
														<div class="about-item-left">
															価格
														</div>
														<div class="about-item-right">
															¥ {{ number_format($pizza->price) }}（税込）
														</div>
												</div>
												<!--	@@@@アイテム説明		!-->
												<div class="about-item-desc">
														<div class="about-item-left">
															特徴
														</div>
														<div class="about-item-right">
															{{ $pizza->description }}
														</div>
												</div>
												<!--	@@@@カート追加	!-->
												<div class="about-item-add">

														<form class="" action="/cart?id={{$pizza->id}}" method="post">
															{{ csrf_field() }}
															<div class="about-item-left">
																個数
															</div>
															<div class="about-item-right">
																<select name="num">
																	<?php for($i = 1; $i<=20; $i++){ ?>
																			<option value="<?php echo $i ?>"><?php echo $i ?></option>
																	<?php } ?>
																</select>
																<input type="submit" name="add" value="カートに追加">
															</div>
														</form>
												</div><!-- カート追加ここまで !-->
								</div><!-- 価格・説明欄ここまで !-->



						</li>

			  </ul>
			</div>
		<!--  !-->


</div>	<!-- コンテンツ部分終了 !-->

<div class="footer">
	<p>copyright PIZZA  ALL RIGHTS RESERVERD.</p>
</div>


</body>
</html>
