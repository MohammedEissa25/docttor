<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\DoctorController;

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

require __DIR__.'/auth.php';
require __DIR__.'/front.php';

Route::get('/', function () {
    return view('Front.index');
})->name('home');


Route::controller(DoctorController::class)->prefix('doctor')->group(function(){
     Route::get('/','index');
    Route::post('/search', 'search')->name('doctor.search');
    Route::get('/doctorDetails/{id}', [DoctorController::class, 'doctorDetails'])->name('doctor.doctorDetails');
    Route::get('/booking/{doctor}', [DoctorController::class, 'booking'])->name('doctor.booking');

});

Route::get('/wel', function () {
    return view('welcome');
})->name('wel');





