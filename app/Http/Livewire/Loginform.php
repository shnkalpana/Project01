<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Loginform extends Component
{
    public $email;
    public $password;
    public $remember = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            // Authentication passed...
            return redirect()->intended('/admin');
        } else {
            $this->addError('email', trans('auth.failed'));
        }
    }

    public function render()
    {
        return view('livewire.loginform');
    }
}
