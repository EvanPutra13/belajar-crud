<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->string  ('nis')->primary();
            $table->string  ('nama');
            $table->enum    ('kelas',array('XA','XB','XC','XD','XE','XF','XG','XIA','XIB','XIC','XID','XIE','XIF','XIG','XIIA','XIIB','XIIC','XIID','XIIE','XIIF','XIIG'));
            // $table->enum    ('kelas',['XID','XIE']);
            $table->string    ('id_jurusan');
            $table->enum    ('jk',['laki-laki','perempuan']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
