<?php

namespace App\Http\Livewire\Pages;

use App\Models\data;
use Livewire\Component;
use Livewire\WithFileUploads;
use Image;

class CreateInformation extends Component
{
    use WithFileUploads;

    public $form = [
        "fullname" => "",
        "email" => "",
        "phone" => "",
        "data_of_birth" => "",
        "gender" => "",
        "region" => "",
        "city" => "",
        "state_address" => "",
        "quarter_address" => "",
        "links" => [],
        "case" => "",
        "type_of_problem" => "",
        "whgcase" => "",
        "user_id" => "",
        "file_image" => "",
        "personal_image" => "",
        "personal_id" => "",
    ];

    protected $rules = [
        "form.fullname" => "required",
        "form.email" => "email|unique:data,email",
        "form.phone" => "required|min:11|max:15",
        "form.data_of_birth" => "required|date",
        "form.case" => "required",
        "form.type_of_problem" => "required",
        "form.whgcase" => "required",
        "form.user_id" => "required",
        "form.file_image" => "required|mimes:jpg,png|file|max:2048",
        "form.personal_image" => "required|mimes:jpg,png|file|max:2048",
        "form.personal_id" => "required|min:11|max:15",
    ];

    protected $validationAttributes = [
        "form.fullname" => "Full Name",
        "form.email" => "Email",
        "form.phone" => "Phone",
        "form.data_of_birth" => "Date of Birth",
        "form.case" => "Case",
        "form.type_of_problem" => "Type of Problem",
        "form.whgcase" => "WHG Case",
        "form.user_id" => "User ID",
        "form.file_image" => "File Image",
        "form.personal_image" => "Personal Image",
        "form.personal_id" => "Personal ID",
    ];
    public function saveData()
    {
        $this->validate();
        $orginalPersonalImage = $this->form["personal_image"];
        $orginalFileImage = $this->form["file_image"];

        $orginalPersonalImageExt = $orginalPersonalImage->getClientOriginalExtension();
        $orginalFileImageExt = $orginalFileImage->getClientOriginalExtension();
        $orginalPersonalImageName  = time() . "." . $orginalPersonalImageExt;
        $orginalFileImageName  = time() . "." . $orginalFileImageExt;

        $thumpPersonalImage = Image::make($orginalPersonalImage)->fit(300, 300);
        $thumpFileImage = Image::make($orginalFileImage)->fit(300, 300);

        if ($orginalPersonalImage && $orginalFileImage) {
            $data = new data();
            $data->fullname = $this->form["fullname"];
            $data->email = $this->form["email"];
            $data->phone = $this->form["phone"];
            $data->data_of_birth = $this->form["data_of_birth"];
            $data->case = $this->form["case"];
            $data->type_of_problem = $this->form["type_of_problem"];
            $data->whgcase = $this->form["whgcase"];
            $data->user_id = $this->form["user_id"];
            $data->file_image = $orginalFileImageName;
            $data->personal_image = $orginalPersonalImageName;
            $data->personal_id = $this->form["personal_id"];
            if ($data) {
                $thumpPersonalImage->save('uploads/personalImages/'.$orginalPersonalImageName, 30);
                $thumpFileImage->save('uploads/fileImages/'.$orginalFileImageName, 30);
            }
            $data->save();
        }
        $this->resetInput();
    }

    public function render()
    {
        return view('livewire.pages.create-information')->extends('layouts.layout', ['title' => 'Adding Information']);
    }
}
