<?php

namespace App\Http\Livewire\Pages;

use App\Models\Data;
use App\Models\Cyber;
use Livewire\Component;
use Livewire\WithPagination;

class ViewInformation extends Component
{
    use WithPagination;

    public $caseId;
    public $state;
    public $notes;
    public $search;



    public function CompletedStatus($DataId)
    {
        $find_data_id = Data::FindOrFail($DataId);
        if ($this->state === true) {
            $find_data_id->update([
                'status' => "solved",
            ]);
        } else {
            $find_data_id->update([
                'status' => "not solved",
            ]);
        }
        $this->caseId = $DataId;
        $cyber =new Cyber();
        $cyber->data_id = $DataId;
        $cyber->user_id = auth()->user()->id;
        $cyber->note = $this->notes;
        $cyber->isSolved = $this->state ? true : false;
        $cyber->save();
        $this->reset(['notes']);
        $this->caseId= null;
        session()->flash('message', 'Data has been completed');
    }




    public function render()
    {
        $cases=Data::where("status", "approved")->OrWhere('fullname','LIKE','%'.$this->search.'%')->OrWhere('case','LIKE','%'.$this->search.'%')->latest()->paginate(12);
        return view('livewire.pages.view-information', compact('cases'))->extends('layouts.layout', ['title' => 'View Information']);
    }
}
