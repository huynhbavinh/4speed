@extends('layouts.app')
@section('content')
    <div style="display: inline-block; border: 1px solid aqua; border-radius: 10px; margin: 10px; padding: 15px " >
        <a href="{{route('admin.create')}}">
            Tạo bài viết
        </a>
    </div>
    <div class="dashboard">
        <admin-list-product-component></admin-list-product-component>
    </div>
@endsection
