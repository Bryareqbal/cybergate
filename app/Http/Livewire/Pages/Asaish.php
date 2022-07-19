<?php

namespace App\Http\Livewire\Pages;

use App\Models\Asaysh;
use App\Models\Data;
use Livewire\Component;
use Livewire\WithPagination;

class Asaish extends Component
{
    use WithPagination;
    public $caseId;

    public $note;

    public function DisApproved()
    {
        $find_data_id = Data::FindOrFail($this->caseId);
        $DataAsayish=new Asaysh();
        $DataAsayish->data_id=$find_data_id->id;
        $DataAsayish->user_id=auth()->user()->id;
        $DataAsayish->note=$this->note;
        $DataAsayish->isApproved=false;
        $find_data_id->status = 'Disapproved';
        $find_data_id->save();
        $DataAsayish->save();
        session()->flash('message', 'The case has been Disapproved');
        $this->caseId = null;
        $this->note = null;
    }
    public function Approved()
    {
        $find_data_id = Data::FindOrFail($this->caseId);
        $DataAsayish=new Asaysh();
        $DataAsayish->data_id=$find_data_id->id;
        $DataAsayish->user_id=auth()->user()->id;
        $DataAsayish->note=$this->note;
        $DataAsayish->isApproved=true;
        $find_data_id->status = 'Approved';
        $find_data_id->save();
        $DataAsayish->save();
        session()->flash('message', 'The case has been Disapproved');
        $this->caseId = null;
        $this->note = null;
    }
    public function render()
    {
        $Data=Data::where('status', null)->latest()->paginate(10);
        return view('livewire.pages.asaish', compact('Data'))->extends('layouts.layout', ['title' => 'Asaish']);
    }
}
