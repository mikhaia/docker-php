@extends('layouts.main')

@section('blocks')
<section class="page-page">
    <div class="container">
        <div class="header">
            <div class="breadcrumbs">
                <ul class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="/" itemprop="item"><span itemprop="name">Главная</span><meta itemprop="position" content="1"></a></li>
                    <li class="active"><span>Корзина</span></li>
                </ul>
            </div>
            <h1 class="title page-name">Корзина</h1>
        </div>
        <div class="inner" role="main">
            <div class="cartOS cartOS_right">
                <link rel="stylesheet" href="/wa-data/public/shop/plugins/cartonestep/css/cartonestepFrontend.css?4.1.5-5011225606" />
                <div class="cartOS__cart">
                    <h1>Корзина</h1>
                    {{ Form::open() }}
                        <div class="cartOS__cartItem">
                            <div class="cartOS__cartW cartOS__cartW2">Фото</div>
                            <div class="cartOS__cartW cartOS__cartW3">Название</div>
                            <div class="cartOS__cartW cartOS__cartW4">Цена</div>
                            <div class="cartOS__cartW cartOS__cartW5">Кол-во</div>
                            <div class="cartOS__cartW cartOS__cartW6">Общая стоимость</div>
                            <div class="cartOS__cartW cartOS__cartW1"></div>
                        </div>
                        <?php 
                            $total = 0;
                            $discount = 0;
                        ?>
                        @foreach($items as $item)
                        <?php
                            $total += $item->product->price;
                            if($item->product->old_price)
                                $discount += $item->product->old_price - $item->product->price;
                        ?>
                        <div class="cartOS__cartItem" data-id="{{ $item->product->id }}">
                            <div class="cartOS__cartW cartOS__cartW2">
                                <a href="{{ $item->product->url }}" title="{{ $item->product->title }}"><img alt="{{ $item->product->title }}" title="{{ $item->product->title }}" src="{{ $item->product->image }}"></a>
                            </div>
                            <div class="cartOS__cartW cartOS__cartW3"><span class="cartOS__cartName">{{ $item->product->title }}</span></div>
                            <div class="cartOS__cartW cartOS__cartW4"><span class="cartOS__cartPrice">{{ intToPrice($item->product->price) }} руб.</span></div>
                            <div class="cartOS__cartW cartOS__cartW5">
                                <div class="cartOS__count">
                                    <div class="cartOS__countMinus">–</div>
                                    <div class="cartOS__countCount">
                                        <input type="text" name="quantity[{{ $item->product->id }}]" value="1" />
                                    </div>
                                    <div class="cartOS__countPlus">+</div>
                                </div>
                            </div>
                            <div class="cartOS__cartW cartOS__cartW6"><span class="cartOS__cartPrice cartOS__cartPrice_all">3 500 руб.</span></div>
                            <div class="cartOS__cartW cartOS__cartW1"><span class="cartOS__cartDelete"></span></div>
                        </div>
                        @endforeach
                        {{-- 
                        <div class="cartOS__coupon">
                            <div class="cartOS__couponName">Купон на скидку</div>
                            <input class="cartOS__couponInput" type="text" name="coupon_code" value="" />
                            <input class="cartOS__couponButton" type="submit" value="Применить" />
                        </div>
                        --}}
                        <div class="cartOS__cartRight">
                            <div class="cartOS__cartStock"><span>Скидка: &minus; <span class='cartOS__cartStockVal'>{{ intToPrice($discount) }} руб.</span></span>
                            </div>
                            <div class="cartOS__cartAll">Итого: <span class="cartOS__cartTotal">{{ intToPrice($total) }} руб.</span></div>
                        </div>
                    {{ Form::close() }}
                    <div class="cartOS__frontendCart">
                        <!-- plugin hook: 'frontend_cart' -->
                    </div>
                </div>
                @if(!$items)
                    <p class="error cartOS__errorMin">Вы не можете оформить заказ, т.к. минимальная сумма вашего заказа 0 рублей</p>
                @endif
                <div class="cartOS__checkout" data-min="0">
                    <h1>Оформление заказа</h1>
                    <div class="cartOS__left">
                        <div class="checkout-step step-contactinfo" data-step-index="1">
                            <form class="checkout-form" method="post" action="">
                                <h2 class="cartOS__title">1.<svg viewBox="0 0 1792 1792" xmlns="https://www.w3.org/2000/svg"><path d="M1536 1399q0 109-62.5 187t-150.5 78h-854q-88 0-150.5-78t-62.5-187q0-85 8.5-160.5t31.5-152 58.5-131 94-89 134.5-34.5q131 128 313 128t313-128q76 0 134.5 34.5t94 89 58.5 131 31.5 152 8.5 160.5zm-256-887q0 159-112.5 271.5t-271.5 112.5-271.5-112.5-112.5-271.5 112.5-271.5 271.5-112.5 271.5 112.5 112.5 271.5z"/></svg> Контактная информация</h2>
                                <div class="cartOS__list cartOS__list_contactinfo">
                                    <div class="cartOS__form">
                                        <div class="checkout-content" data-step-id="contactinfo">
                                            <div id="checkout-contact-form">
                                                <div class="wa-form">
                                                    <div class="wa-field wa-field-firstname wa-required">
                                                        <div class="wa-name">Имя</div>
                                                        <div class="wa-value">
                                                            <input title="Имя" type="text" name="customer[firstname]" value=""> </div>
                                                    </div>
                                                    <div class="wa-field wa-field-phone wa-required">
                                                        <div class="wa-name">Телефон</div>
                                                        <div class="wa-value">
                                                            <p>
                                                                <input title="Телефон" type="text" name="customer[phone]" value="">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="wa-field wa-field-email wa-required">
                                                        <div class="wa-name">Email</div>
                                                        <div class="wa-value">
                                                            <p>
                                                                <input title="Email" type="text" name="customer[email]" value="">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="_csrf" value="" />
                                                    <div class="wa-field service-agreement-wrapper">
                                                        <div class="wa-value">
                                                            <label>
                                                                <input type="hidden" name="service_agreement" value="">
                                                                <input type="checkbox" name="service_agreement" value="1"> Я принимаю условия <a href="https://santehniks.ru/politika-konfeditsialneosti/" target="_blank">политики обработки персональных данных</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- plugin hook: 'frontend_checkout' -->
                                        </div>
                                        <div class="cartOS__error error">Проверьте правильность ввода данных</div>
                                    </div>
                                </div>
                                <input type="hidden" name="step" value="contactinfo">
                                <input type="hidden" name="_csrf" value="" />
                            </form>
                        </div>
                        <div class="checkout-step step-shipping" data-step-index="2">
                            <form class="checkout-form" method="post" action="">
                                <h2 class="cartOS__title">2.<svg viewBox="0 0 1792 1792" xmlns="https://www.w3.org/2000/svg"><path d="M640 1408q0-52-38-90t-90-38-90 38-38 90 38 90 90 38 90-38 38-90zm-384-512h384v-256h-158q-13 0-22 9l-195 195q-9 9-9 22v30zm1280 512q0-52-38-90t-90-38-90 38-38 90 38 90 90 38 90-38 38-90zm256-1088v1024q0 15-4 26.5t-13.5 18.5-16.5 11.5-23.5 6-22.5 2-25.5 0-22.5-.5q0 106-75 181t-181 75-181-75-75-181h-384q0 106-75 181t-181 75-181-75-75-181h-64q-3 0-22.5.5t-25.5 0-22.5-2-23.5-6-16.5-11.5-13.5-18.5-4-26.5q0-26 19-45t45-19v-320q0-8-.5-35t0-38 2.5-34.5 6.5-37 14-30.5 22.5-30l198-198q19-19 50.5-32t58.5-13h160v-192q0-26 19-45t45-19h1024q26 0 45 19t19 45z"/></svg> Доставка</h2>
                                <div class="cartOS__list cartOS__list_shipping">
                                    <div class="checkout-content" data-step-id="shipping">
                                        <ul class="checkout-options shipping cartOS__form">
                                            <li class="shipping-1 shipping_active">
                                                <div class="rate"><span class="price nowrap">500 руб.</span><em class="hint error comment" style="display:none"><br></em><span class="hint" style="display:none"><br>Приблизительное время доставки:<br><strong class="est_delivery"></strong></span></div>
                                                <h3><label><img src="/wa-plugins/shipping/courier/img/courier.png" class="method-logo"><input type="radio" name="shipping_id" value="1"  checked>Курьер &quot;В течение дня&quot;</label></h3>
                                                <input type="hidden" name="rate_id[1]" value="delivery">
                                                <p>Доставка по Москве в пределах МКАД с 12:00 до 21:00 (без ограничения курьера по времени)</p>
                                                <div class="wa-form wa-address">
                                                    <div class="wa-field wa-field-address wa-field-address-shipping">
                                                        <div class="wa-name">Адрес</div>
                                                        <div class="wa-value">
                                                            <p><span class="wa-required field wa-field-address-street"><span>Улица, дом, квартира</span>
                                                                <input title="Улица, дом, квартира" type="text" name="customer_1[address.shipping][street]" value="">
                                                                </span>
                                                                <input type="hidden" name="customer_1[address.shipping][region]" value="77">
                                                                <input type="hidden" name="customer_1[address.shipping][country]" value="rus"><span class="wa-required field wa-field-address-city"><span>Город</span>
                                                                <input title="Город" type="text" name="customer_1[address.shipping][city]" value="">
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="_csrf" value="" />
                                                </div>
                                            </li>
                                            <li class="shipping-2">
                                                <div class="rate"><span class="price nowrap">700 руб.</span><em class="hint error comment" style="display:none"><br></em><span class="hint" style="display:none"><br>Приблизительное время доставки:<br><strong class="est_delivery"></strong></span></div>
                                                <h3><label><img src="/wa-plugins/shipping/courier/img/courier.png" class="method-logo"><input type="radio" name="shipping_id" value="2"  >Курьер &quot;Дневная доставка&quot;</label></h3>
                                                <input type="hidden" name="rate_id[2]" value="delivery">
                                                <p>Доставка по Москве в пределах МКАД с 10:00 до 15:00</p>
                                                <div class="wa-form wa-address" style="display:none">
                                                    <div class="wa-field wa-field-address wa-field-address-shipping">
                                                        <div class="wa-name">Адрес</div>
                                                        <div class="wa-value">
                                                            <p><span class="wa-required field wa-field-address-street"><span>Улица, дом, квартира</span>
                                                                <input title="Улица, дом, квартира" type="text" name="customer_2[address.shipping][street]" value="">
                                                                </span>
                                                                <input type="hidden" name="customer_2[address.shipping][region]" value="77">
                                                                <input type="hidden" name="customer_2[address.shipping][country]" value="rus"><span class="wa-required field wa-field-address-city"><span>Город</span>
                                                                <input title="Город" type="text" name="customer_2[address.shipping][city]" value="">
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="_csrf" value="" />
                                                </div>
                                            </li>
                                            <li class="shipping-3">
                                                <div class="rate"><span class="price nowrap">700 руб.</span><em class="hint error comment" style="display:none"><br></em><span class="hint" style="display:none"><br>Приблизительное время доставки:<br><strong class="est_delivery"></strong></span></div>
                                                <h3><label><img src="/wa-plugins/shipping/courier/img/courier.png" class="method-logo"><input type="radio" name="shipping_id" value="3"  >Курьер &quot;Вечерняя доставка&quot;</label></h3>
                                                <input type="hidden" name="rate_id[3]" value="delivery">
                                                <p>Доставка по Москве в пределах МКАД с 18:00 до 21:00</p>
                                                <div class="wa-form wa-address" style="display:none">
                                                    <div class="wa-field wa-field-address wa-field-address-shipping">
                                                        <div class="wa-name">Адрес</div>
                                                        <div class="wa-value">
                                                            <p><span class="wa-required field wa-field-address-street"><span>Улица, дом, квартира</span>
                                                                <input title="Улица, дом, квартира" type="text" name="customer_3[address.shipping][street]" value="">
                                                                </span>
                                                                <input type="hidden" name="customer_3[address.shipping][region]" value="77">
                                                                <input type="hidden" name="customer_3[address.shipping][country]" value="rus"><span class="wa-required field wa-field-address-city"><span>Город</span>
                                                                <input title="Город" type="text" name="customer_3[address.shipping][city]" value="">
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="_csrf" value="" />
                                                </div>
                                            </li>
                                            <li class="shipping-4">
                                                <div class="rate"><span class="price nowrap">500 руб.</span><em class="hint error comment" style="display:none"><br></em><span class="hint" style="display:none"><br>Приблизительное время доставки:<br><strong class="est_delivery"></strong></span></div>
                                                <h3><label><img src="/wa-plugins/shipping/courier/img/courier.png" class="method-logo"><input type="radio" name="shipping_id" value="4"  >Курьер &quot;За пределы МКАД&quot;</label></h3>
                                                <input type="hidden" name="rate_id[4]" value="delivery">
                                                <p>Доставка по Московской области за пределы МКАД с 12:00 до 21:00 (без ограничения курьера по времени). Доставка по области производится из расчета 500 руб. + 35 руб. за 1 км. от МКАД до Вашего дома</p>
                                                <div class="wa-form wa-address" style="display:none">
                                                    <div class="wa-field wa-field-address wa-field-address-shipping">
                                                        <div class="wa-name">Адрес</div>
                                                        <div class="wa-value">
                                                            <p><span class="wa-required field wa-field-address-street"><span>Улица, дом, квартира</span>
                                                                <input title="Улица, дом, квартира" type="text" name="customer_4[address.shipping][street]" value="">
                                                                </span>
                                                                <input type="hidden" name="customer_4[address.shipping][region]" value="77">
                                                                <input type="hidden" name="customer_4[address.shipping][country]" value="rus"><span class="wa-required field wa-field-address-city"><span>Город</span>
                                                                <input title="Город" type="text" name="customer_4[address.shipping][city]" value="">
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="_csrf" value="" />
                                                </div>
                                            </li>
                                            <li class="shipping-5">
                                                <div class="rate"><span class="price nowrap">0 руб.</span><em class="hint error comment" style="display:none"><br></em><span class="hint" style="display:none"><br>Приблизительное время доставки:<br><strong class="est_delivery"></strong></span></div>
                                                <h3><label><img src="/wa-plugins/shipping/pickup/img/pickup.png" class="method-logo"><input type="radio" name="shipping_id" value="5"  >Самовывоз</label></h3>
                                                <input type="hidden" name="rate_id[5]" value="1">
                                                <p>Самовывоз со <a href="https://santehniks.ru/kontakty/" target="_blank">склада</a> компании</p>
                                            </li>
                                            <li class="shipping-6">
                                                <div class="rate"><span class="price nowrap">0 руб.</span><em class="hint error comment" style="display:none"><br></em><span class="hint" style="display:none"><br>Приблизительное время доставки:<br><strong class="est_delivery"></strong></span></div>
                                                <h3><label><img src="/wa-data/public/site/themes/santehniks/img/transportnaya2.jpg" class="method-logo"><input type="radio" name="shipping_id" value="6"  >Транспортная компания</label></h3>
                                                <input type="hidden" name="rate_id[6]" value="delivery">
                                                <p>Доставка по Москве в пределах МКАД до терминала транспортной компании «<a rel="nofollow" href="https://i.jde.ru/rq/?rnd=57979180" target="_blank">ЖелДорЭкспедиция</a>». Доставка производится во все регионы России</p>
                                                <div class="wa-form wa-address" style="display:none">
                                                    <div class="wa-field wa-field-address wa-field-address-shipping">
                                                        <div class="wa-name">Адрес</div>
                                                        <div class="wa-value">
                                                            <p><span class="wa-required field wa-field-address-street"><span>Улица, дом, квартира</span>
                                                                <input title="Улица, дом, квартира" type="text" name="customer_6[address.shipping][street]" value="">
                                                                </span><span class="field wa-field-address-city"><span>Город</span>
                                                                <input title="Город" type="text" name="customer_6[address.shipping][city]" value="">
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="_csrf" value="" />
                                                </div>
                                            </li>
                                        </ul>
                                        <script type="text/javascript">
                                        (function($) {
                                            function responseCallback(shipping_id, data) {
                                                var name = 'rate_id[' + shipping_id + ']';
                                                if(typeof(data) != 'string') {
                                                    $(".shipping-" + shipping_id + ' input:radio').removeAttr('disabled');
                                                }
                                                if(typeof(data) == 'string') {
                                                    $(".shipping-" + shipping_id + ' input[name="' + name + '"]').remove();
                                                    $(".shipping-" + shipping_id + ' select[name="' + name + '"]').remove();
                                                    var el = $(".shipping-" + shipping_id).find('.rate');
                                                    if(el.hasClass('error')) {
                                                        el.find('em').html(data);
                                                    } else {
                                                        el.find('.price, .hint').hide();
                                                        el.addClass('error').append($('<em class="shipping-error"></em>').html(data));
                                                    }
                                                } else if(data.length > 1) {
                                                    $(".shipping-" + shipping_id + ' input[name="' + name + '"]').remove();
                                                    var select = $(".shipping-" + shipping_id + ' select[name="' + name + '"]');
                                                    var html = '<select class="shipping-rates" name="' + name + '">';
                                                    for(var i = 0; i < data.length; i++) {
                                                        var r = data[i];
                                                        html += '<option data-rate="' + r.rate + '" data-comment="' + (r.comment || '') + '" data-est_delivery="' + (r.est_delivery || '') + '" value="' + r.id + '">' + r.name + ' (' + r.rate + ')</option>';
                                                    }
                                                    html += '</select>';
                                                    if(select.length) {
                                                        var selected = select.val();
                                                        select.remove();
                                                    } else {
                                                        var selected = false;
                                                    }
                                                    select = $(html);
                                                    $(".shipping-" + shipping_id + " h3").after(select);
                                                    if(selected) {
                                                        select.val(selected);
                                                    }
                                                    select.trigger('change', 1);
                                                    $(".shipping-" + shipping_id).find('.rate').removeClass('error').find('.price').show();
                                                    $(".shipping-" + shipping_id).find('.rate em.shipping-error').remove();
                                                } else {
                                                    $(".shipping-" + shipping_id + ' select[name="' + name + '"]').remove();
                                                    var input = $(".shipping-" + shipping_id + ' input[name="' + name + '"]');
                                                    if(input.length) {
                                                        input.val(data[0].id);
                                                    } else {
                                                        $(".shipping-" + shipping_id + " h3").append('<input type="hidden" name="' + name + '" value="' + data[0].id + '">');
                                                    }
                                                    $(".shipping-" + shipping_id + " .price").html(data[0].rate);
                                                    $(".shipping-" + shipping_id + " .est_delivery").html(data[0].est_delivery);
                                                    $(".shipping-" + shipping_id).find('.rate').removeClass('error').find('.price').show();
                                                    if(data[0].est_delivery) {
                                                        $(".shipping-" + shipping_id + " .est_delivery").parent().show();
                                                    } else {
                                                        $(".shipping-" + shipping_id + " .est_delivery").parent().hide();
                                                    }
                                                    if(data[0].comment) {
                                                        $(".shipping-" + shipping_id + " .comment").html('<br>' + data[0].comment).show();
                                                    } else {
                                                        $(".shipping-" + shipping_id + " .comment").hide();
                                                    }
                                                    $(".shipping-" + shipping_id).find('.rate em.shipping-error').remove();
                                                }
                                            }
                                            $(".checkout-options").on('change', "select.shipping-rates", function(e, not_check) {
                                                var opt = $(this).children('option:selected');
                                                var li = $(this).closest('li');
                                                li.find('.price').html(opt.data('rate'));
                                                if(!not_check) {
                                                    li.find('input:radio').attr('checked', 'checked');
                                                    $(".checkout-options.shipping .wa-form").hide();
                                                    $(this).closest('li').find('.wa-form').show();
                                                }
                                                li.find('.est_delivery').html(opt.data('est_delivery'));
                                                if(opt.data('est_delivery')) {
                                                    li.find('.est_delivery').parent().show();
                                                } else {
                                                    li.find('.est_delivery').parent().hide();
                                                }
                                                if(opt.data('comment')) {
                                                    li.find('.comment').html('<br>' + opt.data('comment')).show();
                                                } else {
                                                    li.find('.comment').empty().hide();
                                                }
                                            });
                                            $(".checkout-options.shipping input:radio").change(function(e, not_check) {
                                                if($(this).is(':checked') && !$(this).data('ignore')) {
                                                    $(".checkout-options.shipping .wa-form").hide();
                                                    $(this).closest('li').find('.wa-form').show();
                                                    if($(this).data('changed')) {
                                                        $(this).closest('li').find('.wa-form').find('input,select').data('ignore', 1).change().removeData('ignore');
                                                        $(this).removeData('changed');
                                                    }

                                                    function updateName(that) {
                                                        var v = that.val();
                                                        var name = that.attr('name');
                                                        if(name) $('.wa-field-address').find('[name="customer' + name.replace(/customer_\d+/, '') + '"]').val(v);
                                                    }
                                                    $(this).closest('li').find('.wa-address input,.wa-address select').each(function() {
                                                        updateName($(this));
                                                    });
                                                }
                                            });
                                            $(".wa-address").find('input,select').change(function() {
                                                var that = $(this);
                                                if($(this).data('ignore')) {
                                                    return true;
                                                }
                                                var shipping_id = $("input[name=shipping_id]:checked").val();
                                                var loaded_flag = false;
                                                setTimeout(function() {
                                                    if(!loaded_flag && !$(".shipping-" + shipping_id + " .price .loading").length) {
                                                        $(".shipping-" + shipping_id + " .price").append(' <i class="icon16 loading"></i>');
                                                    }
                                                }, 300);
                                                var v = $(this).val();
                                                var name = $(this).attr('name').replace(/customer_\d+/, '');
                                                $('.wa-field-address').find('[name="customer' + name + '"]').val(v);
                                                $('.wa-address').find('[name$="' + name + '"]').val(v);
                                                $.post("/data/shipping/", $("form").serialize(), function(response) {
                                                    loaded_flag = true;
                                                    responseCallback(shipping_id, response.data);
                                                    $.checkoutone.updateShipPay('shipping');
                                                    setTimeout(function() {
                                                        var externalMethods = [];
                                                        $('.step-shipping input[type="radio"]').not('.step-shipping input:checked').each(function() {
                                                            externalMethods.push($(this).val());
                                                        });
                                                        if(externalMethods.length) {
                                                            $.get("/data/shipping/", {
                                                                shipping_id: externalMethods
                                                            }, function(response) {
                                                                for(var id in response.data) {
                                                                    responseCallback(id, response.data[id]);
                                                                }
                                                            }, "json");
                                                        }
                                                    }, 300);
                                                }, "json");
                                            });
                                        })(jQuery);
                                        </script>
                                        <!-- plugin hook: 'frontend_checkout' -->
                                        <div class="cartOS__error cartOS__error_p error">Выберите доставку или введите адрес</div>
                                    </div>
                                </div>
                                <input type="hidden" name="step" value="shipping">
                                <input type="hidden" name="_csrf" value="" />
                            </form>
                        </div>
                        <div class="checkout-step step-payment" data-step-index="3">
                            <form class="checkout-form" method="post" action="">
                                <h2 class="cartOS__title">3.<svg viewBox="0 0 2304 1792" xmlns="https://www.w3.org/2000/svg"><path d="M0 1504v-608h2304v608q0 66-47 113t-113 47h-1984q-66 0-113-47t-47-113zm640-224v128h384v-128h-384zm-384 0v128h256v-128h-256zm1888-1152q66 0 113 47t47 113v224h-2304v-224q0-66 47-113t113-47h1984z"/></svg> Оплата</h2>
                                <div class="cartOS__list cartOS__list_payment">
                                    <div class="checkout-content" data-step-id="payment">
                                        <ul class="checkout-options payment cartOS__form">
                                            <li class="payment_active">
                                                <h3><label><img src="/wa-plugins/payment/cash/img/cash.png" class="method-logo"><input  type="radio" name="payment_id" value="7" checked>Наличный расчёт</label></h3>
                                                <p>Оплата наличными курьеру или в офисе</p>
                                            </li>
                                            <li class="">
                                                <h3><label><img src="/wa-data/public/site/themes/santehniks/img/Visa-Yandex-Money.jpg" class="method-logo"><input  type="radio" name="payment_id" value="8" >Яндекс.Деньги или карта</label></h3>
                                                <p>Оплата через платежную систему Яндекс.Деньги. Также к оплате принимаются банковские карты. Доступно только при онлайн-оплате, сразу после оформления заказа</p>
                                            </li>
                                        </ul>
                                        <script type="text/javascript">
                                        (function($) {
                                            $(".checkout-options.payment input:radio").change(function() {
                                                if($(this).is(':checked')) {
                                                    $(".checkout-options.payment .wa-form").hide();
                                                    $(this).closest('li').find('.wa-form').show();
                                                }
                                            });
                                        })(jQuery);
                                        </script>
                                        <!-- plugin hook: 'frontend_checkout' -->
                                        <div class="cartOS__error cartOS__error_p error">Выберите оплату</div>
                                    </div>
                                </div>
                                <input type="hidden" name="step" value="payment">
                                <input type="hidden" name="_csrf" value="" />
                            </form>
                        </div>
                        <div class="checkout-step step-confirmation" data-step-index="4">
                            <form class="checkout-form" method="post" action="">
                                <h2 class="cartOS__title">4.<svg viewBox="0 0 1792 1792" xmlns="https://www.w3.org/2000/svg"><path d="M1792 896q0 174-120 321.5t-326 233-450 85.5q-70 0-145-8-198 175-460 242-49 14-114 22-17 2-30.5-9t-17.5-29v-1q-3-4-.5-12t2-10 4.5-9.5l6-9 7-8.5 8-9q7-8 31-34.5t34.5-38 31-39.5 32.5-51 27-59 26-76q-157-89-247.5-220t-90.5-281q0-130 71-248.5t191-204.5 286-136.5 348-50.5q244 0 450 85.5t326 233 120 321.5z"/></svg> Комментарий к заказу</h2>
                                <div class="cartOS__list cartOS__list_confirmation">
                                    <div class="cartOS__confirmation">
                                        <textarea class="cartOS__comment" name="comment"></textarea>
                                        <p class="cartOS__hint">Ваши пожелания или замечания к сборке или составу заказа</p>
                                        <div class="cartOS__error error">Вы должны прочитать и принять Условия предоставления услуг для того, чтобы оформить заказ.</div>
                                        <!-- plugin hook: 'frontend_checkout' -->
                                    </div>
                                </div>
                                <input type="hidden" name="step" value="confirmation">
                                <input type="hidden" name="_csrf" value="" />
                            </form>
                        </div>
                    </div>
                    <div class="cartOS__right">
                        <div class="cartOS__info">
                            <h2 class="cartOS__title"><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1472 930v318q0 119-84.5 203.5t-203.5 84.5h-832q-119 0-203.5-84.5t-84.5-203.5v-832q0-119 84.5-203.5t203.5-84.5h832q63 0 117 25 15 7 18 23 3 17-9 29l-49 49q-10 10-23 10-3 0-9-2-23-6-45-6h-832q-66 0-113 47t-47 113v832q0 66 47 113t113 47h832q66 0 113-47t47-113v-254q0-13 9-22l64-64q10-10 23-10 6 0 12 3 20 8 20 29zm231-489l-814 814q-24 24-57 24t-57-24l-430-430q-24-24-24-57t24-57l110-110q24-24 57-24t57 24l263 263 647-647q24-24 57-24t57 24l110 110q24 24 24 57t-24 57z"/></svg> Ваш заказ:</h2>
                            <div class="cartOS__infoBl">
                                <div class="cartOS__bl">
                                    <div class="cartOS__price">3 500 руб.</div>
                                    <div>Товары:</div>
                                </div>
                                <div class="cartOS__bl">
                                    <div class="cartOS__price">500 руб.</div>
                                    <div>Доставка:</div>
                                </div>
                                <div class="cartOS__bl">
                                    <div class="cartOS__price">&minus; 0 руб.</div>
                                    <div>Скидка:</div>
                                </div>
                                <div class="cartOS__bl">
                                    <div class="cartOS__price cartOS__price_bold">4 000 руб.</div>
                                    <div>Итого:</div>
                                </div>
                                <button class="cartOS__button">Оформить заказ</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="/wa-data/public/shop/plugins/cartonestep/js/cartonestepFrontend.js?4.1.5-5011225606"></script>
                <script>
                function checkjQuery() {
                    if(typeof jQuery != 'undefined') {
                        $(function() {
                            $.checkoutone.init({
                                'url': '/',
                                'urlRoute': 'checkoutone/',
                                'yandex': '{"counter":"","click":"","order":"","fail":""}',
                                'beforeunload': '0',
                                'mask': '',
                                'dadata': '{"key":"","fio":"","email":"","address":""}',
                                'ecommerce': '0',
                                'stepsString': 'contactinfo,shipping,payment,confirmation',
                                'country': 'rus',
                            });
                        });
                        return;
                    }
                    setTimeout(function() {
                        checkjQuery();
                    }, 100);
                };
                checkjQuery();
                </script>
            </div>
        </div>
    </div>
</section>
@endsection