<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';




Route::get('/', function(){
    return view('app', [
        "title" => "Home",
    ]);  
});
Route::get('/slides', function () {
    return view('slides', [
        "title" => "Slides",
    ]);
});
Route::get('/addslide', function () {
    return view('addslide', [
        "title" => "addslide",
    ]);
});
Route::get('/add', function () {
    return view('add', [
        "title" => "add",
    ]);
});

Route::get('/substract', function () {
    return view('substract', [
        "title" => "substract",
    ]);
});

Route::get('/multiply', function () {
    return view('multiply', [
        "title" => "multiply",
    ]);
});

Route::get('/divide', function () {
    return view('divide', [
        "title" => "divide",
    ]);
});
// Route::get('/about', function(){
//     return view('about', [
//         "title" => "About",
//     ]); 
// });

// Route::get('/services', function(){
//     return view('services', [
//         "title" => "Services",
//     ]); 
// });

// Route::get('/pricing', function(){
//     return view('pricing', [
//         "title" => "Pricing",
//     ]); 
// });