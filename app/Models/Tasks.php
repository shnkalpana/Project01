<?php

namespace App\Models;

use App\Models\SubProject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tasks extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sub_project_id',
        'assigned_user_id',
        'description',
        'deadline',
        'done',
    ];

    public function subprojects()
    {
        return $this->belongsTo(SubProject::class, 'sub_project_id');
    }

    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_user_id');
    }
}
