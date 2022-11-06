<?php

namespace App\Http\Livewire\Dashboard\Candidate;

use App\Models\Candidate;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCandidate extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $desc;

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'required|image|max:5100',
            'desc' => 'required'
        ]);

        $imagestore = $this->image->store('pp');

        Candidate::create([
            'name' => $this->name,
            'image' => $imagestore,
            'desc' => $this->desc
        ]);

        return redirect(route('dashboard_candidate'));
    }

    public function render()
    {
        return view('livewire.dashboard.candidate.add-candidate')->extends('layouts.dashboard');
    }
}
