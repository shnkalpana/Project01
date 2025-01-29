<?php

namespace App\Http\Livewire;

use App\Models\Tasks;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Tasktable extends Component
{
    public $userProjects;
    public $user;

    public function mount()
    {
        $this->user = Auth::user();
        $this->userProjects = $this->user->projects;
    }

    public function render()
    {
        return view('livewire.tasktable');
    }
}
