<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('stations', function (Blueprint $table) {
            $table->id();
            $table->string('alabang');
            $table->string('sucat');
            $table->string('bicutan');
            $table->string('fti');
            $table->string('nichols');
            $table->string('edsa');
            $table->string('pasay_road');
            $table->string('dela_rosa');
            $table->string('vito_cruz');
            $table->string('san_andres');
            $table->string('paco');
            $table->string('pandacan');
            $table->string('sta_mesa');
            $table->string('espana');
            $table->string('laon_laon');
            $table->string('bluementrit');
            $table->string('tutuban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stations');
    }
}
