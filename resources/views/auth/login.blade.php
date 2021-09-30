<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=" {{ asset('css/styleLogin.css') }}">
    <link rel="stylesheet" href=" {{ asset('fontawesome-free-5.15.4-web/css/all.css') }} ">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/img/logo/favison.ico.ico')}}" />
    <title>4Speed-Login</title>
</head>

<body>
    <div>
        <img class="background" src=" {{ asset('storage/img/banner/whyWeRide.jpg')}}" alt="">
        <div class="container">
            <div id="wallpapper">
                <div id="content">
                    <h1>
                        <a href="{{ route('welcome') }}">
                            Know your bike, Control your speed.
                        </a>
                    </h1>
                    <p> <b>Marc Marquez</b> - Racer Honda's MotoGP</p>
                </div>
            </div>
            <div id="login">
                <div id="wrapper">
                    <div id="logo">
                        <img src="logo.png" alt="">
                    </div>
                    <div id="bieu-mau">
                        <p>Đăng Nhập</p>
                        <form id="info">
                            <div id="email">
                                <label class="label">Username</label>
                                <div class="control">
                                    <input type="text">
                                </div>
                            </div>
                            <div id="password">
                                <label class="label">Passwords</label>
                                <div class="control">
                                    <input type="text">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="btn-control">
                        <button>
                        Đăng nhập
                    </button>
                        <a href=""> Quên mật khẩu?</a>
                    </div>
                    <div id="another-login">
                        <button id="fb">
                        <div class="icon-social">
                            <i class="fab fa-facebook-square"></i>
                        </div>
                        Login with Facebook
                    </button>
                        <button id="gg"> 
                        <div class="icon-social">
                            <i class="fab fa-google"></i>
                        </div>
                        Login with Google
                    </button>
                    </div>
                    <div id="dang-ky">
                        <a href="">Đăng ký</a>
                        <p>nếu chưa có tài khoản</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>