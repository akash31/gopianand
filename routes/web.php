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

Route::any('/', 'HomeController@indexAction')->name('index');
Route::any('/about-us', 'HomeController@aboutUsAction')->name('about');
Route::any('/contact', 'HomeController@contactAction')->name('contact');
Route::post('change_language','HomeController@change_language');

Route::any('/awards', 'HomeController@awardsAction')->name('awards');
Route::any('/bead-work', 'HomeController@beadWorkAction')->name('beadwork');
Route::any('/gallery', 'HomeController@galleryAction')->name('gallery');
Route::any('/bead-work/{sku}', 'HomeController@beadWorkDetailsAction')->name('beadworkdetails');