<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormAnswer extends Model
{
    protected $table = 'form_answers';
    protected $fillable = ['id','clientid','quest_one','quest_two','quest_three','quest_four','quest_five','quest_six','hasil','keterangan', 'created_at', 'updated_at'];
}
