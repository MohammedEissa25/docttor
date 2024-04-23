<?php

use App\Http\Middleware\CheckUserType;
use Illuminate\Support\Facades\Route;





Route::get('/patiant', function () {
    return view('Front.patiant');
})->middleware(['auth:web'])->name('patiant');

Route::get('/doctor', function () {
    return view('Front.doctor');
})->middleware(['auth:doctor',CheckUserType::class])->name('doctor.page');

Route::get('/pharmacist', function () {
    return view('Front.pharmacist');
})->middleware(['auth:pharmacist',CheckUserType::class])->name('pharmacist.page');
