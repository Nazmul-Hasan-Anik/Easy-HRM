<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_informations', function (Blueprint $table) {
            $table->id();
            $table->String('org_name');
            $table->String('emp_num');
            $table->Integer('phone');
            $table->String('email');
            $table->String('add_str1');
            $table->String('add_str2');
            $table->String('city');
            $table->Integer('zip_code');
            $table->String('note');
            $table->String('tax_id');
            $table->Integer('reg_num');
            $table->Integer('fax');
            $table->String('state');
            $table->String('country');
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
        Schema::dropIfExists('general_informations');
    }
}
