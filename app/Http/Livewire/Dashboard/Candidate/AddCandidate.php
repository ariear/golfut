<?php

namespace App\Http\Livewire\Dashboard\Candidate;

use Livewire\Component;

class AddCandidate extends Component
{
    public function render()
    {
        return view('livewire.dashboard.candidate.add-candidate')->extends('layouts.dashboard');
    }
}
