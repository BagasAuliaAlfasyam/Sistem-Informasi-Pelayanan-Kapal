<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sempak extends Model
{
    use HasFactory;
    protected $table = 'sempaks';
    protected $guarded = ['id'];
}
