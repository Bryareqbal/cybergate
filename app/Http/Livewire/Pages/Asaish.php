<?php

namespace App\Http\Livewire\Pages;

use App\Models\Data;
use App\Models\Cyber;
use Livewire\Component;
use Livewire\WithPagination;

class Asaish extends Component
{
    use WithPagination;
    public $caseId;



    public  function DisApproved()
    {
        $find_data_id = Data::FindOrFail($this->caseId);
        $find_data_id->status = 'Disapproved';
        $find_data_id->save();
        session()->flash('message', 'The case has been Disapproved');
        $this->caseId = null;

    }
    public  function Approved()
    {
        $find_data_id = Data::FindOrFail($this->caseId);
        $find_data_id->status = 'Approved';
        $find_data_id->save();
        session()->flash('message', 'The case has been Approved');
        $this->caseId = null;

    }
    public function render()
    {
        $Data=Data::where('status',null)->latest()->paginate(10);
        return view('livewire.pages.asaish',compact('Data'))->extends('layouts.layout', ['title' => 'Asaish']);
    }
}
