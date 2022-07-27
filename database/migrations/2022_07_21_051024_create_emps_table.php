<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emps', function (Blueprint $table) {
            $table->id();
            $table->String('firstname');
            $table->String('lastname');
            $table->String('email');
            $table->String('phone');
            $table->foreignId('department_id')->nullable()->constrained();
            $table->foreignId('designation_id')->nullable()->constrained();
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('emps');
    }
}
