<?php

namespace App\Models;

use App\Models\Tasks;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

//use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SubProject extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'sub_project_name'];

    public function projects()
    {
        return $this->belongsTo(Project::class,'project_id');
    }

    public function tasks(){
        return $this->hasMany(Tasks::class,'sub_project_id');
    }
}
