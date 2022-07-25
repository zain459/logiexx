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
            <h1>Learner Feedback</h1>
        </div>
    </div>
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
        @if(isset($courseLearnerFeedBackCheck))
            <p class="text-center">Feedback Already Submitted</p>
        @elseif(isset($verified) && $verified !== null)
{{--            <p class="text-center">You have already submit your feedback</p>--}}
{{--        @else--}}
            <div class="block">
                <span id="provide-feedback" class="scroll">scroll</span>
                <div class="container">
                    <h2>Feedback <i class="icon-lock"></i></h2>
                    <p>Instructions: Join Youth Outside, an organization committed to advancing racial equity and
                        inclusion
                        in the outdoors, for this Logixs Academy webinar to discuss the importance of asking
                        critical
                        questions related to race, equity, and inclusion as we envision programming that connects
                        people
                        to
                        the environment during these uncertain and evolving times. Join Youth Outside, an
                        organization
                        committed to advancing racial equity and inclusion in the outdoors.</p>
                </div>
            </div>
            <div class="block apply-block">
                <span id="Submit" class="scroll">scroll</span>
                <div class="container">
                    <ul class="course-type">
                        <li class="{{ $course->modality()->name() === 'Online' ? "selected": "" }}">
                            <i class="icon-course-1"></i>
                            <span>Online Course</span>
                        </li>
                        <li class="{{ $course->modality()->name() === 'In-person' ? "selected": "" }}">
                            <i class="icon-course-2"></i>
                            <span>In-Person Course</span>
                        </li>
                        <li class="{{ $course->modality()->name() === 'Online Live' ? "selected": "" }}">
                            <i class="icon-course-3"></i>
                            <span>Online Live Course</span>
                        </li>
                        <li class="{{ $course->modality()->name() === 'Blended' ? "selected": "" }}">
                            <i class="icon-course-4"></i>
                            <span>Blended Course</span>
                        </li>
                    </ul>
                    <div class="inline-field mb-4 d-flex flex-column flex-md-row align-items-center">
                        <label for="CourseTitle">Course Title</label>
                        <span class="tag">{{$course->title()}}</span>
                    </div>

                    <form method="get" action="{{route('site.course-learner-feedback.store', $course->id())}}">
{{--                        @csrf--}}
                        <div class="table-responsive">
                            <table class="table text-center table-form" cellspacing="0" cellpadding="0"
                                   width="100%">
                                <tr>
                                    <th class="text-start"></th>
                                    <th>Excellent</th>
                                    <th>Good</th>
                                    <th>Fair</th>
                                    <th>Poor</th>
                                    <th>Worst</th>
                                </tr>
                                <tr>
                                    <th class="text-start" colspan="5">Relevance of the Training</th>
                                </tr>
                                @foreach($courseFeedbackParams as $courseFeedbackParam)
                                    <tr>
                                        <td class="text-start">{{$courseFeedbackParam->feedbackParam->title()}}</td>
                                        <td><input type="radio"
                                                   name="course[course_feedback_params][{{$courseFeedbackParam->id()}}]"
                                                   value="{{'Excellent'}}">
                                        </td>
                                        <td><input type="radio"
                                                   name="course[course_feedback_params][{{$courseFeedbackParam->id()}}]"
                                                   value="{{'Good'}}">
                                        </td>
                                        <td><input type="radio"
                                                   name="course[course_feedback_params][{{$courseFeedbackParam->id()}}]"
                                                   value="{{'Fair'}}">
                                        </td>
                                        <td><input type="radio"
                                                   name="course[course_feedback_params][{{$courseFeedbackParam->id()}}]"
                                                   value="{{'Poor'}}">
                                        </td>
                                        <td><input type="radio"
                                                   name="course[course_feedback_params][{{$courseFeedbackParam->id()}}]"
                                                   value="{{'Worst'}}">
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <div class="fieldgroup">
                            <label class="label">Would you recommend any improvements in this course?</label>
                            <input type="text" class="form-control" name="course[recommend_improvements_course]">
                        </div>
                        <div class="fieldgroup">
                            <label class="label">Please comment on the continuing appropriateness of the course in
                                relation
                                to
                                the intended learning objectives.</label>
                            <input type="text" class="form-control"
                                   name="course[comment_on_continuing_appropriateness]">
                        </div>
                        <div class="fieldgroup">
                            <label class="label">What did you like the most about this course?</label>
                            <input type="text" class="form-control" name="course[like_most_about_course]">
                        </div>
                        <div class="fieldgroup">
                            <label class="label">What else would you like us to know about the course?</label>
                            <input type="text" class="form-control" name="course[like_us_know_about_course]">
                        </div>
                        <div class="fieldgroup">
                            <label class="label">How would you rate the overall quality of the course?</label>
                            <div class="rating">
                                <label class="start-label">
                                    <input type="checkbox" name="course[quality_of_course]" value="{{1}}">
                                    <span class="fa fa-star"></span>
                                </label>
                                <label class="start-label">
                                    <input type="checkbox" name="course[quality_of_course]" value="{{2}}">
                                    <span class="fa fa-star"></span>
                                </label>
                                <label class="start-label">
                                    <input type="checkbox" name="course[quality_of_course]" value="{{3}}">
                                    <span class="fa fa-star"></span>
                                </label>
                                <label class="start-label">
                                    <input type="checkbox" name="course[quality_of_course]" value="{{4}}">
                                    <span class="fa fa-star"></span>
                                </label>
                                <label class="start-label">
                                    <input type="checkbox" name="course[quality_of_course]" value="{{5}}">
                                    <span class="fa fa-star"></span>
                                </label>
                            </div>
                        </div>
                        <input type="hidden" value="{{$verified->id()}}" name="course[studentId]">
                        @foreach($courseInstructors as $key => $courseInstructor)
                            @include('site.feedback.instructor-feedback', ['instructor' =>  $courseInstructor->instructor, 'feedbackParams' => $instructorFeedbackParams])
                        @endforeach
                        <input type="hidden" value="{{ $course->id() }}" name="[courseId]" required/>
                        <button type="submit" class="btn btn-primary">Submit Application</button>
                    </form>
                </div>
            </div>
        @endif
    </main>
    <script>
        $('input[type="checkbox"]').on('change', function () {
            $('input[name="' + this.name + '"]').not(this).prop('checked', false);
        });

    </script>
@endsection
