<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    
        use HasFactory;
        protected $table = 'siswa';
        protected $primaryKey = 'nis';
        public $incrementing = false;

        protected $fillable = [
          'nis','nama','kelas','id_jurusan','jk'
        ];
    
    
    };
