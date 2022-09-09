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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('issue_date');
            $table->string('certificate');
            $table->unsignedBigInteger('enrollment_id')->index();
            $table->unsignedBigInteger('course_id')->index();
            $table->timestamps();

            $table->foreign('enrollment_id')->references('id')->on('enrollments')
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
        Schema::dropIfExists('certificates');
    }
};
