<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsShoppinglistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_shoppinglist', function (Blueprint $table) {
            $table->bigInteger('item_id')->unsigned()->index();
            $table->foreign('item_id')
                ->references('id')->on('items')
                ->onDelete('cascade');

            $table->bigInteger('shoppinglist_id')->unsigned()->index();
            $table->foreign('shoppinglist_id')
                ->references('id')->on('shoppinglists')
                ->onDelete('cascade');

            $table->primary(['item_id', 'shoppinglist_id']);

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
        Schema::dropIfExists('item_shoppinglist');
    }
}
