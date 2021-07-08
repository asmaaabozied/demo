<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_prices', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('shipping_company_id');
            $table->foreign('shipping_company_id')->references('id')->on('shipping_companies')->cascadeOnDelete();
            $table->foreignId('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnDelete();
            $table->decimal('first_price', 10, 3)->nullable();
            $table->decimal('second_price', 10, 3)->nullable();
            $table->timestamps();
        });

        Schema::create('shipping_price_translations', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('shipping_price_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['shipping_price_id', 'locale']);
            $table->foreign('shipping_price_id')->references('id')->on('shipping_prices')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_prices');
    }
}
