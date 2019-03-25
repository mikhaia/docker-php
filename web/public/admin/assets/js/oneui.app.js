/*!
 * OneUI - v4.1.0
 * @author pixelcave - https://pixelcave.com
 * Copyright (c) 2019
 */
! function(e) {
    var a = {};

    function t(o) {
        if (a[o]) return a[o].exports;
        var n = a[o] = {
            i: o,
            l: !1,
            exports: {}
        };
        return e[o].call(n.exports, n, n.exports, t), n.l = !0, n.exports
    }
    t.m = e, t.c = a, t.d = function(e, a, o) {
        t.o(e, a) || Object.defineProperty(e, a, {
            enumerable: !0,
            get: o
        })
    }, t.r = function(e) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
            value: "Module"
        }), Object.defineProperty(e, "__esModule", {
            value: !0
        })
    }, t.t = function(e, a) {
        if (1 & a && (e = t(e)), 8 & a) return e;
        if (4 & a && "object" == typeof e && e && e.__esModule) return e;
        var o = Object.create(null);
        if (t.r(o), Object.defineProperty(o, "default", {
                enumerable: !0,
                value: e
            }), 2 & a && "string" != typeof e)
            for (var n in e) t.d(o, n, function(a) {
                return e[a]
            }.bind(null, n));
        return o
    }, t.n = function(e) {
        var a = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return t.d(a, "a", a), a
    }, t.o = function(e, a) {
        return Object.prototype.hasOwnProperty.call(e, a)
    }, t.p = "", t(t.s = 1)
}([function(e, a) {}, function(e, a, t) {
    e.exports = t(2)
}, function(e, a, t) {
    "use strict";
    t.r(a);
    t(0);

    function o(e, a) {
        for (var t = 0; t < a.length; t++) {
            var o = a[t];
            o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
        }
    }
    var n = function() {
        function e() {
            ! function(e, a) {
                if (!(e instanceof a)) throw new TypeError("Cannot call a class as a function")
            }(this, e)
        }
        var a, t, n;
        return a = e, n = [{
            key: "updateTheme",
            value: function(e, a) {
                "default" === a ? e.length && e.remove() : e.length ? e.attr("href", a) : jQuery("#css-main").after('<link rel="stylesheet" id="css-theme" href="' + a + '">')
            }
        }, {
            key: "getWidth",
            value: function() {
                return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
            }
        }], (t = null) && o(a.prototype, t), n && o(a, n), e
    }();

    function r(e, a) {
        for (var t = 0; t < a.length; t++) {
            var o = a[t];
            o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
        }
    }
    var l, i = !1,
        s = function() {
            function e() {
                ! function(e, a) {
                    if (!(e instanceof a)) throw new TypeError("Cannot call a class as a function")
                }(this, e)
            }
            var a, t, o;
            return a = e, o = [{
                key: "run",
                value: function(e) {
                    var a = this,
                        t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {},
                        o = {
                            "core-bootstrap-tooltip": function() {
                                return a.coreBootstrapTooltip()
                            },
                            "core-bootstrap-popover": function() {
                                return a.coreBootstrapPopover()
                            },
                            "core-bootstrap-tabs": function() {
                                return a.coreBootstrapTabs()
                            },
                            "core-bootstrap-custom-file-input": function() {
                                return a.coreBootstrapCustomFileInput()
                            },
                            "core-toggle-class": function() {
                                return a.coreToggleClass()
                            },
                            "core-scroll-to": function() {
                                return a.coreScrollTo()
                            },
                            "core-year-copy": function() {
                                return a.coreYearCopy()
                            },
                            "core-appear": function() {
                                return a.coreAppear()
                            },
                            "core-ripple": function() {
                                return a.coreRipple()
                            },
                            print: function() {
                                return a.print()
                            },
                            "table-tools-sections": function() {
                                return a.tableToolsSections()
                            },
                            "table-tools-checkable": function() {
                                return a.tableToolsCheckable()
                            },
                            "magnific-popup": function() {
                                return a.magnific()
                            },
                            summernote: function() {
                                return a.summernote()
                            },
                            ckeditor: function() {
                                return a.ckeditor()
                            },
                            simplemde: function() {
                                return a.simpleMDE()
                            },
                            slick: function() {
                                return a.slick()
                            },
                            datepicker: function() {
                                return a.datepicker()
                            },
                            colorpicker: function() {
                                return a.colorpicker()
                            },
                            "masked-inputs": function() {
                                return a.maskedInputs()
                            },
                            select2: function() {
                                return a.select2()
                            },
                            highlightjs: function() {
                                return a.highlightjs()
                            },
                            notify: function(e) {
                                return a.notify(e)
                            },
                            "easy-pie-chart": function() {
                                return a.easyPieChart()
                            },
                            maxlength: function() {
                                return a.maxlength()
                            },
                            rangeslider: function() {
                                return a.rangeslider()
                            },
                            sparkline: function() {
                                return a.sparkline()
                            },
                            validation: function() {
                                return a.validation()
                            }
                        };
                    if (e instanceof Array)
                        for (var n in e) o[e[n]] && o[e[n]](t);
                    else o[e] && o[e](t)
                }
            }, {
                key: "coreBootstrapTooltip",
                value: function() {
                    jQuery('[data-toggle="tooltip"]:not(.js-tooltip-enabled)').add(".js-tooltip:not(.js-tooltip-enabled)").each(function(e, a) {
                        var t = jQuery(a);
                        t.addClass("js-tooltip-enabled").tooltip({
                            container: t.data("container") || "body",
                            animation: t.data("animation") || !1
                        })
                    })
                }
            }, {
                key: "coreBootstrapPopover",
                value: function() {
                    jQuery('[data-toggle="popover"]:not(.js-popover-enabled)').add(".js-popover:not(.js-popover-enabled)").each(function(e, a) {
                        var t = jQuery(a);
                        t.addClass("js-popover-enabled").popover({
                            container: t.data("container") || "body",
                            animation: t.data("animation") || !1,
                            trigger: t.data("trigger") || "hover focus"
                        })
                    })
                }
            }, {
                key: "coreBootstrapTabs",
                value: function() {
                    jQuery('[data-toggle="tabs"]:not(.js-tabs-enabled)').add(".js-tabs:not(.js-tabs-enabled)").each(function(e, a) {
                        jQuery(a).addClass("js-tabs-enabled").find("a").on("click.pixelcave.helpers.core", function(e) {
                            e.preventDefault(), jQuery(e.currentTarget).tab("show")
                        })
                    })
                }
            }, {
                key: "coreBootstrapCustomFileInput",
                value: function() {
                    jQuery('[data-toggle="custom-file-input"]:not(.js-custom-file-input-enabled)').each(function(e, a) {
                        var t = jQuery(a);
                        t.addClass("js-custom-file-input-enabled").on("change", function(e) {
                            var a = e.target.files.length > 1 ? e.target.files.length + " " + (t.data("lang-files") || "Files") : e.target.files[0].name;
                            t.next(".custom-file-label").css("overflow-x", "hidden").html(a)
                        })
                    })
                }
            }, {
                key: "coreToggleClass",
                value: function() {
                    jQuery('[data-toggle="class-toggle"]:not(.js-class-toggle-enabled)').add(".js-class-toggle:not(.js-class-toggle-enabled)").on("click.pixelcave.helpers.core", function(e) {
                        var a = jQuery(e.currentTarget);
                        a.addClass("js-class-toggle-enabled").blur(), jQuery(a.data("target").toString()).toggleClass(a.data("class").toString())
                    })
                }
            }, {
                key: "coreScrollTo",
                value: function() {
                    jQuery('[data-toggle="scroll-to"]:not(.js-scroll-to-enabled)').on("click.pixelcave.helpers.core", function(e) {
                        e.stopPropagation();
                        var a = jQuery("#page-header"),
                            t = jQuery(e.currentTarget),
                            o = t.data("target") || t.attr("href"),
                            n = t.data("speed") || 1e3,
                            r = a.length && jQuery("#page-container").hasClass("page-header-fixed") ? a.outerHeight() : 0;
                        t.addClass("js-scroll-to-enabled"), jQuery("html, body").animate({
                            scrollTop: jQuery(o).offset().top - r
                        }, n)
                    })
                }
            }, {
                key: "coreYearCopy",
                value: function() {
                    var e = jQuery('[data-toggle="year-copy"]:not(.js-year-copy-enabled)');
                    if (e.length > 0) {
                        var a = (new Date).getFullYear(),
                            t = e.html().length > 0 ? e.html() : a;
                        e.addClass("js-year-copy-enabled").html(parseInt(t) >= a ? a : t + "-" + a.toString().substr(2, 2))
                    }
                }
            }, {
                key: "coreAppear",
                value: function() {
                    jQuery('[data-toggle="appear"]:not(.js-appear-enabled)').each(function(e, a) {
                        var t = n.getWidth(),
                            o = jQuery(a),
                            r = o.data("class") || "animated fadeIn",
                            l = o.data("offset") || 0,
                            i = t < 992 ? 0 : o.data("timeout") ? o.data("timeout") : 0;
                        o.addClass("js-appear-enabled").appear(function() {
                            setTimeout(function() {
                                o.removeClass("invisible").addClass(r)
                            }, i)
                        }, {
                            accY: l
                        })
                    })
                }
            }, {
                key: "coreRipple",
                value: function() {
                    jQuery('[data-toggle="click-ripple"]:not(.js-click-ripple-enabled)').each(function(e, a) {
                        var t = jQuery(a);
                        t.addClass("js-click-ripple-enabled").css({
                            overflow: "hidden",
                            position: "relative",
                            "z-index": 1
                        }).on("click.pixelcave.helpers.core", function(e) {
                            var a, o, n, r;
                            0 === t.children(".click-ripple").length ? t.prepend('<span class="click-ripple"></span>') : t.children(".click-ripple").removeClass("animate"), (a = t.children(".click-ripple")).height() || a.width() || (o = Math.max(t.outerWidth(), t.outerHeight()), a.css({
                                height: o,
                                width: o
                            })), n = e.pageX - t.offset().left - a.width() / 2, r = e.pageY - t.offset().top - a.height() / 2, a.css({
                                top: r + "px",
                                left: n + "px"
                            }).addClass("animate")
                        })
                    })
                }
            }, {
                key: "print",
                value: function() {
                    var e = jQuery("#page-container"),
                        a = e.prop("class");
                    e.prop("class", ""), window.print(), e.prop("class", a)
                }
            }, {
                key: "tableToolsSections",
                value: function() {
                    jQuery(".js-table-sections:not(.js-table-sections-enabled)").each(function(e, a) {
                        var t = jQuery(a);
                        t.addClass("js-table-sections-enabled"), jQuery(".js-table-sections-header > tr", t).on("click.pixelcave.helpers", function(e) {
                            if (!("checkbox" === e.target.type || "button" === e.target.type || "a" === e.target.tagName.toLowerCase() || jQuery(e.target).parent("a").length || jQuery(e.target).parent("button").length || jQuery(e.target).parent(".custom-control").length || jQuery(e.target).parent("label").length)) {
                                var a = jQuery(e.currentTarget).parent("tbody");
                                a.hasClass("show") || jQuery("tbody", t).removeClass("show table-active"), a.toggleClass("show table-active")
                            }
                        })
                    })
                }
            }, {
                key: "tableToolsCheckable",
                value: function() {
                    var e = this;
                    jQuery(".js-table-checkable:not(.js-table-checkable-enabled)").each(function(a, t) {
                        var o = jQuery(t);
                        o.addClass("js-table-checkable-enabled"), jQuery("thead input:checkbox", o).on("click.pixelcave.helpers", function(a) {
                            var t = jQuery(a.currentTarget).prop("checked");
                            jQuery("tbody input:checkbox", o).each(function(a, o) {
                                var n = jQuery(o);
                                n.prop("checked", t).change(), e.tableToolscheckRow(n, t)
                            })
                        }), jQuery("tbody input:checkbox, tbody input + label", o).on("click.pixelcave.helpers", function(a) {
                            var t = jQuery(a.currentTarget);
                            t.prop("checked") ? jQuery("tbody input:checkbox:checked", o).length === jQuery("tbody input:checkbox", o).length && jQuery("thead input:checkbox", o).prop("checked", !0) : jQuery("thead input:checkbox", o).prop("checked", !1), e.tableToolscheckRow(t, t.prop("checked"))
                        }), jQuery("tbody > tr", o).on("click.pixelcave.helpers", function(a) {
                            if (!("checkbox" === a.target.type || "button" === a.target.type || "a" === a.target.tagName.toLowerCase() || jQuery(a.target).parent("a").length || jQuery(a.target).parent("button").length || jQuery(a.target).parent(".custom-control").length || jQuery(a.target).parent("label").length)) {
                                var t = jQuery("input:checkbox", a.currentTarget),
                                    n = t.prop("checked");
                                t.prop("checked", !n).change(), e.tableToolscheckRow(t, !n), n ? jQuery("thead input:checkbox", o).prop("checked", !1) : jQuery("tbody input:checkbox:checked", o).length === jQuery("tbody input:checkbox", o).length && jQuery("thead input:checkbox", o).prop("checked", !0)
                            }
                        })
                    })
                }
            }, {
                key: "tableToolscheckRow",
                value: function(e, a) {
                    a ? e.closest("tr").addClass("table-active") : e.closest("tr").removeClass("table-active")
                }
            }, {
                key: "magnific",
                value: function() {
                    jQuery(".js-gallery:not(.js-gallery-enabled)").each(function(e, a) {
                        jQuery(a).addClass("js-gallery-enabled").magnificPopup({
                            delegate: "a.img-lightbox",
                            type: "image",
                            gallery: {
                                enabled: !0
                            }
                        })
                    })
                }
            }, {
                key: "summernote",
                value: function() {
                    jQuery(".js-summernote-air:not(.js-summernote-air-enabled)").each(function(e, a) {
                        jQuery(a).addClass("js-summernote-air-enabled").summernote({
                            airMode: !0,
                            tooltip: !1
                        })
                    }), jQuery(".js-summernote:not(.js-summernote-enabled)").each(function(e, a) {
                        var t = jQuery(a);
                        t.addClass("js-summernote-enabled").summernote({
                            height: t.data("height") || 350,
                            minHeight: t.data("min-height") || null,
                            maxHeight: t.data("max-height") || null
                        })
                    })
                }
            }, {
                key: "ckeditor",
                value: function() {
                    jQuery("#js-ckeditor-inline:not(.js-ckeditor-inline-enabled)").length && (jQuery("#js-ckeditor-inline").attr("contenteditable", "true"), CKEDITOR.inline("js-ckeditor-inline"), jQuery("#js-ckeditor-inline").addClass("js-ckeditor-inline-enabled")), jQuery("#js-ckeditor:not(.js-ckeditor-enabled)").length && (CKEDITOR.replace("js-ckeditor"), jQuery("#js-ckeditor").addClass("js-ckeditor-enabled"))
                }
            }, {
                key: "simpleMDE",
                value: function() {
                    jQuery(".js-simplemde:not(.js-simplemde-enabled)").each(function(e, a) {
                        var t = jQuery(a);
                        t.addClass("js-simplemde-enabled"), new SimpleMDE({
                            element: t[0]
                        })
                    })
                }
            }, {
                key: "slick",
                value: function() {
                    jQuery(".js-slider:not(.js-slider-enabled)").each(function(e, a) {
                        var t = jQuery(a);
                        t.addClass("js-slider-enabled").slick({
                            arrows: t.data("arrows") || !1,
                            dots: t.data("dots") || !1,
                            slidesToShow: t.data("slides-to-show") || 1,
                            centerMode: t.data("center-mode") || !1,
                            autoplay: t.data("autoplay") || !1,
                            autoplaySpeed: t.data("autoplay-speed") || 3e3,
                            infinite: void 0 === t.data("infinite") || t.data("infinite")
                        })
                    })
                }
            }, {
                key: "datepicker",
                value: function() {
                    jQuery(".js-datepicker:not(.js-datepicker-enabled)").add(".input-daterange:not(.js-datepicker-enabled)").each(function(e, a) {
                        var t = jQuery(a);
                        t.addClass("js-datepicker-enabled").datepicker({
                            weekStart: t.data("week-start") || 0,
                            autoclose: t.data("autoclose") || !1,
                            todayHighlight: t.data("today-highlight") || !1,
                            orientation: "bottom"
                        })
                    })
                }
            }, {
                key: "colorpicker",
                value: function() {
                    jQuery(".js-colorpicker:not(.js-colorpicker-enabled)").each(function(e, a) {
                        jQuery(a).addClass("js-colorpicker-enabled").colorpicker()
                    })
                }
            }, {
                key: "maskedInputs",
                value: function() {
                    jQuery(".js-masked-date:not(.js-masked-enabled)").mask("99/99/9999"), jQuery(".js-masked-date-dash:not(.js-masked-enabled)").mask("99-99-9999"), jQuery(".js-masked-phone:not(.js-masked-enabled)").mask("(999) 999-9999"), jQuery(".js-masked-phone-ext:not(.js-masked-enabled)").mask("(999) 999-9999? x99999"), jQuery(".js-masked-taxid:not(.js-masked-enabled)").mask("99-9999999"), jQuery(".js-masked-ssn:not(.js-masked-enabled)").mask("999-99-9999"), jQuery(".js-masked-pkey:not(.js-masked-enabled)").mask("a*-999-a999"), jQuery(".js-masked-time:not(.js-masked-enabled)").mask("99:99"), jQuery(".js-masked-date").add(".js-masked-date-dash").add(".js-masked-phone").add(".js-masked-phone-ext").add(".js-masked-taxid").add(".js-masked-ssn").add(".js-masked-pkey").add(".js-masked-time").addClass("js-masked-enabled")
                }
            }, {
                key: "select2",
                value: function() {
                    jQuery(".js-select2:not(.js-select2-enabled)").each(function(e, a) {
                        var t = jQuery(a);
                        t.addClass("js-select2-enabled").select2({
                            placeholder: t.data("placeholder") || !1
                        })
                    })
                }
            }, {
                key: "highlightjs",
                value: function() {
                    hljs.isHighlighted || hljs.initHighlighting()
                }
            }, {
                key: "notify",
                value: function() {
                    var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {};
                    jQuery.isEmptyObject(e) ? jQuery(".js-notify:not(.js-notify-enabled)").each(function(e, a) {
                        jQuery(a).addClass("js-notify-enabled").on("click.pixelcave.helpers", function(e) {
                            var a = jQuery(e.currentTarget);
                            jQuery.notify({
                                icon: a.data("icon") || "",
                                message: a.data("message"),
                                url: a.data("url") || ""
                            }, {
                                element: "body",
                                type: a.data("type") || "info",
                                placement: {
                                    from: a.data("from") || "top",
                                    align: a.data("align") || "right"
                                },
                                allow_dismiss: !0,
                                newest_on_top: !0,
                                showProgressbar: !1,
                                offset: 20,
                                spacing: 10,
                                z_index: 1033,
                                delay: 5e3,
                                timer: 1e3,
                                animate: {
                                    enter: "animated fadeIn",
                                    exit: "animated fadeOutDown"
                                }
                            })
                        })
                    }) : jQuery.notify({
                        icon: e.icon || "",
                        message: e.message,
                        url: e.url || ""
                    }, {
                        element: e.element || "body",
                        type: e.type || "info",
                        placement: {
                            from: e.from || "top",
                            align: e.align || "right"
                        },
                        allow_dismiss: !1 !== e.allow_dismiss,
                        newest_on_top: !1 !== e.newest_on_top,
                        showProgressbar: !!e.show_progress_bar,
                        offset: e.offset || 20,
                        spacing: e.spacing || 10,
                        z_index: e.z_index || 1033,
                        delay: e.delay || 5e3,
                        timer: e.timer || 1e3,
                        animate: {
                            enter: e.animate_enter || "animated fadeIn",
                            exit: e.animate_exit || "animated fadeOutDown"
                        }
                    })
                }
            }, {
                key: "easyPieChart",
                value: function() {
                    jQuery(".js-pie-chart:not(.js-pie-chart-enabled)").each(function(e, a) {
                        var t = jQuery(a);
                        t.addClass("js-pie-chart-enabled").easyPieChart({
                            barColor: t.data("bar-color") || "#777777",
                            trackColor: t.data("track-color") || "#eeeeee",
                            lineWidth: t.data("line-width") || 3,
                            size: t.data("size") || "80",
                            animate: t.data("animate") || 750,
                            scaleColor: t.data("scale-color") || !1
                        })
                    })
                }
            }, {
                key: "maxlength",
                value: function() {
                    jQuery(".js-maxlength:not(.js-maxlength-enabled)").each(function(e, a) {
                        var t = jQuery(a);
                        t.addClass("js-maxlength-enabled").maxlength({
                            alwaysShow: !!t.data("always-show"),
                            threshold: t.data("threshold") || 10,
                            warningClass: t.data("warning-class") || "badge badge-warning",
                            limitReachedClass: t.data("limit-reached-class") || "badge badge-danger",
                            placement: t.data("placement") || "bottom",
                            preText: t.data("pre-text") || "",
                            separator: t.data("separator") || "/",
                            postText: t.data("post-text") || ""
                        })
                    })
                }
            }, {
                key: "rangeslider",
                value: function() {
                    jQuery(".js-rangeslider:not(.js-rangeslider-enabled)").each(function(e, a) {
                        var t = jQuery(a);
                        jQuery(a).addClass("js-rangeslider-enabled").ionRangeSlider({
                            input_values_separator: ";",
                            skin: t.data("skin") || "round"
                        })
                    })
                }
            }, {
                key: "sparkline",
                value: function() {
                    var e = this;
                    jQuery(".js-sparkline:not(.js-sparkline-enabled)").each(function(a, t) {
                        var o = jQuery(t),
                            n = o.data("type"),
                            r = {},
                            s = {
                                line: function() {
                                    r.type = n, r.lineWidth = o.data("line-width") || 2, r.lineColor = o.data("line-color") || "#0665d0", r.fillColor = o.data("fill-color") || "#0665d0", r.spotColor = o.data("spot-color") || "#495057", r.minSpotColor = o.data("min-spot-color") || "#495057", r.maxSpotColor = o.data("max-spot-color") || "#495057", r.highlightSpotColor = o.data("highlight-spot-color") || "#495057", r.highlightLineColor = o.data("highlight-line-color") || "#495057", r.spotRadius = o.data("spot-radius") || 2, r.tooltipFormat = "{{prefix}}{{y}}{{suffix}}"
                                },
                                bar: function() {
                                    r.type = n, r.barWidth = o.data("bar-width") || 8, r.barSpacing = o.data("bar-spacing") || 6, r.barColor = o.data("bar-color") || "#0665d0", r.tooltipFormat = "{{prefix}}{{value}}{{suffix}}"
                                },
                                pie: function() {
                                    r.type = n, r.sliceColors = ["#fadb7d", "#faad7d", "#75b0eb", "#abe37d"], r.highlightLighten = o.data("highlight-lighten") || 1.1, r.tooltipFormat = "{{prefix}}{{value}}{{suffix}}"
                                },
                                tristate: function() {
                                    r.type = n, r.barWidth = o.data("bar-width") || 8, r.barSpacing = o.data("bar-spacing") || 6, r.posBarColor = o.data("pos-bar-color") || "#82b54b", r.negBarColor = o.data("neg-bar-color") || "#e04f1a"
                                }
                            };
                        s[n] ? (s[n](), "line" === n && ((o.data("chart-range-min") >= 0 || o.data("chart-range-min")) && (r.chartRangeMin = o.data("chart-range-min")), (o.data("chart-range-max") >= 0 || o.data("chart-range-max")) && (r.chartRangeMax = o.data("chart-range-max"))), r.width = o.data("width") || "120px", r.height = o.data("height") || "80px", r.tooltipPrefix = o.data("tooltip-prefix") ? o.data("tooltip-prefix") + " " : "", r.tooltipSuffix = o.data("tooltip-suffix") ? " " + o.data("tooltip-suffix") : "", "100%" === r.width ? i || (i = !0, jQuery(window).on("resize.pixelcave.helpers.sparkline", function(a) {
                            clearTimeout(l), l = setTimeout(function() {
                                e.sparkline()
                            }, 500)
                        })) : jQuery(t).addClass("js-sparkline-enabled"), jQuery(t).sparkline(o.data("points") || [0], r)) : console.log("[jQuery Sparkline JS Helper] Please add a correct type (line, bar, pie or tristate) in all your elements with 'js-sparkline' class.")
                    })
                }
            }, {
                key: "validation",
                value: function() {
                    jQuery.validator.setDefaults({
                        errorClass: "invalid-feedback animated fadeIn",
                        errorElement: "div",
                        errorPlacement: function(e, a) {
                            jQuery(a).addClass("is-invalid"), jQuery(a).parents(".form-group").append(e)
                        },
                        highlight: function(e) {
                            jQuery(e).parents(".form-group").find(".is-invalid").removeClass("is-invalid").addClass("is-invalid")
                        },
                        success: function(e) {
                            jQuery(e).parents(".form-group").find(".is-invalid").removeClass("is-invalid"), jQuery(e).remove()
                        }
                    })
                }
            }], (t = null) && r(a.prototype, t), o && r(a, o), e
        }();

    function d(e, a) {
        for (var t = 0; t < a.length; t++) {
            var o = a[t];
            o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, o.key, o)
        }
    }
    var c = function() {
        function e() {
            ! function(e, a) {
                if (!(e instanceof a)) throw new TypeError("Cannot call a class as a function")
            }(this, e), this._uiInit(), false
        }
        var a, t, o;
        return a = e, (t = [{
            key: "_uiInit",
            value: function() {
                this._lHtml = jQuery("html"), this._lBody = jQuery("body"), this._lpageLoader = jQuery("#page-loader"), this._lPage = jQuery("#page-container"), this._lSidebar = jQuery("#sidebar"), this._lSideOverlay = jQuery("#side-overlay"), this._lHeader = jQuery("#page-header"), this._lHeaderSearch = jQuery("#page-header-search"), this._lHeaderSearchInput = jQuery("#page-header-search-input"), this._lHeaderLoader = jQuery("#page-header-loader"), this._lMain = jQuery("#main-container"), this._lFooter = jQuery("#page-footer"), this._lSidebarScroll = !1, this._lSideOverlayScroll = !1, this._windowW = n.getWidth(), this._uiHandleSidebars("init"), this._uiHandleNav(), this._uiHandleTheme(), this._uiApiLayout(), this._uiApiBlocks(), this.helpers(["core-bootstrap-tooltip", "core-bootstrap-popover", "core-bootstrap-tabs", "core-bootstrap-custom-file-input", "core-toggle-class", "core-scroll-to", "core-year-copy", "core-appear", "core-ripple"]), this._uiHandlePageLoader()
            }
        }, {
            key: "_uiHandleSidebars",
            value: function(e) {
                "init" === e ? (this._lPage.addClass("side-trans-enabled"), this._uiHandleSidebars()) : this._lPage.hasClass("side-scroll") ? (this._lSidebar.length > 0 && !this._lSidebarScroll && (this._lSidebarScroll = new SimpleBar(this._lSidebar[0]), jQuery(".simplebar-scroll-content", this._lSidebar).scrollLock("enable")), this._lSideOverlay.length > 0 && !this._lSideOverlayScroll && (this._lSideOverlayScroll = new SimpleBar(this._lSideOverlay[0]), jQuery(".simplebar-scroll-content", this._lSideOverlay).scrollLock("enable"))) : (this._lSidebar && this._lSidebarScroll && (jQuery(".simplebar-scroll-content", this._lSidebar).scrollLock("disable"), this._lSidebarScroll.unMount(), this._lSidebarScroll = null, this._lSidebar.removeAttr("data-simplebar").html(jQuery(".simplebar-content", this._lSidebar).html())), this._lSideOverlay && this._lSideOverlayScroll && (jQuery(".simplebar-scroll-content", this._lSideOverlay).scrollLock("disable"), this._lSideOverlayScroll.unMount(), this._lSideOverlayScroll = null, this._lSideOverlay.removeAttr("data-simplebar").html(jQuery(".simplebar-content", this._lSideOverlay).html())))
            }
        }, {
            key: "_uiHandleNav",
            value: function() {
                this._lPage.off("click.pixelcave.menu"), this._lPage.on("click.pixelcave.menu", '[data-toggle="submenu"]', function(e) {
                    var a = jQuery(e.currentTarget),
                        t = a.parent("li");
                    return t.hasClass("open") ? (t.removeClass("open"), a.attr("aria-expanded", "false")) : (a.closest("ul").children("li").removeClass("open"), t.addClass("open"), a.attr("aria-expanded", "true")), a.blur(), !1
                })
            }
        }, {
            key: "_uiHandlePageLoader",
            value: function() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "hide";
                "show" === e ? this._lpageLoader.length ? this._lpageLoader.addClass("show") : this._lBody.prepend('<div id="page-loader" class="show"></div>') : "hide" === e && this._lpageLoader.length && this._lpageLoader.removeClass("show")
            }
        }, {
            key: "_uiHandleTheme",
            value: function() {
                var e = jQuery("#css-theme"),
                    a = !!this._lPage.hasClass("enable-cookies");
                if (a) {
                    var t = Cookies.get("oneuiThemeName") || !1;
                    t && n.updateTheme(e, t), e = jQuery("#css-theme")
                }
                jQuery('[data-toggle="theme"][data-theme="' + (e.length ? e.attr("href") : "default") + '"]').addClass("active"), this._lPage.off("click.pixelcave.themes"), this._lPage.on("click.pixelcave.themes", '[data-toggle="theme"]', function(t) {
                    t.preventDefault();
                    var o = jQuery(t.currentTarget),
                        r = o.data("theme");
                    jQuery('[data-toggle="theme"]').removeClass("active"), jQuery('[data-toggle="theme"][data-theme="' + r + '"]').addClass("active"), n.updateTheme(e, r), e = jQuery("#css-theme"), a && Cookies.set("oneuiThemeName", r, {
                        expires: 7
                    }), o.blur()
                })
            }
        }, {
            key: "_uiApiLayout",
            value: function() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "init",
                    a = this;
                a._windowW = n.getWidth();
                var t = {
                    init: function() {
                        a._lPage.off("click.pixelcave.layout"), a._lPage.off("click.pixelcave.overlay"), a._lPage.on("click.pixelcave.layout", '[data-toggle="layout"]', function(e) {
                            var t = jQuery(e.currentTarget);
                            a._uiApiLayout(t.data("action")), t.blur()
                        }), a._lPage.hasClass("enable-page-overlay") && (a._lPage.prepend('<div id="page-overlay"></div>'), jQuery("#page-overlay").on("click.pixelcave.overlay", function(e) {
                            a._uiApiLayout("side_overlay_close")
                        }))
                    },
                    sidebar_pos_toggle: function() {
                        a._lPage.toggleClass("sidebar-r")
                    },
                    sidebar_pos_left: function() {
                        a._lPage.removeClass("sidebar-r")
                    },
                    sidebar_pos_right: function() {
                        a._lPage.addClass("sidebar-r")
                    },
                    sidebar_toggle: function() {
                        a._windowW > 991 ? a._lPage.toggleClass("sidebar-o") : a._lPage.toggleClass("sidebar-o-xs")
                    },
                    sidebar_open: function() {
                        a._windowW > 991 ? a._lPage.addClass("sidebar-o") : a._lPage.addClass("sidebar-o-xs")
                    },
                    sidebar_close: function() {
                        a._windowW > 991 ? a._lPage.removeClass("sidebar-o") : a._lPage.removeClass("sidebar-o-xs")
                    },
                    sidebar_mini_toggle: function() {
                        a._windowW > 991 && a._lPage.toggleClass("sidebar-mini")
                    },
                    sidebar_mini_on: function() {
                        a._windowW > 991 && a._lPage.addClass("sidebar-mini")
                    },
                    sidebar_mini_off: function() {
                        a._windowW > 991 && a._lPage.removeClass("sidebar-mini")
                    },
                    sidebar_style_toggle: function() {
                        a._lPage.toggleClass("sidebar-dark")
                    },
                    sidebar_style_dark: function() {
                        a._lPage.addClass("sidebar-dark")
                    },
                    sidebar_style_light: function() {
                        a._lPage.removeClass("sidebar-dark")
                    },
                    side_overlay_toggle: function() {
                        a._lPage.hasClass("side-overlay-o") ? a._uiApiLayout("side_overlay_close") : a._uiApiLayout("side_overlay_open")
                    },
                    side_overlay_open: function() {
                        jQuery(document).on("keydown.pixelcave.sideOverlay", function(e) {
                            27 === e.which && (e.preventDefault(), a._uiApiLayout("side_overlay_close"))
                        }), a._lPage.addClass("side-overlay-o")
                    },
                    side_overlay_close: function() {
                        jQuery(document).off("keydown.pixelcave.sideOverlay"), a._lPage.removeClass("side-overlay-o")
                    },
                    side_overlay_mode_hover_toggle: function() {
                        a._lPage.toggleClass("side-overlay-hover")
                    },
                    side_overlay_mode_hover_on: function() {
                        a._lPage.addClass("side-overlay-hover")
                    },
                    side_overlay_mode_hover_off: function() {
                        a._lPage.removeClass("side-overlay-hover")
                    },
                    header_mode_toggle: function() {
                        a._lPage.toggleClass("page-header-fixed")
                    },
                    header_mode_static: function() {
                        a._lPage.removeClass("page-header-fixed")
                    },
                    header_mode_fixed: function() {
                        a._lPage.addClass("page-header-fixed")
                    },
                    header_style_toggle: function() {
                        a._lPage.toggleClass("page-header-dark")
                    },
                    header_style_dark: function() {
                        a._lPage.addClass("page-header-dark")
                    },
                    header_style_light: function() {
                        a._lPage.removeClass("page-header-dark")
                    },
                    header_search_on: function() {
                        a._lHeaderSearch.addClass("show"), a._lHeaderSearchInput.focus(), jQuery(document).on("keydown.pixelcave.header.search", function(e) {
                            27 === e.which && (e.preventDefault(), a._uiApiLayout("header_search_off"))
                        })
                    },
                    header_search_off: function() {
                        a._lHeaderSearch.removeClass("show"), a._lHeaderSearchInput.blur(), jQuery(document).off("keydown.pixelcave.header.search")
                    },
                    header_loader_on: function() {
                        a._lHeaderLoader.addClass("show")
                    },
                    header_loader_off: function() {
                        a._lHeaderLoader.removeClass("show")
                    },
                    side_scroll_toggle: function() {
                        a._lPage.toggleClass("side-scroll"), a._uiHandleSidebars()
                    },
                    side_scroll_native: function() {
                        a._lPage.removeClass("side-scroll"), a._uiHandleSidebars()
                    },
                    side_scroll_custom: function() {
                        a._lPage.addClass("side-scroll"), a._uiHandleSidebars()
                    },
                    content_layout_toggle: function() {
                        a._lPage.hasClass("main-content-boxed") ? a._uiApiLayout("content_layout_narrow") : a._lPage.hasClass("main-content-narrow") ? a._uiApiLayout("content_layout_full_width") : a._uiApiLayout("content_layout_boxed")
                    },
                    content_layout_boxed: function() {
                        a._lPage.removeClass("main-content-narrow").addClass("main-content-boxed")
                    },
                    content_layout_narrow: function() {
                        a._lPage.removeClass("main-content-boxed").addClass("main-content-narrow")
                    },
                    content_layout_full_width: function() {
                        a._lPage.removeClass("main-content-boxed main-content-narrow")
                    }
                };
                t[e] && t[e]()
            }
        }, {
            key: "_uiApiBlocks",
            value: function() {
                var e, a, t, o = this,
                    n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "init",
                    r = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                    l = this,
                    i = "si si-size-fullscreen",
                    s = {
                        init: function() {
                            jQuery('[data-toggle="block-option"][data-action="fullscreen_toggle"]').each(function(e, a) {
                                var t = jQuery(a);
                                t.html('<i class="' + (jQuery(t).closest(".block").hasClass("block-mode-fullscreen") ? "si si-size-actual" : i) + '"></i>')
                            }), jQuery('[data-toggle="block-option"][data-action="content_toggle"]').each(function(e, a) {
                                var t = jQuery(a);
                                t.html('<i class="' + (t.closest(".block").hasClass("block-mode-hidden") ? "si si-arrow-down" : "si si-arrow-up") + '"></i>')
                            }), l._lPage.off("click.pixelcave.blocks"), l._lPage.on("click.pixelcave.blocks", '[data-toggle="block-option"]', function(e) {
                                o._uiApiBlocks(jQuery(e.currentTarget).data("action"), jQuery(e.currentTarget).closest(".block"))
                            })
                        },
                        fullscreen_toggle: function() {
                            e.removeClass("block-mode-pinned").toggleClass("block-mode-fullscreen"), e.hasClass("block-mode-fullscreen") ? jQuery(e).scrollLock("enable") : jQuery(e).scrollLock("disable"), a.length && (e.hasClass("block-mode-fullscreen") ? jQuery("i", a).removeClass(i).addClass("si si-size-actual") : jQuery("i", a).removeClass("si si-size-actual").addClass(i))
                        },
                        fullscreen_on: function() {
                            e.removeClass("block-mode-pinned").addClass("block-mode-fullscreen"), jQuery(e).scrollLock("enable"), a.length && jQuery("i", a).removeClass(i).addClass("si si-size-actual")
                        },
                        fullscreen_off: function() {
                            e.removeClass("block-mode-fullscreen"), jQuery(e).scrollLock("disable"), a.length && jQuery("i", a).removeClass("si si-size-actual").addClass(i)
                        },
                        content_toggle: function() {
                            e.toggleClass("block-mode-hidden"), t.length && (e.hasClass("block-mode-hidden") ? jQuery("i", t).removeClass("si si-arrow-up").addClass("si si-arrow-down") : jQuery("i", t).removeClass("si si-arrow-down").addClass("si si-arrow-up"))
                        },
                        content_hide: function() {
                            e.addClass("block-mode-hidden"), t.length && jQuery("i", t).removeClass("si si-arrow-up").addClass("si si-arrow-down")
                        },
                        content_show: function() {
                            e.removeClass("block-mode-hidden"), t.length && jQuery("i", t).removeClass("si si-arrow-down").addClass("si si-arrow-up")
                        },
                        state_toggle: function() {
                            e.toggleClass("block-mode-loading"), jQuery('[data-toggle="block-option"][data-action="state_toggle"][data-action-mode="demo"]', e).length && setTimeout(function() {
                                e.removeClass("block-mode-loading")
                            }, 2e3)
                        },
                        state_loading: function() {
                            e.addClass("block-mode-loading")
                        },
                        state_normal: function() {
                            e.removeClass("block-mode-loading")
                        },
                        pinned_toggle: function() {
                            e.removeClass("block-mode-fullscreen").toggleClass("block-mode-pinned")
                        },
                        pinned_on: function() {
                            e.removeClass("block-mode-fullscreen").addClass("block-mode-pinned")
                        },
                        pinned_off: function() {
                            e.removeClass("block-mode-pinned")
                        },
                        close: function() {
                            e.addClass("d-none")
                        },
                        open: function() {
                            e.removeClass("d-none")
                        }
                    };
                "init" === n ? s[n]() : (e = r instanceof jQuery ? r : jQuery(r)).length && (a = jQuery('[data-toggle="block-option"][data-action="fullscreen_toggle"]', e), t = jQuery('[data-toggle="block-option"][data-action="content_toggle"]', e), s[n] && s[n]())
            }
        }, {
            key: "init",
            value: function() {
                this._uiInit()
            }
        }, {
            key: "layout",
            value: function(e) {
                this._uiApiLayout(e)
            }
        }, {
            key: "block",
            value: function(e, a) {
                this._uiApiBlocks(e, a)
            }
        }, {
            key: "loader",
            value: function(e, a) {
                this._uiHandlePageLoader(e, a)
            }
        }, {
            key: "helpers",
            value: function(e) {
                var a = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
                s.run(e, a)
            }
        }]) && d(a.prototype, t), o && d(a, o), e
    }();

    function u(e) {
        return (u = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function(e) {
            return typeof e
        } : function(e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
        })(e)
    }

    function p(e, a) {
        return !a || "object" !== u(a) && "function" != typeof a ? function(e) {
            if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
            return e
        }(e) : a
    }

    function h(e) {
        return (h = Object.setPrototypeOf ? Object.getPrototypeOf : function(e) {
            return e.__proto__ || Object.getPrototypeOf(e)
        })(e)
    }

    function g(e, a) {
        return (g = Object.setPrototypeOf || function(e, a) {
            return e.__proto__ = a, e
        })(e, a)
    }
    t.d(a, "default", function() {
        return f
    });
    var f = function(e) {
        function a() {
            return function(e, a) {
                if (!(e instanceof a)) throw new TypeError("Cannot call a class as a function")
            }(this, a), p(this, h(a).call(this))
        }
        return function(e, a) {
            if ("function" != typeof a && null !== a) throw new TypeError("Super expression must either be null or a function");
            e.prototype = Object.create(a && a.prototype, {
                constructor: {
                    value: e,
                    writable: !0,
                    configurable: !0
                }
            }), a && g(e, a)
        }(a, c), a
    }();
    jQuery(function() {
        window.One = new f
    })
}]);