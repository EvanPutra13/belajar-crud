<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    
        use HasFactory;
        protected $table = 'guru';
        protected $primaryKey = 'nip';
        public $incrementing = false;

        protected $fillable = [
          'nip','nama','jk'
        ];
    
    
    };
