<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyprodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myprods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designation_prod');
            $table->string('image_prod',100);
            $table->integer('prix');
            $table->integer('quantite');
            $table->integer('cat_id')->unsigned()->index();
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('mycats')
            ->onDelete('restrict')
            ->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('myprods');
    }
}
