<?php

namespace App\Http\Livewire\Pages;

use App\Models\data;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use Image;

class EditInformation extends Component
{
    use WithFileUploads;

    public $form;
    public $personal_image;
    public $file_image;
    public $description;
    protected $rules = [
        "form.fullname" => "required",
        "form.email" => "email",
        "form.phone" => "required|min:11|max:15",
        "form.date_of_birth" => "required|date",
        "form.case" => "required",
        "form.type_of_problem" => "required",
        "form.state_address" => "nullable",
        "form.gender" => "nullable",
        "form.region" => "nullable",
        "form.city" => "nullable",
        "form.quarter_address" => "nullable",
        "form.links.link1" => "nullable",
        "form.links.link2" => "nullable",
        "form.links.link3" => "nullable",
        "form.personal_id" => "required|min:11|max:15",
        "form.description" => "nullable",

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
    public function mount(Data $id)
    {
        // $this->form['fullname'] = $this->form['fullname'];
        $this->form = $id;
        $this->form['links'] = json_decode($this->form->links);
        $this->description=$this->form['description'];
    }

    public function saveData()
    {
        $this->validate();
        $data = data::find($this->form->id);
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
        $data->whgcase = $this->form["whgcase"];
        $data->user_id = Auth::id();
        $data->personal_id = $this->form["personal_id"];
        if ($data->save()) {
            $this->form = $data;
            $this->form['links'] = json_decode($this->form->links);
            return session()->flash("form_updated", "Data has been updated successfully");
        } else {
            return session()->flash("form_not_updated", "the form has not been saved");
        }
    }

    public function updatePersonalImage()
    {
        $this->validate([
            'personal_image' => 'required|mimes:jpg,png|file|max:2048',
        ]);
        if (File::exists(public_path('/uploads/personalImages/') . $this->form->personal_image)) {
            if (File::delete(public_path('/uploads/personalImages/') . $this->form->personal_image)) {
                $orginalPersonalImageExt = $this->personal_image->getClientOriginalExtension();
                $orginalPersonalImageName  = time() . "." . $orginalPersonalImageExt;
                $thumpPersonalImage = Image::make($this->personal_image)->fit(300, 300);
                $thumpPersonalImage->save('uploads/personalImages/'.$orginalPersonalImageName, 60);
                $data = data::find($this->form->id);
                $data->personal_image = $orginalPersonalImageName;
                $data->save();
                $this->form['personal_image'] = $orginalPersonalImageName;
                $this->personal_image = null;
                return session()->flash('personal_image', 'Personal Image Updated Successfully');
            } else {
                return session()->flash('personal_image_error', 'Personal Image Not Updated');
            }
        } else {
            return session()->flash('personal_image_error', 'Personal Image Not Updated');
        }
    }

    public function updateFileImage()
    {
        $this->validate([
            'file_image' => 'required|mimes:jpg,png|file|max:2048',
        ]);
        if (File::exists(public_path('/uploads/fileImages/') . $this->form->file_image)) {
            if (File::delete(public_path('/uploads/fileImages/') . $this->form->file_image)) {
                $orginalFileImageExt = $this->file_image->getClientOriginalExtension();
                $orginalFileImageName  = time() . "." . $orginalFileImageExt;
                $thumpFileImage = Image::make($this->file_image);
                $thumpFileImage->save('uploads/fileImages/'.$orginalFileImageName, 60);
                $data = data::find($this->form->id);
                $data->file_image = $orginalFileImageName;
                $data->save();
                $this->form['file_image'] = $orginalFileImageName;
                $this->file_image = null;
                return session()->flash('file_image', 'File Image Updated Successfully');
            } else {
                return session()->flash('file_image_error', 'File Image Not Updated');
            }
        } else {
            return session()->flash('file_image_error', 'File Image Not Updated');
        }
    }

    public function render()
    {
        return view('livewire.pages.edit-information')->extends("layouts.layout", ["title" => "edit information"]);
        ;
    }
}
