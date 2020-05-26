<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('credit'); //學分
            $table->unsignedBigInteger('hour'); //學時
            $table->string('teacher');
            $table->boolean('compulsory'); //必修=0 選修=1
            $table->unsignedBigInteger('grade_id'); //開課班級
            $table->foreign('grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->string('note')->nullable('true');
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
        Schema::dropIfExists('courses');
    }
}
