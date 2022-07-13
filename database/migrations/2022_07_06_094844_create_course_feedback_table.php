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
        Schema::create('course_learner_feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->index();
            $table->integer('course_content');
            $table->integer('days_allocated_course');
            $table->integer('delivery_method');
            $table->string('recommend_improvements_course');
            $table->string('comment_on_continuing_appropriateness');
            $table->string('like_most_about_course');
            $table->string('like_us_know_about_course');
            $table->integer('quality_of_course');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_feedback');
    }
};
