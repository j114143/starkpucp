<?php

Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');

Route::get('login', function (){
			
	//$people = ['Gerardito','Galletita','Puerkito'];
	//return view ('pages.about',compact('people'));
	return view ('pages.login');

});