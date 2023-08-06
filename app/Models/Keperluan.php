<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keperluan extends Model
{
    use HasFactory;

    protected $table = 'keperluans';
    protected $fillable = ['id_kapal', 'muat_barang', 'bongkar', 'jenis_barang', 'keterangan'];

    public function kapal() {
        return $this->belongsTo(KapalModel::class);
    }
}
