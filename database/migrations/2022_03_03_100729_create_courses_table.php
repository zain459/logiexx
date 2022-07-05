<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class() extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->index();
            $table->unsignedBigInteger('subject_area_id');
            $table->unsignedTinyInteger('language');
            $table->unsignedTinyInteger('difficulty_level');
            $table->unsignedTinyInteger('start_date_status');
            $table->unsignedTinyInteger('duration_interval');
            $table->unsignedTinyInteger('modality');
            $table->unsignedTinyInteger('pace');
            $table->string('fee_type');
            $table->decimal('fee_amount')->nullable();
            $table->string('title');
            $table->text('overview');
            $table->integer('class_size');
            $table->string('time_commitment');
            $table->date('course_start_date');
            $table->string('course_code');
            $table->string('platform');
            $table->string('venue');
            $table->string('duration');
            $table->string('image');
            $table->text('description');
            $table->string('file');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade');
            $table->foreign('subject_area_id')->references('id')->on('subject_areas')
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
        Schema::dropIfExists('courses');
    }
};
