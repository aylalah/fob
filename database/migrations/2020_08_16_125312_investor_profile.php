<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InvestorProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor_profile', function (Blueprint $table) {
            $table->id();
            $table->string('ceo_name');
            $table->string('user_id');
            $table->string('company_industry_category');
            $table->string('company_profile');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('website');
            $table->string('image');
            $table->string('logo');
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
