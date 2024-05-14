<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
Route::get('/', function () {
    return view('/welcome');
});



Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('showLogin');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/add-new-user', [AdminController::class, 'addNewUser'])->name('addNewUser');
Route::get('/admin/active-users', [AdminController::class, 'activeUser'])->name('activeUser');
Route::get('/admin/approve-new-user', [AdminController::class, 'approveNewUser'])->name('approveNewUser');

Route::get('/admin/add-new-bussiness', [AdminController::class, 'addNewBussiness'])->name('addNewBussiness');
Route::get('/admin/all-bussiness-unit', [AdminController::class, 'allBussinessUnit'])->name('allBussinessUnit');
Route::get('/admin/approve-bussiness-unit', [AdminController::class, 'approveBussinessUnit'])->name('approveBussinessUnit');

Route::get('/admin/add-new-plant-location', [AdminController::class, 'addNewPlantLocation'])->name('addNewPlantLocation');
Route::get('/admin/all-plant-location', [AdminController::class, 'allPlantLocation'])->name('allPlantLocation');
Route::get('/admin/approve-plant-location', [AdminController::class, 'approvePlantLocation'])->name('approvePlantLocation');
