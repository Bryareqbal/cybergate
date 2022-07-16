<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Data;

class Dashboard extends Component
{
    public function render()
    {
        $user_count=User::latest()->count();
        $data_count=Data::latest()->count();
        return view('livewire.dashboard',compact('user_count','data_count'))->extends('layouts.layout', ['title' => 'Dashboard']);
    }
}
