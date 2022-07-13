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
        Schema::create('webinars_series', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('speaker');
            $table->string('moderator');
            $table->string('organization');
            $table->string('sponsor');
            $table->string('focal_person');
            $table->string('focal_person_telephone');
            $table->string('focal_person_email')->unique();
            $table->string('link');
            $table->string('meeting_id');
            $table->string('passcode');
            $table->longText('image')->nullable();
            $table->longText('link_image')->nullable();
            $table->text('short_description');
            $table->date('start_date');
            $table->date('end_date');

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
        Schema::dropIfExists('webinars_series');
    }
};
