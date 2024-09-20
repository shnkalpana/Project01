<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Supplier;

class SupplierTable extends Component
{
    public $supliers;

    public function mount()
    {
        $this->supliers = Supplier::all();
    }

    public function render()
    {
        return view('livewire.supplier-table');
    }
}
