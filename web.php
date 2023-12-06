<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/silabus_create', function () {
    return view('silabus_create');
});

Route::view('list', 'list');

Route::get('list', [\App\Http\Controllers\list_controller::class, 'show']);

Route::get('/silabus_watch', function () {
    return view('silabus_watch');
});

Route::get('/customerData', [\App\Http\Controllers\silabus_create_controller::class, 'DataTableIndex']);

Route::post('dataInsert', [\App\Http\Controllers\silabus_create_controller::class, 'DataInsert']);

Route::post('dataInsert2', [\App\Http\Controllers\silabus_create_controller::class, 'DataInsert2']);

Route::get('/data', [\App\Http\Controllers\silabus_watch_controller::class, 'allData']);

Route::name('user.')->group(function(){
    Route::view('/private', 'private')->middleware('auth')->name('private');

    Route::get('login', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('login');
    })->name('login');

    Route::get('registration', function(){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        return view('registration');
    })->name('registration');

    Route::post('/registration', [\App\Http\Controllers\register_controller::class, 'save']);

    Route::post('/login', [\App\Http\Controllers\login_controller::class, 'login']);

    Route::get('/logout', function(){
        Auth::logout();
        return redirect('/login');
    })->name('logout');

});
