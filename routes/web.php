<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prifix' => 'admin'], function(){
    Route::get('/home', [DashboardController::class, 'index'])->name('admin.home');
    Route::resource('role', RoleController::class,['name' =>'role.create'] );
});

