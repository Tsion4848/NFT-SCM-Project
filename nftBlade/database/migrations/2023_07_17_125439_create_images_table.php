<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('photographer');
            $table->float('price');
            $table->date('duration');
            $table->string('path', 300);
            $table->timestamps();
        });
    }

    /**$table->string('name');
            $table->mediumText('description');
            $table->string('photographer');
            $table->float('price');
            $table->string('path');
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
