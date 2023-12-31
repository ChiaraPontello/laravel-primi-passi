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
        'name' => 'Chiara',
        'surname' => 'Pontello',
        'age' => '30',
        'role' => 'student',
    ];
    return view('home', $data);
})->name('home');

Route::get('/dog', function () {
    $data = [
        'name' => 'Strauss',
        'age' => '5',
        'breed' => 'Bovaro del Bernese',
    ];
    return view('dog.dog', $data);
})->name('dog');