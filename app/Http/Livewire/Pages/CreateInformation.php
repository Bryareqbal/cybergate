<?php

namespace App\Http\Livewire\Pages;

use App\Models\city;
use App\Models\data;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Image;

class CreateInformation extends Component
{
    use WithFileUploads;


    public $ShowModel = false;

    public $description;

    public $form = [
        "fullname" => "",
        "email" => "",
        "phone" => "",
        "date_of_birth" => "",
        "gender" => "",
        "region" => "",
        "city" => "",
        "state_address" => "",
        "quarter_address" => "",
        "links" => [
            "link1" => "",
            "link2" => "",
            "link3" => "",
        ],
        "case" => "",
        "type_of_problem" => "",
        "file_image" => "",
        "personal_image" => "",
        "personal_id" => "",
    ];

    protected $rules = [
        "form.fullname" => "required",
        "form.email" => "email|unique:data,email",
        "form.phone" => "required|min:11|max:15",
        "form.date_of_birth" => "required|date",
        "form.case" => "required",
        "form.type_of_problem" => "required",
        "form.file_image.*"=> "required|mimes:jpg,png|file|max:2048",
        "form.personal_image" => "required|mimes:jpg,png|file|max:2048",
        "form.personal_id" => "required|min:5|max:15",
        "description" => "required",
    ];

    protected $validationAttributes = [
        "form.fullname" => "Full Name",
        "form.email" => "Email",
        "form.phone" => "Phone",
        "form.date_of_birth" => "Date of Birth",
        "form.case" => "Case",
        "form.type_of_problem" => "Type of Problem",
        "form.whgcase" => "WHG Case",
        "form.user_id" => "User ID",
        "form.file_image" => "File Image",
        "form.personal_image" => "Personal Image",
        "form.personal_id" => "Personal ID",
    ];
    public $errors = [];
    public function saveData()
    {
        $this->errors = $this->validate();
        $orginalPersonalImage = $this->form["personal_image"];
        $orginalPersonalImageExt = $orginalPersonalImage->getClientOriginalExtension();
        $orginalPersonalImageName  = time() . "." . $orginalPersonalImageExt;
        $thumpPersonalImage = Image::make($orginalPersonalImage)->fit(300, 300);
        $thumpPersonalImage->save('uploads/personalImages/'.$orginalPersonalImageName, 60);


        $FileImageNames = [];
        foreach ($this->form["file_image"] as $key => $file) {
            $orginalFileImage = $file;
            $orginalFileImageExt = $orginalFileImage->getClientOriginalExtension();
            $orginalFileImageName  = time() . "." . $orginalFileImageExt;
            $thumpFileImage = Image::make($orginalFileImage);
            $thumpFileImage->save('uploads/fileImages/'.$orginalFileImageName, 90);
            $FileImageNames[$key] = $orginalFileImageName;
        }
        if ($orginalPersonalImage && $orginalFileImage) {
            $data = new data();
            $data->fullname = $this->form["fullname"];
            $data->email = $this->form["email"];
            $data->phone = $this->form["phone"];
            $data->date_of_birth = $this->form["date_of_birth"];
            $data->gender = $this->form["gender"];
            $data->region = $this->form["region"];
            $data->city = $this->form["city"];
            $data->state_address = $this->form["state_address"];
            $data->quarter_address = $this->form["quarter_address"];
            $data->links = json_encode($this->form["links"]);
            $data->description = $this->description;
            $data->case = $this->form["case"];
            $data->type_of_problem = $this->form["type_of_problem"];
            $data->whgcase = null;
            $data->user_id = Auth::id();
            $data->file_image = json_encode($FileImageNames);
            $data->personal_image = $orginalPersonalImageName;
            $data->personal_id = $this->form["personal_id"];
            $data->save();
        }
        session()->flash('message', ' your information has been added');
        $this->reset('form');
        $this->reset('description');
    }



    public $city;

    public function SaveCities()
    {
        $this->validate([
            "city" => "required|max:100|unique:cities,name",
        ]);
        $city = new city();
        $city->name = $this->city;
        $city->save();
        $this->reset('city');
        session()->flash('message', ' your city has been added');
        $this->ShowModel=false;
    }

    public function render()
    {
        $cities = city::orderBy('name', 'ASC')->get();
        return view('livewire.pages.create-information', compact('cities'))->extends('layouts.layout', ['title' => 'Adding Information']);
    }
}
