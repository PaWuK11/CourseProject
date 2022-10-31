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
                            <h3><a href="/">Автомобільний транспорт</a></h3>
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
                            <h3><a href="#">Будівництво та експлуатація будівель і споруд</a></h3>
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
                            <h3><a href="#">Опорядження будівель і споруд та будівельний дизайн</a></h3>
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
                            <h3><a href="#">Облік та оподаткування</a></h3>
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
                        <a href="#" class="course-img" style="background-image: url(https://tk.lntu.edu.ua/wp-content/uploads/2022/01/1.jpg);">
                        </a>
                        <div class="desc">
                            <h3><a href="#">Автомобільний механік</a></h3>
                            <p>Автомобільний механік виконує обстеження, технічне обслуговування та ремонт двигунів, механічних вузлів та систем легкових, вантажних автомобілів та інших транспортних засобів.</p>
                            <span><a href="#" class="btn btn-primary btn-sm btn-course">Детальніше</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="course">
                        <a href="#" class="course-img" style="background-image: url(https://media.slovoidilo.ua/media/scimage/159/158460-uk.png);">
                        </a>
                        <div class="desc">
                            <h3><a href="#">Технік-будівельник</a></h3>
                            <p>Технік-будівельник бере зразки, аналізує їх, випробовує сировину та матеріали, що використовуються в будівництві. Він готує документацію про результати проведених випробувань для практичного використання в будівельній галузі.</p>
                            <span><a href="#" class="btn btn-primary btn-sm btn-course">Детальніше</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="course">
                        <a href="#" class="course-img" style="background-image: url(https://images.wapcar.my/file1/6916418b47a94cd18138b43811808e22_800.jpg);">
                        </a>
                        <div class="desc">
                            <h3><a href="#"> Технік-дизайнер</a></h3>
                            <p>Спеціаліст з комплексного архітектурно-дизайнерського проектування основних видів архітектурного середовища - інтер'єрів з їх обладнанням, міських відкритих просторів, що наповнюють їх будівель та споруд різного призначення та характеру.</p>
                            <span><a href="#" class="btn btn-primary btn-sm btn-course">Детальніше</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box">
                    <div class="course">
                        <a href="#" class="course-img" style="background-image: url(https://thumbor.forbes.com/thumbor/fit-in/900x510/https://www.forbes.com/advisor/wp-content/uploads/2022/03/Image_-_Business_Analyst_.jpeg.jpg);">
                        </a>
                        <div class="desc">
                            <h3><a href="#">Фінансовий аналітик</a></h3>
                            <p>Унікальна спеціальність, яка пов’язана зі створенням та управлінням інформацією про усі, без винятку, процеси в діяльності сучасного підприємства та держави в цілому.</p>
                            <span><a href="#" class="btn btn-primary btn-sm btn-course">Детальніше</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-testimonial" style="background-image: url(https://portaliluminar.com.br/wp-content/uploads/2018/09/Blue-Background-HD-wallpapers-dark-blue-background-hd-wallpaper-12829.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2><span>Відгуки</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row animate-box">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <div class="user" style="background-image: url(#);"></div>
                                    <span>Марія Волтер<br><small>Студент</small></span>
                                    <blockquote>
                                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <div class="user" style="background-image: url(#);"></div>
                                    <span>Микола Сміт<br><small>Студент</small></span>
                                    <blockquote>
                                        <p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <div class="user" style="background-image: url(#);"></div>
                                    <span>Віктор Цой<br><small>Викладач</small></span>
                                    <blockquote>
                                        <p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
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
                    <h2>Блог & Події</h2>
                </div>
            </div>
            <div class="row row-padded-mb">
                <div class="col-md-4 animate-box">
                    <div class="fh5co-event">
                        <div class="date text-center"><span>15<br>Mar.</span></div>
                        <h3><a href="#">USA, International Triathlon Event</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="fh5co-event">
                        <div class="date text-center"><span>15<br>Mar.</span></div>
                        <h3><a href="#">USA, International Triathlon Event</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-4 animate-box">
                    <div class="fh5co-event">
                        <div class="date text-center"><span>15<br>Mar.</span></div>
                        <h3><a href="#">New Device Develope by Microsoft</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <p><a href="#">Read More</a></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-img-holder" style="background-image: url(data:image/jpeg;base64,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);"></a>
                        <div class="blog-text">
                            <h3><a href="#">День відкрити дверей</a></h3>
                            <span class="posted_on">14 Лютого 2021</span>
                            <span class="comment"><a href="">9<i class="icon-speech-bubble"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-img-holder" style="background-image: url(data:image/jpeg;base64,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);"></a>
                        <div class="blog-text">
                            <h3><a href="#">"Донбас Україна" та "Крим Україна"</a></h3>
                            <span class="posted_on">26 Березеня 2021</span>
                            <span class="comment"><a href="">11<i class="icon-speech-bubble"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-img-holder" style="background-image: url(#);"></a>
                        <div class="blog-text">
                            <h3><a href="#">Healty Lifestyle &amp; Living</a></h3>
                            <span class="posted_on">March. 15th</span>
                            <span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                    </div>
                </div>
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
