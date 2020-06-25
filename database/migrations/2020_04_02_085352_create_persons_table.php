<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function(Blueprint $table){
                    $table->increments('id');
                    $table->string('name',255);
                    $table->string('email',255);
                    $table->string('password',255);
                    $table->integer('mobile');
                    $table->integer('isVerified');
                    $table -> string('remember_token', 100) -> nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
