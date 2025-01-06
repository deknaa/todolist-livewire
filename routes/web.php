<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\HomePage;
use App\Livewire\UserDashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class)->name('home');

// Authentication
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');

// User Dashboard
Route::get('dashboard', UserDashboard::class)->name('dashboard');
