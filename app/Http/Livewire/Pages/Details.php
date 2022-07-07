<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\data ;
class Details extends Component
{

    public $data;

    public function mount(data $id){
        $this->case = $id;
    }
    public function render()
    {

        return view('livewire.pages.details')->extends('layouts.layout',["title" => "details"]);
    }
}
