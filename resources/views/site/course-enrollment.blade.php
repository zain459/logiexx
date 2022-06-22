@extends('site.master')
@section('title', 'Course Enrollment')
@section('content')
    <div class="title-section">
        <div class="container">
            <div class="inner-menu">
                <a href="courses.php" class="btn-link"><span class="button">Browse Our Courses</span></a>
                <a href="#" class="btn-link btn-opener open"><span class="opener"><span>&nbsp;</span></span></a>
            </div>
            <div class="fields-menu">
                <h2>Browse Our Subject Fields</h2>
                <ul>
                    <li><a href="#">Business & Management</a></li>
                    <li><a href="#">Social Sciences</a></li>
                    <li><a href="#">Health & Medicine</a></li>
                    <li><a href="#">Statistics</a></li>
                    <li><a href="#">Education & Teaching</a></li>
                    <li><a href="#">Supply Chain Management</a></li>
                </ul>
            </div>
            <h1>Course Enrollment</h1>
        </div>
    </div>
    <main id="main">
        <section class="block apply-block">
            <div class="container">

                <div class="inline-field mb-4 d-flex flex-column flex-md-row align-items-center">
                    @if($course != null)
                        <label for="CourseTitle">Course Title</label>
                        <span class="tag">{{$course->title()}}</span>
                    @endif
                </div>
                <div class="inline-field mb-4 flex-column flex-md-row align-items-center">
                    @if($course != null)
                        <label for="CourseTitle">Course Fee</label>
                        <span class="tag">{{$course->feeType()}}</span>
                    @endif
                </div>
                <h2>Applicant Information</h2>
                <p>Please submit this form after providing mandatory information and you will receive your
                    enrollment
                    confirmation shortly by our support team through email or telephone. </p>
                <form action="{{route('site.course-enrollment-store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="personal-information">
                        <strong class="overlap-text">Personal Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Title <span class="mark">*</span></label>
                            <input type="text" name="title" id="my" value="{{old('title')}}"
                                   class="form-control field">
                            <span class="note">(Prof., Mr., Ms., Mrs., etc.)</span>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Given/First Name <span class="mark">*</span></label>
                            <input type="text" name="first_name" value="{{old('first_name')}}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Middle Name</label>
                            <input type="text" name="middle_name" value="{{old('middle_name')}}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Family/Last Name <span class="mark">*</span></label>
                            <input type="text" name="last_name" value="{{old('last_name')}}" class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Degree <span class="mark">*</span></label>
                            <input type="text" name="degree" value="{{old('degree')}}" class="form-control field">
                            <span class="note">(MS, MD, PhD etc.)</span>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Telephone <span class="mark">*</span></label>
                            <div class="d-flex field">
                                <div class="cu_select me-2">
                                    <select class="form-select" name="code" id="code" required>
                                        <option></option>
                                        @foreach(\Logixs\Modules\Site\Enrollment\Models\CountryTelephoneCode::all() as $countryTelephoneCode)
                                            <option
                                                value="{{$countryTelephoneCode->id()}}">{{$countryTelephoneCode->code()}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <input type="text" name="telephone" value="{{old('telephone')}}"
                                       class="form-control small">
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Email <span class="mark"> <span class="mark">*</span></span></label>
                            <input type="text" name="email" value="{{old('email')}}" class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Address</label>
                            <input type="text" name="personal_address" value="{{old('personal_address')}}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">City <span class="mark">*</span></label>
                            <input type="text" name="personal_city" value="{{old('personal_city')}}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Post Code <span class="mark">*</span></label>
                            <input type="text" name="personal_post_code" value="{{old('personal_post_code')}}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Province/State <span class="mark">*</span></label>
                            <input type="text" name="personal_province" value="{{old('personal_province')}}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Country <span class="mark">*</span></label>
                            <input type="text" name="personal_country" value="{{old('personal_country')}}"
                                   class="form-control field">
                        </div>
                    </div>
                    <div class="personal-information">
                        <strong class="overlap-text">Institution Related Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Employment Status <span class="mark">*</span></label>
                            <div class="cu_select me-2">
                                <select class="form-select" name="employment_status" id="employment_status">
                                    <option value="9200">Select</option>
                                    @foreach(\Logixs\Modules\Site\Enrollment\Models\EmploymentStatus::all() as $employmentStatus)
                                        <option
                                            value="{{$employmentStatus->id()}}">{{$employmentStatus->name()}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Position <span class="mark">*</span></label>
                            <input type="text" name="position" value="{{old('position')}}" class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Department<span class="mark">*</span></label>
                            <input type="text" name="department" value="{{old('department')}}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Institution<span class="mark">*</span></label>
                            <input type="text" name="institution" value="{{old('institution')}}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Address<span class="mark">*</span></label>
                            <input type="text" name="institution_address" value="{{old('institution_address')}}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">City <span class="mark">*</span></label>
                            <input type="text" name="institution_city" value="{{old('institution_city')}}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Post Code <span class="mark"> <span class="mark">*</span></span></label>
                            <input type="text" name="institution_post_code" value="{{old('institution_post_code')}}"
                                   class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Province/State<span class="mark">*</span></label>
                            <input type="text" name="institution_province_state"
                                   value="{{old('institution_province_state')}}" class="form-control field">
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Country <span class="mark">*</span></label>
                            <input type="text" name="institution_country" value="{{old('institution_country')}}"
                                   class="form-control field">

                        </div>
                    </div>
                    <div class="fieldgroup">
                        <label class="label">Are you interested to obtain verifiable certificate after the completion of
                            free course?</label>
                        <ul class="list-unstyled d-flex justify-content-start row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 flex-wrap">
                            <li>
                                <label>
                                    <input type="checkbox" class="custom-checkbox" value="1" name="verifiable">
                                    <span class="check"></span>
                                    <span class="label">Yes</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" value="0" name="verifiable">
                                    <span class="check"></span>
                                    <span class="label">No</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="fz18">
                        <p><b>Note For Pakistani Participants Only</b>: You are requested to pay PKR 500 and submit the
                            deposit slip using below mentioned option. Please make sure that provided address is free of
                            errors and accessible by courier service. We make every effort to dispatch your certificate
                            within 3 working days of the course conclusion.</p>
                    </div>
                    <div class="fieldgroup">
                        <label class="label">What else would you like us to know?</label>
                        <textarea class="form-control" name="description" style="width: 760px"></textarea>
                    </div>
                    <div class="fieldgroup">
                        <h3>Accepted Payment Methods</h3>
                        <p>You can make payments on Logixs Academy using the Visa Debit/Credit Card.</p>
                        <p><img src="images/visa.jpg" class="me-3" alt="">Debit/Credit Card + 3% transaction fees</p>
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
                    <h3 class="subheading">Upload Deposit Slip<span class="mark">*</span></h3>
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
                                <td class="Action"><a href="#" id="view" onclick="getInputValue()">[View]</a> <a
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
                    <input type="hidden" value="{{ $course->id() }}" name="courseId" required/>
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
            var b = document.getElementsByTagName("tr")[1].remove();
        });

        function getInputValue() {
            // Selecting the input element and get its value
            var inputVal = document.getElementById("my").value;

            // Displaying the value
            alert(inputVal);
        }

        $(document).ready(function () {
            $('#code').select2();
        });
    </script>
@endsection
