<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FollowUpController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

///// Public Purpose /////
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::post('/admin', [AdminController::class, 'login'])->name('login');

// Forgot Password Routes
Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');

// Code Verification Routes
Route::get('/verify-code', [ForgotPasswordController::class, 'showCodeVerificationForm'])->name('password.verify.form');
Route::post('/verify-code', [ForgotPasswordController::class, 'verifyCode'])->name('password.verify.code');

// Password Reset Routes
Route::get('/reset-password', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'updatePassword'])->name('password.update');


///// Middleware authenticvation are access Routes /////
Route::group(['middleware' => 'is_admin'], function () {

///// Admin Page Purpose /////
Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/profile/{id}', [AdminController::class, 'getAdminProfile'])->name('admin.profile');
// Route::post('/admin/profile/{id}', [AdminController::class, 'updateAdminProfile'])->name('admin.profile.update');
// Route::get('/logout_admin', [AdminController::class, 'logout'])->name('admin.logout');

Route::post('/admin/profile/{id}', [AdminController::class, 'updateAdminProfile'])->name('admin.profile.update');
Route::get('/logout_admin', [AdminController::class, 'logout'])->name('admin.logout');

Route::get('/equirylist', [FollowUpController::class, 'enquiryList'])->name('enquiryList');
Route::post('/updatestatus', [FollowUpController::class, 'updateStatus'])->name('updateStatus');
Route::get('/followup/{enquiry}', [FollowUpController::class, 'showFollowUps'])->name('showFollowUps');
Route::get('/enquiries', [FollowUpController::class, 'enquiryList'])->name('enquiry.list');
Route::get('/searchenquiries', [FollowUpController::class, 'fetchEnquiries'])->name('fetchEnquiries');

Route::get('/createenquiry', [FollowUpController::class, 'createEnquiry'])->name('createEnquiry');
Route::post('/enquirtregister', [FollowUpController::class, 'enquiryRegister'])->name('enquiryRegister');


});
