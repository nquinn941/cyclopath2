@extends('layouts.app')

@section('content')
<a href="{{ route('posts.create')}}">Add Post</a>
    <ul>
        @foreach ($posts as $post)
            <li><a href="{{ route('post.show', ['id' => $post->id])}}">{{$post->content}}</a></li>
        @endforeach
    </ul>
@endsection

