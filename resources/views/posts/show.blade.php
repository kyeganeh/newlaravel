@extends('main.app')

@section('content')
    <li>{{ $post->title }}</li>
    <li>{{ $post->content }}</li>
    <li>{{ $post->user_id }}</li>
    <img src="images/{{ $post->path }}" alt="" width="150px" height="150px">
@endsection
