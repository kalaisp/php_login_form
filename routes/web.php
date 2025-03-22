<?php

use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpController;

Route::get('/inode.iis', function () {
    return view('welcome');
})->name('register');
Route::get('/inode.iis/login', function () {
    return view('login');
})->name('login');

Route::post('/inode.iis/register', [UserController::class, 'register'])->name('register');

Route::get('/inode.iis/register', [UserController::class, 'showRegistrationForm'])->name('register');

Route::post('/inode.iis/staff', [UserController::class, 'login'])->name('login.submit');

Route::get('/inode.iis/staff', [UserController::class, 'showLoginForm'])->name('login');

Route::get('/inode.iis/staff', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/inode.iis/insertstaff', [StaffController::class, 'showInsertForm'])->name('insertstaff');
Route::post('/inode.iis/insertstaff', [StaffController::class, 'insertstaff'])->name('insert.submit');
Route::get('/inode.iis/index', [StaffController::class, 'index'])->name('staff.index');
Route::delete('/inode.iis/index/{id}', [StaffController::class, 'deletestaff'])->name('delete.submit');
Route::put('/inode.iis/update/{id}', [StaffController::class, 'updateStaff'])->name('staff.update');

Route::get('/inode.iis/staff/edit/{id}', [StaffController::class, 'edit'])->name('edit.submit');

//EmpRoute

Route::get('/inode.iis/indexemp', [EmpController::class, 'indexemp'])->name('indexemp');
Route::get('/inode.iis/insertemp', [EmpController::class, 'showInsertForm'])->name('insertemp');
Route::post('/inode.iis/insertemp', [EmpController::class, 'insertemp'])->name('insertemp.submit');
Route::get('/inode.iis/logout', [EmpController::class, 'logout'])->name('logout');

Route::get('/inode.iis/logout', [EmpController::class, 'logout'])->name('logout');

Route::put('/inode.iis/emp/{id}', [EmpController::class, 'updateEmp'])->name('editemp.submit');

Route::get('/inode.iis/emp/lisetemp/{id}', [EmpController::class, 'listemp'])->name('listemp.submit');
Route::get('/inode.iis/emp/editemp/{id}', [EmpController::class, 'editem'])->name('editempl.submit');
Route::delete('/inode.iis/indexemp/{id}', [EmpController::class, 'deleteemp'])->name('deleteemp.submit');
