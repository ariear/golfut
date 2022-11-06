<?php

namespace App\Http\Livewire\Dashboard\Candidate;

use App\Models\Candidate;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DashboardCandidate extends Component
{
    public function deleteCandidate($id) {
        $candidate = Candidate::find($id);
        if ($candidate['image']) {
            Storage::delete($candidate['image']);
        }
        $candidate->delete();
    }

    public function render()
    {
        return view('livewire.dashboard.candidate.dashboard-candidate',[
            'candidates' => Candidate::latest()->get()
        ])->extends('layouts.dashboard');
    }
}
