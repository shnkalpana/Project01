<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'projectname'];

    public function user() : BelongsTo
    {
        //eloquent one to many relationship between user and project
        return $this->belongsTo(User::class);
    }

    public function subprojects()
    {
        return $this->hasMany(SubProject::class);
    }
}
