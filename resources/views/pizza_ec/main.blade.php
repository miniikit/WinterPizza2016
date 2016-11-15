@extends('layouts/app')

@section('header-img')
	<div class="news">
		<div class="news-img">
			<img src="news02.jpg" alt="" />
		</div>
	</div>
@endsection

@section('contents')
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

@endsection