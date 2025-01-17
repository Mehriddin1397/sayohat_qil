<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'information',
        'ishlash_vaqti',
        'lokatsiya',
        'photo',
        'category_id'
    ];

    public function category()
    {
        return $this->hasMany(Category::class);
    }
}
