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



		<script type="text/javascript" language="javascript">
		        function onButtonClick()
						{
		          target = document.getElementById("output");
		          target.innerText = document.forms.id_form1.id_textBox1.value;
		          //target.innerText = document.id_form1.id_textBox1.value;//これでもOK
		        }
		  </script>


</head>
<body>


	<form name="form1" id="id_form1" action="">
  	<select class="" name="">
  		<option value = 2>2</option>
  	</select>
		<input name="textBox1" id="id_textBox1" type="text" value="" />
		<input type="button" value="Exec" onclick="onButtonClick();" />
  </form>

 <div id="output"></div>

<br><br>


	<!--	@@@@ header		!-->
		<div class="top">
			<ul>
				<li><a href="/"><span>Mini-Pizza</span></a></li>
					<li><a href="#">My Page</a></li>
					<li><a href="#"> My Cart</a></li>
			</ul>
		</div>
		<!-- グラデーション用div要素　top-bottom!-->
		<div class="top-bottom"></div>



		<div class="cart-message">



	@if($itemMap)
		<!--カートある時の処理!-->

			<table>
				<tr>
					<th>
						画像
					</th>
					<th>
						商品名
					</th>
					<th>
						単価
					</th>
					<th>
						個数
					</th>
				</tr>
			@foreach($itemMap as $item)
					<!--	@@@@アイテム単位	!-->
					<div class="item">
						<?php /*
						//個数のためだけの処理
							$count = $count + 1;//全体の個数をカウント
							$itemNum = array('id' => $item->id,
																'sum' => $sum);
							$thisId = $item->id; //この商品のIDをセット
							for ($i=0; $i <$count ; $i++) {
								if($itemNum['id'] == $thisId){
									$itemNum['sum'] += 1;
									$flg = 1;
									// continue;
								}
							}

							if($flg == 1){
								$flg = 0;
								// break;
							}
							*/
						 ?>
							<tr>
								<a href="/detail?id={{ $item->id }}">
										<td> <!--　画像　!-->
												<div class="cart-item-img">
														<img src="/images/pizza_{{ $item->id }}.jpg" alt="" />
												</div>
										</td>
										<td><!--　商品名　!-->
												<div class="item-name">
													<a href="/detail?id={{ $item->id }}">{{ $item->name }}</a>
												</div>
										</td>
								</a>
									<td><!--　単価　!-->
											<div class="item-price">
												¥ {{ number_format($item->price)}} 円
											</div>
									</td>
									<td><!--　個数　!-->
										<?php
											$id = $item->id;
										//	 echo $count[$id];
									 	?>
										<form class="" action="#" method="post">
											<select class="" name="">
												<option value="<?php echo $count[$id] ?>" selected><?php echo $count[$id] ?></option>
												<?php for($i = $count[$id]; $i > 0; $i--){ ?>
												<option value="<?php echo $i-1; ?>"><?php echo $i-1; ?></option>
												<?php } ?>

											</select>
										</form>
									</td>
							</tr>
					 </div>
			 	 @endforeach
				 <tr class="cart-total">
						 <th colspan="2">
						 	合計金額
						 </th>
						 <td colspan="2">
							 ¥ {{ number_format($sum)}} 円

						 </td>
				 </tr>

			</table>
		</div><!--cart-messageの終わり	!-->


		<div class="cart-button">
			<div class="cart-back">
				<a href="#">戻る</a>
			</div>
			　　
			<div class="cart-go">
				<a href="#">注文へ進む</a>
			</div>
		</div>

	@else
			<!--カートないときの処理	!-->
				<p class="cart-none">
					カートが空です。
				</p>
	@endif

<div class="footer">
	<p>copyright PIZZA  ALL RIGHTS RESERVERD.</p>
</div>
</body>
</html>
