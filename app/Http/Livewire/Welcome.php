<?php

namespace App\Http\Livewire;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Welcome extends Component
{
    public function vote($id){
        $candidate = Candidate::find($id);
        $candidate->update([
            'total' => $candidate->total + 1
        ]);

        $user = User::find(Auth::user()->id);
        $user->update([
            'isvote' => true
        ]);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.welcome',[
            'candidates' => Candidate::latest()->get()
        ])->extends('layouts.app');
    }
}
