@extends('layouts.app')

@section('content')

    @foreach ($post as $thispost)
        <h2>{{$thispost->title}}</h2>
    @endforeach

@endsection