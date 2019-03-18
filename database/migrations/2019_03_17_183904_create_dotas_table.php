<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dotas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('team_name');
            $table->string('contact');
            $table->string('email');
            
            $table->string('member_1_name');
            $table->string('member_1_ign');
            $table->string('member_1_tshirt');

            $table->string('member_2_name');
            $table->string('member_2_ign');
            $table->string('member_2_tshirt');

            $table->string('member_3_name');
            $table->string('member_3_ign');
            $table->string('member_3_tshirt');

            $table->string('member_4_name');
            $table->string('member_4_ign');
            $table->string('member_4_tshirt');

            $table->string('member_5_name');
            $table->string('member_5_ign');
            $table->string('member_5_tshirt');

            $table->string('member_6_name')->nullable();
            $table->string('member_6_ign')->nullable();
            $table->string('member_6_tshirt')->nullable();


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
        Schema::dropIfExists('dotas');
    }
}
