(function($) {
    'use sctrict'
    $.checkoutone = {
        url:'',
        urlRoute:'',
        mask:'',
        dadata:'',
        stepsString:'',
        yandex:'',
        ecommerce:'',
        country:'',
        beforeunload:'',

        init: function(options) {
            this.url = options.url || '/';
            this.urlRoute = options.urlRoute || 'checkoutone/';
            this.mask = options.mask || false;
            this.dadata = JSON.parse(options.dadata) || '';
            this.stepsString = options.stepsString || '';
            this.yandex = JSON.parse(options.yandex) || '';
            this.ecommerce = +options.ecommerce || false;
            this.country = options.country || false;
            this.beforeunload = +options.beforeunload || false;

            this.initCartDelete();
            this.initCartCounter();
            this.initCartServices();
            this.initAffiliate();
            this.initScrollInfo();

            this.initContactinfo();
            this.initStepShipping();
            this.initStepPayment();
            this.initStepConfirmation();
            this.initFloatBlock();
            this.initOrder();

            if(this.mask) this.initMask();
            if(this.beforeunload) this.initBeforeunload();
        },
        updateStep: function(option, update) {
            var that = this;
            var step = option.shift();
            var serialize = $('.step-' + step + ' form').serialize();

            if(update)
                serialize += '&cartos__update=1';

            that.forLoadAddRem(option, 'add');

            $.post(that.url + that.urlRoute, serialize, function (response) {
                var content = $(response);
                that.forLoadAddRem(option, 'rem', content);
            });

        },
        forLoadAddRem: function(option, type, content) {
            var that = this;
            var len = option.length;

            for (var i=len; i > 0; i--) {
                var id = '.cartOS__' + option[len-i];
                if ($(id).length) {
                    if (type == 'add') {
                        that.loadAdd(id);
                    } else if(type == 'rem') {
                        $(id).html(content.find(id).html());
                        that.loadRem(id);
                        that.stylerReload(id);

                        if(id == '.cartOS__list_shipping')
                            that.initDadataAddress();
                    }
                }
            }
        },
        initContactinfo: function() {
            var that = this;

            $('.cartOS__list_contactinfo').on('change', 'textarea,input:not(.wa-field-address input,.auth input,.cartOS__createUser input),select:not(.wa-field-address select)', function () {
                update($(this));
                that.updateStep(['contactinfo','info']);
                $(this).next('.errormsg').remove();
            });

            $('.cartOS__list_contactinfo .wa-field-address').on('change', 'input:not(#dadata-address-field), select', function () {
                update($(this));
                that.updateStep(['contactinfo','list_shipping','list_payment','info'], true);
                $(this).next('.errormsg').remove();
            });

            function update(th) {
                var waField = th.closest('.wa-field');
                waField.find('.error').removeClass('error');
                $('.cartOS__error').hide();
            }

            that.initDadataFio();
            that.initDadataAddress();

            if(!$('[name="customer[address.shipping][country]"]').length) {
                $('#checkout-contact-form').append('<input type="hidden" name="customer[address.shipping][country]" value="'+that.country+'">');
            }
        },
        initStepShipping: function() {
            var that = this;

            $('.cartOS__list_shipping').on('change', 'input:radio, .cartOS__shipOptions select', function (e) {
                if(!e.isTrigger || $(this).closest('.jq-radio').length) {
                    that.updateShipPay('shipping');
                    that.remAddClass($(this), 'shipping');
                }
            });

            $('.cartOS__list_shipping').on('change', 'select.shipping-rates', function (e, not_check) {
                if (!not_check) {
                    that.updateShipPay('shipping');
                    that.remAddClass($(this), 'shipping');
                }
            });
        },
        initStepPayment: function() {
            var that = this;
            $('.cartOS__list_payment').on('change', 'input, select', function () {
                that.updateShipPay('payment');
                that.remAddClass($(this), 'payment');
            });
        },
        remAddClass: function(ths, cl) {
            ths.closest('.checkout-options').find('li').removeClass(cl + '_active');
            ths.closest('li').addClass(cl + '_active');
        },
        updateShipPay: function(step) {
            var that = this;
            var ship = $('.step-shipping');
            var paym = $('.step-payment');

            $('.cartOS__error').hide();

            if(ship.length) {
                var iShip = ship.data('step-index');
                var iPaym = paym.data('step-index');

                if(step == 'shipping' && iShip < iPaym) {
                    that.updateStep(['shipping','list_payment','info'], true);
                    return;
                }

                if(step == 'payment' && iPaym < iShip) {
                    that.updateStep(['payment','list_shipping','info'], true);
                    return;
                }
            }

            that.updateStep([step,'info']);
        },
        initStepConfirmation: function() {
            var that = this;
            var confirmation = $('.cartOS__confirmation');

            if(confirmation.length) {
                confirmation.find('.cartOS__terms').change(function() {
                    confirmation.find('.cartOS__error').hide();
                });
            }
        },
        initFloatBlock: function() {
            $('.cartOS').on('click', '.cartOS__tableAll_show', function () {
                $(this).hide();
                $('.cartOS__table').find('tr,.cartOS__tableAll_hide').show();
            });

            $('.cartOS').on('click', '.cartOS__tableAll_hide', function () {
                $(this).hide();
                $('.cartOS__table').find('tr:not(:eq(0),:eq(1),:eq(2))').hide();
                $('.cartOS__table').find('.cartOS__tableAll_show').show();
            });
        },
        initOrder: function() {
            var that = this;

            $('.cartOS').on('click', '.cartOS__button', function () {
                var cart = $('.cartOS__cart');
                var steps = that.stepsString.split(',');
                var len = steps.length;
                var serializeForm = '';
                var error = false;
                var errorContact = false;
                var contactinfo = $('.cartOS__list_contactinfo');
                var serviceAgreement = contactinfo.find('.service-agreement-wrapper input[type="checkbox"]');

                that.loadAdd('.cartOS__info');
                that.yandexTarget('click');

                if(cart.length) {
                    serializeForm += cart.find('form').serialize() + '&';
                }

                if(contactinfo.length) {
                    contactinfo.find('.wa-required input[type="text"],.wa-required select').each(function(index, el) {
                        var inp = $(this);
                        if((inp.val() || '').trim() == '' && inp.is(':visible')) {
                            inp.addClass('error')
                            errorContact = true;
                            if(!inp.next('.errormsg').length)
                                inp.after('<em class="errormsg">Это поле обязательное</em>');
                        }
                    });

                    var email = contactinfo.find('input[name="customer[email]"]');
                    if(email.length && email.is(':visible') && (email.closest('.wa-required').length || (email.val() || '').trim() != '')) {
                        if(!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.val())) {
                            email.addClass('error');
                            errorContact = true;
                        }
                    }

                    if(serviceAgreement.length && !serviceAgreement.is(':checked')) {
                        serviceAgreement.closest('.wa-value').addClass('error');
                        errorContact = true;
                    }

                    if(errorContact) {
                        $('body,html').scrollTop($('.step-contactinfo').offset().top);
                        that.loadRem('.cartOS__info');
                        return;
                    }
                }

                if(errorContact)
                    return;

                for(var i=0; i<len; i++) {
                    var id = steps[i];
                    var step = $('.step-'+id);
                    if(step.length) {
                        /** Временно комментируем **/
                        /*var liChecked = $('.step-shipping input:checked').closest('li');
                        var liDisabled = $('.step-shipping label input:disabled').closest('li');
                        var dis = $('.step-shipping li').not(liChecked).not(liDisabled).find('input, select');
                        var idChecked = $('.step-shipping input:checked').val() || $('.cartOS__shipOptions select').val();
                        var disList = $('.cartOS__shipList').not('.cartOS__shipInfo .shipping-'+idChecked).find('input, select');

                        if(id == 'shipping') {
                            dis.attr('disabled', 'disabled');
                            disList.attr('disabled', 'disabled');
                        }*/

                        serializeForm += step.find('form').serialize() + '&';

                        /*if(id == 'shipping') {
                            dis.removeAttr('disabled');
                            disList.removeAttr('disabled');
                        }*/
                    }
                }

                var comment = '';
                if(that.templates) {
                    $('.cartOS__templ .wa-field').each(function(index, el) {
                        var name = $(this).find('.wa-name').text();
                        var value = $(this).find('input').val();
                        if(value)
                            comment += name + '\: ' + value + '\n';
                    });
                }

                if($('.cartOS__comment').length) {
                    comment += $('.cartOS__comment').val();
                }

                $.post(that.url+ that.urlRoute + "order/", serializeForm+'cartos__order=1&comment='+comment, function (response) {
                    var content = $(response);
                    if(response.status == 'ok' && response.data) {
                        if(response.data.status == false) {
                            if(response.data.step) {
                                $('body,html').scrollTop($('.step-' + response.data.step).offset().top);
                                $('.step-' + response.data.step).find('.cartOS__error').show();
                                that.loadRem('.cartOS__info');
                            }
                            if(response.data.errors) {
                                alert(response.data.errors);
                                that.loadRem('.cartOS__info');
                            }
                        } else if(response.data.status == true) {
                            if(response.data.info)
                                that.ecommerceSet(response.data.info);

                            that.yandexTarget('order');

                            $(window).unbind('beforeunload');

                            setTimeout(function() {
                                location.href = that.url + 'checkout/success/';
                            }, 300);
                        }
                    } else {
                        that.yandexTarget('fail');
                        alert("Ошибка при оформлении заказа, повторите позже!");
                        that.loadRem('.cartOS__info');
                    }
                });
            });
        },
        updateCart:function(data) {
            var that = this;

            $('.cartOS__cartStockVal').html(data.discount);
            $('.cartOS__cartTotal').html(data.total);

            if (data.add_affiliate_bonus) {
                $(".cartOS__affiliate_border span").show().html(data.add_affiliate_bonus);
            } else {
                $(".cartOS__affiliate_border").hide();
            }

            if (data.affiliate_discount) {
                $('.cartOS__affiliate-dis').html(data.affiliate_discount);
                if ($('.cartOS__affiliateRight').data('use')) {
                    $('.cartOS__affiliateRight').html('&minus; ' + data.affiliate_discount);
                }
            }

            var shipForm = $('.step-shipping form');
            var option = ['list_shipping','list_payment','info'];
            that.forLoadAddRem(option, 'add');

            if(shipForm.length) {
                $.post(that.url + that.urlRoute, shipForm.serialize(), function (response) {
                    update();
                });
            } else {
                update();
            }

            function update() {
                $.get(that.url+ that.urlRoute, function (response) {
                    var content = $(response);
                    that.forLoadAddRem(option, 'rem', content);
                });

                $.get(that.url+ that.urlRoute + 'totalcart/', function (response) {
                    var minTotalCart = $('.cartOS__checkout').data('min');
                    var totalCart = response.data.totalCart;
                    if(totalCart >= minTotalCart) {
                        $('.cartOS__checkout').show();
                        $('.cartOS__errorMin').hide();
                        that.initScrollInfo();
                    } else {
                        $('.cartOS__checkout').hide();
                        $('.cartOS__errorMin').show();
                    }
                });
            }
        },
        initCartDelete: function() {
            var that = this;
            var cartDelete = $('.cartOS__cartDelete');
            if(cartDelete.length) {
                $('.cartOS__cartDelete').click(function () {
                    var row = $(this).closest('.cartOS__cartItem');
                    $.post(that.url + 'cart/delete/', { html: 1, id: row.data('id') }, function (response) {
                        if (response.data.count == 0)
                            location.reload();

                        row.remove();
                        that.updateCart(response.data);
                    }, "json");
                    return false;
                });
            }
        },
        initCartCounter: function() {
            var that = this;
            var counter = $('.cartOS__count');

            if(counter.length) {
                counter.find('.cartOS__countMinus').click(function() {
                    var row = $(this).closest('.cartOS__cartItem');
                    var id = row.data('id');
                    var count = +row.find('.cartOS__countCount input').val()-1;
                    if(count > 0) updateCart(id,count,row);
                    if(count <= 1) count = 1;
                    row.find('input').val(count);
                    return;
                });
                counter.find('.cartOS__countPlus').click(function() {
                    var row = $(this).closest('.cartOS__cartItem');
                    var id = row.data('id');
                    var count = +row.find('.cartOS__countCount input').val()+1;
                    row.find('.cartOS__countCount input').val(count);
                    updateCart(id,count,row);
                    return;
                });
                counter.find('input').change(function(event) {
                    var row = $(this).closest('.cartOS__cartItem');
                    var id = row.data('id');
                    var count = +$(this).val();
                    if(count < 1 || !isNumeric(count)) {
                        count = 1;
                        row.find('.cartOS__countCount input').val(1);
                    }
                    updateCart(id,count,row);
                    return;
                });

                function updateCart(id,count,row) {
                    $.post(that.url+'cart/save/', { 'html': 1, 'id': id, 'quantity': count }, function (response) {
                        if (response.data.error) {
                            alert(response.data.error);
                            row.find('input').val(response.data.q);
                            return;
                        }
                        row.find('.cartOS__cartPrice_all').html(response.data.item_total);
                        that.updateCart(response.data);
                    }, "json");
                }

                function isNumeric(n) {
                    return !isNaN(parseFloat(n)) && isFinite(n);
                }
            }
        },
        initCartServices: function() {
            var that = this;

            $(".cartOS__cartSku input:checkbox").change(function () {
                var row = $(this).closest('div.cartOS__cartItem');
                var obj = $('select[name="service_variant[' + row.data('id') + '][' + $(this).val() + ']"]');
                if (obj.length) {
                    if ($(this).is(':checked')) {
                        obj.removeAttr('disabled');
                    } else {
                        obj.attr('disabled', 'disabled');
                    }
                }

                var div = $(this).closest('div');
                if ($(this).is(':checked')) {
                    var parent_id = row.data('id')
                    var data = {html: 1, parent_id: parent_id, service_id: $(this).val()};
                    var $variants = $('[name="service_variant[' + parent_id + '][' + $(this).val() + ']"]');
                    if ($variants.length) {
                        data['service_variant_id'] = $variants.val();
                    }
                    $.post(that.url + 'cart/add/', data, function(response) {
                        div.data('id', response.data.id);
                        row.find('.cartOS__cartPrice_all').html(response.data.item_total);
                        that.updateCart(response.data);
                    }, "json");
                } else {
                    $.post(that.url + 'cart/delete/', {html: 1, id: div.data('id')}, function (response) {
                        div.data('id', null);
                        row.find('.cartOS__cartPrice_all').html(response.data.item_total);
                        that.updateCart(response.data);
                    }, "json");
                }
            });

            $(".cartOS__cartSku select").change(function () {
                var row = $(this).closest('div.cartOS__cartItem');
                $.post(that.url + 'cart/save/', {html: 1, id: $(this).closest('div').data('id'), 'service_variant_id': $(this).val()}, function (response) {
                    row.find('.cartOS__cartPrice_all').html(response.data.item_total);
                    that.updateCart(response.data);
                }, "json");
            });
        },
        initAffiliate: function() {
            $("#cartOS__affiliateEnter").click(function () {
                $(this).closest('form').append('<input type="hidden" name="use_affiliate" value="1">').submit();
                return false;
            });
            $("#cartOS__affiliateCancel").click(function () {
                $(this).closest('form').append('<input type="hidden" name="use_affiliate" value="0">').submit();
                return false;
            });
        },
        initMask: function() {
            $('input[name="customer[phone]"]').inputmask(this.mask);
        },
        initTemplates: function() {
            var that = this;
            var templTab = $('.cartOS__templTab');

            templTab.click(function(event) {
                templTab.removeClass('cartOS__templTab_active');
                $(this).addClass('cartOS__templTab_active');
                updateTemplate($(this).data('id'));
            }).first().addClass('cartOS__templTab_active');

            updateTemplate($('.cartOS__templTab_active').data('id'));

            function updateTemplate(id) {
                for( var k in that.templates[id]) {
                    $('.cartOS__templ'+k).val(decodeEntities(that.templates[id][k]));
                }
            }

            function decodeEntities(encodedString) {
                var textArea = document.createElement('textarea');
                textArea.innerHTML = encodedString;
                return textArea.value;
            }
        },
        initScrollInfo: function() {
            var that = this;
            if(!$('.cartOS_bottom').length) {
                var cartOSLeft = $('.cartOS__left');
                var cartOSInfo = $('.cartOS__info');
                var cartOSLeftHeight,cartOSInfoHeight,cartOSLeftTop,cartOSLeftBot;

                init($(this));

                function init(that) {
                    cartOSLeftHeight = cartOSLeft.height();
                    cartOSInfoHeight = cartOSInfo.height();
                    cartOSLeftTop = cartOSLeft.offset().top;
                    cartOSLeftBot = cartOSLeftTop + cartOSLeftHeight - cartOSInfoHeight - 34;

                    var scrollTop = that.scrollTop();
                    if (scrollTop > cartOSLeftBot + 18) {
                        cartOSInfo.css({
                            'position': 'fixed',
                            'top': cartOSLeftBot - scrollTop + 34 + 'px'
                        });
                    } else if (scrollTop > cartOSLeftTop - 20) {
                            cartOSInfo.css({
                                'position': 'fixed',
                                'top': '20px'
                            });
                        } else {
                            cartOSInfo.css({
                                'position': 'relative',
                                'top': '0'
                            });
                        }

                }

                if(window.innerWidth > 766) {
                    $(window)
                        .scroll(function() {
                            init($(this));
                        })
                        .resize(function() {
                            init($(this));
                        });
                }
            }
        },
        loadAdd: function(stepId) {
            if($(stepId).length) {
                $(stepId).addClass('cartOS__loading');
            }
        },
        loadRem: function(stepId) {
            if($(stepId).length) {
                $(stepId).removeClass('cartOS__loading');
            }
        },
        stylerReload: function(id) {
            if($.fn.styler)
                $(id).find('input').styler();

            if($.fn.stylizeInput)
                $(id).find('input[type=checkbox],input[type=radio]').stylizeInput();
        },
        yandexTarget: function(target) {
            var yaCounter = this.yandex.counter;
            var target = this.yandex[target];

            if(yaCounter && target)
            {
                var yaCounter = window['yaCounter' + yaCounter];
                yaCounter.reachGoal(target);
            }
        },
        ecommerceSet: function($orderInfo) {
            if(this.ecommerce) {
                window.dataLayer = window.dataLayer || [];
                dataLayer.push({"ecommerce":JSON.parse($orderInfo)});
            }
        },
        initDadataFio: function() {
            var that = this;
            if(that.dadata.fio && that.dadata.key) {
                $('[name="customer[name]"]').suggestions({
                    token: that.dadata.key,
                    type: "NAME",
                    count: 6,
                    onSelect: function (suggestion) {
                        if ($('[name="customer[firstname]"]').length)
                            $('[name="customer[firstname]"]').val(suggestion.data.name);

                        if ($('[name="customer[lastname]"]').length)
                            $('[name="customer[lastname]"]').val(suggestion.data.surname);

                        if ($('[name="customer[middlename]"]').length)
                            $('[name="customer[middlename]"]').val(suggestion.data.patronymic);
                    }
                });
                $('[name="customer[firstname]"]').suggestions({
                    token: that.dadata.key,
                    type: "NAME",
                    params: {
                        parts: ["NAME"]
                    },
                    count: 6,
                    onSelect: function (suggestion) {
                        $(this).change().blur();
                    }
                });
                $('[name="customer[lastname]"]').suggestions({
                    token: that.dadata.key,
                    type: "NAME",
                    params: {
                        parts: ["SURNAME"]
                    },
                    count: 6,
                    onSelect: function (suggestion) {
                        $(this).change().blur();
                    }
                });
                $('[name="customer[middlename]"]').suggestions({
                    token: that.dadata.key,
                    type: "NAME",
                    params: {
                        parts: ["PATRONYMIC"]
                    },
                    count: 6,
                    onSelect: function (suggestion) {
                        $(this).change().blur();
                    }
                });
            }

            if(that.dadata.email && that.dadata.key) {
                $('[name="customer[email]"]').suggestions({
                    token: this.dadata.key,
                    type: "EMAIL",
                    count: 6,
                    onSelect: function (suggestion) {
                        $(this).change().blur();
                    }
                });
            }
        },
        initDadataAddress: function() {
            var that = this;
            if(that.dadata.address && that.dadata.key) {
                var street = $('[name$="[address.shipping][street]"]');
                var city = $('[name$="[address.shipping][city]"]');

                street.suggestions({
                    token: that.dadata.key,
                    type: "ADDRESS",
                    count: 6,
                    onSelect: function (suggestion) {
                        var zip = $('[name$="[address.shipping][zip]"]');
                        var region = $('[name$="[address.shipping][region]"]');

                        if(zip.length) zip.val(suggestion.data.postal_code);
                        if(city.length) city.val(suggestion.data.city);

                        if(region.length) {
                            if(region.get(0).tagName == 'SELECT') {
                                region.find('option').each(function () {
                                    if (~$(this).text().indexOf(suggestion.data.region)) {
                                        $(this).attr('selected', true);
                                    }
                                });
                            } else {
                                region.val(suggestion.data.region);
                            }
                        }

                        var value = suggestion.value;
                        if (suggestion.data.city_with_type) {
                            value = value.replace(suggestion.data.city_with_type + ', ', '');
                            value = value.replace(suggestion.data.city_with_type, '');
                        }

                        if (suggestion.data.region_with_type) {
                            value = value.replace(suggestion.data.region_with_type + ', ', '')
                            value = value.replace(suggestion.data.region_with_type, '');
                        }

                        $(this).val(value).change().blur();
                        street.val(value);
                    }
                });

                city.suggestions({
                    token: that.dadata.key,
                    type: "ADDRESS",
                    hint: false,
                    bounds: "city-settlement",
                    count: 6,
                    onSuggestionsFetch: function (suggestions) {
                        return suggestions.filter(function (suggestion) {
                            return suggestion.data.city_district === null;
                        });
                    },
                    onSelect: function (suggestion) {
                        var $regionField = $('[name$="[address.shipping][region]"]');
                        if ($regionField.length) {
                            if ($regionField.get(0).tagName == 'SELECT') {
                                $regionField.find('option').each(function () {
                                    if (~$(this).text().indexOf(suggestion.data.region)) {
                                        $(this).attr('selected', true);
                                    }
                                });
                            } else {
                                $region_field.val(suggestion.data.region);
                            }
                        }

                        var value = suggestion.value;
                        value = value.replace('г ', '');
                        $(this).val(value).change().blur();
                        city.val(value);
                    }
                });
            }
        },
        initBeforeunload: function() {
            $(window).on('beforeunload', function() {
                return 'Возможно, внесенные изменения не сохранятся.';
            });
        }
    }
})(jQuery);
