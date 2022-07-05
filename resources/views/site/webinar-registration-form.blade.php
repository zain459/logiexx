@extends('site.master')
@section('title', 'Webinar Series')
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
        <h1 style="text-transform: none;">Register for a Webinar</h1>
    </div>
</div>
<main id="main">
    <section class="block apply-block">
        <div class="container">
            <h2>Registration Form</h2>
            <div class="fieldgroup">
                <div class="row twocolumns-form">
                    <div class="col-md-5">
                        <div class="field d-flex flex-column flex-xl-row fieldrow">
                            <label for="first">First Name<sup>*</sup></label>
                            <input type="text" id="first" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <div class="field d-flex flex-column flex-xl-row fieldrow">
                            <label for="first">Last Name<sup>*</sup></label>
                            <input type="text" id="first" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="field d-flex flex-column flex-xl-row fieldrow">
                            <label for="first">Work Email<sup>*</sup></label>
                            <input type="text" id="first" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <div class="field d-flex flex-column flex-xl-row fieldrow">
                            <label for="first">Phone Number<sup>*</sup></label>
                            <input type="text" id="first" class="form-control">
                        </div>
                    </div>
                    <div class="col-12 col-md-11">
                        <div class="field d-flex flex-column flex-xl-row justify-content-between fieldrow">
                            <label for="first">Organization Name (Full Company Name; no abbreviations/acronyms)</label>
                            <div class=""><input type="text" id="first" class="form-control"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-11">
                        <div class="field d-flex flex-column flex-xl-row justify-content-between fieldrow">
                            <label for="first">Select your occupation type</label>
                            <div class="cu_select m-0">
                                <select>
                                    <option>select</option>
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
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Creative Arts &amp; Media</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Business &amp; Management</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">IT &amp; Computer Science</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Accounting &amp; Finance</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Education &amp; Teaching</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Health &amp; Medicine</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Humanities</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Design Courses</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Mathematics</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Programming</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Professional Development</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Other (please specify) </span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Social Sciences </span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Sales &amp; Marketing</span>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="checkbox">
                                <span class="check"></span>
                                <span class="label">Statistics </span>
                            </label>
                        </li>
                        <li>
                            <input type="text" class="form-control">
                        </li>
                    </ul>
                </div>
            </div>
            <div class="fieldgroup">
                <label class="label">How did you hear about this webinar?</label>
                <div class="d-flex">
                    <div class="cu_select cu_select2">
                        <select>
                            <option>select</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="fieldgroup">
                <label class="label">Are you interested to obtain verifiable certificate after the completion of free course?</label>
                <ul class="list-unstyled d-flex justify-content-start row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 flex-wrap">
                    <li>
                        <label>
                            <input type="checkbox" class="custom-checkbox">
                            <span class="check"></span>
                            <span class="label">Yes</span>
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="checkbox">
                            <span class="check"></span>
                            <span class="label">No</span>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="fz18">
                <p><b>Note For Pakistani Participants Only</b>: You are requested to pay PKR 500 and submit the deposit slip using below mentioned option. Please make sure that provided address is free of errors and accessible by courier service. We make every effort to dispatch your certificate within 3 working days of the course conclusion.</p>
            </div>
            <div class="fieldgroup">
                <label class="label">What else would you like us to know?</label>
                <input type="text" class="form-control">
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
            <p class="fz18">Files required for submission include your fee deposit slip or certificate acquisition fee for free courses only (optional). Please note that Larger file take longer to upload. Please keep file name short and relevant. Image should be submitted in electronic form and legible (e.g., formats: JPEG and PNG).</p>
            <div class="field">
                <div class="attachment">
                    <input type="file">
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
                    <tbody>
                    <tr>
                        <td title="File Type"><i class="icon-jpg"></i> <i class="icon-pdf"></i></td>
                        <td title="File Name">
                            <span class="d-block">File Name. File Extension</span>
                            <span class="d-block" style="color:#666;">Uploaded on 13 September 2021</span>
                        </td>
                        <td title="Description" width="355"><input type="text" class="form-control" placeholder="Deposit Slip"></td>
                        <td title="File Size">67.36 KB</td>
                        <td class="Action"><a href="#">[Download]</a> <a href="#">[Delete]</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <label class="fullcheck">
                <input type="checkbox">
                <span class="check"></span>
                <span class="text-primary label">By providing this information, you agree to our terms and privacy policy. You agree that we can contact you about Logixs Academy and use data from third parties to personalize your experience.</span>
            </label>
            <button type="submit" class="btn btn-primary">Submit Form</button>
        </div>
    </section>
</main>
@endsection
