<!DOCTYPE html>
<html lang="en">
<head>
    @section('head')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ЮГМетал-Плюс</title>


        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script>
        <link rel="stylesheet" href="{{ URL::to('/css/mystyles.css') }}">


    @show
</head>
<body>

    <div class='container container-background shadow'>
        @section('menu')
        <div class='row'>
            <img src="/img/header.jpg" class="img-responsive">
            <div id="menu" >
                <ul class="nav nav-tabs nav-justified" >
                    <li><a href="/">покупаем</a></li>
                    <li><a href="{{route('delivery')}}">получаем</a></li>
                    <li><a href="/articles">почитаем</a></li>
                    <li><a href={{route('cart')}}><img src="/img/cart.png" class="cart"><span id="cartAmount"></span></a></li>
                </ul>
            </div>
            <div class="col-md-12">
            </div>
        </div>
        @show
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                @yield('content')
            </div>

            <div class="col-md-3 col-md-pull-9">
                @section('sidebar')
                    <img src="/img/dog2.png" alt="">

                    <p><b>048 736 26 15</b>  Одесса </p>
                    <p><b>093 793 23 48</b>  Life:) </p>
                    <p><b>099 460 18 06</b>  МТС </p>
                    <p><b>097 331 01 94</b>  Kyivstar </p>
                    <p><b>ump1305@mail.ru</b></p>
                    <div class="social">
                    <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,lj,gplus"></div>
                    </div>

                @show
            </div>

        </div>
        <div class='row'>

            <div class="col-md-12 myFooter">
                Все права защищены © 2015-2017 <span>ugmet.com.ua</span>
            </div>
        </div>
    </div>


    @section('scripts')

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/jquery.cookie.js"></script>
    <script src="/js/myjs.js"></script>
    <script src="/js/widget.js"></script>

    @show
</body>
</html>
