<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kapal extends Model
{
    use HasFactory;

    protected $table = 'kapal';
    protected $guarded = ['id'];
    
    public function keperluan()
    {
        return $this->hasOne(Details::class, 'kapal_id');
    }

    public function penjadwalan()
    {
        return $this->hasMany(Schedule::class);
    }
}