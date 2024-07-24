<div>
    @auth
    <form wire:submit.prevent="createProject">
        @csrf
        <input type="text" wire:model="projectname">
        <button type="submit"> Create Project </button>
        @error('project_name') <span class="text-danger">{{ $message }}</span> @enderror
    </form>

    @if($count>0)
        @livewire('project-card')
    @endif
    @else 

    <!--showing login form if user session over or not logged in-->
    <h1>You have logedout! please login</h1>
    <x-login/>

    @endauth
</div>
