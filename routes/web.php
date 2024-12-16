<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelInformationController;
use App\Http\Controllers\HotelOrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //【宿泊施設】

    //宿泊施設基本情報
    Route::get("/dashboard/information",[HotelInformationController::class,"render"])->name("hotel.information");

    //宿泊施設受注学校
    Route::get("/dashboard/order",[HotelOrderController::class,"render"])->name("hotel.order");
    Route::get('/dashboard/order-detail', [\App\Http\Controllers\HotelOrderController::class,"openDetail"])->name('openDetail');


});

require __DIR__.'/auth.php';
