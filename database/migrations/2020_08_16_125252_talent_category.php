<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TalentCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_category', function (Blueprint $table) {
            $table->id();
            $table->string('talentcategory_name');
            $table->string('talentcategory_description');
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
