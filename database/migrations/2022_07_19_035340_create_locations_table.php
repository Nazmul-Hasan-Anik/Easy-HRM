<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->String('locations_name');
            $table->String('locations_country');
            $table->String('locations_state');
            $table->String('locations_city');
            $table->String('locations_address');
            $table->String('locations_zip');
            $table->String('locations_phone');
            $table->String('locations_fax');
            $table->String('locations_note');
            $table->String('locations_numemp');
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
        Schema::dropIfExists('locations');
    }
}
