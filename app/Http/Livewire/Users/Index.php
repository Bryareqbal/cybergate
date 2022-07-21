<?php
namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $limit=12;
    public $search;
    public $createUserModal = false;

    public $disableModal = null;
    public $dataId;


    public $newUserForm = [
        "name" => "",
        "email" => "",
        "password" => "",
        "confirm-password" => "",
        "status" => 0,
        "role" => "",
    ];

    public $editUserForm=[
      'newName',
      'newEmail',

    ];

    protected $rules = [
        "newUserForm.name" => 'required|max:255',
        "newUserForm.email" => 'required|email|max:255|unique:Users,email',
        "newUserForm.password" => 'required|max:255|min:8|same:newUserForm.confirm-password',


    ];


    protected $validationAttributes = [
        'newUserForm.name' => 'name',
        'newUserForm.email' => 'email address',
        'newUserForm.password' => 'password',
        'newUserForm.confirm-password' => 'confirm password',

    ];
    public function updatingsearch()
    {
        $this->resetPage();
    }

    public function ChangedStatus($userid)
    {
        $user=User::findorfail($userid);
        $user->status = !$user->status;
        $user->save();
        session()->flash('message', ' your status has been changed');
        return redirect()->route('users');
    }
    public function SetPermission($status, $id)
    {
        $user=User::findorfail($id);
        $user->permission=$status;
        $user->save();
        session()->flash('message', ' your permission has been changed');
        return redirect()->back();
    }


    public function createUser()
    {
        $this->validate();
        $user = new User();
        $user->name = $this->newUserForm["name"];
        $user->email = $this->newUserForm["email"];
        $user->password = Hash::make($this->newUserForm["password"]);
        $user->permission = $this->newUserForm["role"];
        $user->status = $this->newUserForm["status"];
        if ($user->save()) {
            $this->reset('newUserForm');
            $this->createUserModal = false;
            return session()->flash("success", "User has been created Successfuly");
        } else {
            return session()->flash("error", "User Not Created Successfuly");
        }
    }



    public function switchUser(User $user){
        $this->dataId=$user->id;
        $this->editUserForm['newName']=$user->name;
        $this->editUserForm['newEmail']=$user->email;
        $this->editUserForm['newRole']=$user->permission;


    }


    public function EditUser($Id){
        $user=User::FindOrFail($this->dataId);
        $this->Validate([
            "editUserForm.newName" => 'required|max:255',
            "editUserForm.newEmail" => 'required|email|max:255|unique:users,email,'.$user->id,
        ]);

       $user->update([
        'name'=>$this->editUserForm['newName'],
        'email'=> $this->editUserForm['newEmail'],
       ]);


       return  session()->flash("success", "User has been updated Successfuly");


    }

    public $newPassword;
    public $confirmPassword;
    public  function EditPassword($Id)
    {
        $user=User::FindOrFail($this->dataId);
            if($this->newPassword === $this->confirmPassword){

                   $this->validate([
                "newPassword" => 'required|max:255|min:8|same:confirmPassword',
            ]);

            $user->forceFill([
                'password' => Hash::make($this->newPassword),
            ])->save();
            return session()->flash("success", "Password has been updated Successfuly");
            }else{
                return session()->flash("error", "Password does not match the confirmation password");
            }





    }


    public function render()
    {
        $users=User::search($this->search)->latest()->paginate($this->limit);
        return view('livewire.users.index', compact('users'))->extends('layouts.layout', ['title' => 'Users']);
    }
}
