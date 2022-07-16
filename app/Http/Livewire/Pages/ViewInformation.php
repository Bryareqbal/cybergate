<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;
use App\Models\Data;
use Livewire\WithPagination;

class ViewInformation extends Component
{
    use WithPagination;

    public $caseId;
    public $state;
    public $notes;



    public function CompletedStatus($DataId){
        $this->caseId = $DataId;
        dd($this->notes,$this->state);
    }




    public function render()
    {
        $cases=Data::latest()->paginate(10);
        return view('livewire.pages.view-information',compact('cases'))->extends('layouts.layout', ['title' => 'View Information']);
    }
}
