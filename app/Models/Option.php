<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $table = 'options';

    protected $fillable = [
        'question_id',
        'is_correct',
        'content',
        'explanation'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
