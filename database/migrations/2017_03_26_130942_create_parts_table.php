<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('parts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('parts_num')->unique();
            $table->string('level');
            $table->string('standard_price');
            $table->string('length');
            $table->string('width');
            $table->string('height');
            $table->string('weight');
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
        //
    }
}
