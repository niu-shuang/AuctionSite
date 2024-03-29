<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('car_products');
        Schema::create('car_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name',255);
            $table->string('thumbnail',255);
            $table->bigInteger('start_price');
            $table->bigInteger('buyout_price');
            $table->text('photos');
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
        Schema::dropIfExists('car_products');
    }
};
