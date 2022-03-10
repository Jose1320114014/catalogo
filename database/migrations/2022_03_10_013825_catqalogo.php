<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
Schema::dropIfExists('catalogo');

        schema::create('catalogo',function(blueprint $table){
            $table ->id();
            $table ->string('codigo');
            $table ->string('asentamiento');
            $table ->string('tipo_asenta');
            $table ->string('municipio');
            $table ->string('estado');
            $table ->string('ciudad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
