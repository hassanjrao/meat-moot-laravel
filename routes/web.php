<?php

use App\Http\Controllers\AdminContactUsRequestController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminExtraController;
use App\Http\Controllers\AdminFaqController;
use App\Http\Controllers\AdminFullCourseMealController;
use App\Http\Controllers\AdminMenuHighlightController;
use App\Http\Controllers\AdminOurMenuController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminSettingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/menu', [HomeController::class, 'menu'])->name('menu');

Route::get('/our-menu', [HomeController::class, 'ourMenu'])->name('our-menu');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/submit-request', [HomeController::class, 'submitRequest'])->name('contact.submit');

Route::get('/franchise', [HomeController::class, 'franchise'])->name('franchise');
Route::post('/submit-franchise-inquiry', [HomeController::class, 'submitFranchiseInquiry'])->name('franchise.submit');

Route::get('/investors', [HomeController::class, 'investors'])->name('investors');
Route::get('/events-and-news', [HomeController::class, 'eventNews'])->name('event-news');



Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

    Route::get('',[AdminDashboardController::class, 'index'])->name('dashboard.index');
    Route::resource("profile", AdminProfileController::class)->only(["index", "update"]);


    Route::resource('menu-highlights', AdminMenuHighlightController::class);
    Route::resource('our-menu', AdminOurMenuController::class);

    Route::resource('full-course-meal',AdminFullCourseMealController::class);

    Route::resource('extras',AdminExtraController::class);
    Route::resource('contact-us-requests',AdminContactUsRequestController::class)->only(['index','destroy']);

    Route::resource('settings',AdminSettingController::class)->only(['index','update']);

    Route::resource('faqs', AdminFaqController::class);

});
