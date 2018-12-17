<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RefactorCreateTopicQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_question', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_topic')->unsigned();
            $table->integer('id_question')->unsigned();
            $table->foreign('id_topic')->references('id')->on('topics')->onDelete('cascade');
            $table->foreign('id_question')->references('id')->on('questions')->onDelete('cascade');
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
        Schema::dropIfExists('topic_question');
    }
}
