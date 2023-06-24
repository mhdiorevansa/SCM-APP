<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';
    protected $primarykey = 'id';
    protected $fillable = ['nama_supplier', 'email_supplier', 'alamat_supplier', 'nohp_supplier', 'gambar'];
}
