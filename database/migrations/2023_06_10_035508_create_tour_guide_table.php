<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourGuideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_guide', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('image');
            $table->string('name');
            $table->string('location');
            $table->string('transportation');
            $table->integer('days');
            $table->integer('price');
            $table->softDeletes();
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
        Schema::dropIfExists('tour_guide');
    }
}
