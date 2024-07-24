<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Project;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateProject extends Component
{

    public $projectname;
    public $count = 0;



    protected $rules = [
        'projectname' => 'required|string|max:255',
    ];

    public function createProject()
    {
        $this->validate();

        Project::create([
            'user_id' => Auth()->user()->id,
            'projectname' => $this->projectname,
        ]);

        session()->flash('message', 'Project successfully created.');

        // Optionally reset the form input
        $this->reset('projectname');
    }

    public function mount()
    {
        if (Auth::check()) {
            $projects = User::find(Auth()->user()->id)->projects;
            $this->count = $projects->count();
        } else {
            return redirect('/');
        }
    }


    public function render()
    {
        return view('livewire.create-project');
    }
}
