<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PreusLloguerBcn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('any');
            $table->string('trimestre');
            $table->string('codi_districte');
            $table->string('nom_districte');
            $table->string('codi_barri');
            $table->string('nom_barri');
            $table->string('lloguer_mitja');
            $table->string('preu');
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
        Schema::dropIfExists('preu');
    }
}
