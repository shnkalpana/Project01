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
        // return redirect('subprojects.create');
        // if ($this->CreateSubProjects)
        //     $this->CreateSubProjects = false;
        // else
        $this->CreateSubProjects = true;
        //TODO: assign boolean variable to show subproject form 
        //create livewire component to add subproject to db,
        //show creted subprojects in livewire component inside project card
    }

    public function render()
    {
        return view('livewire.project-card');
    }
}
