<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $table = 'results';

    protected $fillable = [
        'user_id',
        'quiz_id',
        'yes_ans',
        'no_ans',
        'result_json',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function quiz() {
        return $this->belongsTo(Quiz::class, 'quiz_id');
    }

}
