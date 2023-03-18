(function($) {
    var lastScrollTop = 0;

    function scroll_menu_top() {
        $scroll_menu = $('#top-nav');
        if ($scroll_menu.length < 1) {
            return
        }
        $menu = $scroll_menu.find('.nav_top');
        $menu_h = $menu.height();
        $scroll_top = $(document).scrollTop();
        if ($scroll_top > 0) {
            $menu.addClass('fixed')
        } else {
            $menu.removeClass('fixed')
        }
    };

    function hover_menu() {
        $('.main_menu > li').hover(function(e) {
            var self = $(this),
                p = self;
            if (p.hasClass('has-child')) {
                p.addClass('submenu-show');
                $('.overlay').stop().fadeIn()
            }
        }, function() {
            $('.overlay').stop().fadeOut();
            $('.main_menu li').removeClass('submenu-show')
        })
    };

    function click_menu() {
        $('.main_menu .has-child').click(function(e) {
            var current = $(this).find('.sub-menu');
            $('.sub-menu').not(current).slideUp();
            $('.sub-menu').not(current).parent().removeClass('active');
            current.stop().slideToggle();
            current.parent().toggleClass('active')
        })
    };

    function showmenu(top) {
        $('.show-menu img.open-menu').click(function() {
            $(this).fadeOut(0);
            $('body').addClass('overflow');
            $('.nav_top .nav_menu').animate({
                'right': 0
            }, 300);
            $('.overlay').fadeIn();
            setTimeout(function() {
                $('.show-menu img.close-menu').show(0)
            }, 300)
        });
        $('.nav_top .nav_menu  ul.list_menu_item li a,.main, .logo a,.show-menu img.close-menu,.overlay').click(function() {
            $('.show-menu img.close-menu,.jpopup').fadeOut(0);
            $('body').removeClass('overflow');
            $('body').removeClass('open-popup');
            $('.nav_top .nav_menu').animate({
                'right': '-100%'
            }, 300);
            $('.overlay').fadeOut();
            setTimeout(function() {
                $('.show-menu img.open-menu').show(0)
            }, 300)
        })
    };

    function scroll_top() {
        var scrollTrigger = 50,
            backToTop = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('.backtop').fadeIn()
                } else {
                    $('.backtop').fadeOut()
                }
            };
        $(window).on('scroll', function() {
            backToTop()
        });
        $('.backtop').on('click', function(e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700)
        })
    };

    function top_slider() {
        $('.top-slider .owl-carousel').owlCarousel({
            nav: true,
            dots: false,
            items: 1,
            touchDrag: true,
            margin: 0,
            stagePadding: 0,
            singleItem: true,
            mouseDrag: true,
            lazyLoad: true,
            smartSpeed: 1000,
            loop: true,
            autoplay: true,
            autoplayTimeout: 6000
        })
    };

    function tab() {
        $('.list-item-tabs .tab-item').click(function() {
            var tab_id = $(this).attr('data-tab');
            $('.list-content-tab .tab-content').removeClass('active-tab-content');
            $(tab_id).addClass('active-tab-content');
            $('.list-item-tabs .tab-item').removeClass('active');
            $(this).addClass('active');
            $('.list-content-tab .tab-content').stop().fadeOut(0);
            $(tab_id).stop().fadeIn(750)
        })
    };

    function team_slider() {
        $team_slider = $('.team-slider');
        $team_slider.owlCarousel({
            nav: true,
            dots: false,
            smartSpeed: 1000,
            loop: false,
            rewind: false,
            navText: ['', ''],
            responsive: {
                0: {
                    items: 2,
                    margin: 20
                },
                768: {
                    items: 3,
                    margin: 20
                },
                920: {
                    items: 4,
                    margin: 30,
                }
            }
        });
        var current_slide;
        $('.owlNextBtn').click(function() {
            current_slide = $('.active-tab-content').find('.owl-carousel');
            current_slide.trigger('prev.owl.carousel')
        });
        $('.owlPrevBtn').click(function() {
            current_slide = $('.active-tab-content').find('.owl-carousel');
            current_slide.trigger('next.owl.carousel')
        })
    };

    function open_popup() {
        $('.open-popup').on('click', function() {
            if ($(this).hasClass('doctor-item')) {
                doctorajax($(this))
            } else {
                var popup_id = $(this).attr('data-target');
                $('body').addClass('body-fixed');
                $("#" + popup_id).removeClass('hidden')
            }
        });
        $('.popup .popup-close,.overlay,.modal-background,.is-large.delete').on('click', function() {
            $('.popup').addClass('hidden');
            $('body').removeClass('body-fixed')
        });
        $('.popup').on('click', function(event) {
            if ($('body').hasClass('body-fixed')) {
                if ($(event.target).is(this)) {
                    $(this).addClass('hidden');
                    $('body').removeClass('body-fixed')
                }
            }
        })
    };

    function doctorajax(e) {
        let id = e.data('id'),
            url = e.data('url'),
            avatar = e.find('img').attr('src'),
            popup_id = e.attr('data-target');
        $.post(url, {
            action: "doctor_detail",
            id: id
        }, function(response) {
            data = JSON.parse(response);
            $('.popup-doctor .item_info-title').each(function() {
                $(this).text(data.title)
            });
            $('.popup-doctor .item_info-subtitle').each(function() {
                $(this).text(data.subtitle)
            });
            $('.popup-doctor .item_image img').attr('src', avatar);
            $('.popup-doctor .item_info .content').html(data.content.replace('<!--more-->', ''));
            $('body').addClass('body-fixed');
            $("#" + popup_id).removeClass('hidden')
        })
    };

    function showmore() {
        $('.showmore').on('click', function() {
            $(this).parent().find('.content_more').stop().slideToggle();
            if ($(this).hasClass('active')) {
                $(this).text($(this).data('more'))
            } else {
                $(this).text($(this).data('less'))
            }
            $(this).toggleClass('active')
        })
    };

    function accordion() {
        $('.accordion h3').on('click', function() {
            if ($(window).width() < 769) {
                $this = $(this);
                $('.accordion #' + $this.data('target')).stop().slideToggle();
                $this.toggleClass('collapsed')
            }
        })
    };

    function navigation() {
        $('.widget-menu .has-child .nav-link, .widget-menu .has-child img').on('click', function(e) {
            e.preventDefault();
            $this = $(this).parent();
            $this.find('.submenu').slideToggle("slow", function() {
                $this.toggleClass('submenu-show')
            })
        })
    };

    function scroll_id() {
        let $menu = $('.nav_top');
        let $navigation = $('.navigation .current-item .submenu');
        let $menu_h = $menu.height();
        $navigation.find('a[rel*="#"]').on('click', function(e) {
            e.preventDefault();
            let $id = $(this).attr('rel');
            if ($id == '#' || $($id).length < 1) {
                return
            }
            win_scroll_top($($id).offset().top - $menu_h - 10)
        })
    };

    function win_scroll_top(top) {
        if (typeof top == 'string') {
            if ($(top).length < 1) return;
            let offset = $('.nav_top').height();
            if ($('.mobile-header').height() > 0) {
                offset += $('.mobile-header').height()
            } else {
                offset += $('header').height()
            }
            top = $(top).offset().top - offset + 1
        }
        $('html, body').animate({
            scrollTop: top,
        }, 500, 'linear')
    };

    function anchor_link() {
        let $navigation = $('.navigation .current-item .submenu'),
            $path = location.pathname,
            $hash = location.hash;
        $navigation.find('a').each(function() {
            let currLink = $(this);
            $menu_item = currLink.parent('.menu-item');
            let href = currLink.attr("rel");
            if (href == '#') {
                return
            }
            if ($hash === href) {
                currLink.click();
                window.history.replaceState({}, document.title, $path)
            }
        })
    };

    function sidebar_width() {
        if (navigator.userAgent.toLowerCase().indexOf('firefox') !== -1) {
            $('.sidebar').css('width', $('.sidebar_wrapper').width() - 28)
        } else {
            $('.sidebar').css('width', $('.sidebar_wrapper').width() + 2)
        }
    };

    function scroll_sidebar() {
        var sidebarSelector = $('.sidebar');
        if (sidebarSelector.length && $(window).width() > 768) {
            sidebarSelector.parent().css({
                'position': 'relative'
            });
            var viewportHeight = $(window).height(),
                documentHeight = $(document).height(),
                headerHeight = $('.nav_top.fixed').outerHeight(),
                sidebarHeight = sidebarSelector.outerHeight(),
                contentHeight = $('.main_content').outerHeight(),
                footerHeight = $('footer').outerHeight(),
                scroll_top = $(window).scrollTop();
            if (contentHeight > sidebarHeight + headerHeight + 120) {
                if (scroll_top > lastScrollTop) {
                    var breakingPoint1 = sidebarSelector.parent().offset().top - (headerHeight + 40);
                    var breakingPoint2 = contentHeight - sidebarHeight + sidebarSelector.parent().offset().top - headerHeight - 40;
                    if (scroll_top < breakingPoint1) {
                        sidebarSelector.removeClass('sticky').css({
                            'position': 'relative',
                            'bottom': 'auto',
                            'top': 'auto'
                        })
                    } else if ((scroll_top >= breakingPoint1) && (scroll_top < breakingPoint2)) {
                        sidebarSelector.addClass('sticky').css({
                            'position': 'fixed',
                            'top': headerHeight + 40 + 'px',
                            'bottom': 'auto'
                        })
                    } else {
                        sidebarSelector.removeClass('sticky').css({
                            'position': 'absolute',
                            'top': 'auto',
                            'bottom': '0px'
                        })
                    }
                } else {
                    var breakingPoint1 = sidebarSelector.parent().offset().top - headerHeight - 40;
                    var breakingPoint2 = contentHeight - sidebarHeight + sidebarSelector.parent().offset().top - headerHeight - 40;
                    if (scroll_top < breakingPoint1) {
                        sidebarSelector.removeClass('sticky').css({
                            'position': 'relative',
                            'bottom': 'auto',
                            'top': 'auto'
                        })
                    } else if ((scroll_top >= breakingPoint1) && (scroll_top < breakingPoint2)) {
                        sidebarSelector.addClass('sticky').css({
                            'position': 'fixed',
                            'top': headerHeight + 40 + 'px',
                            'bottom': 'auto'
                        })
                    } else {
                        sidebarSelector.removeClass('sticky').css({
                            'position': 'absolute',
                            'bottom': '0px',
                            'top': 'auto'
                        })
                    }
                }
                lastScrollTop = scroll_top
            } else {
                sidebarSelector.removeClass('sticky').css({
                    'position': 'relative',
                    'bottom': 'auto',
                    'top': 'auto'
                })
            }
        }
    };

    function doctor_filter() {
        $('.doctor-page .filter select').on('change', function() {
            let id = $(this).val();
            let url = window.location.href.split('?')[0] + '?id=' + id;
            window.location.href = url
        })
    };
    $(document).ready(function() {
        if (typeof site_setting == 'object') {
            let links = site_setting.fonts,
                head = document.getElementsByTagName('head')[0],
                setOnLoad = 0;
            for (i in links) {
                let link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = links[i];
                if (setOnLoad == 0 && links[i].search('style.css') > -1) {
                    setOnLoad = 1;
                    link.onload = script_ready;
                    link.onerror = script_ready
                }
                head.appendChild(link)
            }
            if (setOnLoad == 0) {
                script_ready()
            }
        } else {
            script_ready()
        }

        function script_ready() {
            scroll_top();
            win_scroll_top();
            scroll_id();
            anchor_link();
            navigation();
            click_menu();
            accordion();
            showmore();
            showmenu();
            top_slider();
            team_slider();
            open_popup();
            tab();
            doctor_filter();
            if (typeof $.fn.datepicker != 'undefined') {
                $(".wpcf7-form span[data-name*='col--6-date'] input").datepicker({
                    dateFormat: "dd/mm/yy",
                    minDate: 0
                })
            }
        }
        $("p").html(function (i, html) {
            return html.replace(/&nbsp;/g, '');
        });
        $('.wpcf7').each(function(index, wpcf7Elm) {
            wpcf7Elm.addEventListener('wpcf7mailsent', function(event) {
                $('.jpopup.thanks,.overlay').fadeIn();
                $('body').addClass('open-popup')
            }, false);
            wpcf7Elm.addEventListener('wpcf7mailfailed ', function(event) {
                $('.jpopup.error,.overlay').fadeIn();
                $('body').addClass('open-popup')
            }, false);
            wpcf7Elm.addEventListener('wpcf7invalid', function(event) {
                $('.jpopup.error,.overlay').fadeIn();
                $('body').addClass('open-popup')
            }, false)
        })
    });
    $(window).scroll(function() {
        scroll_menu_top();
        sidebar_width();
        scroll_sidebar()
    });
    $(window).on('load resize', function() {
        if ($('.team-slider .owl-nav').hasClass('disabled')) {
            $('.list-tab .arrow-group span').hide()
        } else {
            $('.list-tab .arrow-group span').show()
        }
        if (window.innerWidth > 991) {
            hover_menu();
            $('.accordion-content').removeAttr("style")
        } else {
            $('.nav_top .nav_menu').animate({
                'right': '-100%'
            }, 0);
            $('.show-menu img.open-menu').show(0);
            $('.overlay,.show-menu img.close-menu').hide(0)
        }
        $('.sidebar').removeClass('sticky').removeAttr("style");
        $('.nav_item').removeClass('submenu-show');
        $('body').removeClass('overflow');
        $('body').removeClass('body-fixed');
        $('.popup').addClass('hidden');
        $('.overlay,.popup,.jpopup,.show-menu img.close-menu').hide(0);
        $('.show-menu img.open-menu').show(0);
        var height_ = window.innerHeight;
        $('.menu-wrapper').height(height_ - 75);
        $('.nav_top .nav_menu').animate({
            'right': '-100%'
        }, 0)
    })
})(jQuery);