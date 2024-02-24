<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $table = 'responses';

    protected $fillable = [
        'take_id',
        'option_id',
        'question_id',
        'content'
    ];

    public function take()
    {
        return $this->belongsTo(Take::class, 'take_id');
    }

    public function option()
    {
        return $this->belongsTo(Option::class, 'option_id');
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
