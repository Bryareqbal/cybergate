<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class ViewInformation extends Component
{
    public function render()
    {
        return view('livewire.pages.view-information')->extends('layouts.layout', ['title' => 'View Information']);
    }
}
