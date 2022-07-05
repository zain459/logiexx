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
        Schema::create('webinar_registration', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('work_email')->unique();
            $table->string('phone_number');
            $table->text('organization_name')->nullable();
            $table->text('occupation_type')->nullable();
            $table->string('subject_area');
            $table->text('hear_about_webinar')->nullable();
            $table->string('verifiable_certificate')->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('webinar_registration');
    }
};
