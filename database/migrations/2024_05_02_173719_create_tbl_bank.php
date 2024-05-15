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
        Schema::create('tbl_bank', function (Blueprint $table) {
            $table->integer('kode_bank');
            $table->string('nama_bank', 100);
            $table->foreign('jenis_bank');
            $table->string('alamat', 100);
            $table->string('kota', 100);
            $table->string('provinsi', 100);
            $table->integer('kode_pos');
            $table->integer('nomer_telepon');
            $table->string('email', 100);
            $table->string('deskripsi', 300);
            $table->foreign('jenis_bank')->references('nama_jenis')->on('jenis_bank');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_bank');
    }
};
