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

            <form method="post" action="{{route('login')}}">
                @csrf


                <span class="login100-form-title">Вхід</span>

                <div class="wrap-input100 validate-input" data-validate = "Не існуюча пошта">
                    <label for="email">
                        <input class="input100" type="text" name="email" placeholder="Пошта"  value="{{old('email')}}">
                        <span class="focus-input100"></span>
                    </label>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Не правильний пароль">
                    <label for="password">
                        <input class="input100 password" type="password" id="password" name="password" placeholder="Пароль">
                        <span class="focus-input100"></span>
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Увійти
                    </button>
                </div>

                <div class="container-login100-form-btn" >
                    <button class="login100-form-btn">
                        <a href="{{route('home')}}" style="color: white">Назад</a>
                    </button>
                </div>

                <div class="text-center p-t-136">
                    Не існує акаунта?
                    <a class="txt" href="{{route('register.create')}}">
                        Зареєструйтесь
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
