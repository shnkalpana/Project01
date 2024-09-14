<div>
    @auth
    <form wire:submit.prevent="createProject" class=" pl-2">
        @csrf
        <input type="text" class=" outline-1 rounded-lg py-1.5 ml-2 shadow-sm" wire:model="projectname">
        <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700"> Create Project </button>
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
