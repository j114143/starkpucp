@extends('base_html')
@section('content')
Hola {{$nombre_user}}
<hr>
<p>hola</p>
<div>Titulo: {{$articulo->title}}</div>

<div>{{$articulo->body}}</div>


@endsection
