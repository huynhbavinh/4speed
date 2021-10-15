@extends('layouts.app')
@section('content')
<edit-article-component :pass-data='@json($article)'></edit-article-component>
@endsection
