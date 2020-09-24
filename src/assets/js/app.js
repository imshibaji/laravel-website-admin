

/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Module/App: Main Js
 */


(function ($) {

    'use strict';

    function initSlimscroll() {
        $('.slimscroll').slimscroll({
            height: 'auto',
            position: 'right',
            size: "7px",
            color: '#a2b1d021',
            opacity: 1,
            wheelStep: 5,
            touchScrollStep: 50,
            alwaysVisible: false,
        });
    }


    function initMetisMenu() {
        //metis menu
        $(".metismenu").metisMenu();
        $(window).resize(function () {
            // initEnlarge();
        });
    }

    function initLeftMenuCollapse() {
        // Left menu collapse
        $('.button-menu-mobile').on('click', function (event) {
            event.preventDefault();
            $("body").toggleClass("enlarge-menu");
            initSlimscroll();
        });
    }

    function initMenuCollapsed() {
        $('.enlarge-menu .left-sidenav-menu > li').hover(function () {
            $(this).addClass('nav-hover');
        }, function () {
            $(this).removeClass('nav-hover');
        });
    }

    function initEnlarge() {
        if ($(window).width() < 1025) {
            $('body').addClass('enlarge-menu enlarge-menu-all');
        } else {
            // if ($('body').data('keep-enlarged') != true)
            $('body').removeClass('enlarge-menu enlarge-menu-all');
        }
    }

    function initTooltipPlugin() {
        $.fn.tooltip && $('[data-toggle="tooltip"]').tooltip()
        $('[data-toggle="tooltip-custom"]').tooltip({
            template: '<div class="tooltip tooltip-custom" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });
    }

    function initMainIconTabMenu() {
        $('.main-icon-menu .nav-link').on('click', function (e) {
            $("body").removeClass("enlarge-menu");
            e.preventDefault();
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            $('.main-menu-inner').addClass('active');
            var targ = $(this).attr('href');
            $(targ).addClass('active');
            $(targ).siblings().removeClass('active');
        });
    }


    function initActiveMenu() {
        // === following js will activate the menu in left side bar based on url ====
        $(".leftbar-tab-menu a, .left-sidenav a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link                 
                $(this).parent().parent().addClass("in");
                $(this).parent().parent().addClass("mm-show");
                $(this).parent().parent().parent().addClass("mm-active");
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().parent().addClass("active");
                $(this).parent().parent().parent().parent().addClass("mm-show"); // add active to li of the current link                
                $(this).parent().parent().parent().parent().parent().addClass("mm-active");
                $(this).parent().parent().parent().parent().parent().addClass("active");
                var menu = $(this).closest('.main-icon-menu-pane').attr('id');
                $("a[href='#" + menu + "']").addClass('active');

            }
        });
    }

    function initFeatherIcon() {
        feather.replace()
    }
    // Auto complate

    function initAutoComplate() {
        $(document).ready(function () {
            BindControls();
        });

        function BindControls() {
            var Countries = ['Forms',
                'Tables',
                'Charts',
                'Icones',
                'Maps'];

            $('#AllCompo').autocomplete({
                source: Countries,
                minLength: 0,
                scroll: true
            }).focus(function () {
                $(this).autocomplete("search", "");
            });
        }
    }


    function initMainIconMenu() {
        $(".navigation-menu a").each(function () {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            console.log('pageUrl', pageUrl, this.href);
            if (this.href == pageUrl) {
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().parent().addClass("active"); // add active class to an anchor
                $(this).parent().parent().parent().parent().parent().addClass("active"); // add active class to an anchor
                $(this).parent().parent('.submenu-tab').addClass("show");
            }
        });
    }

    function initTopbarMenu() {
        $('.navbar-toggle').on('click', function (event) {
            $(this).toggleClass('open');
            $('#navigation').slideToggle(400);
        });

        $('.navigation-menu>li').slice(-2).addClass('last-elements');

        $('.navigation-menu li.main-nav-item a[href="#"]').on('click', function (e) {
            if ($(window).width() < 992) {
                e.preventDefault();
                $(this).parent('li').toggleClass('open').find('.submenu-tab:first').toggleClass('open');
            }
        });
    }


    function initnavbarMenu() {
        $('.main-nav-item').on('click', function (e) {
            e.preventDefault();
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            $(this).children('.submenu-tab').addClass('show');
            var targ = $(this).attr('href');
            $(targ).addClass('active');
            $(targ).siblings().removeClass('active');
        });
        $('.submenu-tab li').on('click', function (e) {
            // e.preventDefault();
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
            window.location.href = e.target.href;
        });
    }

    function initRightbarChart() {
        //Apex-radialbar2
        var options = {
            chart: {
                height: 250,
                type: 'radialBar',
                dropShadow: {
                    enabled: true,
                    top: 10,
                    left: 0,
                    bottom: 0,
                    right: 0,
                    blur: 2,
                    color: '#45404a2e',
                    opacity: 0.35
                },
            },
            colors: ['#6d81f5', '#fd3c97', '#1eca7b'],
            plotOptions: {
                radialBar: {
                    track: {
                        background: '#b9c1d4',
                        opacity: 0.5,
                    },
                    dataLabels: {
                        name: {
                            fontSize: '16px',
                        },
                        value: {
                            fontSize: '13px',
                            color: '#0f4069',
                        },
                        total: {
                            show: true,
                            label: 'Total Tasks',
                            color: '#0f4069',
                            formatter: function (w) {
                                // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                                return 249
                            }
                        }
                    }
                }
            },
            series: [44, 55, 67],
            labels: ['Development', 'Backup Create', 'Admin Design'],

        }
        if (document.querySelector("#rightbar_chart")) {
            var chart = new ApexCharts(
                document.querySelector("#rightbar_chart"),
                options
            );

            chart.render();
        }
    }

    function initstickyTabText() {
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 50) {
                $(".sticky-tab-text").addClass("nav-text-visible");
            } else {
                $(".sticky-tab-text").removeClass("nav-text-visible");
            }
        });
    }



    function init() {
        initSlimscroll();
        initMetisMenu();
        initLeftMenuCollapse();
        initMenuCollapsed();
        initEnlarge();
        initTooltipPlugin();
        initMainIconTabMenu();
        initActiveMenu();
        initFeatherIcon();
        initAutoComplate();
        initMainIconMenu();
        initTopbarMenu();
        Waves.init();
        initnavbarMenu();
        initRightbarChart();
        initstickyTabText();
    }

    init();

})(jQuery)
