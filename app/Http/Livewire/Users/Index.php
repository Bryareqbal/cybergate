<?php
namespace App\Http\Livewire\Users;

use Livewire\Component;
use App\Models\user as Users;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public $limit=10;
    public $search;

    public function updatingsearch()
    {
        $this->resetPage();
    }

    public function ChangedStatus($userid)
    {
        $user=Users::findorfail($userid);
        $user->status=!$user->status;
        $user->save();
        session()->flash('message', ' your status has been changed');
        return redirect()->route('users');
    }
    public function SetPermission($status, $id)
    {
        $user=Users::findorfail($id);
        $user->permission=$status;
        $user->save();
        session()->flash('message', ' your permission has been changed');
        return redirect()->back();
    }


    public function render()
    {
        $users=Users::search($this->search)->latest()->paginate($this->limit);
        return view('livewire.users.index', compact('users'))->extends('layouts.layout', ['title' => 'Users']);
    }
}
