<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bom extends Model
{
    use HasFactory;

    protected $fillable = [
        'taskid',
        'partid',
        'qty',
        'price',
        'weight',
    ];

    public function tasks()
    {
        return $this->belongsTo(Tasks::class,'taskid');
    }

    public function parts()
    {
        return $this->belongsTo(Part::class,'partid');
    }
}
