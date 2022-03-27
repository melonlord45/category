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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test', [App\Http\Controllers\TestController::class, 'index'])->name('test.index');


Route::get('/test/create', [App\Http\Controllers\TestController::class, 'create'])->name('test.create');

Route::post('/test', [App\Http\Controllers\TestController::class, 'store'])->name('test');

Route::get('/test/{id}', [App\Http\Controllers\TestController::class, 'show'])->name('test.show');

Route::get('/test/{id}/edit' , [App\Http\Controllers\TestController::class, 'edit'])->name('test.edit');

Route::put('/test/{id}/update' , [App\Http\Controllers\TestController::class, 'update'])->name('test.update');

Route::delete('/test/{id}/delete' , [App\Http\Controllers\TestController::class, 'delete'])->name('test.delete');


//Demo
Route::get('/demo', [App\Http\Controllers\DemoController::class, 'demoindex'])->name('demo.demoindex');


Route::get('/demo/democreate', [App\Http\Controllers\DemoController::class, 'democreate'])->name('demo.democreate');


Route::post('/demo', [App\Http\Controllers\DemoController::class, 'store'])->name('demo');

Route::get('/demo/{id}', [App\Http\Controllers\DemoController::class, 'show'])->name('demo.demoshow');

Route::get('/demo/{id}/edit' , [App\Http\Controllers\DemoController::class, 'edit'])->name('demo.demoedit');

Route::put('/demo/{id}/update' , [App\Http\Controllers\DemoController::class, 'update'])->name('demo.demoupdate');

Route::delete('/demo/{id}/delete' , [App\Http\Controllers\DemoController::class, 'delete'])->name('demo.demodelete');
