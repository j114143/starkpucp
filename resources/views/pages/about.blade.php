@extends('app')
@section('content')


	<h1>About Me: keke con mucha maña tira su azaña   </h1> 
		
	@if (count($people))
	  	<h3>People I Like:</h3>
  		<ul>
  			@foreach ($people as $person)
				<li>{{$person}}</li>
			@endforeach
  		</ul>
  		
	@endif

	
  	
	<p>
		Hola soy jose , y estoy aprendiendo bebechancho basico, trabajo en .. 
	</p>

@stop
