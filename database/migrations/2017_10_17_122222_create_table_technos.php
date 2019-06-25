<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTechnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->float('note')->unsigned();
            $table->string('color')->nullable();
            $table->integer('techno_type_id')->unsigned();
            $table->foreign('techno_type_id')->references('id')->on('techno_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technos');
    }
}
