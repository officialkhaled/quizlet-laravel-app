<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserQuiz extends Model
{
    use HasFactory;

    protected $table = "user_quizzes";

    protected $fillable = [
        'user_id',
        'exam_id',
        'std_status',
        'exam_joined'
    ];
}
