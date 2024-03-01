<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizAttempt extends Model
{
    use HasFactory;

    protected $table = 'quizzes';

    protected $fillable = [
        'user_id',
        'quiz_id',
        'score'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function quiz() {
        return $this->belongsTo(Quiz::class, 'quiz_id');
    }

    public function userAnswers() {
        return $this->hasMany(UserAnswer::class, 'user_answer_id');
    }
}
