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
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_rumah_sakit');
            $table->text('alamat_lengkap');
            $table->string('no_telepon');
            $table->string('type_rumah_sakit');
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
