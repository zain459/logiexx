@extends('site.master')
@section('title', 'become-an-instructor')
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
            <h1>Become an Instructor </h1>
        </div>
    </div>
    <main id="main">
        <section class="block our-courses bdb">
            <div class="container pb-4 mb-5">
                <h2>How to Start?</h2>
                <div>
                    <ul class="nav nav-tabs d-flex justify-content-between" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab1" role="tab"
                               aria-controls="tab1" aria-selected="true">Prepare curriculum</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab2" role="tab"
                               aria-controls="tab2" aria-selected="false">Plan your course</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab3" role="tab"
                               aria-controls="tab3" aria-selected="false">Record your course </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab4" role="tab"
                               aria-controls="tab4" aria-selected="false">Market your course</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#tab5" role="tab"
                               aria-controls="tab5" aria-selected="false">Launch your course</a>
                        </li>
                    </ul>
                    <div class="tab-content tabblock" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
                            <div class="clearfix">
                                <div class="float-lg-end mx-auto d-block mx-lg-5 px-lg-5">
                                    <img src="{{asset('images/prepare-curriculum.png')}}"
                                         class="img-fluid d-block mx-auto mb-3"
                                         alt="">
                                </div>
                                <p>You start with your passion and knowledge and then choose a promising topic.</p>
                                <p>The way that you teach — what you bring to it — is up to you.</p>
                                <h3>How we support you?</h3>
                                <p>We offer plenty of resources on how to create your first course and, our experts
                                    would provide you structured templates help keep you organized.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2">
                            <div class="clearfix">
                                <div class="float-lg-end mx-auto d-block mx-lg-5 px-lg-5">
                                    <img src="images/prepare-curriculum.png" class="img-fluid d-block mx-auto mb-3"
                                         alt="">
                                </div>
                                <p>You start with your passion and knowledge and then choose a promising topic.</p>
                                <p>The way that you teach — what you bring to it — is up to you.</p>
                                <h3>How we support you?</h3>
                                <p>We offer plenty of resources on how to create your first course and, our experts
                                    would provide you structured templates help keep you organized.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3">
                            <div class="clearfix">
                                <div class="float-lg-end mx-auto d-block mx-lg-5 px-lg-5">
                                    <img src="images/prepare-curriculum.png" class="img-fluid d-block mx-auto mb-3"
                                         alt="">
                                </div>
                                <p>You start with your passion and knowledge and then choose a promising topic.</p>
                                <p>The way that you teach — what you bring to it — is up to you.</p>
                                <h3>How we support you?</h3>
                                <p>We offer plenty of resources on how to create your first course and, our experts
                                    would provide you structured templates help keep you organized.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4">
                            <div class="clearfix">
                                <div class="float-lg-end mx-auto d-block mx-lg-5 px-lg-5">
                                    <img src="images/prepare-curriculum.png" class="img-fluid d-block mx-auto mb-3"
                                         alt="">
                                </div>
                                <p>You start with your passion and knowledge and then choose a promising topic.</p>
                                <p>The way that you teach — what you bring to it — is up to you.</p>
                                <h3>How we support you?</h3>
                                <p>We offer plenty of resources on how to create your first course and, our experts
                                    would provide you structured templates help keep you organized.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5">
                            <div class="clearfix">
                                <div class="float-lg-end mx-auto d-block mx-lg-5 px-lg-5">
                                    <img src="images/prepare-curriculum.png" class="img-fluid d-block mx-auto mb-3"
                                         alt="">
                                </div>
                                <p>You start with your passion and knowledge and then choose a promising topic.</p>
                                <p>The way that you teach — what you bring to it — is up to you.</p>
                                <h3>How we support you?</h3>
                                <p>We offer plenty of resources on how to create your first course and, our experts
                                    would provide you structured templates help keep you organized.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block our-courses bdb">
            <div class="container pb-4 mb-5">
                <h2>You won't have to do it alone</h2>
                <p>Our Team is here to answer your questions and review your test video, while our Academy gives you
                    plenty of resources to help you through the process. Also, get the support of experienced
                    instructors in online, blended, in-person and online live community.</p>
            </div>
        </section>
        <section class="block apply-block">
            <div class="container">
                <h2>Apply here</h2>
                <p>Please submit this form after providing mandatory information and our support team will contact you
                    shortly. </p>
                <form method="post" action="{{route('site.become-an-instructor.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="personal-information">
                        <strong class="overlap-text">Personal Information</strong>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Title <span class="mark">*</span></label>
                            <input type="text" name="title" value="{{old('title')}}" class="form-control field" required>
                            <span class="note">(Prof., Mr., Ms., Mrs., etc.)</span>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Given/First Name <span class="mark">*</span></label>
                            <input type="text" name="first_name" value="{{old('first_name')}}"
                                   class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Middle Name</label>
                            <input type="text" name="middle_name" value="{{old('middle_name')}}"
                                   class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Family/Last Name <span class="mark">*</span></label>
                            <input type="text" name="last_name" value="{{old('last_name')}}" class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Degree <span class="mark">*</span></label>
                            <input type="text" name="degree" value="{{old('degree')}}" class="form-control field" required>
                            <span class="note">(MS, MD, PhD etc.)</span>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Telephone <span class="mark">*</span></label>
                            <div class="d-flex field">
                                <div class="cu_select me-2">
                                    <select>
                                        <option value="9200">Pk(+92)</option>
                                        <option value="9200">Pk(+52)</option>
                                    </select>
                                </div>
                                <input type="text" name="telephone" value="{{old('telephone')}}"
                                       class="form-control small" required>
                            </div>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Email <span class="mark"> <span class="mark">*</span></span></label>
                            <input type="text" name="email" value="{{old('email')}}" class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Address</label>
                            <input type="text" name="address" value="{{old('address')}}" class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">City <span class="mark">*</span></label>
                            <input type="text" name="city" value="{{old('city')}}" class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Post Code <span class="mark">*</span></label>
                            <input type="text" name="post_code" value="{{old('post_code')}}" class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Province/State <span class="mark">*</span></label>
                            <input type="text" name="province" value="{{old('province')}}" class="form-control field" required>
                        </div>
                        <div class="fieldrow d-md-flex align-items-center">
                            <label for="">Country <span class="mark">*</span></label>
                            <input type="text" name="country" value="{{old('country')}}" class="form-control field" required>
                        </div>
                    </div>
                    <div class="fieldgroup">
                        <label class="label">What kind of teaching you are interested in? <span
                                class="mark">*</span></label>
                        <ul class="list-unstyled d-flex justify-content-between row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 flex-wrap">
                            <li>
                                <label>
                                    <input type="checkbox" class="custom-checkbox" name="teaching_interest[]"
                                           value="{{'In-Person'}}">
                                    <span class="check"></span>
                                    <span class="label">In-Person</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="teaching_interest[]" value="{{'online'}}">
                                    <span class="check"></span>
                                    <span class="label">Online</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="teaching_interest[]" value="{{'online live'}}">
                                    <span class="check"></span>
                                    <span class="label">Online Live</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="teaching_interest[]" value="{{'blended'}}">
                                    <span class="check"></span>
                                    <span class="label">Blended</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="fieldgroup">
                        <label class="label">What are your subject area(s)? <span class="mark">*</span></label>
                        <ul class="list-unstyled d-flex justify-content-between row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 flex-wrap">
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Creative Arts & Media'}}">
                                    <span class="check"></span>
                                    <span class="label">Creative Arts & Media</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Business & Management'}}">
                                    <span class="check"></span>
                                    <span class="label">Business & Management</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'IT & Computer Science'}}">
                                    <span class="check"></span>
                                    <span class="label">IT & Computer Science</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Accounting & Finance'}}">
                                    <span class="check"></span>
                                    <span class="label">Accounting & Finance</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Education & Teaching'}}">
                                    <span class="check"></span>
                                    <span class="label">Education & Teaching</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Health & Medicine'}}">
                                    <span class="check"></span>
                                    <span class="label">Health & Medicine</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Humanities'}}">
                                    <span class="check"></span>
                                    <span class="label">Humanities</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Design Courses'}}">
                                    <span class="check"></span>
                                    <span class="label">Design Courses</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Mathematics'}}">
                                    <span class="check"></span>
                                    <span class="label">Mathematics</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Programming'}}">
                                    <span class="check"></span>
                                    <span class="label">Programming</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]"
                                           value="{{'Professional Development'}}">
                                    <span class="check"></span>
                                    <span class="label">Professional Development</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Other (please specify)'}}">
                                    <span class="check"></span>
                                    <span class="label">Other (please specify) </span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Social Sciences'}}">
                                    <span class="check"></span>
                                    <span class="label">Social Sciences </span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Sales & Marketing'}}">
                                    <span class="check"></span>
                                    <span class="label">Sales & Marketing</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" name="subject_areas[]" value="{{'Statistics'}}">
                                    <span class="check"></span>
                                    <span class="label">Statistics</span>
                                </label>
                            </li>
                            <li>
                                <input type="text" class="form-control" name="subject_areas[]">
                            </li>
                        </ul>
                    </div>
                    <div class="fieldgroup">
                        <label class="label">What is the tentative course title? (you can change the title later before
                            the
                            finalization of the course)</label>
                        <input type="text" name="tentative_course_title" value="{{old('tentative_course_title')}}"
                               class="form-control" required>
                    </div>
                    <div class="fieldgroup">
                        <label class="label">When are you available to start work? <span class="mark">*</span></label>
                        <div class="d-flex">
                            <div class="cu_select cu_select2">
                                <select name="available_to_start_work">
                                    <option>select</option>
                                    <option value="{{'After 15 Days'}}">After 15 Days</option>
                                    <option value="{{'After 1 Month'}}">After 1 Month</option>
                                </select>
                            </div>
                            <label class="calendar">
                                <input type="date" class="date-control" name="date" value="{{'date'}}" required>
                                <span><i class="icon-calendar"></i></an></span>
                            </label>
                        </div>
                    </div>
                    <h2 class="subheading">Upload CV<span class="mark">*</span></h2>
                    <p>Files required for submission include your updated CV. Please note that Larger file take longer
                        to
                        upload. Please keep file name short and relevant. CV should be submitted in electronic form and
                        legible (e.g., formats: PDF, MS Word). </p>
                    <div class="field">
                        <div class="attachment">
                            <input type="file" name="file" id="file" required>
                            <div class="inner">
                                <i class="fa fa-upload"></i>
                                <span class="d-flex mb-2">Drag and drop your file here</span>
                                <span class="btn btn-dark">Choose File</span>
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
                                <td title="Description"><input type="text" class="form-control" placeholder="CV"></td>
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
            console.log(fileType);
            if (fileSize >= 1024) {
                var size = (fileSize / 1024);
                document.getElementById('size').innerHTML = size.toFixed(2) + "KB";
            }
            if (fileType.split('/').pop().toLowerCase() === 'jpeg') {
                document.getElementById('jpg').innerHTML = `<i class="icon-word"></i>`
            } else {
                document.getElementById('jpg').innerHTML = `<i class="icon-pdf"></i>`
            }
        });
        var dele = document.getElementById("delete").addEventListener("click", function (e) {
            e.preventDefault();
            var name = document.getElementById("name-ectention").innerHTML = "";
            document.getElementById('size').innerHTML = "";
            document.getElementById('jpg').innerHTML = ""
        });

        $(document).ready(function () {
            $('#code').select2({
                multiple: true,
            });
        });
    </script>
@endsection
