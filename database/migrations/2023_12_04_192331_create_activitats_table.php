<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('activitats', function (Blueprint $table) {
            $table->id();
            $table->string('titol');
            $table->text('descripcio');
            $table->foreignId('programacio_id')->references('id')->on('programacions')->onDelete('cascade');
            $table->foreignId('modul_id')->references('id')->on('moduls')->onDelete('cascade');
            $table->foreignId('uf_id')->references('id')->on('ufs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('activitats');
    }
};
