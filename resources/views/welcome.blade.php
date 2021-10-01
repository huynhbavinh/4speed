@extends('layouts.custom')
@section('content')
    <section>
        <div class="banner">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 4</div>
                    <div class="banner-container">
                        <img src=" {{ asset('storage/img/banner/r1Yamaha.jpg') }} " alt="Yamaha R1 2020">
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 4</div>
                    <div class="banner-container">
                        <img src=" {{ asset('storage/img/banner/bmwS1000rr.jpg')}} " alt="BMW S1000rr 2020">
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 4</div>
                    <div class="banner-container">
                        <img src=" {{ asset('storage/img/banner/hondaCBR1000rrr.jpg')}} " alt="Honda CBR1000rrr 2020">
                    </div>
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">4 / 4</div>
                    <div class="banner-container">
                        <img src="{{ asset('storage/img/banner/v4ducati.jpg')}}" alt="Ducati v4 2020">
                    </div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>

            <div class="position-slide" style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
                <span class="dot" onclick="currentSlide(4)"></span>
            </div>
        </div>
    </section>
    <div class="login-now">
        <h4 class="white-font">
            <a href="{{ route('login') }}">
                <i class="fas fa-sign-in-alt white-font"></i>
                <span class="white-font">Join now
                    <label id="triangle-up"></label>
                </span>
            </a>
        </h4>
    </div>

@endsection