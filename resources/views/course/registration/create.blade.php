@extends('layout')
@section('title', 'Courses')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Add Webinar</h3>

        <a href="" class="btn btn-sm btn-primary">
            View All Registration
        </a>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Registration</h5>
        </div>
        <div class="card-body twocolumns-form">
            <form action="{{ route('course-class.registration.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Registration No</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="registration_no"
                               value="{{ old('registration_no') }}" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">No</label>
                    <div class="col-sm-6">
                        <input type="checkbox" name="is_registered"
                               value="1" {{ old('is_registered') ? 'checked' : '' }}>
                        <p>Please complete the following registration form. If you are already registered, please fill
                            out sections 4 to 8. </p>
                    </div>
                </div>

                {{--1. Personal Information--}}
                <div class="mb-3 row">
                    <h3 class="overlap-text">1. Personal Information</h3>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Full Name</label>
                    <div class="col-sm-6">
                        <input type="text" name="full_name" id="my" value="{{ old('full_name') }}"
                               class="form-control field">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Father/Husband Name</label>
                    <div class="col-sm-6">
                        <input type="text" name="father_husband_name" value="{{ old('father_husband_name') }}"
                               class="form-control field">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Date of Birth</label>
                    <div class="col-sm-6">
                        <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}"
                               class="form-control field">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Gender </label>
                    <div class="col-sm-6">
                        <select class="form-select" id="" name="gender">
                            <option value=""></option>
                            <option value="{{ 'Male' }}" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male
                            </option>
                            <option value="{{ 'Female' }}" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                Female
                            </option>
                            <option value="{{ 'Other' }}" {{ old('Other') == 'Other' ? 'selected' : '' }}>
                                Other
                            </option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Marital Status </label>
                    <div class="col-sm-6">
                        <select class="form-select" id="" name="marital_status">
                            <option value=""></option>
                            <option
                                value="{{ 'Single' }}" {{ old('marital_status') == 'Single' ? 'selected' : '' }} >
                                Single
                            </option>
                            <option
                                value="{{ 'Married' }}" {{ old('marital_status') == 'Married' ? 'selected' : '' }}>
                                Married
                            </option>
                            <option
                                value="{{ 'Other' }}" {{ old('marital_status') == 'Other' ? 'selected' : '' }}>
                                Other
                            </option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">National Identity Card No.</label>
                    <div class="col-sm-6">
                        <input type="text" name="c_n_i_c" value="{{ old('c_n_i_c') }}" class="form-control field"
                               id="cnic"
                               placeholder="National Id Card #-(xxxxx-xxxxxxx-x)" oninput="formatCNIC(this)">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Passport No</label>
                    <div class="col-sm-6">
                        <input type="text" name="passport_no" value="{{ old('passport_no') }}"
                               class="form-control field">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Nationality</label>
                    <div class="col-sm-6">
                        <input type="text" name="nationality" value="{{ old('nationality') }}"
                               class="form-control field">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Blood Group</label>
                    <div class="col-sm-6">
                        <input type="text" name="blood_group" value="{{ old('blood_group') }}"
                               class="form-control field">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Preferred Learning Method </label>
                    <div class="col-sm-6">
                        <select class="form-select" id="" name="preferred_learning_method">
                            <option value=""></option>
                            <option
                                value="{{ 'Online' }}"{{ old('preferred_learning_method') == 'Online' ? 'selected' : ''}}>
                                Online
                            </option>
                            <option
                                value="{{ 'On-Site' }}" {{ old('preferred_learning_method') == 'On-Site' ? 'selected' : '' }}>
                                On-Site
                            </option>
                            <option
                                value="{{ 'Blended' }}" {{ old('preferred_learning_method') == 'Blended' ? 'selected' : '' }}>
                                Blended
                            </option>
                        </select>
                    </div>
                </div>

                {{--2. Correspondence Information--}}
                <div class="mb-3 row">
                    <h3 class="overlap-text">2. Correspondence Information</h3>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Residential Address</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" name="residential_address"
                                  id="">{{ old('residential_address') }}</textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Postal Code</label>
                    <div class="col-sm-6">
                        <input type="" name="postal_code" value="{{ old('postal_code') }}"
                               class="form-control field">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">City</label>
                    <div class="col-sm-6">
                        <input type="text" name="city" value="{{ old('city') }}"
                               class="form-control field">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Country</label>
                    <div class="col-sm-6">
                        <input type="text" name="country" value="{{ old('country') }}"
                               class="form-control field">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Telephone</label>
                    <div class="col-sm-6">
                        <input type="text" name="telephone" value="{{ old('telephone') }}"
                               class="form-control field">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Phone</label>
                    <div class="col-sm-2">
                        <select class="form-select" name="code" id="code">
                            <option></option>
                            @foreach(\Logixs\Modules\Site\Enrollment\Models\CountryTelephoneCode::all() as $countryPhoneCode)
                                <option
                                    value="{{$countryPhoneCode->id()}}" @selected(old('code') == $countryPhoneCode->id())>{{$countryPhoneCode->code()}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="phone" value="{{ old('phone') }}"
                               class="form-control small">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Personal Email</label>
                    <div class="col-sm-6">
                        <input type="email" name="personal_email" value="{{ old('personal_email') }}"
                               class="form-control field">
                    </div>
                </div>

                {{--3. Education and Employment Information--}}

                <div class="mb-3 row">
                    <h3 class="overlap-text">3. Education and Employment Information</h3>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Educational Qualification
                        <span class="example-text">(e.g., BS, MBBS, BDS, etc.):</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="educational_qualification"
                               value="{{ old('educational_qualification') }}" id="">
                        <span class="helper-text">Mention (S) along with the degree name in case the degree is in progress</span>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Preferred Learning Method </label>
                    <div class="col-sm-6">
                        <select class="form-select" id="" name="employment_status">
                            <option value=""></option>
                            <option
                                value="{{ 'Unemployed' }}" {{ old('employment_status') == 'Unemployed' ? 'selected' : ''}}>
                                Unemployed
                            </option>
                            <option
                                value="{{ 'Self-employed' }}" {{ old('employment_status') == 'Self-employed' ? 'selected' : ''}}>
                                Self-employed
                            </option>
                            <option
                                value="{{ 'Employed' }}" {{ old('employment_status') == 'Employed' ? 'selected' : ''}}>
                                Employed
                            </option>
                            <option
                                value="{{ 'Student' }}" {{ old('employment_status') == 'Student' ? 'selected' : ''}}>
                                Student
                            </option>
                            <option
                                value="{{ 'Employment-Type' }}" {{ old('employment_status') == 'Employment-Type' ? 'selected' : ''}}>
                                Employment Type
                            </option>
                            <option
                                value="{{ 'Private' }}" {{ old('employment_status') == 'Private' ? 'selected' : ''}}>
                                Private
                            </option>
                            <option
                                value="{{ 'Public' }}" {{ old('employment_status') == 'Public' ? 'selected' : ''}}>
                                Public
                            </option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Business Type/Designation
                        <span class="example-text">if self-employed/employed:</span></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="business_type_designation"
                               value="{{ old('business_type_designation') }}" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Business Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="business_name" value="{{ old('business_name') }}"
                               id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Official Address</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" name="official_address"
                                  id="">{{ old('official_address') }}</textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Official Telephone</label>
                    <div class="col-sm-6">
                        <input type="text" name="official_telephone" value="{{ old('official_telephone') }}"
                               class="form-control field">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Institutional Email</label>
                    <div class="col-sm-6">
                        <input type="email" name="institutional_email" value="{{ old('institutional_email') }}"
                               class="form-control field">
                    </div>
                </div>

                {{--4. Type of Activity--}}
                <div class="mb-3 row">
                    <h3 class="overlap-text">4. Type of Activity</h3>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Type</label>
                    <div class="col-sm-6">
                        <select class="form-select" id="" name="activity_type">
                            <option value=""></option>
                            <option
                                value="{{ 'Workshop' }}" {{ old('activity_type') == 'Workshop' ? 'selected' : '' }}>
                                Workshop
                            </option>
                            <option
                                value="{{ 'Short-course' }}" {{ old('activity_type') == 'Short-course' ? 'selected' : '' }}>
                                Short-course
                            </option>
                            <option
                                value="{{ 'Training' }}" {{ old('activity_type') == 'Training' ? 'selected' : '' }}>
                                Training
                            </option>
                            <option
                                value="{{ 'Seminar' }}" {{ old('activity_type') == 'Seminar' ? 'selected' : '' }}>
                                Seminar
                            </option>
                            <option
                                value="{{ 'Symposium' }}" {{ old('activity_type') == 'Symposium' ? 'selected' : '' }}>
                                Symposium
                            </option>
                            <option
                                value="{{ 'Other' }}" {{ old('activity_type') == 'Other' ? 'selected' : '' }}>
                                Other
                            </option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Activity Title</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="activity_title"
                               value="{{ old('activity_title') }}" id="">
                    </div>
                </div>

                {{--5. Fee Information--}}

                <div class="mb-3 row">
                    <h3 class="overlap-text">5. Fee Information</h3>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Is this a paid course</label>
                    <div class="col-sm-6">
                        <select class="form-select" id="" name="is_paid">
                            <option value=""></option>
                            <option value="{{ 1 }}">Yes</option>
                            <option value="{{ 0 }}" {{ old('is_paid') == 0 ? 'selected' : ''  }}>No</option>
                        </select>
                        <span class="helper-text">if "No" move to Section 7</span>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Course Fee (PKR)</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="course_fee"
                               value="{{ old('course_fee') }}" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Taxes (if applicable):</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="course_tax"
                               value="{{ old('course_tax') }}" id="">
                    </div>
                </div>

                {{--6. Sponsor Information--}}

                <div class="mb-3 row">
                    <h3 class="overlap-text">6. Sponsor Information <small> (Leave blank if the course is
                            free)</small></h3>
                </div>
                <p>if you are being sponsored by a company or organization, please provide the following
                    details</p>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Sponsor Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="sponsor_name"
                               value="{{ old('sponsor_name') }}" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Contact Person</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="contact_person"
                               value="{{ old('contact_person') }}" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Mobile No</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="sponsor_mobile"
                               value="{{ old('sponsor_mobile') }}" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Email</label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="sponsor_email"
                               value="{{ old('sponsor_email') }}" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Address</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" name="sponsor_address"
                                  id="">{{ old('sponsor_address') }}</textarea>
                    </div>
                </div>

                {{--7. Certificate Information--}}

                <div class="mb-3 row">
                    <h3 class="overlap-text">7. Certificate Information <small> (for free courses only)</small></h3>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">
                        if you are attend a free course and would like to obtain a verifiable
                        certificate, a nominal fee will be charged.</label>
                    <div class="col-sm-6">
                        <div class="col-sm-6">
                            <select class="form-select" id="" name="certificate_nominal_fee">
                                <option value=""></option>
                                <option
                                    value="{{ 'Unemployed' }}" {{ old('certificate_nominal_fee') == 'Unemployed' ? 'selected' : '' }}>
                                    Yes, I am interested
                                </option>
                                <option
                                    value="{{ 'Self-employed' }}" {{ old('certificate_nominal_fee') == 'Self-employed' ? 'selected' : '' }}>
                                    No, I am not interested
                                </option>
                                <option
                                    value="{{ 'Employed' }}" {{ old('certificate_nominal_fee') == 'Employed' ? 'selected' : '' }}>
                                    Not applicable
                                </option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Certificate Charges (PKR)</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="certificate_charge"
                               value="{{ old('certificate_charge') }}" id="">
                    </div>
                </div>

                {{--8. Emergency Contact Information--}}

                <div class="mb-3 row">
                    <h3 class="overlap-text">8. Emergency Contact Information</h3>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="emergency_name"
                               value="{{ old('emergency_name') }}" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Relationship</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="emergency_relationship"
                               value="{{ old('emergency_relationship') }}" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Mobile No</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="emergency_mobile_no"
                               value="{{ old('emergency_mobile_no') }}" id="">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Link Image</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" name="file"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <input type="hidden" value="{{ $class->id() }}" name="classId" required/>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-10 ms-sm-auto">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function formatCNIC(cnicInput) {
            var cnic = cnicInput.value;

            // Remove any non-digit characters from the input
            cnic = cnic.replace(/\D/g, '');

            // Truncate the input value if it exceeds the desired format length
            if (cnic.length > 13) {
                cnic = cnic.substring(0, 13);
            }

            // Remove dashes from the input
            cnic = cnic.replace(/([^0-9])-+/g, '$1');

            if (cnic.length >= 6) {
                cnic = cnic.substring(0, 5) + "-" + cnic.substring(5);
            }
            if (cnic.length >= 14) {
                cnic = cnic.substring(0, 13) + "-" + cnic.substring(13);
            }

            cnicInput.value = cnic;
        }
    </script>
@endsection
