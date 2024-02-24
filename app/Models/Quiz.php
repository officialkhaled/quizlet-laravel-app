<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $table = 'quizzes';

    protected $fillable = [
        'name',
        'description'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function takes()
    {
        return $this->hasMany(Take::class);
    }

    public function users()
    {
        return $this->hasMany(User::class, 'takes');
    }
}
