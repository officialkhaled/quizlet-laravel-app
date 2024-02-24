<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Take extends Model
{
    use HasFactory;

    protected $table = 'takes';

    protected $fillable = [
        'user_id',
        'quiz_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }

    public function responses()
    {
        return $this->hasMany(Response::class);
    }

    protected static function booted()
    {
        static::deleting(function ($take) {
            $take->responses()->each(function ($response) {
                $response->delete();
            });
        });
    }
}
