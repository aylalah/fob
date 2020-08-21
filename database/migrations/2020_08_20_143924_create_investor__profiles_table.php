<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestorProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investor__profiles', function (Blueprint $table) {
            $table->id();
             $table->string('ceo_name');

            $table->string('user_id');

            $table->string('company_industry_category')->nullable();

            $table->string('company_profile')->nullable();

            $table->string('facebook')->nullable();

            $table->string('instagram')->nullable();

            $table->string('twitter')->nullable();

            $table->string('website')->nullable();

            $table->string('image')->nullable();

            $table->string('logo')->nullable();

            $table->string('created_by')->nullable();

            $table->string('updated_by')->nullable();

            $table->string('status')->nullable();

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
        Schema::dropIfExists('investor__profiles');
    }
}
