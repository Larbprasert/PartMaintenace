<!DOCTYPE html>
<!-- 
Theme: JANGO - Ultimate Multipurpose HTML Theme Built With Twitter Bootstrap 3.3.7
Version: 2.0.0
Author: Themehats
Site: http://www.themehats.com
Purchase: http://themeforest.net/item/jango-responsive-multipurpose-html5-template/11987314?ref=themehats
Contact: support@themehats.com
Follow: http://www.twitter.com/themehats
-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Gaanraksaa.com</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <link href="{{ asset('frontend/plugins/socicon/socicon.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/plugins/bootstrap-social/bootstrap-social.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/plugins/animate/animate.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN: BASE PLUGINS  -->
        <link href="{{ asset('frontend/plugins/revo-slider/css/settings.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/plugins/revo-slider/css/layers.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/plugins/revo-slider/css/navigation.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/plugins/cubeportfolio/css/cubeportfolio.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/plugins/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/plugins/fancybox/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/plugins/slider-for-bootstrap/css/slider.css') }}" rel="stylesheet" type="text/css" />
        <!-- END: BASE PLUGINS -->
        <!-- BEGIN: PAGE STYLES -->
        <link href="{{ asset('frontend/plugins/ilightbox/css/ilightbox.css') }}" rel="stylesheet" type="text/css" />
        <!-- END: PAGE STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="{{ asset('frontend/index/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/index/css/components.css') }}" id="style_components" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/index/css/themes/default.css') }}" rel="stylesheet" id="style_theme" type="text/css" />
        <link href="{{ asset('frontend/index/css/custom.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>

<style>
    *:not(i){
        font-family: 'Prompt', sans-serif !important;
    }
