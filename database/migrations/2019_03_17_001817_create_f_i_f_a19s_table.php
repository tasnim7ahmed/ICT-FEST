<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFIFA19sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_i_f_a19s', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('contact');
            $table->string('email');
            $table->string('device');
            $table->integer('total');
            $table->integer('paid');
            $table->string('selected');
            $table->string('tshirt');

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
        Schema::dropIfExists('f_i_f_a19s');
    }
}
