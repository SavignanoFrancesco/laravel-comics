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
    $data = [
        'comics' => config('comics'),
    ];
    return view('home',$data);
})->name('home');

Route::get('/comic/{id}', function($id) {

    $comics = config('comics');

    if(array_key_exists($id, $comics)) {
        $comic = $comics[$id];
        $data = [
            'comic' => $comic
        ];
        return view('details', $data);
    }
    abort(404);
    
})->name('details');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
