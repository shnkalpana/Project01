<div>

<button type="button" class="btn btn-primary" wire:click="register">Create user</button>

@if($clicked)
<x-register_component/>
@else  
<livewire:user-card>
@endif

</div>