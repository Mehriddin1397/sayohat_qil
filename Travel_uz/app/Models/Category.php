<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'photo',
        'shahar_id'
    ];

    public function shahar() //category Shaharga tegishli
    {
        return $this->belongsTo(Shahar::class);
    }

    public function lokalities()
    {
        return $this->hasMany(Locality::class);
    }
}
