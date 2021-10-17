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
                                @if ($moto->is_hot == true)
                                    <div class="badge">HOT</div>
                                @endif
                                <div class="product-tumb">
                                    <img src="{{ asset('storage/img/product').'/'.$moto->thumbnail }}" alt="">
                                </div>
                                <div class="product-details">
                                    <span class="product-catagory"> {{ $moto->category->name}} </span>
                                    <h4><a href=" {{ route('homeSanpham.show',$moto) }} ">{{ $moto->name }}</a></h4>
                                    <p>{{ $moto->title }}</p>
                                    <span class="product-catagory" style="color: black"> Giá thị trường {{ $moto->price}} </span>
                                    <div class="product-links">
                                        <form style="text-align: center" action="{{route('favorite')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="moto_id" value="{{$moto->id}}" style="display: none">
                                            <button style="background-color: transparent" class="btn-like" type="submit">
                                                @if (empty($userLogin->favorites))
                                                    <i class="fa fa-heart"></i>
                                                @elseif(in_array(strval($moto->id),json_decode($userLogin->favorites,true)))
                                                    <i class="fa fa-heart" style="color: red; font-size: 16px" ></i>
                                                @else
                                                    <i class="fa fa-heart"></i>
                                                @endif
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>
        <div class="profile-btn">
            <h4 class="white-font">
                <a href="{{route('userProfile.show',auth()->user()->id)}}">
                    <i class="fas fa-user-tie white-font"></i>
                    <span class="white-font">Xin chao! <label for="">{{ $lastName }}</label>
                        <label id="triangle-up-profile"></label>
                    </span>
                </a>
            </h4>
        </div>
        <div class="logout-btn">
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </section>
    
@endsection