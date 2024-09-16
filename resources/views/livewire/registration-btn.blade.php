<div class=" px-2 mt-2 pb-2">

<button type="button" class=" inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" wire:click="register">Create user</button>

@if($clicked)
<x-register_component/>
@else  
<livewire:user-card>
@endif

</div>