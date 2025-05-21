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
        Schema::create('prodis', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:LATIHAN/database/migrations/2025_05_13_070717_create_prodis_table.php
            $table->string("kode_prodi", 2);
            $table->string("nama", 100);
            $table->string('logo')->nullable();
=======
            $table->string('nama', 100); //nama prodi
            $table->string('kode_prodi', 2); //kode prodi
>>>>>>> ef0eae750d2861a8fb1f02c5bf7c21915f2d6de6:LATIHAN/database/migrations/2025_05_13_123438_create_prodis_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodis');
    }
};
