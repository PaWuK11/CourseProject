@extends('layouts.layouts')



@section('content')
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../../fonts2/icomoon/style.css">

    <link rel="stylesheet" href="../../css2/bootstrap.min.css">
    <link rel="stylesheet" href="../../css2/magnific-popup.css">
    <link rel="stylesheet" href="../../css2/jquery-ui.css">
    <link rel="stylesheet" href="../../css2/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css2/owl.theme.default.min.css">

    <link rel="stylesheet" href="../../css2/lightgallery.min.css">

    <link rel="stylesheet" href="../../css2/bootstrap-datepicker.css">

    <link rel="stylesheet" href="../../fonts2/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="../../css2/swiper.css">

    <link rel="stylesheet" href="../../css2/aos.css">

    <link rel="stylesheet" href="../../css2/style.css">

    <title>Розклад</title>

    <div class="container-fluid" data-aos="fade" data-aos-delay="500">
        <div class="swiper-container images-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-wrap">
                        <div class="image-info">
                            <h2 class="mb-3">1 Курс</h2>
                            <a href="#" class="btn btn-outline-white py-2 px-4">Переглянути</a>
                        </div>
                        <img src="https://images.unsplash.com/photo-1553095066-5014bc7b7f2d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d2FsbCUyMGJhY2tncm91bmR8ZW58MHx8MHx8&w=1000&q=80" alt="Image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-wrap">
                        <div class="image-info">
                            <h2 class="mb-3">2 Курс</h2>
                            <a href="#" class="btn btn-outline-white py-2 px-4">Переглянути</a>
                        </div>
                        <img src="https://i.pinimg.com/originals/40/04/7e/40047e9b1897e50651700455e843d506.jpg" alt="Image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-wrap">
                        <div class="image-info">
                            <h2 class="mb-3">3 Курс</h2>
                            <a href="#" class="btn btn-outline-white py-2 px-4">Переглянути</a>
                        </div>
                        <img src="https://iphoneswallpapers.com/wp-content/uploads/2019/08/Night-Beach-Glow-iPhone-Wallpaper.jpg" alt="Image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-wrap">
                        <div class="image-info">
                            <h2 class="mb-3">4 Курс</h2>
                            <a href="#" class="btn btn-outline-white py-2 px-4">Переглянути</a>
                        </div>
                        <img src="https://iphoneswallpapers.com/wp-content/uploads/2021/11/Space-Desert-Night-iPhone-Wallpaper.jpg" alt="Image">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-wrap">
                        <div class="image-info">
                            <h2 class="mb-3">5 Курс</h2>
                            <a href="#" class="btn btn-outline-white py-2 px-4">Переглянути</a>
                        </div>
                        <img src="https://iphoneswallpapers.com/wp-content/uploads/2021/11/Space-Desert-Night-iPhone-Wallpaper.jpg" alt="Image">
                    </div>
                </div>
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-scrollbar"></div>
        </div>
    </div>

    <script src="../../js2/jquery-3.3.1.min.js"></script>
    <script src="../../js2/jquery-migrate-3.0.1.min.js"></script>
    <script src="../../js2/jquery-ui.js"></script>
    <script src="../../js2/popper.min.js"></script>
    <script src="../../js2/bootstrap.min.js"></script>
    <script src="../../js2/owl.carousel.min.js"></script>
    <script src="../../js2/jquery.stellar.min.js"></script>
    <script src="../../js2/jquery.countdown.min.js"></script>
    <script src="../../js2/jquery.magnific-popup.min.js"></script>
    <script src="../../js2/bootstrap-datepicker.min.js"></script>
    <script src="../../js2/swiper.min.js"></script>
    <script src="../../js2/aos.js"></script>

    <script src="../../js2/picturefill.min.js"></script>
    <script src="../../js2/lightgallery-all.min.js"></script>
    <script src="../../js2/jquery.mousewheel.min.js"></script>

    <script src="../../js2/main.js"></script>

    <script>
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
    </script>
@endsection
