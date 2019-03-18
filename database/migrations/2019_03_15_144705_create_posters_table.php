<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\File;

class CreatePostersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posters', function (Blueprint $table) {
            $table->increments('id');

            $table->string('team_name');
            $table->string('category');
            $table->string('institution');
            $table->integer('total');
            $table->integer('paid');
            $table->string('selected');
            $table->string('submission');
            $table->string('pdf');
            
            $table->string('member_1_name');
            $table->string('member_1_email');
            $table->string('member_1_contact');
            $table->string('member_1_tshirt');

            $table->string('member_2_name');
            $table->string('member_2_email');
            $table->string('member_2_contact');
            $table->string('member_2_tshirt');

            $table->string('member_3_name')->nullable();
            $table->string('member_3_email')->nullable();
            $table->string('member_3_contact')->nullable();
            $table->string('member_3_tshirt')->nullable();

            $table->string('coach_name')->nullable();
            $table->string('coach_email')->nullable();
            $table->string('coach_contact')->nullable();
            $table->string('coach_tshirt')->nullable();

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
        Schema::dropIfExists('posters');
    }
}
