<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $user;

    public function mount()
    {
        if (auth()->check()) {
            $this->user = auth()->user();
        }
    }


    public function render()
    {
        return view('livewire.header');
    }
}
