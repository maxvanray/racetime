<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('races', function (Blueprint $table) {
            $table->increments('id');

            $table->string('url');
            $table->string('racename');
            $table->string('start_location');
            $table->string('finish_location');
            $table->dateTime('starttime');
            $table->string('length');
            $table->text('description');
            $table->text('terms');

            $table->string('race_manager');
            $table->string('race_manager_email');

            $table->string('results');
            $table->string('registration');

            $table->string('email')->unique();
            $table->string('user');
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
        //
    }
}
