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


    public function CompletedStatus($DataId)
    {
        $find_data_id = Data::FindOrFail($DataId);
        if ($this->state === true) {
            $find_data_id->update([
                'status' => "Solved",
            ]);
        } else {
            $find_data_id->update([
                'status' => "Not Solved",
            ]);
        }
        $this->caseId = $DataId;
        $cyber =new Cyber();
        $cyber->data_id = $DataId;
        $cyber->user_id = auth()->user()->id;
        $cyber->note = $this->notes;
        $cyber->save();
        $this->reset(['notes']);
        $this->caseId= null;
        session()->flash('message', 'Data has been completed');
    }




    public function render()
    {
        $cases=Data::where("status", "approved")->latest()->paginate(10);
        return view('livewire.pages.view-information', compact('cases'))->extends('layouts.layout', ['title' => 'View Information']);
    }
}
