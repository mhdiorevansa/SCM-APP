<?php

namespace App\Models;

use App\Models\Sayur;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SayurMasuk extends Model
{
    use HasFactory;
    protected $table = 'sayur_masuk';
    protected $primarykey = 'id';
    protected $fillable = ['sayur_id', 'supplier_id', 'jumlah', 'tanggal_masuk'];
    protected $dates = ['tanggal_masuk',];

    public function sayur()
    {
        return $this->belongsTo(Sayur::class, 'sayur_id', 'id');
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
}