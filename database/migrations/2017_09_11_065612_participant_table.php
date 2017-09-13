<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ParticipantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('flappy')->nullable();
            $table->string('ping')->nullable();
            $table->string('trex')->nullable();
            $table->string('goblin')->nullable();
            $table->string('space')->nullable();
            $table->string('total')->nullable();
            $table->integer('flappy_c')->default('3');
            $table->integer('ping_c')->default('3');
            $table->integer('trex_c')->default('3');
            $table->integer('goblin_c')->default('3');
            $table->integer('space_c')->default('3');
            $table->string('role');
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
        Schema::dropIfExists('participants');
    }
}
