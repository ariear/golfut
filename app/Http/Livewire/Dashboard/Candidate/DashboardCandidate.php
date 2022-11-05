<?php

namespace App\Http\Livewire\Dashboard\Candidate;

use Livewire\Component;

class DashboardCandidate extends Component
{
    public function render()
    {
        return view('livewire.dashboard.candidate.dashboard-candidate')->extends('layouts.dashboard');
    }
}
