<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Client\Request;

class SubProjectCreate extends Component
{
    public $projectid;

    public function mount($projectid)
    {
        $this->projectid = $projectid;
    }

    public function render()
    {
        return view('livewire.sub-project-create');
    }
}
