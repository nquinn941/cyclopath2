@extends('layouts.app')


@section('title','All Posts')


@section('content')

    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('post.show', ['id' => $post->id])}}">{{$post->content}}</a></li>
        @endforeach
    </ul>
    <a href="{{ route('posts.create')}}">Add Post</a>

@endsection

