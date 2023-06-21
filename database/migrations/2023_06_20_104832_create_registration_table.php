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
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('class_id')->index();
            $table->string('registration_no')->unique()->nullable();
            $table->boolean('is_registered')->default(1);

//            1. Personal Information
            $table->string('full_name')->nullable();
            $table->string('father_husband_name')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('c_n_i_c')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('preferred_learning_method')->nullable();

//            2. Correspondence Information
            $table->text('residential_address')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('telephone')->nullable();
            $table->string('code')->nullable();
            $table->string('phone')->nullable();
            $table->string('personal_email')->nullable();

//            3. Education and Employment Information
            $table->text('educational_qualification')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('business_type_designation')->nullable();
            $table->string('business_name')->nullable();
            $table->string('official_address')->nullable();
            $table->string('official_telephone')->nullable();
            $table->string('institutional_email')->nullable();

//            4. Type of Activity
            $table->string('activity_type')->nullable();
            $table->string('activity_title')->nullable();

//            5. Fee Information
            $table->boolean('is_paid')->nullable();
            $table->string('course_fee')->nullable();
            $table->string('course_tax')->nullable();

//            6. Sponsor Information
            $table->string('sponsor_name')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('sponsor_mobile')->nullable();
            $table->string('sponsor_email')->nullable();
            $table->text('sponsor_address')->nullable();

//            7. Certificate Information
            $table->string('certificate_nominal_fee')->nullable();
            $table->string('certificate_charge')->nullable();

//            8. Emergency Contact Information
            $table->string('emergency_name')->nullable();
            $table->string('emergency_relationship')->nullable();
            $table->string('emergency_mobile_no')->nullable();

            $table->string('file')->nullable();

            $table->foreign('class_id')->references('id')->on('classes')
                ->onDelete('cascade');

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
        Schema::dropIfExists('registration');
    }
};
