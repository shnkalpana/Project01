<div class=" mb-2 text-md font-medium tracking-tight text-gray-400 dark:text-white">
    <form wire:submit.prevent="save">
        <input type="file" wire:model="file">

        @error('file') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class=" py-2 px-4 ms-2 text-sm font-medium focus:outline-none text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:z-10 focus:ring-4 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Upload</button>
    </form>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
</div>
