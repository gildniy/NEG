<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('question_id')->unsigned();
            $table->integer('author_id')->unsigned();

//            $table->string('subject');
            $table->text('body');
            $table->boolean('is_solution')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('answers');
    }
}
