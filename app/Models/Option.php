<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    protected $table = 'quizzes';

    protected $fillable = [
        'question_id',
        'option_text',
        'is_correct'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }

    // This is assuming that you want to track which users selected this option
    public function userAnswers()
    {
        return $this->hasMany(UserAnswer::class, 'user_answer_id');
    }
}
