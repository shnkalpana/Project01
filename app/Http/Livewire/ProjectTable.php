<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;


class ProjectTable extends Component
{
    public $projects;
    public $userProjects;

    public function mount()
    {
        $this->projects = Project::all();
        $this->userProjects = auth()->user()->projects;
    }

    public function render()
    {
        return view('livewire.project-table');
    }
}
