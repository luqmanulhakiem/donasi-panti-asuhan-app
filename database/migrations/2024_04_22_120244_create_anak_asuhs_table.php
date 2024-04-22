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
        Schema::create('anak_asuhs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('kelas');
            $table->string('jenjang');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->integer('umur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anak_asuhs');
    }
};
