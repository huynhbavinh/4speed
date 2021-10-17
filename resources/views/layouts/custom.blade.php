<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Css -->
    <link rel="stylesheet" href=" {{ asset('fontawesome-free-5.15.4-web/css/all.css') }} ">

    <link rel="stylesheet" href=" {{ asset('css/styleCustom.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/product.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/detail.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/slide.css') }}">
    <link rel="stylesheet" href=" {{ asset('css/discover.css') }}">
    

    <!-- Font chữ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('storage/img/logo/favison.ico.ico')}}" />
    <title>4Speed-Know your bike, Control your speed</title>
</head>

<body>
    <header id="white-background">
        <menu id="navbar" class="wrap">
            <div class="menu-logo">
                <div class="logo-container">
                    <h1>
                        <a href=" {{route('welcome')}} ">
                            <img src="{{asset('/storage/img/logo/4speed_logo.png')}}" alt="4Speed">
                        </a>
                    </h1>
                </div>
            </div>
            <div class="menu-content">
                <ul class="menu-about-us">
                    <li>
                        <a href="">Về chúng tôi</a>
                    </li>
                    <li>
                        <a href="">Bài review</a>
                    </li>
                    <li>
                        <a href="">Tin tức</a>
                    </li>
                    <li>
                        <a href="">Bảng giá xe</a>
                    </li>
                    <li>
                        <a href="">Lái xe an toàn</a>
                    </li>
                </ul>
                <ul class="menu-service">
                    <li>
                        <a href="{{ route('discover') }}">Discover</a>
                    </li>
                    <li>
                        <a href="{{ route('homeSanpham.index') }}">Sản phẩm</a>
                    </li>
                    <li>
                        <a href="">Dịch vụ</a>
                    </li>
                    <li>
                        <a href="">Công nghệ</a>
                    </li>
                    <li>
                        <a href="">Đại lý</a>
                    </li>
                    <li>
                        <a href="">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </menu>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="wrap">
            <div>
                <div class="box-lienlac">
                    <span>4speed Network</span>
                    <ul>
                        <li>
                            <a href="http://">
                                <i class="fab fa-youtube youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://">
                                <i class="fab fa-facebook-square facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="http://">
                                <i class="fab fa-instagram-square insta"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div>
                    <p class="white-font">Trụ sở chính: TP.Hồ Chí Minh</p>
                </div>
            </div>
            <div class="thongtinlienlac">
                <div>
                    <h2>thông tin liên lạc</h2>
                    <div class="group-btn">
                        <div class="btn">
                            <a href="">
                                <i class="fas fa-envelope white-font"></i>
                                <span class="white-font">bavinh.congviec@gmail.com</span>
                            </a>
                        </div>
                        <div class="btn">
                            <i class="fas fa-phone-alt white-font"></i>
                            <span class="white-font">Hotline tư vấn: 1800</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h4>
                © 2022 BẢN QUYỀN THUỘC VỀ <a href="http://">Huỳnh Bá Vinh</a>
            </h4>
        </div>
    </footer>
</body>
<script src="{{ asset('js/messenger.js') }}"></script>
<script src="{{ asset('js/eventMenuScroll.js') }}"></script>
<script src="{{ asset('js/slideShow.js') }}"></script>



</html>