@extends('site.master')
@section('banner-title', 'Course Enrollment')
@section('title', 'Course Enrollment')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="my-3 d-flex align-items-center text-uppercase alert alert-danger alert-message">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('flash::message')

        @yield('content')
    </div>
    <main id="main">
        <section class="block apply-block">
            <div class="container">

                <div class="inline-field mb-4 d-flex flex-column flex-md-row align-items-center">
                    @if($class != null)
                        <label for="CourseTitle">Course Title</label>
                        <span class="tag">{{$class->course->title()}}</span>
                    @endif
                </div>
                <div class="inline-field mb-4 flex-column flex-md-row align-items-center">
                    @if($class != null)
                        <label for="CourseTitle">Course Fee</label>
                        <span class="tag">{{$class->course->feeType()}}</span>
                    @endif
                </div>
                <h2>Applicant Information</h2>
                <p>Please submit this form after providing mandatory information and you will receive your
                    enrollment
                    confirmation shortly by our support team through email or telephone. </p>
                <form action="{{route('site.registration-store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf

                    <div class="personal-information">
                        <strong class="overlap-text">Registration Form</strong>
                        <p>Have you previously registered with A.A.S.E.R.? If so please provide your registration number
                            below. if not please select "No".</p>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Registration No
                            </label>
                            <div>
                                <input type="text" class="form-control" name="registration_no"
                                       value="{{ old('registration_no') }}" id="">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">No
                            </label>
                            <div>
                                <input type="checkbox" name="is_registered"
                                       value="1" {{ old('is_registered') ? 'checked' : '' }}>
                            </div>
                        </div>
                        <p>Please complete the following registration form. If you are already registered, please fill
                            out sections 4 to 8. </p>
                    </div>

                    {{--1. Personal Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">1. Personal Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Full Name </label>
                            <input type="text" name="full_name" id="my" value="{{ old('full_name') }}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Father/Husband Name </label>
                            <input type="text" name="father_husband_name" value="{{ old('father_husband_name') }}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Date of Birth</label>
                            <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Gender </label>
                            <div class="cu_select me-2">
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
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Marital Status </label>
                            <div class="cu_select me-2">
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
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">National Identity Card No. </label>
                            <input type="text" name="c_n_i_c" value="{{ old('c_n_i_c') }}" class="form-control field"
                                   id="cnic"
                                   placeholder="National Id Card #-(xxxxx-xxxxxxx-x)" oninput="formatCNIC(this)">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Passport No <span class="mark"> </span></label>
                            <input type="text" name="passport_no" value="{{ old('passport_no') }}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Religion <span class="mark"> </span></label>
                            <input type="text" name="religion" value="{{ old('religion') }}" class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Nationality <span class="mark"> </span></label>
                            <input type="text" name="nationality" value="{{ old('nationality') }}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Blood Group <span class="mark"> </span></label>
                            <input type="text" name="blood_group" value="{{ old('blood_group') }}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Preferred Learning Method </label>
                            <div class="cu_select me-2">
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
                    </div>

                    {{--2. Correspondence Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">2. Correspondence Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Residential Address </label>
                            <textarea class="form-control" name="residential_address"
                                      id="">{{ old('residential_address') }}</textarea>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Postal Code </label>
                            <input type="" name="postal_code" value="{{ old('postal_code') }}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">City </label>
                            <input type="text" name="city" value="{{ old('city') }}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Country </label>
                            <input type="text" name="country" value="{{ old('country') }}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Telephone </label>
                            <input type="text" name="telephone" value="{{ old('telephone') }}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Phone </label>
                            <div class="d-flex field">
                                <div class="cu_select me-2">
                                    <select class="form-select" name="code" id="code">
                                        <option></option>
                                        @foreach(\Logixs\Modules\Site\Enrollment\Models\CountryTelephoneCode::all() as $countryPhoneCode)
                                            <option
                                                value="{{$countryPhoneCode->code()}}" @selected(old('code') == $countryPhoneCode->id())>{{$countryPhoneCode->code()}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <input type="text" name="phone" value="{{ old('phone') }}"
                                       class="form-control small">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Personal Email </label>
                            <input type="email" name="personal_email" value="{{ old('personal_email') }}"
                                   class="form-control field">
                        </div>
                    </div>

                    {{--3. Education and Employment Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">3. Education and Employment Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Educational Qualification <span class="example-text">(e.g., BS, MBBS, BDS, etc.):</span>
                            </label>
                            <div>
                                <input type="text" class="form-control" name="educational_qualification"
                                       value="{{ old('educational_qualification') }}" id="">
                                <span class="helper-text">Mention (S) along with the degree name in case the degree is in progress</span>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Employment Status </label>
                            <div class="cu_select me-2">
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
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Business Type/Designation <span class="example-text">if self-employed/employed:</span>
                            </label>
                            <div>
                                <input type="text" class="form-control" name="business_type_designation"
                                       value="{{ old('business_type_designation') }}" id="">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Business Name
                            </label>
                            <div>
                                <input type="text" class="form-control" name="business_name"
                                       value="{{ old('business_name') }}" id="">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Official Address </label>
                            <textarea class="form-control" name="official_address"
                                      id="">{{ old('official_address') }}</textarea>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Official Telephone </label>
                            <input type="text" name="official_telephone" value="{{ old('official_telephone') }}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Institutional Email </label>
                            <input type="email" name="institutional_email" value="{{ old('institutional_email') }}"
                                   class="form-control field">
                        </div>
                    </div>

                    {{--4. Type of Activity--}}
                    <div class="personal-information">
                        <strong class="overlap-text">4. Type of Activity</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Type </label>
                            <div class="cu_select me-2">
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
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Activity Title
                            </label>
                            <div>
                                <input type="text" class="form-control" name="activity_title"
                                       value="{{ old('activity_title') }}" id="">
                            </div>
                        </div>
                    </div>

                    {{--5. Fee Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">5. Fee Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Is this a paid course </label>
                            <div class="cu_select me-2">
                                <select class="form-select" id="" name="is_paid">
                                    <option value=""></option>
                                    <option value="{{ 1 }}">Yes</option>
                                    <option value="{{ 0 }}" {{ old('is_paid') == 0 ? 'selected' : ''  }}>No</option>
                                </select>
                            </div>
                            <span class="helper-text">if "No" move to Section 7</span>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Course Fee (PKR)
                            </label>
                            <div>
                                <input type="number" class="form-control" name="course_fee"
                                       value="{{ old('course_fee') }}" id="">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Taxes (if applicable):
                            </label>
                            <div>
                                <input type="number" class="form-control" name="course_tax"
                                       value="{{ old('course_tax') }}" id="">
                            </div>
                        </div>
                    </div>

                    {{--6. Sponsor Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">6. Sponsor Information <small> (Leave blank if the course is
                                free)</small></strong>
                        <p>if you are being sponsored by a company or organization, please provide the following
                            details</p>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Sponsor Name
                            </label>
                            <div>
                                <input type="text" class="form-control" name="sponsor_name"
                                       value="{{ old('sponsor_name') }}" id="">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Contact Person
                            </label>
                            <div>
                                <input type="text" class="form-control" name="contact_person"
                                       value="{{ old('contact_person') }}" id="">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Mobile No
                            </label>
                            <div>
                                <input type="text" class="form-control" name="sponsor_mobile"
                                       value="{{ old('sponsor_mobile') }}" id="">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Email
                            </label>
                            <div>
                                <input type="email" class="form-control" name="sponsor_email"
                                       value="{{ old('sponsor_email') }}" id="">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Address
                            </label>
                            <div>
                                <textarea class="form-control" name="sponsor_address"
                                          id="">{{ old('sponsor_address') }}</textarea>
                            </div>
                        </div>
                    </div>

                    {{--7. Certificate Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">7. Certificate Information <small> (for free courses only)</small></strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">if you are attend a free course and would like to obtain a verifiable
                                certificate, a nominal fee will be charged. </label>
                            <div class="cu_select me-2">
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
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Certificate Charges (PKR)
                            </label>
                            <div>
                                <input type="number" class="form-control" name="certificate_charge"
                                       value="{{ old('certificate_charge') }}" id="">
                            </div>
                        </div>
                    </div>

                    {{--8. Emergency Contact Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">8. Emergency Contact Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Name
                            </label>
                            <div>
                                <input type="text" class="form-control" name="emergency_name"
                                       value="{{ old('emergency_name') }}" id="">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Relationship
                            </label>
                            <div>
                                <input type="text" class="form-control" name="emergency_relationship"
                                       value="{{ old('emergency_relationship') }}" id="">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Mobile No
                            </label>
                            <div>
                                <input type="text" class="form-control" name="emergency_mobile_no"
                                       value="{{ old('emergency_mobile_no') }}" id="">
                            </div>
                        </div>
                    </div>
                    @if($class->course->feeType() == 'paid')
                        <div class="fieldgroup">
                            <h3>Accepted Payment Methods</h3>
                            <p>You can make payments on Logixs Academy using the Visa Debit/Credit Card.</p>
                            <p><img src="images/visa.jpg" class="me-3" alt="">Debit/Credit Card + 3% transaction fees
                            </p>
                            <a href="#" class="btn btn-secondary mt-4">Pay Here</a>
                            <p class="my-4">or</p>
                        </div>
                        <div class="fieldgroup">
                            <h3>Bank Transfer</h3>
                            <div class="d-sm-flex bank-information">
                                <div class="bank-img"><img src="images/bank.png" class="me-sm-5 mb-5" alt=""></div>
                                <div class="text">
                                    <dl>
                                        <dt>Bank</dt>
                                        <dd>Meezan Bank Limited</dd>
                                        <dt>Account Title</dt>
                                        <dd>Logixs International (Private) Limited</dd>
                                        <dt>Bank Account No.</dt>
                                        <dd>000158745232</dd>
                                        <dt>IBAN No.</dt>
                                        <dd>PK1452ABP5885425</dd>
                                        <dt>Branch Code</dt>
                                        <dd>0477</dd>
                                        <dt>Branch Address</dt>
                                        <dd>Kheyaban-e-Jinnah Road, Lahore, Punjab, Pakistan</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    @endif
                    <h3 class="subheading">Upload Deposit Slip</h3>
                    <p class="fz18">Files required for submission include your fee deposit slip or certificate
                        acquisition
                        fee for free courses only (optional). Please note that Larger file take longer to upload. Please
                        keep file name short and relevant. Image should be submitted in electronic form and legible
                        (e.g.,
                        formats: JPEG and PNG).</p>
                    <div class="field">
                        <div class="attachment">
                            <input type="file" name="file" id="file">
                            <div class="inner">
                                <i class="fa fa-upload"></i>
                                <span class="d-flex mb-2">Drag and drop your file here</span>
                                <span class="btn btn-dark" onclick="myFunction()">Choose File</span>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table doc-table">
                            <thead>
                            <tr>
                                <th>File Type</th>
                                <th>File Name</th>
                                <th>Description</th>
                                <th>File Size</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="myTable">
                            <tr>
                                <td title="File Type" id="jpg"></td>
                                <td title="File Name">
                                    <span class="d-inline-block" id="name-ectention"></span>
                                    <span class="d-none" style="color:#666;" id="date"></span>
                                </td>
                                <td title="Description" width="355"><input type="text" class="form-control"
                                                                           placeholder="Deposit Slip"></td>
                                <td title="File Size" id="size"></td>
                                <td class="Action"><a
                                        href="#" id="delete">[Delete]</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <label class="fullcheck">
                        <input type="checkbox">
                        <span class="check"></span>
                        <span class="text-primary label">By providing this information, you agree to our terms and privacy policy. You agree that we can contact you about Logixs Academy and use data from third parties to personalize your experience.</span>
                    </label>
                    <input type="hidden" value="{{ $class->id() }}" name="classId" required/>
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
            </div>
        </section>
    </main>
    <script>
        var file = document.getElementById('file');
        file.addEventListener('change', function (e) {
            e.preventDefault();
            var options = {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'};
            var today = new Date();
            var fileName = document.getElementById('file').files[0].name;
            var fileSize = document.getElementById('file').files[0].size;
            var fileType = document.getElementById('file').files[0].type;
            var fileModifiedDate = document.getElementById('file').files[0].lastModifiedDate;
            var name = document.getElementById("name-ectention").innerHTML = fileName + "</br>".concat(document.getElementById("date").innerHTML = today.toLocaleDateString("en-US", options));
            if (fileSize >= 1024) {
                var size = (fileSize / 1024);
                document.getElementById('size').innerHTML = size.toFixed(2) + "KB";
            }
            if (fileType.split('/').pop().toLowerCase() === 'jpeg') {
                document.getElementById('jpg').innerHTML = `<i class="icon-jpg"></i>`
            } else {
                document.getElementById('jpg').innerHTML = `<i class="icon-pdf"></i>`
            }
            console.log(fileType);
        });
        var dele = document.getElementById("delete").addEventListener("click", function (e) {
            e.preventDefault();
            var name = document.getElementById("name-ectention").innerHTML = "";
            document.getElementById('size').innerHTML = "";
            document.getElementById('jpg').innerHTML = ""
        });

        $(document).ready(function () {
            $('#code').select2({});
        });

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
