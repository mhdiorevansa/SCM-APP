<?php

namespace App\Models;

use App\Models\Supplier;
use App\Models\SayurMasuk;
use App\Models\SayurKeluar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sayur extends Model
{
    use HasFactory;
    protected $table = 'sayur';
    protected $primarykey = 'id';
    protected $fillable = ['nama_sayur', 'harga_sayur', 'gambar_sayur'];

    public function sayurMasuk()
    {
        return $this->hasMany(SayurMasuk::class, 'sayur_id', 'id');
    }
    public function sayurKeluar()
    {
        return $this->hasMany(SayurKeluar::class, 'sayur_id', 'id');
    }
}
