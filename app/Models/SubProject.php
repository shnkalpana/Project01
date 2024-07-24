<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubProject extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'sub_project_name'];

    public function project()
    {
        $this->belongsTo(Project::class);
    }
}
