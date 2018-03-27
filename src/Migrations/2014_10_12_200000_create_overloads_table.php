<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration as IMigration;

class CreateOverloadsTable extends IMigration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overloads', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->dateTime('dateTime');
            $table->string('fixedString',31);
            $table->string('variableString',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('overloads');
    }
}