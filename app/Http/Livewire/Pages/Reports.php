<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;


class Reports extends Component
{

    public function render()
    {


        return view('livewire.pages.reports')->extends("layouts.layout", ["title" => "Reports"]);
    }
}
