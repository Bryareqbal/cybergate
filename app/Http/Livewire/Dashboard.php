<?php

namespace App\Http\Livewire;

use App\Models\Data;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $user_count=User::latest()->count();
        $data_count=Data::where('status', 'Approved')->latest()->count();
        $find_data_asayish=Data::where('status', null)->where('approvedByAdmin', true)->count();
        $adminCheckCurrentData=Data::where('status', null)->where('approvedByAdmin', null)->count();
        return view('livewire.dashboard', compact('user_count', 'data_count', 'find_data_asayish', 'adminCheckCurrentData'))->extends('layouts.layout', ['title' => 'Dashboard']);
    }
}
