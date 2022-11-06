<?php

namespace App\Http\Livewire\Dashboard\Picker;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditPicker extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $email;
    public $role;
    public $user;

    public function mount($id){
        $this->user = User::find($id);

        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->role = $this->user->role;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'max:5100',
            'email' => 'required',
            'role' => 'required',
        ]);

        if ($this->image) {
            $imagenjir = $this->image->store('pp');

            if ($this->user->image) {
                Storage::delete($this->user->image);
            }
        }else{
            $imagenjir = $this->user->image;
        }

        $this->user->update([
            'name' => $this->name,
            'image' => $imagenjir,
            'email' => $this->email,
            'role' => $this->role,
            'password' => bcrypt($this->email),
        ]);

        return redirect(route('dashboard_picker'));
    }

    public function render()
    {
        return view('livewire.dashboard.picker.edit-picker')->extends('layouts.dashboard');
    }
}
