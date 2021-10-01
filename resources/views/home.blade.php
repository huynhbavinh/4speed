@extends('layouts.custom')
@section('content')
    <section>
        <div class="backgroundProduct" style="background-image: url({{ asset('storage/img/banner/backgorund-product.jpg')}}); background-size: contain;">
            <div class="productContent">
                <div class="cardProductContainer">
                    <div class="cardProduct wrap">
                        <!-- items product card -->
                        @foreach ($listMoto as $moto)
                            <div class="product-card">
                                <div class="badge">Hot</div> <!-- kiem tra HOT hay khong -->
                                <div class="product-tumb">
                                    <img src="{{ asset('storage/img/banner/hondaCBR1000rrr.jpg')}}" alt="">
                                </div>
                                <div class="product-details">
                                    <span class="product-catagory">Yamaha</span><!-- kiem tra category -->
                                    <h4><a href="">{{ $moto->name }}</a></h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</p> <!-- thieu mieu ta tong quan -->
                                    <div class="product-bottom-details">
                                        <div class="product-links">
                                            <a href=""><i class="fa fa-heart"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-btn">
            <h4 class="white-font">
                <a href="login.html">
                    <i class="fas fa-user-tie white-font"></i>
                    <span class="white-font">Xin chao! <label for="">{{ $lastName }}</label>
                        <label id="triangle-up-profile"></label>
                    </span>
                </a>
            </h4>
        </div>
    </section>
    
@endsection