<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()
	{
		
		/*
		$name = 'Julito Maraña';
	//	return view ( 'pages/about' )-> with('name', $name)  ;

		$data = [] ; 
		$data['first'] = 'Gretel';
		$data['last'] = 'Chimostrufia';
		return view ('pages.about' , $data) ;

		//return 'hola mundo';
		*/
		$people = ['Gerardito','Galletita','Puerkito'];
		//return view ('pages.about' , compact('people')) ;
		return view ('pages.about' , compact('people')) ;
	}

	public function contact(){

		return view ('pages.contact');

	}
}
