<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = [
        'name',
        'status',
        'quiz_id'
    ];

    public function quiz()
    {
        return $this->hasMany(Quiz::class, 'quiz_id')->withDefault();
    }

}
