<?php

namespace App\Http\Livewire\Subcribe;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // make sentece with 500 character
        return view('livewire.subcribe.index')->extends('layouts.master');
    }
}
