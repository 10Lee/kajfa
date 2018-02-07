<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('district_name');

            // Foreign Key area_id
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('areas')
            ->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropForeign('districts_area_id_foreign');
        Schema::dropIfExists('districts');
    }
}
