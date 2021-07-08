<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->morphs('target');
            $table->unsignedInteger('percent');
            $table->dateTime('from');
            $table->dateTime('to');
            $table->timestamps();
        });
        Schema::create('offer_translations', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('offer_id');
            $table->string('name')->nullable();
            $table->string('locale')->index();
            $table->unique(['offer_id', 'locale']);
            $table->foreign('offer_id')->references('id')->on('offers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_translations');
        Schema::dropIfExists('offers');
    }
}
