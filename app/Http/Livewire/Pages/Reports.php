<?php

namespace App\Http\Livewire\Pages;

use App\Models\Asaysh;
use App\Models\Cyber;
use App\Models\data;
use Livewire\Component;
use Livewire\WithPagination;

class Reports extends Component
{
    use WithPagination;
    public function render()
    {
        $datas = data::paginate(10);
        $cybers = Cyber::paginate(10);
        $asayshes = Asaysh::with("data")->paginate(10);
        return view('livewire.pages.reports', compact('datas', 'cybers', 'asayshes'))->extends("layouts.layout", ["title" => "Reports"]);
    }
}
