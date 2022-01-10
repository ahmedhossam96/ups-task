<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportationItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportation_items', function (Blueprint $table) {
           
            $table->Integer('shipped_items_id')->unsigned();
            $table->foreign('shipped_items_id')->references('id')
            ->on('shipped_items')->onDelete('cascade');

            $table->Integer('transportation_id')->unsigned();
            $table->foreign('transportation_id')->references('id')
            ->on('transportation')->onDelete('cascade');


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
        Schema::dropIfExists('transportation_items');
    }
}
