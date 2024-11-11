<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'supplierid',
        'partcode',
        'unit',
        'unitprice',
        'weight',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class,'supplierid');
    }

    public function boms()
    {
        return $this->hasMany(Bom::class);
    }
}
