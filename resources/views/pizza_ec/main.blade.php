@extends('layouts/app')

@section('css')
    <link rel="stylesheet" href="/plugin/flickity/flickity.css">
@endsection

@section('js')
    <script src="/plugin/flickity/flickity.pkgd.js"></script>
    <script>

        $(document).ready(function () {
            $('.main-carousel').flickity({
                // options
                cellAlign: 'left',
                contain: true
            });
        });

    </script>
@endsection


@section('header-img')

    <div class="slider">
        <ul class="main-carousel">
            <li class="carousel-cell"><img src="/images/slider/news01.jpg" alt=""></li>
            <li class="carousel-cell"><img src="/images/slider/news02.jpg" alt=""></li>
            <li class="carousel-cell"><img src="/images/slider/news03.jpg" alt=""></li>
        </ul>
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
                                <img src="/images/pizza_{{ $pizza->id }}.jpg" alt=""/>
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
    </div>    <!-- 	#item-list-ulの終わり!-->

@endsection