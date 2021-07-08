<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_companies', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
        });

        Schema::create('shipping_company_translations', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('shipping_company_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['shipping_company_id', 'locale']);
            $table->foreign('shipping_company_id')->references('id')->on('shipping_companies')->cascadeOnDelete();
        });

        Schema::table('orders', function (Blueprint $table) {
            $table->foreignId('shipping_company_id')->nullable();
            $table->foreign('shipping_company_id')->references('id')->on('shipping_companies')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_company_translations');
        Schema::dropIfExists('shipping_companies');
    }
}
