<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent__profiles', function (Blueprint $table) {
            $table->id();
             $table->string('user_id');
            $table->string('talent_category_id')->nullable();
            $table->string('talent_subcategory_id')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('facebook')->nullable();
            $table->string('age')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('sex')->nullable();
            $table->string('location')->nullable();
            $table->string('signed_date')->nullable();
            $table->string('about')->text();
            $table->string('experience')->nullable();
            $table->string('degree')->nullable();
            $table->string('talent_level')->nullable();
            $table->string('website')->nullable();
            $table->string('images')->nullable();
            $table->string('video')->nullable();
            $table->string('audio')->nullable();
            $table->string('rate_1')->nullable();
            $table->string('rate_2')->nullable();
            $table->string('rate_3')->nullable();
             $table->string('skill_1')->nullable();
            $table->string('skill_2')->nullable();
            $table->string('skill_3')->nullable();
             $table->string('reason_1')->nullable();
            $table->string('reason_2')->nullable();
            $table->string('reason_3')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->string('status')->default('active');
            $table->string('c_date')->nullable();
            $table->string('c_time')->nullable();
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
        Schema::dropIfExists('talent__profiles');
    }
}
