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
    public $adminCheckModal;
    public $asayshCheckModal;
    public function approveCase()
    {
        $case = data::find($this->adminCheckModal);
        $case->approvedByAdmin = true;
        $case->status = "Approved";
        $case->save();
        $this->adminCheckModal = false;

    }

    public function sendToAsaysh()
    {
        $case = data::find($this->asayshCheckModal);
        $case->approvedByAdmin = true;
        $case->save();
        $this->asayshCheckModal = false;
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
