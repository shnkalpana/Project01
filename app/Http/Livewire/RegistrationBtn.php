<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegistrationBtn extends Component
{
    public $clicked = false;

    public function register()
    {
        $this->clicked = true;
    }

    public function render()
    {
        return view('livewire.registration-btn');
    }
}
