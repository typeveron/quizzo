<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Question;

class Quiz extends Model
{

    protected $fillable = ['name', 'description', 'minutes'];
    //quiz can have any number of questions
    public function questions() {
        return $this->hasMany(Question::class);
    }
}
