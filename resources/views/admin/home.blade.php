@extends('layouts/app')

@section('content')

    <a href="{{asset('admin/posts/create')}}">Create a new post</a>

    @foreach ($posts as $post)

    <h2>{{$post->title}}</h2>
    <h4>{{$post->author}}
        {{$post->date}}
    </h4>
    <p>
        {{$post->description}}
    </p>
    <form action="{{route('posts.destroy', $post->id)}}" method="POST">
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

