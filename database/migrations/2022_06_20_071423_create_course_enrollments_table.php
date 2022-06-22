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
        Schema::create('course_enrollments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->index();
            $table->unsignedBigInteger('employment_status');
            $table->unsignedBigInteger('code');
            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('degree');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->string('personal_address')->nullable();
            $table->string('personal_city');
            $table->string('personal_post_code');
            $table->string('personal_province');
            $table->string('personal_country');
            $table->string('position');
            $table->string('department');
            $table->string('institution');
            $table->string('institution_address');
            $table->string('institution_city');
            $table->string('institution_post_code');
            $table->string('institution_province_state');
            $table->string('institution_country');
            $table->boolean('verifiable_certificate');
            $table->text('description');
            $table->boolean('status')->default(false);
            $table->string('file')->nullable();
            $table->string('file_type')->nullable();
            $table->string('file_name')->nullable();
            $table->float('file_size')->nullable();

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
        Schema::dropIfExists('course_enrollments');
    }
};
