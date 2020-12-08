<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id')->unsigned();
            $table->string('nom');
            $table->string('logo')->nullable()->comment('chemin relatif vers l\'image');
            $table->string('detail');
            $table->longText('description');
            $table->string('liensite')->nullable();
            $table->string('liengithub')->nullable();
            $table->string('langage')->nullable();
            $table->integer('progression')->comment('progression du projet en pourcentage');
            $table->softDeletes();
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
        Schema::dropIfExists('projets');
    }
}
