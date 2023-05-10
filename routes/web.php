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

Route::get('/comics', function () {

    $data = [
        'navList' => config('navlist'),
        'footerList' => config('footerlist'),
        'socialList' => config('sociallist'),
        'marketList' => config('marketlist'),
        'seriesList' => config('comics')
    ];
    return view('comics',$data);
})->name('comics');

Route::get('/characters', function () {

    $data = [
        'navList' => config('navlist'),
        'footerList' => config('footerlist'),
        'socialList' => config('sociallist'),
        'seriesList' => config('comics')
    ];

    return view('characters',$data);
})->name('characters');

Route::get('/', function () {

    $data = [
        'navList' => config('navlist'),
        'footerList' => config('footerlist'),
        'socialList' => config('sociallist'),
        'seriesList' => config('comics')
    ];

    return view('home',$data);
})->name('home');
