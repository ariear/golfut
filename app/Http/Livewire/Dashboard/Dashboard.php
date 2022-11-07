<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Candidate;
use App\Models\User;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.dashboard',[
            'candidates' => Candidate::orderBy('total','desc')->get(),
            'pickers' => User::all(),
            'ispickers' => User::where('isvote',true)->get(),
            'isnpickers' => User::where('isvote',false)->get(),
        ])->extends('layouts.dashboard');
    }
}
