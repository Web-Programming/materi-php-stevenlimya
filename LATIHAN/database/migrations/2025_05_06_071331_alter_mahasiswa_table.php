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
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->renameColumn('born_date', 'tanggal_lahir');
            $table->renameColumn('nama', 'nama_mahasiswa');
            $table->text('alamat')->after('tanggal_lahir');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->renameColumn('tanggal_lahir', 'born_date');
            $table->renameColumn('nama_mahasiswa', 'nama');
            $table->dropColumn('alamat');
        });
    }
};
