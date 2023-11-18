<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
        protected $primaryKey = 'kode_barang';
        public $incrementing = 'false';
        protected $fillable =[
            'Nama_barang','Harga','Jumlah','Merek'
        ];
}
