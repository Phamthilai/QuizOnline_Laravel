<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RefactorCreateStudentTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_test', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_student')->unsigned();
            $table->integer('id_topic')->unsigned();
            $table->foreign('id_student')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('id_topic')->references('id')->on('topics')->onDelete('cascade');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('status_student_start');
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
        Schema::dropIfExists('student_test');
    }
}
