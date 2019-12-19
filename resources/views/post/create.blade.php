@extends('layouts.app')

@section('content')

    <form method ="POST" action="{{ route('post.store')}}">
    @csrf
    <p>Content: <input type ="text" name="content"></p>
    <input type="submit" value="Submit">
    </form>

@endsection