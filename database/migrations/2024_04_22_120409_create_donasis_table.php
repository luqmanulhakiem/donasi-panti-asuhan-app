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
        Schema::create('donasis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_donatur')->constrained('donaturs')->cascadeOnUpdate()->cascadeOnDelete()->nullable();
            $table->integer('nominal');
            $table->string('ket')->nullable();
            $table->date('tanggal');
            $table->enum('status', ['pending', 'success'])->default('pending');
            $table->string('snap_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donasis');
    }
};
