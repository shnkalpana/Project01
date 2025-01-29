<livewire:header/>
<div class=" p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class=" mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white">
        <h1>Task name: {{ $task->name }}</h1>
        <div class=" mb-2 text-md font-medium tracking-tight text-gray-400 dark:text-white">
            <h2>Description:</h2>
            <p>{{ $task->description }}</p>
        </div>
    </div>

    <!-- Include the Livewire file upload component -->
    <livewire:file-upload :taskId="$task->id" />

    <!-- Display uploaded files for this task -->
    <div class=" mb-2 text-md font-medium tracking-tight text-gray-400 dark:text-white">
        <div >
            <h2>Uploaded Files</h2>
        </div>

        <ul>
            @foreach ($task->files as $file)
                <li>
                    <a href="{{ asset('storage/' . $file->filepath) }}" download="{{ $file->filename }}">
                        {{ $file->filename }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

</div>
<x-footer/>
