<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDentistsTable extends Migration
{
    /**
     * Run the migrations.
     * CROSP = Conselho regional de Odontologia de São Paulo
     * @return void
     */
    public function up()
    {
        Schema::create('dentists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('crosp', 5);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dentists');
    }
}
