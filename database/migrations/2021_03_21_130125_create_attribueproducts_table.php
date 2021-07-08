<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttribueproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribueproducts', function (Blueprint $table) {
            $table->id();
            $table->string('price')->nullable();
            $table->integer('producttype_id');

            $table->string('size')->nullable();
            $table->timestamps();
        });

        Schema::create('attribueproduct_translations', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('attribueproduct_id');
            $table->string('name')->nullable();
            $table->string('description')->nullable();

            $table->string('locale')->index();
            $table->unique(['attribueproduct_id', 'locale']);
            $table->foreign('attribueproduct_id')->references('id')->on('attribueproducts')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribueproducts');
    }
}
