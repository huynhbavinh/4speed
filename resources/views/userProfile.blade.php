@extends('layouts.profile')
@section('content')
<body>
    <div class="main-content">
      <!-- Top navbar -->
      <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
          <!-- Brand -->
          <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#" target="_blank">User profile</a>
          <!-- Form -->
          <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
          </form>
          <!-- User -->
          <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                <div class=" dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="../examples/profile.html" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="../examples/profile.html" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="../examples/profile.html" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="../examples/profile.html" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Header -->
      <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url({{ asset('storage/img/banner/backgorund-product.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
          <div class="row">
            <div class="col-lg-7 col-md-10">
              <h2 class="display-2 text-white">Hello! {{$userLogin->name}}</h2>
              <p class="text-white mt-0 mb-5">This is <b style="font-size: 20px">{{$userProf->name}}</b> profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
              <a href="{{route('welcome')}}" class="btn btn-info">Quay lại</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Page content -->
      <div class="container-fluid mt--7">
        <div class="row">
          <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
            <div class="card card-profile shadow">
              <div class="row justify-content-center">
                <div class="col-lg-3 order-lg-2">
                  <div class="card-profile-image">
                    <a href="#">
                      <img src="{{ asset('storage/img/avt/avtmau.jpg') }}" class="rounded-circle">
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                <div class="d-flex justify-content-between">
                  <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                  <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                </div>
              </div>
              <div class="card-body pt-0 pt-md-4">
                <div class="row">
                  <div class="col">
                    <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                      <div>
                        <span class="heading">
                          @if ($userProf->comments != null)
                            {{ count(json_decode($userProf->comments,true)) }}
                          @else
                            {{0}}
                          @endif
                        </span>
                        <span class="description">Comment</span>
                      </div>
                      <div>
                        <span class="heading">
                            @if ( $userProf->favorites != null )
                              {{count(json_decode($userProf->favorites,true))-1 }}
                            @else
                              {{0}}
                            @endif
                        </span>
                        <span class="description">Moto Favorites</span>
                      </div>
                      <div>
                        <span class="heading">
                          @if ( $userProf->interact != null )
                            {{count(json_decode($userProf->interact,true))-1 }}
                          @else
                            {{0}}
                          @endif
                        </span>
                        <span class="description">Like</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <h3>
                    {{$userProf->name}}
                  </h3>
                  <div class="h5 font-weight-300">
                    <i class="ni location_pin mr-2"></i>Bucharest, Romania
                  </div>
                  <div class="h5 mt-4">
                    <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                  </div>
                  <div>
                    <i class="ni education_hat mr-2"></i>University of Computer Science
                  </div>
                  <hr class="my-4">
                  <p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-8 order-xl-1">
            <div class="card bg-secondary shadow">
              <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                  <div class="col-8">
                    <h3 class="mb-0">My favorites list</h3>
                  </div>
                </div>
              </div>
              <div class="card-body">
                  @foreach ($userProf->userListFavorite as $moto)
                      <div  style="max-width: 300px; display: inline-block;  background: rgba(243, 221, 225,0.6); margin: 5px 20px">
                        <div class="product-tumb">
                          <img src="{{ asset('storage/img/product').'/'.$moto->thumbnail }}" alt="">
                      </div>
                      <div class="product-details">
                          <span class="product-catagory"> {{ $moto->category->name}} </span>
                          <h4><a href=" {{ route('homeSanpham.show',$moto) }} ">{{ $moto->name }}</a></h4>
                          <p>{{ $moto->title }}</p>
                          <span class="product-catagory" style="color: black"> Giá thị trường {{ $moto->price}} </span>
                      </div>
                      </div>
                  @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
@endsection