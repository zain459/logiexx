@extends('site.master')
@section('banner-title', 'Corporate Partnership')
@section('title', 'corporate-partnership')
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
                <form method="post" action="{{route('corporate-partnership.store')}}">
                    @csrf
                    <h2>Contact Logixs Academy</h2>
                    <div class="fieldgroup">
                        <div class="row twocolumns-form">
                            <div class="col-md-5">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="first">First Name<sup>*</sup></label>
                                    <input type="text" id="first_name" name="first_name" value="{{old('first_name')}}"
                                           class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-1">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="first">Last Name<sup>*</sup></label>
                                    <input type="text" id="last_name" name="last_name" value="{{old('last_name')}}"
                                           class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="first">Work Email<sup>*</sup></label>
                                    <input type="text" id="work_email" name="work_email" value="{{old('work_email')}}"
                                           class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-1">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="phone_number">Phone Number<sup>*</sup></label>
                                    <input type="text" id="phone_number" name="phone_number"
                                           value="{{old('phone_number')}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="company_name">Company Name<sup>*</sup></label>
                                    <input type="text" id="company_name" name="company_name"
                                           value="{{old('company_name')}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-1">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="first">Job Title<sup>*</sup></label>
                                    <input type="text" id="first" name="job_title" value="{{old('job_title')}}"
                                           class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="company_size">Company Size<sup>*</sup></label>
                                    <div class="cu_select m-0">
                                        <select name="company_size" required>
                                            <option></option>
                                            <option value="{{'0-50'}}" @selected(old('company_size') =='0-50')>0-50</option>
                                            <option value="{{'50-100'}}"@selected(old('company_size') =='50-100')>50-100</option>
                                            <option value="{{'100-150'}}"@selected(old('company_size') =='100-150')>100-150</option>
                                            <option value="{{'150-200'}}"@selected(old('company_size') =='150-200')>150-200</option>
                                            <option value="{{'200-250'}}"@selected(old('company_size') =='200-250')>200-250</option>
                                            <option value="{{'250-300'}}"@selected(old('company_size') =='250-300')>250-300</option>
                                            <option value="{{'300-350'}}"@selected(old('company_size') =='300-350')>300-350</option>
                                            <option value="{{'350-400'}}"@selected(old('company_size') =='350-400')>350-400</option>
                                            <option value="{{'400-450'}}"@selected(old('company_size') =='400-450')>400-450</option>
                                            <option value="{{'450-500'}}"@selected(old('company_size') =='450-500')>450-500</option>
                                            <option value="{{'500-550'}}"@selected(old('company_size') =='500-550')>500-550</option>
                                            <option value="{{'550-600'}}"@selected(old('company_size') =='550-600')>550-600</option>
                                            <option value="{{'600-650'}}"@selected(old('company_size') =='600-650')>600-650</option>
                                            <option value="{{'650-700'}}"@selected(old('company_size') =='650-700')>650-700</option>
                                            <option value="{{'700-750'}}"@selected(old('company_size') =='700-750')>700-750</option>
                                            <option value="{{'750-800'}}"@selected(old('company_size') =='750-800')>750-800</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-1">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="contact_on_behalf_of">Contacting on Behalf of<sup>*</sup></label>
                                    <div class="cu_select m-0">
                                        <select name="contact_on_behalf_of" required>
                                            <option></option>
                                            <option value="{{'x'}}" @selected(old('contact_on_behalf_of') =='x')>x
                                            </option>
                                            <option value="{{'y'}}" @selected(old('contact_on_behalf_of') =='y')>y</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="company_type">Company Type<sup>*</sup></label>
                                    <div class="cu_select m-0">
                                        <select name="company_type" required>
                                            <option></option>
                                            <option value="{{'x'}}" @selected(old('company_type') =='x')>x</option>
                                            <option value="{{'y'}}"@selected(old('company_type') =='y')>y</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 offset-md-1">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="expected_learners">Expected Learners<sup>*</sup></label>
                                    <div class="cu_select m-0">
                                        <select name="expected_learners" required>
                                            <option></option>
                                            <option value="{{'1'}}" @selected(old('expected_learners') =='1')>x</option>
                                            <option value="{{'2'}}" @selected(old('expected_learners') =='2')>y</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="field d-flex flex-column flex-xl-row fieldrow">
                                    <label for="country">Country<sup>*</sup></label>
                                    <div class="cu_select m-0">
                                        <select name="country" required>
                                            <option></option>
                                            <option value="{{'Pakistan'}}" @selected(old('country') == 'Pakistan')>Pakistan</option>
                                            <option value="{{'Australia'}}" @selected(old('country') == 'Australia')>Australia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fieldgroup m-0">
                        <label class="label">What kind of teaching you are interested in? <span
                                class="mark"><sup>*</sup></span></label>
                        <div class="fieldgroup">
                            <ul class="list-unstyled d-flex justify-content-between row-cols-1 flex-wrap">
                                <li>
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" value="{{'Launch courses'}}"
                                               name="teaching_interest[]">
                                        <span class="check"></span>
                                        <span class="label">Launch courses</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="custom-checkbox"
                                               value="{{'Launch certificate programs'}}" name="teaching_interest[]">
                                        <span class="check"></span>
                                        <span class="label">Launch certificate programs</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="custom-checkbox"
                                               value="{{'Use Logixs courses at my company/institution'}}"
                                               name="teaching_interest[]">
                                        <span class="check"></span>
                                        <span class="label">Use Logixs courses at my company/institution</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="custom-checkbox"
                                               value="{{'Explore other partnership opportunities'}}"
                                               name="teaching_interest[]">
                                        <span class="check"></span>
                                        <span class="label">Explore other partnership opportunities</span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" class="custom-checkbox" value="{{'Other'}}"
                                               name="teaching_interest[]">
                                        <span class="check"></span>
                                        <span class="label">Other</span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="fieldgroup">
                            <label class="label">What else would you like us to know?</label>
                            <input type="text" class="form-control" name="description">
                        </div>
                        <label class="fullcheck">
                            <input type="checkbox">
                            <span class="check"></span>
                            <span class="text-primary label">By providing this information, you agree to our terms and privacy policy. You agree that we can contact you about Logixs Academy and use data from third parties to personalize your experience.</span>
                        </label>
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

@endsection
