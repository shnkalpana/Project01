<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $name;

    public function mount()
    {
        if (auth()->check()) {
            $this->name = auth()->user()->name;
        }
    }


    public function render()
    {
        return view('livewire.header');
    }
}
