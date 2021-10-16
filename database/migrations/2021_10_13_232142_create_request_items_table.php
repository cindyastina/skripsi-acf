<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_items', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('requests_id');
            $table->foreign('requests_id')
                ->references('id')
                ->on("requests")
                ->onDelete('cascade');

            $table->unsignedBigInteger('items_id');
            $table->foreign('items_id')
                ->references('id')
                ->on("items")
                ->onDelete('cascade');

            $table->bigInteger('quantity');
            $table->bigInteger('total price');
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
        Schema::dropIfExists('request_items');
    }
}
