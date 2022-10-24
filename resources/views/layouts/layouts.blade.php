<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:image" content=""/>
    <meta name="twitter:url" content=""/>
    <meta name="twitter:card" content=""/>

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">

    <!-- Animate.css -->
    <link href="../css/animate.css" rel="stylesheet">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="../css/flexslider.css">

    <!-- Pricing -->
    <link rel="stylesheet" href="../css/pricing.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="../css/style.css">


    <link rel="stylesheet" href="../../css/register.css">


    <!-- Modernizr JS -->
    <script src="../js/modernizr-2.6.2.min.js"></script>
</head>
<body>
<div class="fh5co-loader"></div>

<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3" style="font-size: 17px">
                        <div id="fh5co-logo"><a href="{{route('home')}}"><span class="icon-MBFC"></span>Маріупольський будівельний коледж</a></div>
                    </div>
                    <div class="col-xs-9 text-right menu-1" style="padding-top: 25px;">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">Головна</a></li>
                            <li class="has-dropdown">
                                <a href="{{route('home')}}">Коледж</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('history')}}">Історія</a></li>
                                    <li><a href="#">Адмін склад</a></li>
                                    <li><a href="#">Циклова комісія</a></li>
                                    <li><a href="#">Структура</a></li>
                                    <li><a href="#">Спеціальності</a></li>
                                    <li><a href="#">Психологічна служба</a></li>
                                    <li><a href="#">Ліцензії та сертефікати</a></li>
                                    <li><a href="#">Звіт директора</a></li>
                                    <li><a href="#">Матеріали акредетації</a></li>
                                    <li><a href="#">Виховна робота</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">Абітурієнту</a>
                                <ul class="dropdown">
                                    <li><a href="#">Документи для вступу (після 9 класу)</a></li>
                                    <li><a href="#">Документи для вступу (після 11 класу)</a></li>
                                    <li><a href="#">Документи для вступу (після ПТУ)</a></li>
                                    <li><a href="#">Освітні центри "Донбас Україна"</a></li>
                                    <li><a href="#">Освітні центри "Крим Україна"</a></li>
                                    <li><a href="#">Рішення приймальної комісії</a></li>
                                    <li><a href="#">Вартість навчання</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">Студенту</a>
                                <ul class="dropdown">
                                    <li><a href="#">Навчально методицні матеріали з дисциплін</a></li>
                                    <li><a href="#">Денне віділення</a></li>
                                    <li><a href="#">Заочне віділення</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="{{route('teacher')}}">Викладачу</a>
                                <ul class="dropdown">
                                    <li><a href="{{route('teacher')}}">Викладачі</a></li>
                                    <li><a href="#">Навчально методицні матеріали з дисциплін</a></li>
                                </ul>
                            </li>
                            <li class="has-dropdown">
                                <a href="#">Публічна інформація</a>
                                <ul class="dropdown">
                                    <li><a href="#">Розклад занять</a></li>
                                    <li><a href="#">Життя коледжу</a></li>
                                    <li><a href="#">Бібліотека</a></li>
                                    <li><a href="#">Протидія корупції</a></li>
                                    <li><a href="#">Перспектива 20**</a></li>
                                    <li><a href="{{route('contact')}}">Контактна інформація</a></li>
                                </ul>
                            </li>
                            <li class="btn-cta"><a href="#"><span>Увійти</span></a></li>
                            <li class="btn-cta"><a href="{{route('register')}}"><span>Створити акаунт</span></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>

    <main role="main">
        @yield('content')
    </main>

    <footer id="fh5co-footer" role="contentinfo" style="background-image: url(#);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-3 fh5co-widget">
                    <h3>Про навчання</h3>
                    <p>Вчення — тільки світло, за народним прислів'ям, — воно також і свобода. Ніщо так не звільняє людину, як знання...</p>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3>Навчання</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Спеціальності</a></li>
                        <li><a href="#">Блог</a></li>
                        <li><a href="{{route('contact')}}">Контакти</a></li>
                        <li><a href="#">Розклад занять</a></li>
                        <li><a href="#">Бібліотека</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3>Вчись і розвивайся</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Блог</a></li>
                        <li><a href="#">Відгуки</a></li>
                        <li><a href="#">Звіт директора</a></li>
                        <li><a href="#">Ліцензії</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3>Про нас</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="#">Фінанси</a></li>
                        <li><a href="#">Протидія корупції</a></li>
                    </ul>
                </div>

            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; 2016. All Rights Reserved.</small>
                        <small class="block">Designed by <a href="#" target="_blank">Pasha Buchuliak </a></small>
                    </p>
                </div>
            </div>

        </div>
    </footer>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="../js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="../js/owl.carousel.min.js"></script>
<!-- Flexslider -->
<script src="../js/jquery.flexslider-min.js"></script>
<!-- countTo -->
<script src="../js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/magnific-popup-options.js"></script>
<!-- Count Down -->
<script src="../js/simplyCountdown.js"></script>
<!-- Main -->
<script src="../js/main.js"></script>
</body>
</html>
