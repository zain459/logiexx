<div class="card">
    <div class="card-header fw-bold text-uppercase">{{ $course->courseCode() }}</div>
    <div class="card-body">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('course-edit', $course->id()) }}">Details</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('course.learning-objective-index', $course->id()) }}">Course Units</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('w-l-a.index', $course->id()) }}">W-L-A</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('course.instructors-index', $course->id()) }}">Instructors</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('course.partner-index', $course->id()) }}">Affiliated Partners</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('course.feedback-index', $course->id()) }}">Learner Feedback</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.course-class.index', $course->id()) }}">Class</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.course.feedback-params', $course->id()) }}">Feedback Params</a>
            </li>
        </ul>
    </div>
</div>
