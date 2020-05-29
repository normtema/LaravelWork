@extends('user')
@section('title')
    npm start
@endsection
@section('content')
    @foreach($_POST as $key=>$value)
        @if($loop->first)
            <p class="text">adsfas</p>
        @endif
        @if($loop->last)
            <p class="text">lasdf</p>
        @endif
       <h1>{{$_POST[$key]}}</h1>
    @endforeach
@endsection
