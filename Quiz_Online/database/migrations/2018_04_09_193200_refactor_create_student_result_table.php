<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RefactorCreateStudentResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_result', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_student')->unsigned();
            $table->integer('id_topic')->unsigned();
            $table->integer('id_question')->unsigned();
            $table->integer('id_answer_st')->unsigned();
            $table->foreign('id_student')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('id_topic')->references('id')->on('topics')->onDelete('cascade');
            $table->foreign('id_question')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('id_answer_st')->references('id')->on('answer_question')->onDelete('cascade');
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
        Schema::dropIfExists('student_result');
    }
}
