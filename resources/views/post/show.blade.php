@extends('layouts.app')

@section('content')

    <ul>
        <li>ID: {{$post->id}}</li>
        <li>Content: {{$post->content}}</li>
        <li>Rating: {{$post->rating}}</li>
    </ul>
@endsection