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
>>>>>>> cca62f209bcf10989bc569d20c75a10ba636e11c:latihan/database/migrations/2025_05_21_033015_create_prodis_table.php
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
