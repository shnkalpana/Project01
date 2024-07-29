<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateTask extends Component
{
    public $show = false;
    public $subprojectid;
    public $users;

    public function mount($subprojectid)
    {
        $this->subprojectid = $subprojectid;
        $this->users = User::all();
    }

    public function createBtn()
    {
        if ($this->show == true) {
            $this->show = false;
        } else {
            $this->show = true;
        }
    }

    public function render()
    {
        return view('livewire.create-task');
    }
}
