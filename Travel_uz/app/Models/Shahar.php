<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shahar extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'city_slug',
        'photo'
    ];

    public function categories() //productda bir nechta commentlar bor
    {
        return $this->hasMany(Category::class);
    }
}
