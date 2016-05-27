<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('instrutor_id');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estudantes');
    }
}
