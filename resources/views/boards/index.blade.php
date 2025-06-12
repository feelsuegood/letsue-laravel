@extends('boards.layout')
@section('content')
    <!-- <a href="/boards/create">Write an article</a> -->
    <a href="{{route('boards.create')}}">Write an article</a>
@endsection