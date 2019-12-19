@extends('layouts.app')

@section('content')

@foreach ($posts as $post)
            <li><a href="{{ route('post.show', ['id' => $post->id])}}">{{$post->content}}</a></li>
        @endforeach

@endsection 