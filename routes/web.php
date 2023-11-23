<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\FrontendController;

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


Route::get('/',[FrontendController::class,'index'])->name('frontend.index');

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin','middleware'=>'admin'],function()
{
    Route::get('/admin',[AdminController::class,'create'])->name('admin');
    Route::post('/admin-store',[AdminController::class,'store'])->name('admin.store');
    Route::get('/admin-index',[AdminController::class,'index'])->name('admin.index');
    Route::get('/admin-edit/{id}',[AdminController::class,'edit'])->name('admin.edit');
    Route::post('/admin-update/{id}',[AdminController::class,'update'])->name('admin.update');
    Route::get('/admin-delete/{id}',[AdminController::class,'destroy'])->name('admin.destroy');

});

Route::group(['middleware'=>'superadmin'],function()
{
    Route::get('/superadmin',[SuperAdminController::class,'index'])->name('superadmin.index');
    Route::get('/change-status/{id}',[SuperAdminController::class,'changeStatus'])->name('change.status');



});


 // return view('superadmin.index');
// Route::get('superadmin',function(){
//     return view('superadmin');
// })->name('superadmin')->middleware('superadmin');


// Route::get('admin',function(){
//     return view('admin.create');
// })->name('admin')->middleware('admin');







