<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;
use Illuminate\Http\Request;

class CreateProject extends Component
{
    public $projectname = '';

    public function createProject(Request $reqest)
    {
        $InputFields = $reqest->validate(
            ['projectname' => ['required']]
        );

        $project = Project::create($InputFields);
    }

    public function render()
    {
        return view('livewire.create-project');
    }
}
