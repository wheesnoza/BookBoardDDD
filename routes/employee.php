<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['guest', 'web'])->group(function () {
    Route::get('/login', 'Authentication\ShowLoginFormController')
        ->name('login');
    Route::post('/login', 'Authentication\LoginController')
        ->name('login');
});

Route::middleware(['web', 'authentication:employee'])->group(function () {
    Route::post('/logout', 'Authentication\LogoutController')
        ->name('logout');
    Route::get('/employees/create', 'Employee\Create\ShowEmployeeCreateFormController')
        ->name('create');
    Route::post('/employees', 'Employee\Create\CreateEmployeeController')
        ->name('create');
    Route::get('/', 'Home\ShowHomeController')
        ->name('home');
});
