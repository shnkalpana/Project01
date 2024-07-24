<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\SubProject;

class ShowSubProjects extends Component
{
    public $projectid;
    public $ShowTable = false;
    public $count = 0;

    public function mount($projectid)
    {
        $this->projectid = $projectid;
    }

    public function showtable($projectid)
    {
        $this->count = SubProject::where('project_id', $projectid)->count();
    }

    public function render()
    {
        return view('livewire.show-sub-projects');
    }
}
