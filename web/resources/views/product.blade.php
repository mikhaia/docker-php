@extends('layouts.main')

@section('blocks')
        <div class="content" id="page-content" itemscope itemtype="http://schema.org/WebPage">
            <section class="product-page" itemscope itemtype="http://schema.org/Product">
                <div class="container">
                    <div class="header">
                        <div class="breadcrumbs">
                            <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" itemprop="item"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/category/mebel-dlya-vannoj/" itemprop="item"><span itemprop="name">Мебель для ванной</span><meta itemprop="position" content="2"></a></li>
                                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/category/mebel-dlya-vannoj/vodolej-vod-ok/" itemprop="item"><span itemprop="name">Водолей (Vod-ok)</span><meta itemprop="position" content="3"></a></li>
                                <li class="active"><span>{{ $product->title }}</span></li>
                            </ul>
                        </div>
                        <h1 class="title product-name"><span itemprop="name">{{ $product->title }}</span></h1></div>
                    <div class="inner">
                        <div class="product-gallery">
                            <div class="product-gallery-inner">
                                <div class="image" id="product-core-image">
                                    <a href="{{ asset($images[0]->big) }}"><img itemprop="image" id="product-image" title="{{ $product->title }}" alt="{{ $product->title }}" src="{{ asset($images[0]->big) }}"></a>
                                </div>
                            </div>
                            <div class="more-images" id="product-gallery">
                            	@foreach($images as $img)
                            		<div class="image" data-image="{{ asset($img->big) }}">
                            		    <a id="product-image-1032" href="{{ asset($img->big) }}"><img src="{{ asset($img->small) }}" alt="{{ $product->title }}" title="{{ $product->title }}"></a>
                            		</div>
                            	@endforeach
                            </div>
                        </div>
                        <div class="product-main">
                            <div class="cart" id="cart-flyer">
                                <form id="cart-form" method="post" action="/cart/add/">
                                    <h4>Купить {{ $product->title }}</h4>
                                    <div class="product-summary">
                                        <div>{!! $product->summary !!}</div>
                                    </div>
                                    <!-- FLAT SKU LIST selling mode -->
                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <meta itemprop="price" content="6 200 руб.">
                                        <meta itemprop="priceCurrency" content="RUB">
                                        <link itemprop="availability" href="http://schema.org/InStock" />
                                        <input name="sku_id" type="hidden" value="{{ $product->id }}"> </div>
                                    <!-- stock info -->
                                    <div class="stocks">
                                        <div class="sku-{{ $product->id }}-stock"> <strong class="stock-high"><i class="icon16 stock-green"></i>В наличии</strong> </div>
                                    </div>
                                    <div class="purchase">
                                        <!-- price -->
                                        <div class="add2cart">
                                            <div class="product-price"> <span data-price="6200" class="price">6 200 руб.</span> </div>
                                            <div class="product-qty"> <span class="minus"><i class="fal fa-minus"></i></span>
                                                <input type="text" name="quantity" value="1"> <span class="plus"><i class="fal fa-plus"></i></span> </div>
                                            <div class="product-buy">
                                                <input type="hidden" name="product_id" value="1675">
                                                <input type="submit" value="Купить"> </div>
                                        </div>
                                    </div>
                                </form>
                                <script>
                                (function($) {
                                    $.getScript("{{ asset('wa-data/public/site/themes/santehniks/js') }}?v3.2.9", function() {
                                        if(typeof Product === "function") {
                                            new Product('#cart-form', {
                                                currency: {
                                                    "code": "RUB",
                                                    "sign": "\u0440\u0443\u0431.",
                                                    "sign_html": "\u0440\u0443\u0431.",
                                                    "sign_position": 1,
                                                    "sign_delim": " ",
                                                    "decimal_point": ",",
                                                    "frac_digits": "2",
                                                    "thousands_sep": " "
                                                }
                                            });
                                        }
                                    });
                                })(jQuery);
                                </script>
                            </div>
                            <div class="product-questions">
                                <div class="head">Есть вопросы?</div>
                                <div class="desc">Звоните по телефону <a class="phone" href="tel:84952080050">8 (495) 208-00-50</a> или закажите <a class="feedback btn-callback" href="javascript:;">обратный звонок</a></div>
                            </div>
                            <div class="social-share">
                                <p>Рассказать друзьям</p>
                                <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                <script src="//yastatic.net/share2/share.js"></script>
                                <div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,twitter,viber,whatsapp,skype,telegram"></div>
                            </div>
                        </div>
                        <div class="products-info">
                            <div class="product-info-inner">
                                <div class="product-info-item">
                                    <div class="header">Способы доставки</div>
                                    <ul>
                                        <li><a href="/kontakty/" target="_blank">Самовывоз<a/></li><li><a href="/dostavka-i-oplata/" target="_blank">Курьерская доставка</a></li>
                                        <li><a href="/dostavka-i-oplata/#dostavka_po_rossii" target="_blank">Транспортная компания "ЖелДорЭкспедиция"</a></li>
                                    </ul>
                                </div>
                                <div class="product-info-item">
                                    <div class="header">Способы оплаты</div>
                                    <ul>
                                        <li>Онлайн-оплата на сайте</li>
                                        <li>Наличными курьеру или в офисе</li>
                                        <li>Перевод на карту или Яндекс.Деньги</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="title">Описание</div>
                        <div class="description" itemprop="description">
                            {!! $product->description !!}
                        </div>
                    </div>
                </div>
            </section>
            {{--
            <section class="home-products">
                <div class="container">
                    <div class="title">Покупатели, которые приобрели Зеркало Квадро 60 белое , также купили</div>
                    <div class="home-products-inner">
                        <div class="products">
                            <ul class="products-list thumbs with-slider">
                                <li itemscope itemtype="http://schema.org/Product">
                                    <div class="products-item">
                                        <div class="products-image">
                                            <div class="products-badge">
                                                <div class="badge bestseller"><span>Хит!</span></div>
                                            </div>
                                            <a href="/installjacija-grohe-rapid-sl-38775-dlja-podvesnogo-unitaza-v-sbore-s-knopkoj-krepezhom-i-shumoizoljaciej/" title="Инсталляция Grohe Rapid SL 38772001 для подвесного унитаза"><img itemprop="image" alt="Инсталляция Grohe Rapid SL 38772001 для подвесного унитаза" title="Инсталляция Grohe Rapid SL 38772001 для подвесного унитаза" src="wa-data/public/shop/products/76/05/576/images/5518/5518.350.jpg"></a>
                                        </div>
                                        <div class="products-name"><a href="/installjacija-grohe-rapid-sl-38775-dlja-podvesnogo-unitaza-v-sbore-s-knopkoj-krepezhom-i-shumoizoljaciej/" title="Инсталляция Grohe Rapid SL 38772001 для подвесного унитаза">Инсталляция Grohe Rapid SL 38772001 для подвесного унитаза</a></div>
                                        <div class="products-code">
                                            <p>Страна производитель: Германия
                                                <br />Глубина, мм: 130
                                                <br />Ширина, мм: 500
                                                <br />Высота, мм: 1130 </p>
                                        </div>
                                        <div class="products-offers" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                            <div class="products-price"><span class="price">9 950 руб.</span></div>
                                            <div class="products-buy">
                                                <form class="purchase addtocart" method="post" action="/cart/add/">
                                                    <input type="submit" value="В корзину">
                                                    <input type="hidden" name="product_id" value="576">
                                                </form>
                                            </div>
                                            <meta itemprop="price" content="9950">
                                            <meta itemprop="priceCurrency" content="RUB">
                                            <link itemprop="availability" href="http://schema.org/InStock" />
                                        </div>
                                        <div class="products-options">
                                            <ul>
                                                <li><span class="name">Страна:</span><span class="value">Дания-Россия</span></li>
                                                <li><span class="name">Профиль:</span><span class="value">хром</span></li>
                                                <li><span class="name">Стекло:</span><span class="value">прозрачное</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li itemscope itemtype="http://schema.org/Product">
                                    <div class="products-item">
                                        <div class="products-image">
                                            <a href="/podvesnoj-unitaz-gustavsberg-nordic-2330-s-sidenem-ljuks/" title="Подвесной унитаз Gustavsberg Nordic 2330 с сиденьем люкс"><img itemprop="image" alt="Подвесной унитаз Gustavsberg Nordic 2330 с сиденьем люкс" title="Подвесной унитаз Gustavsberg Nordic 2330 с сиденьем люкс" src="wa-data/public/shop/products/98/06/698/images/812/812.350.gif"></a>
                                        </div>
                                        <div class="products-name"><a href="/podvesnoj-unitaz-gustavsberg-nordic-2330-s-sidenem-ljuks/" title="Подвесной унитаз Gustavsberg Nordic 2330 с сиденьем люкс">Подвесной унитаз Gustavsberg Nordic 2330 с сиденьем люкс</a></div>
                                        <div class="products-code">
                                            <p>Страна производитель: Швеция
                                                <br />Тип по установке: подвесной
                                                <br />Выпуск: горизонтальный
                                                <br />Глубина, мм: 505
                                                <br />Ширина, мм: 350
                                                <br />Высота, мм: 330</p>
                                        </div>
                                        <div class="products-offers" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                            <div class="products-price"><span class="price">8 150 руб.</span></div>
                                            <div class="products-buy">
                                                <form class="purchase addtocart" method="post" action="/cart/add/">
                                                    <input type="submit" value="В корзину">
                                                    <input type="hidden" name="product_id" value="698">
                                                </form>
                                            </div>
                                            <meta itemprop="price" content="8150">
                                            <meta itemprop="priceCurrency" content="RUB">
                                            <link itemprop="availability" href="http://schema.org/InStock" />
                                        </div>
                                        <div class="products-options">
                                            <ul>
                                                <li><span class="name">Страна:</span><span class="value">Дания-Россия</span></li>
                                                <li><span class="name">Профиль:</span><span class="value">хром</span></li>
                                                <li><span class="name">Стекло:</span><span class="value">прозрачное</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li itemscope itemtype="http://schema.org/Product">
                                    <div class="products-item">
                                        <div class="products-image">
                                            <a href="/zaglushka-dlja-rakoviny/" title="Заглушка для раковины"><img itemprop="image" alt="Заглушка для раковины" title="Заглушка для раковины" src="wa-data/public/shop/products/64/07/764/images/3700/3700.350.jpg"></a>
                                        </div>
                                        <div class="products-name"><a href="/zaglushka-dlja-rakoviny/" title="Заглушка для раковины">Заглушка для раковины</a></div>
                                        <div class="products-code">
                                            <p>Страна производитель: Италия</p>
                                        </div>
                                        <div class="products-offers" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                            <div class="products-price"><span class="price">250 руб.</span></div>
                                            <div class="products-buy">
                                                <form class="purchase addtocart" method="post" action="/cart/add/">
                                                    <input type="submit" value="В корзину">
                                                    <input type="hidden" name="product_id" value="764">
                                                </form>
                                            </div>
                                            <meta itemprop="price" content="250">
                                            <meta itemprop="priceCurrency" content="RUB">
                                            <link itemprop="availability" href="http://schema.org/InStock" />
                                        </div>
                                        <div class="products-options">
                                            <ul>
                                                <li><span class="name">Страна:</span><span class="value">Дания-Россия</span></li>
                                                <li><span class="name">Профиль:</span><span class="value">хром</span></li>
                                                <li><span class="name">Стекло:</span><span class="value">прозрачное</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            --}}
        </div>
@endsection