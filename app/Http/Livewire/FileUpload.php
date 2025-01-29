<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\UploadedFile;
use App\Models\Tasks;

class FileUpload extends Component
{
    use WithFileUploads;

    public $file;
    public $taskId;

    public function mount($taskId)
    {
        $this->taskId = $taskId; // Initialize the task ID
    }

    public function save()
    {
        // Validate the file
        $this->validate([
            'file' => 'required|file|max:10240', // Max 10MB
        ], [
            'file.required' => 'Please select a file to upload.',
            'file.file' => 'The uploaded file must be a valid file.',
            'file.max' => 'The file size must not exceed 10MB.',
        ]);

        // Ensure the task exists
        $task = Tasks::find($this->taskId);
        if (!$task) {
            session()->flash('error', 'Invalid task ID.');
            return;
        }

        // Store the file
        $path = $this->file->store('uploads', 'public');

        // Save file details to the database
        UploadedFile::create([
            'filename' => $this->file->getClientOriginalName(), // Use original name
            'filepath' => $path,
            'task_id' => $this->taskId, // Associate with the task
        ]);

        // Clear the file input
        $this->reset('file');

        // Flash success message
        session()->flash('message', 'File uploaded successfully!');
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}
