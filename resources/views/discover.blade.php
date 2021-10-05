@extends('layouts.custom')
@section('content')
<section>
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url({{ asset('storage/img/banner/backgorund-discover.jpg')}}); background-size: contain; background-position: center top;">
        <div class="productContent">
            <div class="cardProductContainer boder">
                <div class="cardProduct wrap">
                    @foreach ($listUser as $user)
                        <div class="card-famous">
                            <figure class="snip0057 red hover">
                                <figcaption>
                                <h2> {{$user->name}} </h2>
                                <p>{{$user->bio}}</p>
                                <div class="icons">
                                    <a href=" {{$user->pathYtb}} ">Youtube<i class="ion-ios-home"></i></a>
                                </div>
                                </figcaption>
                                <div class="image"><img src="{{asset('storage/img/avt/'.'/'.$user->avt )}}" alt="{{$user->name}}"/></div>
                                <div class="position">{{$user->job}}</div>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection