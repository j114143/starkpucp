@extends('layouts.base')
@section('content')
<h1>{{$obj->title}}</h1>
{{$obj->body}}
<p>Comentarios (0)</p>
@endsection