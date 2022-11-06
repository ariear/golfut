<?php

namespace App\Http\Livewire\Dashboard\Picker;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddPicker extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $email;
    public $role = 'user';

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'required|image|max:5100',
            'email' => 'required',
            'role' => 'required',
        ]);

        $imagestore = $this->image->store('pp');
        $password = bcrypt($this->email);

        User::create([
            'name' => $this->name,
            'image' => $imagestore,
            'email' => $this->email,
            'role' => $this->role,
            'password' => $password
        ]);

        return redirect(route('dashboard_picker'));
    }

    public function render()
    {
        return view('livewire.dashboard.picker.add-picker')->extends('layouts.dashboard');
    }
}
