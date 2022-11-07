@extends('layouts.layouts')

@section('content')

    <title>History</title>
    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(../../images/collage.png);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1 class="heading-section">Наша історія</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-about">
        <div class="container">
            <div style="opacity: 1 !important;" class="col-md-6 animate-box">
                <span>Про сам коледж</span>
                <h2>Вітаємо у Маріупольському будівельному фаховому коледжі</h2>
                <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.</p>
                <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed.</p>
                <p>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat cauctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per Mauris in erat justo.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://happyanimals.com.ua/wp-content/uploads/2021/10/%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%BD%D1%8F_viber_2021-10-11_12-12-51-358-768x1024.jpg" alt="">
            </div>
        </div>
    </div>

    <div id="fh5co-counter" class="fh5co-counters" style="background-image: url(https://wallpapershome.com/images/wallpapers/mountains-5120x2880-macos-4k-5k-sierra-sky-android-wallpaper-11473.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-world"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="3297" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Студентів з інших країн</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-study"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="3700" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Випускників</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-bulb"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="5034" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Груп які завершили навчання</span>
                        </div>
                        <div class="col-md-3 col-sm-6 text-center animate-box">
                            <span class="icon"><i class="icon-head"></i></span>
                            <span class="fh5co-counter js-counter" data-from="0" data-to="1080" data-speed="5000" data-refresh-interval="50"></span>
                            <span class="fh5co-counter-label">Кваліфікованих викладачів</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-course-categories">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Спеціальності</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-truck2"></i>
						</span>
                        <div class="desc">
                            <h3><a href="{{route('at')}}">Автомобільний транспорт</a></h3>
                            <p>Охоплює усі питання пов'язані з експлуатацією, обслуговуванням та ремонтом автомобілів.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-home-outline"></i>
						</span>
                        <div class="desc">
                            <h3><a href="{{route('built')}}">Будівництво та експлуатація будівель і споруд</a></h3>
                            <p>Будівництво є частиною матеріальної культури суспільства, за ним можна судити про прогрес науки і техніки, особливості побуту, національні традиції.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-photo"></i>
						</span>
                        <div class="desc">
                            <h3><a href="{{route('design')}}">Опорядження будівель і споруд та будівельний дизайн</a></h3>
                            <p>Технік будівельник-дизайнер проходить підготовку для діяльності в будівельних, проектних, дизайнерських, конструкторських організаціях та їх підрозділах, які виконують будівництво та опорядження житлових, цивільних і промислових будівель та споруд.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 text-center animate-box">
                    <div class="services">
						<span class="icon">
							<i class="icon-banknote"></i>
						</span>
                        <div class="desc">
                            <h3><a href="{{route('ek')}}">Облік та оподаткування</a></h3>
                            <p>Це найбільш приваблива економічна спеціальність для тих, хто хоче зрозуміти загальні принципи формування економічної інформації, яка використовується для управління підприємствами, організаціями, установами. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
