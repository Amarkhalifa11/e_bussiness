<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolie extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'description',
        'type_id',
        'category_id',
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    public function type()
    {
        return $this->hasOne(SubCategory::class, 'id', 'type_id');
    }
}
