<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    use HasFactory;

    protected $table = 'quizzes';

    protected $fillable = [
        'user_id',
        'question_id',
        'option_id'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function question() {
        return $this->belongsTo(Question::class, 'question_id');
    }

    public function option() {
        return $this->belongsTo(Option::class, 'option_id');
    }
}
