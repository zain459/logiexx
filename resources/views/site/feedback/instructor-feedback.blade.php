<h3 class="heading"><i class="icon-feedback"></i> Instructor’s Feedback</h3>
<div class="inline-field mb-4 d-flex flex-column flex-md-row align-items-center">
    <label for="CourseTitle">Instructor Name</label>
    <span class="tag">{{$instructor->name()}}</span>
</div>
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
            @foreach($feedbackParams as $param)
            <tr>
                <td class="text-start">{{$param->feedbackParam->title()}}</td>
                <td><input type="radio"
                           name="instructors[{{$instructor->id()}}][feedback_params][{{$param->id()}}]"
                           value="{{'Excellent'}}"></td>
                <td><input type="radio"
                           name="instructors[{{$instructor->id()}}][feedback_params][{{$param->id()}}]"
                           value="{{'Good'}}"></td>
                <td><input type="radio"
                           name="instructors[{{$instructor->id()}}][feedback_params][{{$param->id()}}]"
                           value="{{'Fair'}}"></td>
                <td><input type="radio"
                           name="instructors[{{$instructor->id()}}][feedback_params][{{$param->id()}}]"
                           value="{{'Poor'}}"></td>
                <td><input type="radio"
                           name="instructors[{{$instructor->id()}}][feedback_params][{{$param->id()}}]"
                           value="{{'Worst'}}"></td>
            </tr>
        @endforeach
    </table>
</div>
<div class="fieldgroup">
    <label class="label">Would you recommend any improvements in this course?</label>
    <input type="text" class="form-control"
           name="instructors[{{$instructor->id()}}][recommend_improvements_course]">
</div>
<div class="fieldgroup">
    <label class="label">Please comment on the continuing appropriateness of the course
        in
        relation
        to
        the intended learning objectives.</label>
    <input type="text" class="form-control"
           name="instructors[{{$instructor->id()}}][comment_on_continuing_appropriateness]">
</div>
<div class="fieldgroup">
    <label class="label">What did you like the most about this course?</label>
    <input type="text" class="form-control"
           name="instructors[{{$instructor->id()}}][like_most_about_course]">
</div>
<div class="fieldgroup">
    <label class="label">What else would you like us to know about the course?</label>
    <input type="text" class="form-control" name="instructors[{{$instructor->id()}}][like_us_know_about_course]">
</div>
<div class="fieldgroup">
    <label class="label">How would you rate the overall quality of the course?</label>
    <div class="rating-stars">
        <ul id='stars'>
            <li class='star' title='Poor' data-value='1'>
                <label>
                    <input type="checkbox" name="instructors[{{$instructor->id()}}][instructor_quality_of_course]" value="{{1}}">
                    <i class='fa fa-star fa-fw'></i>
                </label>
            </li>
            <li class='star' title='Fair' data-value='2'>
                <label>
                    <input type="checkbox" name="instructors[{{$instructor->id()}}][instructor_quality_of_course]" value="{{2}}">
                    <i class='fa fa-star fa-fw'></i>
                </label>
            </li>
            <li class='star' title='Good' data-value='3'>
                <label>
                    <input type="checkbox" name="instructors[{{$instructor->id()}}][instructor_quality_of_course]" value="{{3}}">
                    <i class='fa fa-star fa-fw'></i>
                </label>
            </li>
            <li class='star' title='Excellent' data-value='4'>
                <label>
                    <input type="checkbox" name="instructors[{{$instructor->id()}}][instructor_quality_of_course]" value="{{4}}">
                    <i class='fa fa-star fa-fw'></i>
                </label>
            </li>
            <li class='star' title='WOW!!!' data-value='5'>
                <label>
                    <input type="checkbox" name="instructors[{{$instructor->id()}}][instructor_quality_of_course]" value="{{5}}">
                    <i class='fa fa-star fa-fw'></i>
                </label>
            </li>
        </ul>
    </div>
    <input type="hidden" value="{{$verified->id()}}" name="instructors[{{$instructor->id()}}][studentId]">
</div>

<script>
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
