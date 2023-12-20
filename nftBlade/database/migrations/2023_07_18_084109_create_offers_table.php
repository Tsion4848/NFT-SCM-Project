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
            $table->string('card_number');
            $table->decimal('price', 8, 2);
            // $table->unsignedBigInteger('image_id');
            $table->timestamps();
            // $table->foreign('image_id')->references('id')->on('images')->onDelete('set null');
        });

        // Schema::table('offers', function (Blueprint $table) {
        //     $table->foreign('image_id')->references('id')->on('images');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
}
