<?php

namespace App\Http\Livewire\Dashboard\Picker;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DashboardPicker extends Component
{
    public function deletePicker($id){
        $user = User::find($id);
        if ($user['image']) {
            Storage::delete($user['image']);
        }
        $user->delete();
    }

    public function render()
    {
        return view('livewire.dashboard.picker.dashboard-picker',[
            'users' => User::latest()->get()
        ])->extends('layouts.dashboard');
    }
}
