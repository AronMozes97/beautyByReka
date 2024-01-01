<?php

use App\Http\Controllers\PricingController;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOTools;

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

Route::get('/', function () {
    SEOMeta::setTitle("Főoldal");
    return view('index');
})->name('index');

Route::get('/smink', [PricingController::class, 'getAllMakeup'])->name('makeup');

Route::get('/árjegyzék', [PricingController::class, 'getAllPrice'])->name('price_list');

Route::get('/kapcsolatok', function (){
    return view('contacts');
})->name('contacts');

Route::get('/kozmetika', function (){
    return view('cosmetic');
})->name('cosmetic');

Route::get('/idopontfoglalas', function (){
    return view('reservation');
})->name('reservation');

Route::get('/sminktetovalas', [PricingController::class, 'getAllMakeupTattoo'])->name('makeupTattoo');
