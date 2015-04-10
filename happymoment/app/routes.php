<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('before' => 'guest', function()
{
	return View::make('pages.login');
}));

Route::get('/home', array('before' => 'auth', function()
{
return View::make('pages.home');
}));

Route::controller('admin','AdminController');

Route::get('/category', array('before' => 'auth', function()
{
$categorys = Category::all();
		return View::make('pages.category')->with('category',$categorys);
}));

Route::get('/editcetagory/{pns}', array('before' => 'auth', function($id)
{
	$edit = Category::find($id);
	return View::make('pages.editcetagory')->with('category',$edit);
}));

Route::get('/gallery', array('before' => 'auth', function()
{
$product = Product::all();
		return View::make('pages.products')->with('product',$product);
}));

Route::get('/editgallery/{pns}', array('before' => 'auth', function($id)
{
	$edit = Product::find($id);
	return View::make('pages.editproduct')->with('product',$edit);
}));

Route::get('/slide', array('before' => 'auth', function()
{
$categorys = Slide::all();
		return View::make('pages.slide')->with('slide',$categorys);
}));


Route::get('/editslide/{pns}', array('before' => 'auth', function($id)
{
	$edit = Slide::find($id);
	return View::make('pages.editslide')->with('slide',$edit);
}));


// Route::get('/red', function()
// {
// 	return "sucess";
// });