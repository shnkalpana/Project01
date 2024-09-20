<div class=" sm:ml-64  px-2 mt-16 pt-4 pb-2">

<button type="button" class=" sm:hidden inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" wire:click="register">Create user</button>

@if($clicked)
<x-register_component/>
@else  
<livewire:user-card>
@endif
<livewire:supplier-table>
<livewire:project-table>    
</div>