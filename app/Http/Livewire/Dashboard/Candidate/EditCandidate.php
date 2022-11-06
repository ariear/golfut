<?php

namespace App\Http\Livewire\Dashboard\Candidate;

use App\Models\Candidate;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCandidate extends Component
{
    use WithFileUploads;

    public $name;
    public $image;
    public $desc;
    public $candidate;

    public function mount($id){
        $this->candidate = Candidate::find($id);

        $this->name = $this->candidate->name;
        $this->desc = $this->candidate->desc;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'image' => 'max:5100',
            'desc' => 'required'
        ]);

        if ($this->image) {
            $imagenjir = $this->image->store('pp');

            Storage::delete($this->candidate->image);
        }else{
            $imagenjir = $this->candidate->image;
        }

        $this->candidate->update([
            'name' => $this->name,
            'image' => $imagenjir,
            'desc' => $this->desc
        ]);

        return redirect(route('dashboard_candidate'));
    }

    public function render()
    {
        return view('livewire.dashboard.candidate.edit-candidate',[
            'candidate' => $this->candidate
        ])->extends('layouts.dashboard');
    }
}
