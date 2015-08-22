@extends('layouts.base')
@section('content')
    <div class="container">
    <h1>Todos los post</h1>
    <ol>
        @foreach ($objs as $obj)
            <li>{{ $obj->title }} <a href="/posts/{{$obj->id}}">Leer</a></li>
        @endforeach
    </ol>
    </div>
@endsection