<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsvImportTable extends Migration
{
    /**
     * Run the migrations.
     * CROSP = Conselho regional de Odontologia de São Paulo
     * @return void
     */
    public function up()
    {
        Schema::create('csv_import', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('birth');
            $table->integer('age');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('csv_import');
    }
}
