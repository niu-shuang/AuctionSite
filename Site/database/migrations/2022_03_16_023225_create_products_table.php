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
        Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name',255);
            $table->string('thumbnail',255);
            $table->bigInteger('start_price');
            $table->bigInteger('buyout_price');
            $table->string('maker_name',255);
            $table->string('car_type_name', 255);
            $table->date('model_year');
            $table->integer('displacement');
            $table->bigInteger('mile_age');
            $table->boolean('has_repaired');
            $table->string('body_color',50);
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
        Schema::dropIfExists('products');
    }
};
