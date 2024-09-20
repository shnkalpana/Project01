<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assemble extends Model
{
    use HasFactory;

    protected $fillable = [
        'partid',
        'qty',
        'price',
    ];

    public function parts()
    {
        return $this->hasMany(Part::class,'partid');
    }
}
