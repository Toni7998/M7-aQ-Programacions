<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() {
        Schema::create('continguts', function (Blueprint $table) {
            $table->id();
            $table->text('descripcio');
            $table->bigInteger('a_tables_id')->unsigned();
            $table->foreign('a_tables_id')->references('id')->on('a_tables')->onDelete('cascade');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });

    }

    public function down() {
        Schema::dropIfExists('continguts');
    }
};