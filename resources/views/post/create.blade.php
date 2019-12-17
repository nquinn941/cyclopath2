@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <p>Content: <input type = "text" name = "content"></p>
        <input type ="submit" value ="Submit">
        <a href ="{{ route('posts.index')}}">Cancel</a>
    </form>
@endsection