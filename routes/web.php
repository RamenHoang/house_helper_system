<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\baomauController;
use App\Http\Controllers\khachhangController;
use App\Http\Controllers\loginController;




// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view ('login.dangnhap');
})->name('dangnhap1');


Route::group(['prefix' => 'login', 'as' => 'login.'],function () {
    Route::get('/dangky1',[loginController::class,'dangky'])->name('dangky');
    Route::post('/dangkypost1', [loginController::class, 'dangkypost'])->name('dangkypost');
    Route::get('/dangnhap1',[loginController::class,'dangnhap'])->name('dangnhap');
    Route::post('/dangnhappost1', [loginController::class, 'dangnhappost'])->name('dangnhappost');
});


Route::group(['prefix' => 'baomau', 'as' => 'baomau.'],function () {
    Route::get('/danhsachs',[baomauController::class,'danhsach'])->name('danhsach');
    Route::get('/bmfulltime1',[baomauController::class,'bmfulltime'])->name('bmfulltime');
    Route::get('/thembmft1',[baomauController::class,'thembmft'])->name('thembmft');
    Route::post('/thembmft1-post',[baomauController::class,'thembmftpost'])->name('thembmftpost');
    Route::get('/yeucau1',[baomauController::class,'yeucau'])->name('yeucau1');
    Route::get('/congviec',[baomauController::class,'cv'])->name('cv');


});

// Route::group(['prefix' => 'khachhang', 'as' => 'khachhang.'],function () {
//     Route::get('/danhsachs',[khachhangController::class,'danhsach'])->name('danhsach');
//     Route::get('/jobs/{macv}', [JobController::class, 'show'])->name('jobs.show');
// });

Route::group(['prefix' => 'khachhang', 'as' => 'khachhang.'],function () {
    Route::get('/danhsachs',[khachhangController::class,'danhsach'])->name('danhsach');
    Route::get('/trangkhachhang1',[khachhangController::class,'trangkhachhang'])->name('trangkhachhang1');
    Route::get('/thongtincanhan1',[khachhangController::class,'thongtincanhan'])->name('thongtincanhan');
    Route::get('/jobs', [khachhangController::class, 'show'])->name('jobs.show');
    Route::post('/themyeucauposts', [khachhangController::class, 'themyeucaupost'])->name('themyeucaupost');
    Route::post('/thembm',[khachhangController::class,'them'])->name('them');
    Route::get('/dangxuat1',[khachhangController::class,'dangxuat'])->name('dangxuat');
    Route::get('/dangtuyen1',[khachhangController::class,'dangtuyen'])->name('dangtuyen');
    // Route::post('/dangtuyenpost1',[khachhangController::class,'dangtuyenpost'])->name('dangtuyenpost');
    Route::post('/dangtuyen/them', [khachhangController::class,'themdangtuyen'])->name('themdangtuyen');
    // Route::get('/ungtuyen1',[khachhangController::class,'ungtuyen'])->name('ungtuyen');
    Route::post('/ungtuyen1', [khachhangController::class, 'ungtuyen'])->name('ungtuyen');
    Route::get('/trangungtuyen1', [khachhangController::class, 'trangungtuyen'])->name('trangungtuyen');
    Route::get('/get-gio/{id}', [khachhangController::class, 'getGioById'])->name('get.gio');
    Route::get('/khachhang/get-gio/{id}', [khachhangController::class, 'getGioById'])->name('get.gio');

});

