<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Loginform extends Component
{
    public $showLogin = false;

    protected $listeners = ['showLogin'];

    public function showLogin()
    {
        $this->showLogin = true;
    }

    public function render()
    {
        return view('livewire.loginform');
    }
}
