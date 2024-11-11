<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SubProject;

class ShowSubProjects extends Component
{
    public $userProjects;

    public function mount()
    {
        $this->userProjects = auth()->user()->projects;
    }

    public function render()
    {
        return view('livewire.show-sub-projects');
    }
}
