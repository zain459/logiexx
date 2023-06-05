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
        Schema::create('why_logixs_section', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->index();
            $table->string('main_heading');
            $table->string('sub_heading');
            $table->text('description');
            $table->string('image')->nullable();

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
        Schema::dropIfExists('why_logixs_section');
    }
};
