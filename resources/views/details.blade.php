@extends('layouts.custom')
@section('content')
<section>
    <div class="backgroundProduct" style="background-image: url({{ asset('storage/img/banner/backgorund-product.jpg')}}); background-size: contain;">
        <div class="productContent">
            <div class="cardProductContainer">
                <div class="cardProduct wrap">
                    <!-- items product card -->
                    <div class="display-details">
                        <h1> {{$moto->name}} </h1>
                        <div class="border">                       
                            <h3 class="title-border">Hình ảnh</h3> {{--thêm bên lang vào {{trans()}}--}}
                        </div>
                        <div class="product-tumb-small">
                            <div class="detail-product">
                                <h4>{{$moto->detail}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum similique dicta, culpa eveniet dolorum reiciendis minus animi eligendi atque. Autem soluta blanditiis dolore molestiae quaerat deserunt deleniti natus, explicabo delectus!</h4>
                                <p>Giá kham khảo thị trường: {{$moto->price}} </p>
                            </div>
                            <img src="{{ asset('storage/img/product').'/'.$moto->thumbnail }}" alt="">
                        </div>
                        <div class="border">
                            <h3 class="title-border">Thông số</h3>{{--thêm bên lang vào {{trans()}}--}}
                        </div>
                        <div class="spacing-table-element">
                            <table class="wrap">
                                <thead>
                                    <tr class="table-headers">
                                        <th>Tên</th>
                                        <th>Chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (json_decode($moto->specifications ,true) as $key => $value)
                                    <tr>
                                        <td>
                                            <b style="padding: 5px">
                                                {{$key}}
                                            </b>
                                        </td>
                                        <td>
                                            <i style="font-style: italic; padding: 5px">
                                                {{$value}}
                                            </i>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="border">
                            <h3 class="title-border">Tính năng</h3>
                        </div>
                        <div class="spacing-table-element">
                            <div class="slide-show-product wrap">
                                <div class="slideshow-container">
                                    @foreach (json_decode($moto->options ,true) as $key => $value)
                                    <div class="mySlides fade">
                                        <div class="text">
                                            <div class="options-show">
                                                <h3>
                                                    {{$key}}
                                                </h3>
                                                <p style="margin-left: 10px; font-style: italic">
                                                    {{$value}}
                                                    lor
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach   
                                </div>
                            </div>
                        </div>
                        <div class="border">
                            <h3 class="title-border">Đánh giá</h3>
                        </div>
                        <div class="spacing-table-element">
                            <ul class="wrap commentWrap">
                                <!-- section comment -->
                                @foreach ($comments as $comm)
                                <li>
                                    <div id="comment-area" class="comment-section">
                                        <div class="circle-avt">
                                            <a href=" {{route('userProfile.show',$comm->user_id)}}">
                                                <img src="{{ asset('storage/img/avt/avtmau.jpg') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="comment-content">
                                            <h4> {{$comm->user->name}} </h4>
                                            <p>{{$comm->content}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus quaerat aliquid neque tempora, numquam velit? Dolore reprehenderit excepturi animi magni in ullam esse tempora recusandae non? Doloremque laudantium nihil dolorem! </p>
                                        </div>
                                        <span class="like-comment">
                                            {{$comm->like}}
                                            @if (empty($user->interact))
                                                <i class="fas fa-thumbs-up" ></i>
                                            @elseif(in_array(strval($comm->id),json_decode($user->interact,true)))
                                                <i class="fas fa-thumbs-up" style="color: rgb(23, 217, 252); font-size: 16px" ></i>
                                            @else
                                                <i class="fas fa-thumbs-up" ></i>
                                            @endif
                                            <form class="action-like" action=" {{route('liked')}} " method="post">
                                                @csrf
                                                <input type="number" name="id_comm" value="{{$comm->id}}" style="display: none">
                                                <button class="btn-like" type="submit">Like</button>
                                            </form>
                                        </span>
                                    </div>
                                </li>
                                @endforeach
                                <div class="style-links-path">
                                    {{$comments->links('customPagition')}}
                                </div>
                                <!-- section comment -->
                                <div class="form wrap">
                                    <form action=" {{route('postComment')}} " method="POST">
                                        @csrf
                                        <h3>Chào! <a style="color: rgb(87, 194, 194)" href="{{route('userProfile.show',auth()->user()->id)}}">{{$user->name}} </a>. Hãy để lại đánh giá của bạn:</h3>
                                        <input type="number" name="product_id" value="{{$moto->id}}" style="display: none">
                                        <textarea name="content" id="" cols="99" rows="10" placeholder="Viết đánh giá tại đây" style="padding: 11px"></textarea>
                                        <button class="btn-like" type="submit">Đăng bài đánh giá</button>
                                    </form>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection