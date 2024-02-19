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
        Schema::create('foto', function (Blueprint $table) {
            $table->id();
            $table->string('JudulFoto');
            $table->string('DeskripsiFoto');
            $table->date('TanggalUnggah');
            $table->string('LokasiFile');
            $table->bigInteger('albums_id')->unsigned()->nullable();
            $table->foreign('albums_id')->references('id')->on('albums')->onDelete('cascade');
            $table->bigInteger('users_id')->unsigned()->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto');
    }
};
