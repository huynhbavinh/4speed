@extends('layouts.app')
@section('content')
    <div style="display: inline-block; border: 1px solid aqua; border-radius: 10px; margin: 10px; padding: 15px " >
        <a href="{{route('admin.create')}}">
            Tạo bài viết
        </a>
    </div>
    <div class="dashboard">
       @foreach ($articles as $article)
        <div class="card-article">
            <h3>
                <a href="{{route('admin.show',$article)}}">
                    {{$article->name}}
                </a>
            </h3>
            <ul>
                <li>
                    {{$article->category->name}}
                </li>
                @if ($article->is_hot)
                    <li>
                        <span>HOT</span>
                    </li>
                @else
                <li>
                    <span>Active: None</span>
                </li>
                @endif
            </ul>
        </div>
       @endforeach
    </div>
@endsection
