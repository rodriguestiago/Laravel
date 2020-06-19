<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*------ original -------*/
/* Route::get('/', function () {
    return view('welcome'); */
/*------ original -------*/


   


Route::get('/', function() 
{ 
return '<h1>First route</h1'; 
}); 
  

Route::get('/hello', function(){
    return 'Hello';
});





Route::get("/restaurants/index", function(){
    return view('restaurants/index');
});


Route::get("/restaurants/show/1", function(){
    return view('restaurants/show');
});



Route::get("/restaurants/create", function(){
    return view('restaurants/create');
});



/* -----return id ------*/
/* Route::get('/restaurants/show/{id}', function($id){
    return $id;
}); */