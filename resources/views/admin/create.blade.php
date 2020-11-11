@extends('layouts/app')

@section('content')

    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <input type="text" name="author" placeholder="nome utente">
        <input type="text" name="title" id="title" placeholder="titolo">
        <textarea name="description" id="description" placeholder=""></textarea>
        <input type="date" name="date">
        <input type="file" name="image" accept="image/*"> 

        @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
        <input type="submit" value="save">
    </form>

@endsection