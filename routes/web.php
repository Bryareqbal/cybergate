<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Pages\Asaish;
use App\Http\Livewire\pages\ViewInformation;
use App\Http\Livewire\pages\CreateInformation;
use App\Http\Livewire\Pages\Reports;
use App\Http\Livewire\Users\Index;
use App\Http\Livewire\Pages\Details;
use App\Http\Livewire\Pages\EditInformation;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::middleware(['addingInformation'])->group(function () {
        Route::get('/adding_information', CreateInformation::class)->name('adding_information');
    });
    Route::get('/Asaish', Asaish::class)->name('Asaish');


    Route::middleware(['viewInformation'])->group(function () {
        Route::get('/view_information', ViewInformation::class)->name('view_information');
    });

    Route::middleware(['viewInformationDetails'])->group(function () {
        Route::get('/view_information/{id}', Details::class)->name('details');
    });

    Route::middleware("isSuperadmin")->group(function () {
        Route::get("/edit_information/{id}", EditInformation::class)->name('edit-information');
        Route::get('/reports', Reports::class)->name('reports');
        Route::get('/users', Index::class)->name('users');
    });

    Route::get('/dashboard', Dashboard::class)->name('root');
    Route::get('/dashboard1', function () {
        return view('dashboard');
    })->name('dashboard');
});
