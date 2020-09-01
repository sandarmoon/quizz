<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('quizz_id');
            $table->string('description');
            $table->string('estimateAns_One');
            $table->string('estimateAns_Two');
            $table->string('estimateAns_Three');
            $table->string('estimateAns_Four');
            $table->string('answer');
            $table->foreign('quizz_id')
                ->references('id')
                ->on('quizzs')
                ->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('questions');
    }
}
