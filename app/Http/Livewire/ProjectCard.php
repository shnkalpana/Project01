<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProjectCard extends Component
{
    public $user;
    public $projects;
    public $CreateSubProjects = false;

    public function mount()
    {
        $this->user = Auth::user();
        $this->projects = $this->user->projects;
    }

    public function createSubProject()
    {        
        $this->CreateSubProjects = true;
    }

    public function render()
    {
        return view('livewire.project-card');
    }
}
