@extends('layouts/app')

@section('content')

    @foreach ($posts as $post)

    <h2>{{$post->title}}</h2>
    <h4>{{$post->author}}
        {{$post->date}}
    </h4>
    <p>
        {{$post->description}}
    </p>
    <form action="" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
    </form>
    <form action="{{route('posts.show', $post)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="view">
    </form>

    @endforeach

@endsection

