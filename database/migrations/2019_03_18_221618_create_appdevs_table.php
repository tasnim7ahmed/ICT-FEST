<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppdevsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appdevs', function (Blueprint $table) {
            $table->increments('id');

            $table->string('team_name');
            $table->integer('total');
            $table->integer('paid');
            $table->string('selected');
            $table->string('submission');
            $table->string('pdf');
            
            $table->string('member_1_name');
            $table->string('member_1_institution');
            $table->string('member_1_std_id');
            $table->string('member_1_email');
            $table->string('member_1_contact');
            $table->string('member_1_tshirt');

            $table->string('member_2_name');
            $table->string('member_2_institution');
            $table->string('member_2_std_id');
            $table->string('member_2_email');
            $table->string('member_2_contact');
            $table->string('member_2_tshirt');

            $table->string('member_3_name');
            $table->string('member_3_institution');
            $table->string('member_3_std_id');
            $table->string('member_3_tshirt');

            $table->string('member_4_name')->nullable();
            $table->string('member_4_institution')->nullable();
            $table->string('member_4_std_id')->nullable();
            $table->string('member_4_tshirt')->nullable();

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
        Schema::dropIfExists('appdevs');
    }
}
