<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProjectTechnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_technos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('techno_id')->unsigned();
            $table->foreign('techno_id')->references('id')->on('technos');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technos');
    }
}
