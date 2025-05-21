<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->char('npm', 11)->unique();
            $table->string('nama', 100);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir'); //yyyy-mm-dd
            $table->timestamps(); //created_at dan update_at

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');

    }
};