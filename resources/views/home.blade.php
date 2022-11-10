@extends('layouts.layouts')

@section('content')
    <title>Home Pages</title>
    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(https://www.rbc.ua/static/img/_/v/_vhod_msk_0_650x410.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1>Маріупольський будівельний фаховий коледж</h1>
                                    <p><a class="btn btn-primary btn-lg" href="{{route('history')}}">Детальніше про коледж</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(https://kno.rada.gov.ua/images/%D0%BE%D1%81%D0%B2%D1%96%D1%82%D0%B0.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1>Головною метою освіти є не знання, а дія</h1>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="{{route('history')}}">Детальніше про коледж</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url(https://smile-school.kiev.ua/wp-content/uploads/2022/05/64-1024x577.jpg);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1>Ми допоможемо вам навчитися новому</h1>
                                    <p><a class="btn btn-primary btn-lg btn-learn" href="{{route('history')}}">Детальніше про коледж</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

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

    <div id="fh5co-course">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Майбутні перспективи</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 animate-box">
                    <div class="course">
                        <a href="{{route('at')}}" class="course-img" style="background-image: url(https://ctk.cv.ua/wp-content/uploads/2021/04/service-artcity-1024x683-1.jpg);">
                        </a>
                        <div class="desc">
                            <h3><a href="{{route('at')}}">Автомобільний механік</a></h3>
                            <p>Автомобільний механік виконує обстеження, технічне обслуговування та ремонт двигунів, механічних вузлів та систем легкових, вантажних автомобілів та інших транспортних засобів.</p>
                            <span><a href="{{route('at')}}" class="btn btn-primary btn-sm btn-course">Детальніше</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="course">
                        <a href="{{route('built')}}" class="course-img" style="background-image: url(https://media.slovoidilo.ua/media/scimage/159/158460-uk.png);">
                        </a>
                        <div class="desc">
                            <h3><a href="{{route('built')}}">Технік-будівельник</a></h3>
                            <p>Технік-будівельник бере зразки, аналізує їх, випробовує сировину та матеріали, що використовуються в будівництві. Він готує документацію про результати проведених випробувань для практичного використання в будівельній галузі.</p>
                            <span><a href="{{route('built')}}" class="btn btn-primary btn-sm btn-course">Детальніше</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="course">
                        <a href="{{route('design')}}" class="course-img" style="background-image: url(https://images.wapcar.my/file1/6916418b47a94cd18138b43811808e22_800.jpg);">
                        </a>
                        <div class="desc">
                            <h3><a href="{{route('design')}}"> Технік-дизайнер</a></h3>
                            <p>Спеціаліст з комплексного архітектурно-дизайнерського проектування основних видів архітектурного середовища - інтер'єрів з їх обладнанням, міських відкритих просторів, що наповнюють їх будівель та споруд різного призначення та характеру.</p>
                            <span><a href="{{route('design')}}" class="btn btn-primary btn-sm btn-course">Детальніше</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="course">
                        <a href="{{route('ek')}}" class="course-img" style="background-image: url(https://thumbor.forbes.com/thumbor/fit-in/900x510/https://www.forbes.com/advisor/wp-content/uploads/2022/03/Image_-_Business_Analyst_.jpeg.jpg);">
                        </a>
                        <div class="desc">
                            <h3><a href="{{route('ek')}}">Фінансовий аналітик</a></h3>
                            <p>Унікальна спеціальність, яка пов’язана зі створенням та управлінням інформацією про усі, без винятку, процеси в діяльності сучасного підприємства та держави в цілому.</p>
                            <span><a href="{{route('ek')}}" class="btn btn-primary btn-sm btn-course">Детальніше</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <h2>Блог</h2>
                </div>
            </div>
            <div class="row row-padded-mb">
                @foreach($posts as $post)
                <div class="col-md-4 animate-box">

                    <div class="fh5co-event">
                        <div class="date text-center"><span>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('d.M')}}<br></span></div>
                        <h3><a href="#">{{$post->title}}</a></h3>
                        <p>{{$post->content}}</p>
                        <p><a href="#">Read More</a></p>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>

    <div id="fh5co-gallery" class="fh5co-bg-section">
        <div class="row text-center">
            <h2><span>Галерея</span></h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-padded">
                <a href="#" class="gallery" style="background-image: url(http://happyanimals.com.ua/wp-content/uploads/2021/10/%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%BD%D1%8F_viber_2021-10-11_12-12-51-358-768x1024.jpg);"></a>
            </div>
            <div class="col-md-3 col-padded">
                <a href="#" class="gallery" style="background-image: url(data:image/jpeg;base64,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);"></a>
            </div>
            <div class="col-md-3 col-padded">
                <a href="#" class="gallery" style="background-image: url(https://i.ytimg.com/vi/2Rdd2drRcCQ/maxresdefault.jpg);"></a>
            </div>
            <div class="col-md-3 col-padded">
                <a href="#" class="gallery" style="background-image: url(http://hpk.edu.ua/uploads/2022/06/287330435_1441105382981333_2698959588584641310_n.jpg);"></a>
            </div>
        </div>
    </div>
@endsection
