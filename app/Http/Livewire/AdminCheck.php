<?php

namespace App\Http\Livewire;

use App\Models\data;
use Livewire\Component;

class AdminCheck extends Component
{
    public $descriptionModal = null;
    public $search;
    public $from;
    public $to;
    public function approveCase(int $caseId)
    {
        $case = data::find($caseId);
        $case->approvedByAdmin = true;
        $case->status = "Approved";
        $case->save();
    }

    public function sendToAsaysh(int $caseId)
    {
        $case = data::find($caseId);
        $case->approvedByAdmin = true;
        $case->save();
    }

    public function render()
    {
        $newCases = data::where("status", null)->where('approvedByAdmin', null)->oldest()->simplePaginate(12, ['*'], 'unchecked');
        $this->from && $this->to ?
        $allCases = data::search($this->search)->where('approvedByAdmin', '!=', null)->whereBetween('created_at', [$this->from, $this->to])->simplePaginate(12, ['*'], 'allCases') :
        $allCases = data::search($this->search)->where('approvedByAdmin', '!=', null)->simplePaginate(12, ['*'], 'allCases');
        return view('livewire.admin-check', ['newCases' => $newCases, 'allCases' => $allCases])->extends('layouts.layout', ['title' => 'Admin Check']);
    }
}
