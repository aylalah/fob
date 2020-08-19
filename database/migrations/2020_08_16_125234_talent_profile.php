<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TalentProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_profile', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('talent_category_id');
            $table->string('talent_subcategory_id');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('age');
            $table->string('date_of_birth');
            $table->string('sex');
            $table->string('location');
            $table->string('signed_date');
            $table->string('about');
            $table->string('experience');
            $table->string('degree');
            $table->string('talent_level');
            $table->string('website');
            $table->string('images');
            $table->string('video');
            $table->string('audio');
            $table->string('skill_rate_1');
            $table->string('skill_rate_2');
            $table->string('skill_rate_3');
            $table->string('created_by');
            $table->string('updated_by');
            $table->string('status');
            $table->string('c_date');
            $table->string('c_time');
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
