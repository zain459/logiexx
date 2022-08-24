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
        Schema::create('corporate_partnership', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('work_email')->unique();
            $table->string('phone_number');
            $table->string('company_name');
            $table->string('job_title');
            $table->text('company_size');
            $table->text('contact_on_behalf_of');
            $table->text('company_type');
            $table->text('expected_learners');
            $table->text('country');
            $table->string('teaching_interest');
            $table->string('description')->nullable();

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
        Schema::dropIfExists('corporate_partnership');
    }
};
