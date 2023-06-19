@extends('site.master')
@section('title', 'Course Enrollment')
@section('content')
    <div class="title-section">
        <div class="container">
            <div class="inner-menu">
                <a href="{{route('site.course-index')}}" class="btn-link"><span class="button">Browse Our Courses</span></a>
                <a href="#" class="btn-link btn-opener open"><span class="opener"><span>&nbsp;</span></span></a>
            </div>
            <div class="fields-menu">
                <h2>Browse Our Subject Fields</h2>
                <ul>
                    @foreach($subjectFields as $subjectField)
                        @if($subjectField != null)
                            <li>
                                <a href="{{ route('site.course-index', ['subject_areas' => [$subjectField->id()]]) }}">{{$subjectField->name()}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <h1>Course Enrollment</h1>
        </div>
    </div>
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
                <form action="{{route('site.course-class-enrollment-store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="personal-information">
{{--                         1. Personal Information--}}
                        <strong class="overlap-text">1. Personal Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Full Name <span class="mark">*</span></label>
                            <input type="text" name="full_name" id="my" value=""
                                   class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Father/Husband Name <span class="mark">*</span></label>
                            <input type="text" name="father_husband_name" value=""
                                   class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Date of Birth</label>
                            <input type="date" name="date_of_birth" value=""
                                   class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Gender <span class="mark">*</span></label>
                            <div class="cu_select me-2">
                                <select class="form-select" id="" name="gender" required>
                                    <option value=""></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Marital Status <span class="mark">*</span></label>
                            <div class="cu_select me-2">
                                <select class="form-select" id="" name="gender" required>
                                    <option value=""></option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">National Identity Card No. <span class="mark">*</span></label>
                            <input type="text" name="c_n_i_c" value="" class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Passport No <span class="mark"> <span class="mark">*</span></span></label>
                            <input type="text" name="passport_no" value="" class="form-control field"
                                   required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Religion <span class="mark"> <span class="mark">*</span></span></label>
                            <input type="text" name="religion" value="" class="form-control field"
                                   required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Nationality <span class="mark"> <span class="mark">*</span></span></label>
                            <input type="text" name="nationality" value="" class="form-control field"
                                   required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Blood Group <span class="mark"> <span class="mark">*</span></span></label>
                            <input type="text" name="blood_group" value="" class="form-control field"
                                   required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Preferred Learning Method <span class="mark">*</span></label>
                            <div class="cu_select me-2">
                                <select class="form-select" id="" name="preferred_learning_method" required>
                                    <option value=""></option>
                                    <option value="Online">Online</option>
                                    <option value="On-Site">On-Site</option>
                                    <option value="Blended">Blended</option>
                                </select>
                            </div>
                        </div>
                    </div>

{{--                     2. Correspondence Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">2. Correspondence Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Residential Address <span class="mark">*</span></label>
                            <textarea class="form-control" name="residential_address" id="" required></textarea>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Postal Code <span class="mark">*</span></label>
                            <input type="" name="postal_code" value="" class="form-control field"
                                   required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">City <span class="mark">*</span></label>
                            <input type="text" name="institution_city" value=""
                                   class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Country <span class="mark">*</span></label>
                            <input type="text" name="institution_country" value=""
                                   class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Telephone <span class="mark">*</span></label>
                            <input type="text" name="telephone" value=""
                                   class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Phone <span class="mark">*</span></label>
                            <div class="d-flex field">
                                <div class="cu_select me-2">
                                    <select class="form-select" name="code" id="code" required>
                                        <option></option>
                                        @foreach(\Logixs\Modules\Site\Enrollment\Models\CountryTelephoneCode::all() as $countryPhoneCode)
                                            <option
                                                value="{{$countryPhoneCode->id()}}" @selected(old('code') == $countryPhoneCode->id())>{{$countryPhoneCode->code()}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <input type="text" name="phone" value=""
                                       class="form-control small" required>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Personal Email <span class="mark">*</span></label>
                            <input type="email" name="personal_email" value=""
                                   class="form-control field" required>
                        </div>
                    </div>

{{--                     3. Education and Employment Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">3. Education and Employment Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Educational Qualification <span class="example-text">(e.g., BS, MBBS, BDS, etc.):</span>
                                <span class="mark">*</span></label>
                            <div>
                                <input type="text" class="form-control" name="educational_qualification" id=""
                                        required>
                                <span class="helper-text">Mention (S) along with the degree name in case the degree is in progress</span>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Employment Status <span class="mark">*</span></label>
                            <div class="cu_select me-2">
                                <select class="form-select" id="" name="employment_status" required>
                                    <option value=""></option>
                                    <option value="Unemployed">Unemployed</option>
                                    <option value="Self-employed">Self-employed</option>
                                    <option value="Employed">Employed</option>
                                    <option value="Student">Student</option>
                                    <option value="Employment-Type">Employment Type</option>
                                    <option value="Private">Private</option>
                                    <option value="Public">Public</option>
                                </select>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Business Type/Designation <span class="example-text">if self-employed/employed:</span>
                                <span class="mark">*</span></label>
                            <div>
                                <input type="text" class="form-control" name="business_type_designation" id=""
                                        required>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Business Name
                                <span class="mark">*</span></label>
                            <div>
                                <input type="text" class="form-control" name="business_name" id=""
                                        required>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Official Address <span class="mark">*</span></label>
                            <textarea class="form-control" name="official_address" id="" required></textarea>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Official Telephone <span class="mark">*</span></label>
                            <input type="text" name="official_telephone" value="" class="form-control field"
                                   required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Institutional Email <span class="mark">*</span></label>
                            <input type="email" name="institutional_email" value="" class="form-control field"
                                   required>
                        </div>
                    </div>

{{--                     4. Type of Activity--}}
                    <div class="personal-information">
                        <strong class="overlap-text">4. Type of Activity</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Type <span class="mark">*</span></label>
                            <div class="cu_select me-2">
                                <select class="form-select" id="" name="type" required>
                                    <option value=""></option>
                                    <option value="Workshop">Workshop</option>
                                    <option value="Short-course">Short-course</option>
                                    <option value="Training">Training</option>
                                    <option value="Seminar">Seminar</option>
                                    <option value="Symposium">Symposium</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Activity Title
                                <span class="mark">*</span></label>
                            <div>
                                <input type="text" class="form-control" name="activity_title" id=""
                                        required>
                            </div>
                        </div>
                    </div>

{{--                     5. Fee Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">5. Fee Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Is this a paid course <span class="mark">*</span></label>
                            <div class="cu_select me-2">
                                <select class="form-select" id="" name="course_type" required>
                                    <option value=""></option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <span class="helper-text">if "No" move to Section 7</span>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Course Fee (PKR)
                                <span class="mark">*</span></label>
                            <div>
                                <input type="number" class="form-control" name="course_fee" id=""
                                        required>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Taxes (if applicable):
                                <span class="mark">*</span></label>
                            <div>
                                <input type="number" class="form-control" name="tax" id=""
                                       required>
                            </div>
                        </div>
                    </div>

{{--                     6. Sponsor Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">6. Sponsor Information <small> (Leave blank if the course is free)</small></strong>
                        <p>if you are being sponsored by a company or organization, please provide the following details</p>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Sponsor Name
                                <span class="mark">*</span></label>
                            <div>
                                <input type="text" class="form-control" name="sponsor_name" id="">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Contact Person
                                <span class="mark">*</span></label>
                            <div>
                                <input type="text" class="form-control" name="contact_person" id=""
                                       required>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Mobile No
                                <span class="mark">*</span></label>
                            <div>
                                <input type="text" class="form-control" name="mobile" id=""
                                       required>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Email
                                <span class="mark">*</span></label>
                            <div>
                                <input type="email" class="form-control" name="email" id=""
                                       required>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Address
                                <span class="mark">*</span></label>
                            <div>
                                <textarea class="form-control" name="address" id="" required></textarea>
                            </div>
                        </div>
                    </div>

{{--                     7. Certificate Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">7. Certificate Information <small> (for free courses only)</small></strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">if you are attend a free course and would like to obtain a verifiable certificate, a nominal fee will be charged. <span class="mark">*</span></label>
                            <div class="cu_select me-2">
                                <select class="form-select" id="" name="nominal_fee" required>
                                    <option value=""></option>
                                    <option value="Unemployed">Yes, I am interested</option>
                                    <option value="Self-employed">No, I am not interested</option>
                                    <option value="Employed">Not applicable</option>
                                </select>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Certificate Charges (PKR)
                                <span class="mark">*</span></label>
                            <div>
                                <input type="number" class="form-control" name="certificate_charge" id=""
                                       required>
                            </div>
                        </div>
                    </div>

{{--                     8. Emergency Contact Information--}}
                    <div class="personal-information">
                        <strong class="overlap-text">8. Emergency Contact Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Name
                                <span class="mark">*</span></label>
                            <div>
                                <input type="text" class="form-control" name="emergency_name" id=""
                                       required>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Relationship
                                <span class="mark">*</span></label>
                            <div>
                                <input type="text" class="form-control" name="emergency_relationship" id=""
                                       required>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Mobile No
                                <span class="mark">*</span></label>
                            <div>
                                <input type="text" class="form-control" name="emergency_mobile_no" id=""
                                       required>
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
                    <h3 class="subheading">Upload Deposit Slip<span class="mark">*</span></h3>
                    <p class="fz18">Files required for submission include your fee deposit slip or certificate
                        acquisition
                        fee for free courses only (optional). Please note that Larger file take longer to upload. Please
                        keep file name short and relevant. Image should be submitted in electronic form and legible
                        (e.g.,
                        formats: JPEG and PNG).</p>
                    <div class="field">
                        <div class="attachment">
                            <input type="file" name="file" id="file" required>
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
    </script>
@endsection
