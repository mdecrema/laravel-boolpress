@extends('layouts/app')

@section('content')

    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <input type="text" name="title" id="title" placeholder="titolo">
        <input type="textArea" name="description" id="description" placeholder="">
        <input type="date" name="date">
        <input type="file" accept="image/*"> 
    </form>

@endsection