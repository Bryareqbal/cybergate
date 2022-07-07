<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\pages\ViewInformation;
use App\Http\Livewire\pages\CreateInformation;
use App\Http\Livewire\Pages\Reports;
use App\Http\Livewire\Users\Index;
Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::middleware('addingInformation')->get('/adding_information', CreateInformation::class)->name('adding_information');

    Route::middleware('asaysh');
    Route::middleware('isSuperAdmin')->group(function () {
        Route::get('/reports', Reports::class)->name('reports');
        Route::get('/users', Index::class)->name('users');
    });

    Route::middleware('viewingInformation')->group(function () {
        Route::get('/view_information', ViewInformation::class)->name('view_information');
    });

    Route::get('/dashboard', Dashboard::class)->name('root');
    Route::get('/dashboard1', function () {
        return view('dashboard');
    })->name('dashboard');
});
