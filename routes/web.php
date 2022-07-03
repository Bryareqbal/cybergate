<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;

Route::get('/test', Dashboard::Class)->name('root');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');

    })->name('dashboard');
});
