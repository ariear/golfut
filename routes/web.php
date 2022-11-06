<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Dashboard\Candidate\AddCandidate;
use App\Http\Livewire\Dashboard\Candidate\DashboardCandidate;
use App\Http\Livewire\Dashboard\Candidate\EditCandidate;
use App\Http\Livewire\Dashboard\Dashboard;
use App\Http\Livewire\Dashboard\Picker\DashboardPicker;
use App\Http\Livewire\Welcome;
use Illuminate\Support\Facades\Route;


Route::get('/', Welcome::class)->name('home')->middleware('auth');

Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::middleware('auth')->group(function () {
    Route::post('logout', LogoutController::class)
        ->name('logout');
});

Route::middleware('admin')->group(function (){
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/dashboard/candidates', DashboardCandidate::class)->name('dashboard_candidate');
    Route::get('/dashboard/candidates/add', AddCandidate::class)->name('add_candidate');
    Route::get('/dashboard/candidates/{id}/edit', EditCandidate::class)->name('edit_candidate');

    Route::get('/dashboard/pickers', DashboardPicker::class)->name('dashboard_picker');
});
