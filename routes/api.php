<?php

use App\Http\Controllers\EnquiryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/lead', [EnquiryController::class, 'enquiryGenerate']);
