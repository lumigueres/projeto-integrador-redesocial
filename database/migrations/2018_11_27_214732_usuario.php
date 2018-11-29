<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function($table){
            $table->increments('usuario_id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('e-mail');
            $table->string('celular');
            $table->string('senha');
            $table->string('senhaConfirme');
            $table->dateTimeTz('criado');	
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
        Schema::dropIfExists('usuario');
    }
}
