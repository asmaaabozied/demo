<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducttypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producttypes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });


        Schema::create('producttype_translations', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('producttype_id');
            $table->string('name')->nullable();

            $table->string('locale')->index();
            $table->unique(['producttype_id', 'locale']);
            $table->foreign('producttype_id')->references('id')->on('producttypes')->cascadeOnDelete();
        });
    }





    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producttypes');
    }
}
