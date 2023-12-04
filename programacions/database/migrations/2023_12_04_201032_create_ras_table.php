<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRasTable extends Migration
{
    public function up()
    {
        Schema::create('ras', function (Blueprint $table) {
            $table->id();
            // Otras columnas...
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ras');
    }
}
