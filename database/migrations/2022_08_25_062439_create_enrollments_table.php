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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('degree');
            $table->string('code');
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
            $table->boolean('verifiable_certificate')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(false);
            $table->string('file')->nullable();
            $table->string('file_type')->nullable();
            $table->string('file_name')->nullable();
            $table->float('file_size')->nullable();
            $table->unsignedBigInteger('class_id')->index();
            $table->unsignedBigInteger('employment_status');
            $table->timestamps();

            $table->foreign('class_id')->references('id')->on('classes')
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
        Schema::dropIfExists('enrollments');
    }
};
