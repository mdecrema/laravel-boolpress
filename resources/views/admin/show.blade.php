@extends('layouts/app')

@section('content')

    
        <h2>{{$post->title}}</h2>
        <h3>{{$post->author}}</h3>
        <h4>{{$post->date}}</h4>
        <p>
            {{$post->description}}
        </p>
    

@endsection