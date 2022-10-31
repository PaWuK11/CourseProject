<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../../images/icons/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../css/animate2.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../css/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../css/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../css/util.css">
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="../../images/img-01.png" alt="IMG">
            </div>

            <form method="post" action="{{route('register.store')}}">
                @csrf


					<span class="login100-form-title">Реєстрація</span>

                <div class="wrap-input100 validate-input" data-validate = "Ви не ввели ім'я">
                    <label for="name">
                        <input class="input100" type="text" name="name" placeholder="Ім'я" value="{{old('name')}}">
                        <span class="focus-input100"></span>
                    </label>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Поле пусте або неправильний формат адреси">
                    <label for="email">
                        <input class="input100" type="text" name="email" placeholder="Пошта"  value="{{old('email')}}">
                        <span class="focus-input100"></span>
                    </label>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Поле пусте або мало символів">
                    <label for="password">
                        <input class="input100 password" type="password" id="password" name="password" placeholder="Пароль">
                        <span class="focus-input100"></span>
                    </label>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Поле пусте або мало символів">
                    <label for="password_confirmation">
                        <input class="input100 password_confirmation" id="password_confirmation" type="password" name="password_confirmation" placeholder="Пароль">
                        <span class="focus-input100"></span>
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Створити
                    </button>
                </div>

                <div class="container-login100-form-btn" >
                    <button class="login100-form-btn">
                        <a href="{{route('home')}}" style="color: white">Назад</a>
                    </button>
                </div>

                <div class="text-center p-t-136">
                    Уже існує акаунт?
                    <a class="txt" href="{{route('login.create')}}">
                        Увійти
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="../../js/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../../js/popper.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../../js/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../../js/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="../../js/main2.js"></script>

</body>
</html>
