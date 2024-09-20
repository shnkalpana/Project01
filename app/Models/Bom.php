<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bom extends Model
{
    use HasFactory;

    protected $fillable = [
        'taskid',
        'assembleid',
        'qty',
        'price',
        'weight',
    ];

    public function tasks()
    {
        return $this->belongsTo(Tasks::class,'taskid');
    }

    public function assembles()
    {
        return $this->belongsToMany(Assemble::class);
    }
}
