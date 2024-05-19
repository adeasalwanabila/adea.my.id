<?php

use App\Http\Controllers\KontakController;
use App\Http\Controllers\MasukController;
use Illuminate\Support\Facades\Route;


Route::get('/panel', [MasukController::class, 'create'])->name('panel');
Route::post('/panel', [MasukController::class, 'store']);
Route::get('/book', [MasukController::class, 'show'])->middleware('auth');

Route::get('/book', [KontakController::class,'index']);
Route::get('/book/delete/{id}', [KontakController::class,'destroy']);
Route::match(['get','post'],'/update/{id}',[KontakController::class,'update']);

Route::get('/', function () {
    return view('index');
});
Route::match(['get','post'],'/',[KontakController::class,'store']);

// Route::get('/update', function () {
//     return view('update');
// });

// Route::get('/book', function () {
//     return view('book');
// });

// Route::get('/panel', function () {
//     return view('panel');
// })->name('panel');
