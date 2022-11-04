@extends('layouts.layouts')

@section('content')
    <title>Contact</title>
    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-push-1 animate-box">

                    <div class="fh5co-contact-info">
                        <h3>Контактна інформація</h3>
                        <ul>
                            <li class="address">198 West 21th Street, <br> Suite 721 New York NY 10016</li>
                            <li class="phone"><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li class="email"><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-6 animate-box">
                    <h3>Зв'язатись</h3>
                    <form method="post" action="/send">
                        @csrf
                        <div class="row form-group">
                            <div class="col-md-6">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="Прізвище">
                            </div>
                            <div class="col-md-6">
                                <!-- <label for="lname">Last Name</label> -->
                                <input type="text" id="lname" name="lname" class="form-control" placeholder="Ім'я">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" id="email" name="email" class="form-control" placeholder="Пошта">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="text" id="subject" name="tem" class="form-control" placeholder="Тема цього повідомлення">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Основний текст"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Надіслати повідомлення" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
