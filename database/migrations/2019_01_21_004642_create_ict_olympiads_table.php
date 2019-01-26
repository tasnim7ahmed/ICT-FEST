<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIctOlympiadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ict_olympiads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('category');
            $table->string('contact');
            $table->string('email')->nullable();
            $table->string('institution');
            $table->integer('total');
            $table->string('paid');
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
        Schema::dropIfExists('ict_olympiads');
    }
}
