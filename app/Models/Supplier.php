<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'website',
        'email1',
        'email2',
        'contact',
        'country',
        'location',
    ];

    public function parts()
    {
        return $this->hasMany(part::class);
    }
}
