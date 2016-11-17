@extends('layouts/app')

@section('contents')
	<div class="cart-message">
	@if($itemMap)
		<!--カートある時の処理!-->

			<div class="cart-button">
				<div class="cart-go">
					<a href="/delete/all" class="button">カートを全て空にする</a>
				</div>
			</div>


			<table>
				<tr>
					<th>画像</th>
					<th>商品名</th>
					<th>単価</th>
					<th>個数</th>
				</tr>
			@foreach($itemMap as $itemId=>$item)
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
									<td> <!--　画像　!--><div class="cart-item-img">
											<img src="/images/pizza_{{ $item->id }}.jpg" alt="" /></div>
									</td>
									<td><!--　商品名　!--><div class="item-name">
											<a href="/detail?id={{ $item->id }}">{{ $item->name }}</a></div>
									</td>
								</a>
									<td><!--　単価　!--><div class="item-price">
											¥ {{ number_format($item->price)}} 円</div>
									</td>
									<td><!--　個数　!-->
										<?php  $id = $item->id;  ?>
										<form class="" action="#" method="post">
											<select class="cart-num-4js" name="">
												<option value="<?php echo $count[$id] ?>" selected><?php echo $count[$id] ?></option>
												<?php for($i = $count[$id]; $i > 0; $i--){ ?>
												<option value="<?php echo $i-1; ?>"><?php echo $i-1; ?></option>
												<?php } ?>
											</select>
										</form>
									</td>
								<td class="cart-one-delete"><a href="/delete?id={{ $itemId }}">削除</a></td>
							</tr>
					 </div>
			@endforeach
				 <tr class="cart-total">
						 <th colspan="2">合計金額</th>
						 <td colspan="2">¥ {{ number_format($sum)}} 円</td>
				 </tr>
			</table>
	</div><!--cart-messageの終わり	!-->

		<div class="cart-button">
			<div class="cart-back"><a href="#">戻る</a></div>　　
			<div class="cart-go"><a href="/order/inputAdress">注文へ進む</a></div>
		</div>
	@else
			<!--カートないときの処理	!-->
				<p class="cart-none">カートが空です。</p>
	@endif

@endsection