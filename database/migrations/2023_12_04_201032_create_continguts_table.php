<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::dropIfExists('continguts');
        Schema::create('continguts', function (Blueprint $table) {
            $table->id();
            $table->text('descripcio');
            $table->foreignId('ra_id')->references('id')->on('ras')->onDelete('cascade');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

    }

    public function down() {
        Schema::dropIfExists('continguts');
    }
};