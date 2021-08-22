<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{
    protected $table = 'temperature';
    protected $fillable = ['nama', 'suhu'];
}
