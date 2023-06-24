<?php

namespace App\Models;

use App\Models\Sayur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SayurKeluar extends Model
{
    use HasFactory;
    protected $table = 'sayur_keluar';
    protected $primarykey = 'id';
    protected $fillable = ['sayur_id', 'jumlah', 'tanggal_keluar'];
    protected $dates = ['tanggal_keluar',];

    public function sayur()
    {
        return $this->belongsTo(Sayur::class, 'sayur_id', 'id');
    }
}
