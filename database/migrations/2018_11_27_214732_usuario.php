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
        Schema::create('user_info', function($table){
            $table->increments('user_info_id');
            $table->string('name');
            $table->string('last_name')->default('');
            $table->string('area')->default('');
            $table->string('email')->unique();
            $table->string('position')->default('');
            $table->string('phone')->default('');
            $table->string('number')->default('')->nullable();
            $table->string('mini_bio')->default('')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('active');
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
        Schema::dropIfExists('user_info');
    }
}
