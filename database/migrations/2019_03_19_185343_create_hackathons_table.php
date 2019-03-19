<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHackathonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hackathons', function (Blueprint $table) {
            $table->increments('id');

            $table->string('team_name');
            $table->string('category');
            $table->string('institution');
            $table->string('contact');
            $table->string('email');
            
            $table->string('member_1_name');
            $table->string('member_1_tshirt');

            $table->string('member_2_name');
            $table->string('member_2_tshirt');

            $table->string('member_3_name');
            $table->string('member_3_tshirt');

            $table->string('member_4_name')->nullable();
            $table->string('member_4_tshirt')->nullable();


            $table->integer('total');
            $table->integer('paid');
            $table->string('selected');

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
        Schema::dropIfExists('hackathons');
    }
}
