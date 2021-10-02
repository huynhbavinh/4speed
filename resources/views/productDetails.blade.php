@extends('layouts.custom')
@section('content')
   <h1>{{ $moto->name }}</h1>
    <p>{{ $moto->price }}</p>
    <p>{{ $moto->title }}</p>
    <p>{{ $moto->category->name }}</p>
    @foreach (json_decode($moto->specifications,true) as $item)
        <ul>
            <li>{{ $item }}</li>
        </ul>
    @endforeach
    <p>{{ $moto->details }}</p>
    @foreach (json_decode($moto->options,true) as $item)
        <ul>
            <li>{{ $item }}</li>
        </ul>
    @endforeach
    <div class="product-tumb">
        <img src="{{ asset('storage/img/product').'/'.$moto->thumbnail }}" alt="">
    </div>
    @foreach (json_decode($moto->path,true) as $imgPath)
        <ul>
            <li>{{ $imgPath }}</li>
        </ul>
    @endforeach

@endsection