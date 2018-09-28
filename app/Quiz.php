<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $table = 'user_quiz';

    protected $fillable = ['user_id', 'Q1', 'Q2', 'Q3'];
}
