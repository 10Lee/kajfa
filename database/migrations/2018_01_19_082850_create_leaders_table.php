<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('leader_name');

            //foreign key
            $table->integer('rank_id')->unsigned();
            $table->foreign('rank_id')->references('id')->on('ranks')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('family_id')->unsigned()->nullable();
            $table->foreign('family_id')->references('id')->on('families')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('district_id')->unsigned()->nullable();
            $table->foreign('district_id')->references('id')->on('districts')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('area_id')->unsigned()->nullable();
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
        Schema::dropForeign('leaders_rank_id_foreign');
        Schema::dropForeign('leaders_family_id_foreign');
        Schema::dropForeign('leaders_district_id_foreign');
        Schema::dropForeign('leaders_area_id_foreign');
        Schema::dropIfExists('leaders');
    }
}
