<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('ufs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('descripcio');
            $table->integer('hores_totals');
            $table->unsignedBigInteger('modul_id');
            $table->foreign('modul_id')->references('id')->on('moduls')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('ufs');
    }
};
