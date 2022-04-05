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
Route::middleware(['web','auth'])->group(function(){
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



//catagory
Route::get('/catagory', [App\Http\Controllers\CatagoryController::class, 'index'])->name('catagory.index');
Route::get('/catagory/create', [App\Http\Controllers\CatagoryController::class, 'create'])->name('catagory.create');
Route::post('/catagory/store', [App\Http\Controllers\CatagoryController::class, 'store'])->name('catagory.store');
Route::get('/catagory/{slug}', [App\Http\Controllers\CatagoryController::class, 'show'])->name('catagory.show');
Route::get('/catagory/{slug}/edit' , [App\Http\Controllers\CatagoryController::class, 'edit'])->name('catagory.edit');
Route::put('/catagory/{slug}/update' , [App\Http\Controllers\CatagoryController::class, 'update'])->name('catagory.update');
Route::delete('/catagory/{slug}/delete' , [App\Http\Controllers\CatagoryController::class, 'delete'])->name('catagory.delete');




//subcatagory
Route::get('/subcatagory', [App\Http\Controllers\SubcatagoryController::class, 'index'])->name('subcatagory.index');
Route::get('/subcatagory/create', [App\Http\Controllers\SubcatagoryController::class, 'create'])->name('subcatagory.create');
Route::post('/subcatagory/store', [App\Http\Controllers\SubcatagoryController::class, 'store'])->name('subcatagory.store');
Route::get('/subcatagory/{slug}', [App\Http\Controllers\SubcatagoryController::class, 'show'])->name('subcatagory.show');
Route::get('/subcatagory/{slug}/edit' , [App\Http\Controllers\SubcatagoryController::class, 'edit'])->name('subcatagory.edit');
Route::put('/subcatagory/{slug}/update' , [App\Http\Controllers\SubcatagoryController::class, 'update'])->name('subcatagory.update');
Route::delete('/subcatagory/{slug}/delete' , [App\Http\Controllers\SubcatagoryController::class, 'delete'])->name('subcatagory.delete');
});
