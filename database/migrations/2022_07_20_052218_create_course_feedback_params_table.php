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
        Schema::create('course_feedback_params', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feedback_params_id')->index();
            $table->unsignedBigInteger('course_id')->index();
            $table->string('type');
            $table->timestamps();

            $table->foreign('feedback_params_id')->references('id')->on('feedback_params')
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
        Schema::dropIfExists('course_feedback_params');
    }
};
