<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $table = 'questions';

    protected $fillable = [
        'quiz_id',
        'question_text',
        'answer_type',
        'status'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'quiz_id')->withDefault();
    }

    public function options()
    {
        return $this->hasMany(Option::class, 'question_id');
    }

    public function correctAnswers()
    {
        return $this->hasMany(Option::class, 'question_id')->where('is_correct', 1);
    }
}
