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

Route::get('/', function () {
    return view('pages.welcome');
})->name('home');




Route::view('about-us', 'pages/about',
['page_description'=>"this plateform developed by mohamed ettaleb"])->name('about');


Route::get('/category/{id}', function ()  {
    return env('APP_CREATOR');
        // return view('pages/category',['memberSelected' =>$family[$id] ?? 'This id is not found' ] )->name('category');

});

Route::view('contact-me','pages/contact',
            ['email'=>"mohamedettaleb1999@gmail,com",'phone'=>"0606427011"])->name('contact');


Route::view('login','pages/login')->name('login');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
