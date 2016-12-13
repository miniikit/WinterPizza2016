<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--  Auth関係 --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--	@@@@CSS一覧		!-->
    <!--	@@@@　Google Fonts タイトル向け		!-->
        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <!--	@@@@ CSS		!-->
        <link rel="stylesheet" href="/style.css" media="screen" title="no title">
    <!--	@@@@リセットCSS		!-->
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <!--	@@@@カートアイコン CSS!-->
        <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
    <!--    @@@@Slider  !-->
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!--  Jquery  !-->
        <script src="/plugin/jquery-3.1.1.min.js"></script>

    @yield('css')

    <!-- Scripts !-->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!-- !-->
        <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>


    @yield('js')


        <title> @yield('title') | MiniPizza</title>


</head>
<body>

<!--	@@@@ header		!-->
<div class="top">
    <ul>
        <li><a href="/"><span>Mini-Pizza</span></a></li>
        {{-- <li><a href="#">My Page</a></li> --}}
        <li><a href="/cart"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
{{--        <!-- Authentication Links -->
        @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
        <li></li>
--}}
    </ul>
</div>
<!-- グラデーション用div要素　top-bottom!-->
<div class="top-bottom"></div>

@yield('header-img')





@yield('contents')



<div class="footer">
    <p>copyright PIZZA  ALL RIGHTS RESERVERD.</p>
</div>
</body>
</html>


</body>
</html>