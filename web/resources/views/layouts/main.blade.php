<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        @if($page->url)
            {{ $page->title }} ― Сантехникс.ру
        @else
            Сантехника - интернет магазин | Купить сантехнику по низким ценам
        @endif
    </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="Keywords" content="сантехника, магазин сантехники, сантехника Москва, сантехника для ванной" />
    <meta name="Description" content="Интернет-магазин Сантехникс.ру предлагает сантехнику для ванной по самым низким ценам в Москве. Продукция изготовлена ведущими российскими и зарубежными производителями, что гарантирует ее качество." />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('wa-data/public/site/themes/santehniks/css/main.min.css') }}">
    <script src="{{ asset('wa-data/public/site/themes/santehniks/js/scripts.min.js') }}"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('.promo img').retina({
            force_original_dimensions: false
        });
        $('.product-list img,.product-info img,.cart img').retina();;
        $('.bestsellers img').retina();
    });
    </script>
    <!-- plugin hook: 'frontend_head' -->
    <style>
    .installments-info {
        padding-top: 20px;
    }
    </style>
    <script src="https://static.yandex.net/kassa/pay-in-parts/ui/v1/"></script>
    <script>
    $(function() {
        $.backtopSet = {
            "status": "1",
            "bg": "#27ae3d",
            "bg2": "#27ae3d",
            "border_color": "#27ae3d",
            "border_size": "1",
            "border_radius": "3",
            "button_width": "65",
            "button_height": "28",
            "opacity": "0.9",
            "text_size": "15",
            "text": "\u041d\u0430\u0432\u0435\u0440\u0445",
            "link_color": "#ffffff",
            "link_hover": "#ffffff",
            "position_ver": "b",
            "position_hor": "r",
            "pos_ver": "5",
            "pos_hor": "5",
            "update_time": "1"
        }
    });
    </script>
    <script src='{{ asset('wa-apps/shop/plugins/backtop/js/BackTop.js') }}'></script>
    <link rel='stylesheet' href='{{ asset('wa-apps/shop/plugins/backtop/css/BackTop.css') }}'>
    <meta property="og:title" content="Сантехника - интернет магазин | Купить сантехнику по низким ценам" />
    <meta property="og:description" content="Интернет-магазин Сантехникс.ру предлагает сантехнику для ванной по самым низким ценам в Москве. Продукция изготовлена ведущими российскими и зарубежными производителями, что гарантирует ее качество." />
    <!-- /Yandex.Metrika counter -->
    <link href="{{ asset('wa-data/public/shop/plugins/belllight/css/belllight.css?v1.4.3-0496913787') }}" rel="stylesheet" />
    <meta name="yandex-verification" content="51cd9e56de24fcc5" />
</head>

<body>
    @include('blocks.header')
    <main class="maincontent">
        <!-- plugin hook: 'frontend_header' -->
        <div id="BackTop"> <a href="#"><span class="BackTopText" style="display: block;">&#9650;</span></a> </div>
        <div class="content" id="page-content" itemscope itemtype="http://schema.org/Store">
            @yield('blocks')
        </div>
    </main>
    @include('blocks.footer')
    @include('blocks.mobile-menu')
    @include('blocks.call-back')
</body>

</html>