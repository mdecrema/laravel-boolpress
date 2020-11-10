@extends('layouts/app')

@section('content')

    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <input type="text" name="title" id="title" placeholder="titolo">
        <textarea name="description" id="description" placeholder=""></textarea>
        <input type="date" name="date">
        <input type="file" accept="image/*"> 
        
        <input type="submit" value="save">
    </form>

@endsection