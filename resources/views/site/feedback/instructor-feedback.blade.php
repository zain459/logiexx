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
    <div class="rating">
        <label class="start-label">
            <input type="radio"
                   name="instructors[{{$instructor->id()}}][instructor_quality_of_course]"
                   value="{{1}}">
            <span class="fa fa-star"></span>
        </label>
        <label class="start-label">
            <input type="radio"
                   name="instructors[{{$instructor->id()}}][instructor_quality_of_course]"
                   value="{{2}}">
            <span class="fa fa-star"></span>
        </label>
        <label class="start-label">
            <input type="radio"
                   name="instructors[{{$instructor->id()}}][instructor_quality_of_course]"
                   value="{{3}}">
            <span class="fa fa-star"></span>
        </label>
        <label class="start-label">
            <input type="radio"
                   name="instructors[{{$instructor->id()}}][instructor_quality_of_course]"
                   value="{{4}}">
            <span class="fa fa-star"></span>
        </label>
        <label class="start-label">
            <input type="radio"
                   name="instructors[{{$instructor->id()}}][instructor_quality_of_course]"
                   value="{{5}}">
            <span class="fa fa-star"></span>
        </label>
    </div>
    <input type="hidden" value="{{$verified->id()}}" name="instructors[{{$instructor->id()}}][studentId]">
</div>
