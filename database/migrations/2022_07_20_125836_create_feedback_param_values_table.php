<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback_param_values', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('instructor_feedback_id')->nullable();
            $table->unsignedBigInteger('course_feedback_id')->nullable();
            $table->unsignedBigInteger('course_feedback_param_id');
            $table->string('course_feedback_param_value');
            $table->timestamps();

            $table->foreign('instructor_feedback_id')->references('id')->on('instructor_feedback')
                ->onDelete('cascade');
            $table->foreign('course_feedback_id')->references('id')->on('course_learner_feedback')
                ->onDelete('cascade');
            $table->foreign('course_feedback_param_id')->references('id')->on('course_feedback_params')
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
        Schema::dropIfExists('feedback_param_values');
    }
};
