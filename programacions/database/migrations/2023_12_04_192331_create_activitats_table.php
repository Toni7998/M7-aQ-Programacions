<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('activitats', function (Blueprint $table) {
            $table->id();
            $table->string('titol');
            $table->text('descripcio');
            $table->unsignedBigInteger('programacio_id');
            $table->foreign('programacio_id')->references('id')->on('programacions')->onDelete('cascade');
            $table->unsignedBigInteger('modul_id');
            $table->foreign('modul_id')->references('id')->on('moduls')->onDelete('cascade');
            $table->unsignedBigInteger('uf_id');
            $table->foreign('uf_id')->references('id')->on('ufs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activitats');
    }
};
