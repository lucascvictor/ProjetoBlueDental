<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDentistasTable extends Migration
{
    /**
     * Run the migrations.
     * CROSP = Conselho regional de Odontologia de São Paulo
     * @return void
     */
    public function up()
    {
        Schema::create('notebook', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clinic_id');
            $table->integer('dentist_id');
            $table->integer('schedule_id');
            $table->integer('rotation_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notebook');
    }
}
