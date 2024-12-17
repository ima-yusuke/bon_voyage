<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelInformationController;
use App\Http\Controllers\HotelOrderController;
use App\Http\Controllers\SchoolCreateController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoolCreateTravelController;

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
    Route::get('/dashboard/order/detail{id}', [\App\Http\Controllers\HotelOrderController::class,"show"])->name('hotel.order.detail');

    //【旅行会社】

    //学校登録
    Route::get("/dashboard/school/create",[SchoolCreateController::class,"render"])->name("school.create");

    //学校一覧
    Route::get("/dashboard/school",[SchoolController::class,"render"])->name("school");

    //学校詳細
    Route::get('/dashboard/school/detail{id}', [SchoolController::class,"showDetail"])->name('tourist.school.detail');

    Route::get('/dashboard/school/create/travel', [SchoolCreateTravelController::class,"render"])->name('tourist.school.create.travel');


});

require __DIR__.'/auth.php';
