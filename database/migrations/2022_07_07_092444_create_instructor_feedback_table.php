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
        Schema::create('instructor_feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->index();
            $table->unsignedBigInteger('instructor_id')->index();
            $table->integer('instructor_course_content');
            $table->integer('instructor_days_allocated_course');
            $table->integer('instructor_delivery_method');
            $table->string('instructor_recommend_improvements_course');
            $table->string('instructor_comment_on_continuing_appropriateness');
            $table->string('instructor_like_most_about_course');
            $table->string('instructor_like_us_know_about_course');
            $table->integer('instructor_quality_of_course');
            $table->timestamps();

            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('cascade');
            $table->foreign('instructor_id')->references('id')->on('instructors')
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
        Schema::dropIfExists('instructor_feedback');
    }
};