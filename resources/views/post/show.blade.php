@extends('layouts.app')

@section('content')
    <ul>
        <li>ID: {{$$post->id}}</li>
        <li>Content: {{$post->content}}</li>
        <li>Rating: {{$post->rating}}</li>
    </ul>
    /** 
    Comments: <br>
            <ul>
            @foreach($comments as $comment)
                <li>{{$comment->content}}</li>
            @endforeach
            </ul>
    */
@endsection