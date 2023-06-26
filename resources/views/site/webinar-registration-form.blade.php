@extends('site.master')
@section('banner-title', 'Register for a Webinar')
@section('title', 'Webinar Series')
@section('content')
    <div class="container p-0">
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
                <form method="post" action="{{route('site.webinar-registration-form.store')}}"
                      enctype="multipart/form-data">
                    @csrf
                    <h2>Registration Form</h2>
                    <div class="fieldgroup">
                        <div class="row twocolumns-form">
                            <div class="col-md-5">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="first_name">First Name<sup>*</sup></label>
                                    <input type="text" id="first_name" value="{{old('first_name')}}" name="first_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-1">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="last_name">Last Name<sup>*</sup></label>
                                    <input type="text" id="last_name" value="{{old('last_name')}}" name="last_name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="work_email">Work Email<sup>*</sup></label>
                                    <input type="text" id="work_email" value="{{old('work_email')}}" name="work_email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-1">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="phone_number">Phone Number<sup>*</sup></label>
                                    <input type="text" id="phone_number" value="{{old('phone_number')}}" name="phone_number" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-11">
                                <div class="field d-flex flex-column flex-xl-row justify-content-between fieldrow">
                                    <label for="organization_name">Organization Name (Full Company Name; no
                                        abbreviations/acronyms)</label>
                                    <div class=""><input type="text" id="organization_name" value="{{old('organization_name')}}" name="organization_name"
                                                         class="form-control"></div>
                                </div>
                            </div>
                            <div class="col-12 col-md-11">
                                <div class="field d-flex flex-column flex-xl-row justify-content-between fieldrow">
                                    <label for="first">Select your occupation type</label>
                                    <div class="cu_select m-0">
                                        <select name="occupation_type" id="occupation_type">
                                            <option>select</option>
                                            <option value="{{'Academia'}}">Academia</option>
                                            <option value="{{'Government'}}">Government</option>
                                            <option value="{{'Industry'}}">Industry</option>
                                            <option value="{{'Student'}}">Student</option>
                                            <option value="{{'Other'}}">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fieldgroup">
                            <label class="label">What are your subject area(s)? <span class="mark">*</span></label>
                            <ul class="list-unstyled d-flex justify-content-between row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 flex-wrap">
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]"
                                               value="{{'Creative Arts & Media'}}">
                                        <span class="check"></span>
                                        <span class="label">Creative Arts & Media</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]"
                                               value="{{'Business & Management'}}">
                                        <span class="check"></span>
                                        <span class="label">Business & Management</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]"
                                               value="{{'IT & Computer Science'}}">
                                        <span class="check"></span>
                                        <span class="label">IT & Computer Science</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]"
                                               value="{{'Accounting & Finance'}}">
                                        <span class="check"></span>
                                        <span class="label">Accounting & Finance</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]"
                                               value="{{'Education & Teaching'}}">
                                        <span class="check"></span>
                                        <span class="label">Education & Teaching</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]" value="{{'Health & Medicine'}}">
                                        <span class="check"></span>
                                        <span class="label">Health & Medicine</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]" value="{{'Humanities'}}">
                                        <span class="check"></span>
                                        <span class="label">Humanities</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]" value="{{'Design Courses'}}">
                                        <span class="check"></span>
                                        <span class="label">Design Courses</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]" value="{{'Mathematics'}}">
                                        <span class="check"></span>
                                        <span class="label">Mathematics</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]" value="{{'Programming'}}">
                                        <span class="check"></span>
                                        <span class="label">Programming</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]"
                                               value="{{'Professional Development'}}">
                                        <span class="check"></span>
                                        <span class="label">Professional Development</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]"
                                               value="{{'Other (please specify)'}}">
                                        <span class="check"></span>
                                        <span class="label">Other (please specify) </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]" value="{{'Social Sciences'}}">
                                        <span class="check"></span>
                                        <span class="label">Social Sciences </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]" value="{{'Sales & Marketing'}}">
                                        <span class="check"></span>
                                        <span class="label">Sales & Marketing</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="subject_area[]" value="{{'Statistics'}}">
                                        <span class="check"></span>
                                        <span class="label">Statistics</span>
                                    </label>
                                </li>
                                <li>
                                    <input type="text" class="form-control" name="subject_area[]">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="fieldgroup">
                        <label class="label">How did you hear about this webinar?</label>
                        <div class="d-flex">
                            <div class="cu_select cu_select2">
                                <select name="hear_about_webinar" id="hear_about_webinar">
                                    <option>select</option>
                                    <option value="{{'Social Media'}}">Social Media</option>
                                    <option value="{{'Blogs'}}">Blogs</option>
                                    <option value="{{'Website'}}">Website</option>
                                    <option value="{{'Word of Mouth'}}">Word of Mouth</option>
                                    <option value="{{'Advertisement'}}">Advertisement</option>
                                    <option value="{{'Search Engine'}}">Search Engine</option>
                                    <option value="{{'Google Ads'}}">Google Ads</option>
                                    <option value="{{'Facebook Ads'}}">Facebook Ads</option>
                                    <option value="{{'YouTube Ads'}}">YouTube Ads</option>
                                    <option value="{{'Facebook Post/Group'}}">Facebook Post/Group</option>
                                    <option value="{{'Twitter Post'}}">Twitter Post</option>
                                    <option value="{{'Instagram Post/Story'}}">Instagram Post/Story</option>
                                    <option value="{{'Email'}}">Email</option>
                                    <option value="{{'Other'}}">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="fieldgroup">
                        <label class="label">Are you interested to obtain verifiable certificate after the completion of
                            free course?</label>
                        <ul class="list-unstyled d-flex justify-content-start row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 flex-wrap">
                            <li>
                                <label>
                                    <input type="checkbox" value="1" name="verifiable_certificate"
                                           class="custom-checkbox">
                                    <span class="check"></span>
                                    <span class="label">Yes</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" value="0" name="verifiable_certificate">
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
                        <input type="text" name="description" class="form-control">
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
