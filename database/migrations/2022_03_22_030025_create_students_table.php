<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->integer("rollNo");
            $table->foreignId("school_id")->constrained();
            $table->string("reg_no")->nullable();
            $table->string("fatherName");
            $table->string("motherName");
            $table->integer("maths");
            $table->integer("sci");
            $table->integer("sst");
            $table->integer("hindi");
            $table->integer("eng");
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
        Schema::dropIfExists('students');
    }
};
