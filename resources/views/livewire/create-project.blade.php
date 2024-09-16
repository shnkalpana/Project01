<div>
    @auth
    <form wire:submit.prevent="createProject" class=" pl-2 pb-2">
        @csrf
        <input type="text" class=" outline-1 rounded-lg py-1.5 ml-2 shadow-sm" wire:model="projectname">
        <button type="submit" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Create Project </button>
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
