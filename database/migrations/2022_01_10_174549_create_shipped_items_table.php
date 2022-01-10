<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipped_items', function (Blueprint $table) {


            $table->increments('id');
            $table->integer('no');
            $table->integer('weight')->nullable();
            $table->integer('amount')->nullable();
            $table->integer('dimensions')->nullable();
            $table->string('destinations')->nullable();
            $table->integer('insurance')->nullable();
            $table->date('final_delivery_date')->nullable();

            $table->Integer('retail_centers_uid')->unsigned();
            $table->foreign('retail_centers_uid')->references('uid')->on('retail_centers')->onDelete('cascade');

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
        Schema::dropIfExists('shipped_items');
    }
}
