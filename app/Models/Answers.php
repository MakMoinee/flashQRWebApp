<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    use HasFactory;

    protected $id = 'answerID';
    protected $table = 'answers';

    protected $fillable = [
        "answerID",
        'accountID',
        "quizID",
        "flashCardID",
        "answer",
    ];
}
