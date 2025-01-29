<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadedFile extends Model
{
    protected $fillable = ['filename', 'filepath', 'task_id'];

    // A file belongs to a task
    public function task()
    {
        return $this->belongsTo(Tasks::class,'task_id');
    }
}
