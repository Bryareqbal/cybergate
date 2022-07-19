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
    // For Data Information only
    public $SearchData;
    public $DataFirst;
    public $DataSecond;
    public $showmodelinformation;
    public $Getshowmodelinformation;



    // For Asaysh  Data Information only
    public $SearchDataAsyash;
    public $DataFirstAsyash;
    public $DataSecondAsyash;
    public $showmodeldata;
    public $Getshowmodeldata;



    // For cyber  Data Information only
    public $SearchDataCyber;
    public $DataFirstCyber;
    public $DataSecondCyber;
    public $showmodelcyber;
    public $Getshowmodelcyber;




    // Get data Information and store in the new variable
    public function updatedshowmodelinformation(){
        $this->Getshowmodelinformation = $this->showmodelinformation;
    }




    // Get Data from the model and store it in the new variable
    public function updatedshowmodeldata()
    {
        $this->Getshowmodeldata = $this->showmodeldata;
    }

    // Get cyber data from the model and store it in the new variable
    public function updatedshowmodelcyber()
    {
        $this->Getshowmodelcyber = $this->showmodelcyber;
    }

    // For Reset Data in Search Data
    public function updatingSearchData()
    {
        $this->resetPage();
    }
    // For Reset Data in Search Asaysh
    public function updatingSearchDataAsyash()
    {
        $this->resetPage();
    }
    // For Reset Data in Search cyber
    public function updatingSearchDataCyber()
    {
        $this->resetPage();
    }







    public function render()
    {
        // For Data Information only
       $this->DataFirst && $this->DataSecond ?
        $datas = data::search($this->SearchData)->whereBetween('created_at', [$this->DataFirst,$this->DataSecond])->paginate(10):
        $datas = data::search($this->SearchData)->paginate(10);



       //For Asaysh  Data Information only
       $SearchDataAsyash = $this->SearchDataAsyash;
       $this->DataFirstAsyash && $this->DataSecondAsyash ?
       $asayshes = Asaysh::WhereBetween('created_at', [$this->SearchDataAsyash,$this->SearchDataAsyash])->with('data')->whereHas('data', function($query) use($SearchDataAsyash) {
        $query->where("fullname",'LIKE','%' .$SearchDataAsyash.'%');
       })->paginate(10)
       :$asayshes = Asaysh::with('data')->whereHas('data', function($query) use($SearchDataAsyash) {
        $query->where("fullname",'LIKE','%' .$SearchDataAsyash.'%');
       })->paginate(10);


       // For Cyber Data Information only
       $SearchDataCyber=$this->SearchDataCyber;
       $this->DataFirstCyber && $this->DataSecondCyber ?
       $cybers=Cyber::WhereBetween('created_at', [$this->SearchDataCyber,$this->SearchDataCyber])->with('data')->whereHas('data',function($queryCyber) use ($SearchDataCyber) {
        $queryCyber->where("fullname",'LIKE','%' .$SearchDataCyber.'%');
       })->paginate(10)
       :$cybers = Cyber::with('data')->whereHas('data', function($queryCyber) use($SearchDataCyber) {
        $queryCyber->where("fullname",'LIKE','%' .$SearchDataCyber.'%');
       })->paginate(10);

        return view('livewire.pages.reports', compact('datas', 'asayshes','cybers'))->extends("layouts.layout", ["title" => "Reports"]);
    }
}
