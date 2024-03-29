@extends('site.master')
@section('title', 'become-an-instructor')
@section('content')
    @if(null !== $courseLearnerFeedBackCheck && null !== $instructorLearnerFeedBackCheck)
        <h5 class="already-exist">FeedBack Already Submitted</h5>
    @else
        <div class="title-section">
            <div class="container">
                <div class="inner-menu">
                    <a href="courses.php" class="btn-link"><span class="button">Browse Our Courses</span></a>
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
                <h1>Learner Feedback</h1>
            </div>
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
            {{--        @if(isset($courseLearnerFeedBackCheck))--}}
            {{--            <p class="text-center">Feedback Already Submitted</p>--}}
            {{--        @elseif(isset($verified) && $verified !== null)--}}
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

                    <form method="post" action="{{route('site.learner-feedback.store', $course->id())}}">
                        @csrf
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
                                    {{--                                    @dump($courseFeedbackParam)--}}
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
                            {{--                            <div class="rating">--}}
                            <div class="rating-stars">

                                <ul id='stars'>
                                    <li class='star' title='Poor' data-value='1'>
                                        <label>
                                            <input type="checkbox" name="course[quality_of_course]" value="{{1}}">
                                            <i class='fa fa-star fa-fw'></i>
                                        </label>
                                    </li>
                                    <li class='star' title='Fair' data-value='2'>
                                        <label>
                                            <input type="checkbox" name="course[quality_of_course]" value="{{2}}">
                                            <i class='fa fa-star fa-fw'></i>
                                        </label>
                                    </li>
                                    <li class='star' title='Good' data-value='3'>
                                        <label>
                                            <input type="checkbox" name="course[quality_of_course]" value="{{3}}">
                                            <i class='fa fa-star fa-fw'></i>
                                        </label>
                                    </li>
                                    <li class='star' title='Excellent' data-value='4'>
                                        <label>
                                            <input type="checkbox" name="course[quality_of_course]" value="{{4}}">
                                            <i class='fa fa-star fa-fw'></i>
                                        </label>
                                    </li>
                                    <li class='star' title='WOW!!!' data-value='5'>
                                        <label>
                                            <input type="checkbox" name="course[quality_of_course]" value="{{5}}">
                                            <i class='fa fa-star fa-fw'></i>
                                        </label>
                                    </li>
                                </ul>

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

            $(document).ready(function () {
                /* 1. Visualizing things on Hover - See next part for action on click */
                $('#stars li').on('mouseover', function () {
                    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on

                    // Now highlight all the stars that's not after the current hovered star
                    $(this).parent().children('li.star').each(function (e) {
                        if (e < onStar) {
                            $(this).addClass('hover');
                        } else {
                            $(this).removeClass('hover');
                        }
                    });

                }).on('mouseout', function () {
                    $(this).parent().children('li.star').each(function (e) {
                        $(this).removeClass('hover');
                    });
                });

                /* 2. Action to perform on click */
                $('#stars li').on('click', function () {
                    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
                    var stars = $(this).parent().children('li.star');

                    for (i = 0; i < stars.length; i++) {
                        $(stars[i]).removeClass('selected');
                    }

                    for (i = 0; i < onStar; i++) {
                        $(stars[i]).addClass('selected');
                    }

                    // JUST RESPONSE (Not needed)
                    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
                    var msg = "";
                    if (ratingValue > 1) {
                        msg = "Thanks! You rated this " + ratingValue + " stars.";
                    } else {
                        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
                    }
                    responseMessage(msg);
                });
            });

            function responseMessage(msg) {
                $('.success-box').fadeIn(200);
                $('.success-box div.text-message').html("<span>" + msg + "</span>");
            }

        </script>
        @endsection
