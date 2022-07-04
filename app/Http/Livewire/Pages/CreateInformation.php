<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class CreateInformation extends Component
{
    public function render()
    {
        return view('livewire.pages.create-information')->extends('layouts.layout', ['title' => 'Adding Information']);
    }
}
