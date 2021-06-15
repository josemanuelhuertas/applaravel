<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViviendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viviendas', function(Blueprint $table) {
            $table -> increments('id');
            $table -> string('localidad', 50);
            $table -> string('tipo', 50);
            $table -> decimal('m2', $precision = 5,$scale = 2);
            $table -> integer('num_hab');
            $table -> integer('num_banos');
            $table -> string('piscina', 2);
            $table -> string('garaje', 2);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('viviendas');
    }
}
