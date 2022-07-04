<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\pages\ViewInformation;
use App\Http\Livewire\pages\CreateInformation;
use App\Http\Livewire\Users\Index;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    // pages in cyber gate
    Route::get('/dashboard', Dashboard::class)->name('root');
    Route::get('/view_information', ViewInformation::class)->name('view_information');
    Route::get('/adding_information', CreateInformation::class)->name('adding_information');
    Route::get('/users', Index::class)->name('users');

    // end pages


    Route::get('/dashboard1', function () {
        return view('dashboard');
    })->name('dashboard');
});
