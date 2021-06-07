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
        'class_name' => 'Classe 31',
        'students' => [
            'Catalin',
            'Matteo',
            'Nicola',
            'Tommaso',
            'Ignazio',
            'Lorenzo'
        ]
    ];
    return view('homepage', $data);
})->name('Home');

Route::get('/class_31_students', function () {
    $data = [
        'class_name' => 'Classe 31',
        'students' => [
            'Catalin',
            'Matteo',
            'Nicola',
            'Tommaso',
            'Ignazio',
            'Lorenzo'
        ]
    ];
    return view('students', $data);
})->name('Students');