</style>

    <body class="c-layout-header-fixed c-layout-header-mobile-fixed">
        <!-- BEGIN: LAYOUT/HEADERS/HEADER-1 -->
        <!-- BEGIN: HEADER -->
        <header class="c-layout-header c-layout-header-4 c-layout-header-default-mobile" data-minimize-offset="80">
            <div class="c-navbar">
                <div class="container">
                    <!-- BEGIN: BRAND -->
                    <div class="c-navbar-wrapper clearfix">
                        <div class="c-brand c-pull-left">
                            <a href="{{ url('') }}" class="c-logo">
                                {{-- <img src="{{ asset('frontend/base/img/layout/logos/logo-3.png') }}" alt="JANGO" class="c-desktop-logo">
                                <img src="{{ asset('frontend/base/img/layout/logos/logo-3.png') }}" alt="JANGO" class="c-desktop-logo-inverse">
                                <img src="{{ asset('frontend/base/img/layout/logos/logo-3.png') }}" alt="JANGO" class="c-mobile-logo">  --}}
                                <span class="c-desktop-logo" style="font-size: 2.5rem; position: relative; top: 1rem;">Gaanraksaa.com</span>
                                {{-- <span class="c-desktop-logo-inverse">Gaanraksaa.com</span> --}}
                                <span class="c-mobile-logo" style="font-size: 2rem;">Gaanraksaa.com</span>
                            </a>
                            <button class="c-hor-nav-toggler" type="button" data-target=".c-mega-menu">
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                                <span class="c-line"></span>
                            </button>
                            <button class="c-topbar-toggler" type="button">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                        </div>
                        <!-- END: BRAND -->
                        <!-- BEGIN: QUICK SEARCH -->
                        <form class="c-quick-search" action="#">
                            <input type="text" name="query" placeholder="Type to search..." value="" class="form-control" autocomplete="off">
                            <span class="c-theme-link">&times;</span>
                        </form>
                        <!-- END: QUICK SEARCH -->
                        <!-- BEGIN: HOR NAV -->
                        <!-- BEGIN: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- BEGIN: MEGA MENU -->
                        <!-- Dropdown menu toggle on mobile: c-toggler class can be applied to the link arrow or link itself depending on toggle mode -->
                        <nav class="c-mega-menu c-pull-right c-mega-menu-dark c-mega-menu-dark-mobile c-fonts-uppercase c-fonts-bold">
                            <ul class="nav navbar-nav c-theme-nav">
                                <li>
                                    <a href="#" class="c-link">เกี่ยวกับ
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('contents') }}" class="c-link">บทความ
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('login') }}" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-border-1x c-btn-green c-btn-uppercase c-btn-sbold">เข้าสู่ระบบ
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('register') }}" class="c-btn-border-opacity-04 c-btn btn-no-focus c-btn-header btn btn-sm c-btn-green c-btn-uppercase c-btn-sbold">ลงทะเบียนสมาชิก
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- END: MEGA MENU -->
                        <!-- END: LAYOUT/HEADERS/MEGA-MENU -->
                        <!-- END: HOR NAV -->
                    </div>
                    <!-- BEGIN: LAYOUT/HEADERS/QUICK-CART -->
                   
                    <!-- END: LAYOUT/HEADERS/QUICK-CART -->
                </div>
            </div>
        </header>
        <!-- END: HEADER -->
        <!-- END: LAYOUT/HEADERS/HEADER-1 -->


        @yield('body')
        @yield('script')

        <!-- BEGIN: LAYOUT/FOOTERS/FOOTER-6 -->
        <a name="footer"></a>
        <footer class="c-layout-footer c-layout-footer-6 c-bg-grey-1">
            {{-- <div class="container">
                <div class="c-prefooter c-bg-white">
                    <div class="c-head">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="c-left">
                                    <div class="socicon">
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-facebook tooltips" data-original-title="Facebook" data-container="body"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-twitter tooltips" data-original-title="Twitter" data-container="body"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-youtube tooltips" data-original-title="Youtube" data-container="body"></a>
                                        <a href="#" class="socicon-btn socicon-btn-circle socicon-solid c-bg-grey-1 c-font-grey-2 c-theme-on-hover socicon-tumblr tooltips" data-original-title="Tumblr" data-container="body"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="c-right">
                                    <h3 class="c-title c-font-uppercase c-font-bold">Download Mobile App</h3>
                                    <div class="c-icons">
                                        <a href="#" class="c-font-30 c-font-green-1 socicon-btn c-bg-grey-1-hover socicon-android tooltips" data-original-title="Android" data-container="body"></a>
                                        <a href="#" class="c-font-30 c-font-grey-3 socicon-btn c-bg-grey-1-hover socicon-apple tooltips" data-original-title="Apple" data-container="body"></a>
                                        <a href="#" class="c-font-30 c-font-blue-3 socicon-btn c-bg-grey-1-hover socicon-windows tooltips" data-original-title="Windows" data-container="body"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="c-line"></div>
                    <div class="c-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <ul class="c-links c-theme-ul">
                                    <li>
                                        <a href="#">About Jango</a>
                                    </li>
                                    <li>
                                        <a href="#">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="#">Terms & Conditions</a>
                                    </li>
                                    <li>
                                        <a href="#">Delivery</a>
                                    </li>
                                    <li>
                                        <a href="#">Promotions</a>
                                    </li>
                                    <li>
                                        <a href="#">News</a>
                                    </li>
                                </ul>
                                <ul class="c-links c-theme-ul">
                                    <li>
                                        <a href="#">Blogs</a>
                                    </li>
                                    <li>
                                        <a href="#">Projects</a>
                                    </li>
                                    <li>
                                        <a href="#">Clients</a>
                                    </li>
                                    <li>
                                        <a href="#">Services</a>
                                    </li>
                                    <li>
                                        <a href="#">Features</a>
                                    </li>
                                    <li>
                                        <a href="#">Stats</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-title c-font-uppercase c-font-bold">Latest Tweets</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <div class="c-twitter">
                                    <a class="twitter-timeline" href="https://twitter.com/themehats" data-tweet-limit="2" data-chrome="noheader nofooter noscrollbar noborders transparent"> Loading tweets by @themehats... </a>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12 col-xs-12">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-title c-font-uppercase c-font-bold">Contact Us</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <p class="c-address c-font-16"> 25, Lorem Lis Street, Orange
                                    <br/> California, US
                                    <br/> Phone: 800 123 3456
                                    <br/> Fax: 800 123 3456
                                    <br/> Email:
                                    <a href="mailto:info@jango.com">
                                        <span class="c-theme-color">info@jango.com</span>
                                    </a>
                                    <br/> Skype:
                                    <a href="#">
                                        <span class="c-theme-color">jango</span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="c-line"></div>
                    <div class="c-foot">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-font-uppercase c-font-bold">About
                                        <span class="c-theme-font">JANGO</span>
                                    </h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <p class="c-text c-font-16 c-font-regular">Tolerare unus ducunt ad brevis buxum. Est alter buxum, cesaris. Eheu, lura! Racanas crescere in emeritis oenipons! Ubi est rusticus repressor? Lixa grandis clabulare est. Eposs tolerare.</p>
                            </div>
                            <div class="col-md-5">
                                <div class="c-content-title-1 c-title-md">
                                    <h3 class="c-font-uppercase c-font-bold">Subscribe to Newsletter</h3>
                                    <div class="c-line-left hide"></div>
                                </div>
                                <div class="c-line-left hide"></div>
                                <form action="#">
                                    <div class="input-group input-group-lg c-square">
                                        <input type="text" class="form-control c-square c-font-grey-3 c-border-grey c-theme" placeholder="Your Email Here" />
                                        <span class="input-group-btn">
                                            <button class="btn c-theme-btn c-theme-border c-btn-square c-btn-uppercase c-font-16" type="button">Subscribe</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="c-postfooter c-bg-dark-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 c-col">
                            <p class="c-copyright c-font-grey">
                                2018 &copy; Gaanraksaa.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: LAYOUT/FOOTERS/FOOTER-6 -->
        <!-- BEGIN: LAYOUT/FOOTERS/GO2TOP -->
        <div class="c-layout-go2top">
            <i class="icon-arrow-up"></i>
        </div>
        <!-- END: LAYOUT/FOOTERS/GO2TOP -->
        <!-- BEGIN: LAYOUT/BASE/BOTTOM -->
        <!-- BEGIN: CORE PLUGINS -->
        <!--[if lt IE 9]>
    <script src="../../assets/global/plugins/excanvas.min.js"></script> 
    <![endif]-->
        <script src="{{ asset('frontend/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/jquery.easing.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/reveal-animate/wow.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/index/js/scripts/reveal-animate/reveal-animate.js') }}" type="text/javascript"></script>
        <!-- END: CORE PLUGINS -->
        <!-- BEGIN: LAYOUT PLUGINS -->
        <script src="{{ asset('frontend/plugins/revo-slider/js/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/revo-slider/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/revo-slider/js/extensions/revolution.extension.video.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/fancybox/jquery.fancybox.pack.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/smooth-scroll/jquery.smooth-scroll.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/typed/typed.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/slider-for-bootstrap/js/bootstrap-slider.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/js-cookie/js.cookie.js') }}" type="text/javascript"></script>
        <!-- END: LAYOUT PLUGINS -->
        <!-- BEGIN: THEME SCRIPTS -->
        <script src="{{ asset('frontend/base/js/components.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/base/js/components-shop.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/base/js/app.js') }}" type="text/javascript"></script>
        <script>
            $(document).ready(function()
            {
                App.init(); // init core    
            });
        </script>
        <!-- END: THEME SCRIPTS -->
        <!-- BEGIN: PAGE SCRIPTS -->
        <script src="{{ asset('frontend/default/js/scripts/revo-slider/slider-4.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/isotope/isotope.pkgd.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/isotope/imagesloaded.pkgd.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/isotope/packery-mode.pkgd.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/ilightbox/js/jquery.requestAnimationFrame.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/ilightbox/js/jquery.mousewheel.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/ilightbox/js/ilightbox.packed.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/default/js/scripts/pages/isotope-gallery.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('frontend/plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js') }}" type="text/javascript"></script>
        <!-- END: PAGE SCRIPTS -->
        <!-- END: LAYOUT/BASE/BOTTOM -->
    </body>

</html>