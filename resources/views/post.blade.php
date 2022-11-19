@extends('layouts.layouts')

@section('content')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>

<title>Пост {{$posts->id}}</title>
    <aside id="fh5co-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(#);">
                    <div class="overlay-gradient"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center slider-text">
                                <div class="slider-text-inner">
                                    <h1 class="heading-section">{{$posts->title}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="fh5co-about">
        <div style="font-size: 18px" class="container">
               {{strip_tags($posts->content)}}
        </div>
    </div>
    <div id="fh5co-gallery" class="fh5co-bg-section">
        <div class="row text-center">
            <h2><span>Коментарі</span></h2>
        </div>
    </div>

    <div>
        <div class="row" style="padding-left: 400px; padding-right: 400px">
            @comments(['model' => $posts])
        </div>
    </div>


    <div id="fh5co-about">
        <div style="font-size: 18px" class="container">
        </div>
    </div>

@endsection
