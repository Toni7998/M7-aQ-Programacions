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
        if (Schema::hasTable('ras')) {
            if (Schema::hasTable('continguts')) {
                Schema::dropIfExists('continguts');
            }
            Schema::create('continguts', function (Blueprint $table) {
                $table->id();
                $table->text('descripcio');
                $table->unsignedBigInteger('ra_id');
                $table->foreign('ra_id')->references('id')->on('ras')->onDelete('cascade');
                $table->timestamps();
                $table->engine = 'InnoDB';
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('continguts');
    }
};
