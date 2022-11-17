<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Answer;
use App\Quiz;

class Question extends Model
{

    protected $fillable = ['question', 'quiz_id'];

    //belongs to quiz
    public function answers() {
        return $this->hasMany(Answer::class);
    }

    public function quiz() {
        return $this->belongsTo(Quiz::class);
    }
}