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
        Schema::create('become_an_instructor', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('degree');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('city');
            $table->string('post_code');
            $table->string('province');
            $table->string('country');
            $table->string('teaching_interest');
            $table->string('subject_areas');
            $table->text('tentative_course_title')->nullable();
            $table->text('available_to_start_work');
            $table->date('date');
            $table->string('file');
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
        Schema::dropIfExists('become_an_instructor');
    }
};
