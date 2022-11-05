<?php

namespace App\Http\Livewire\Dashboard\Picker;

use Livewire\Component;

class DashboardPicker extends Component
{
    public function render()
    {
        return view('livewire.dashboard.picker.dashboard-picker')->extends('layouts.dashboard');
    }
}
