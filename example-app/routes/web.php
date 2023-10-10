<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/
/*Route::get("/", function () {
    return view('front');
});
*/
Route::get('/',[FrontPageController::class,'index'])->name('front.home');
Route::get('/about',[FrontPageController::class,'about'])->name('front.about');
Route::get('/service',[FrontPageController::class,'service'])->name('front.service');
Route::get('/master',function(){
    return view('front_master');
});

Route::get('/packages',[FrontPageController::class,'packages'])->name('front.packages');
Route::get('/destination',[FrontPageController::class,'destination'])->name('front.destination');

Route::get('/booking',[FrontPageController::class,'booking'])->name('front.booking');
Route::get('/guides',[FrontPageController::class,'guides'])->name('front.guides');

Route::get('/testimonial',[FrontPageController::class,'testimonial'])->name('front.testimonail');
Route::get('/contact',[FrontPageController::class,'contact'])->name('front.contact');




