<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('farmers', function (Blueprint $table) {
            $table->increments('fid');
            $table->string('farmer_name');
            $table->string('farmer_location');
            $table->integer('farmer_contact');
            $table->timestamps();
        });

        Schema::create('crops', function (Blueprint $table){
            $table->increments('cid');
            $table->string('crop_name');
            $table->integer('crop_cost_per_lb');
            $table->string('crop_image');
            $table->date('crop_produce_date');
            $table->integer('crop_quantity');
            $table->date('crop_estimate_reap_date');
            $table->integer('crop_user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('farmers');
         Schema::dropIfExists('crops');
    }
}
