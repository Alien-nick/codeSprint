<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('buyers', function (Blueprint $table) {
            $table->increments('bid');
            $table->string('buyer_name');
            $table->string('buyer_location');
            $table->string('buyer_contact');
            $table->timestamps();
        });

        Schema::create('demands', function (Blueprint $table){
            $table->increments('id');
            $table->integer('order_quantity');
            $table->string('crop_type');
            $table->date('start_date_of_order');
            $table->date('end_date_of_order');
            $table->string('order_status');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buyers');
        Schema::dropIfExists('demands');
    }
}
