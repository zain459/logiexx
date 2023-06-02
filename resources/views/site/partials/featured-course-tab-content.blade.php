<div class="col post">
    <div class="inner">
        <div class="img"><a href="{{ route('site.course-detail', $course->id()) }}"> <img
                    src="{{ assert('storage/'.$course->image()) }}"
                    class="img-fluid" alt="">
            </a>
        </div>
        <div class="text">
            <span class="modality">Modality: {{($course->modality()->name())}}</span>
            <h3>
                <a href="{{ route('site.course-detail', $course->id()) }}">{{$course->title()}}</a>
            </h3>
            <dl>
                <dt>Duration</dt>
                <dd>{{$course->duration()}}</dd>
                <dt>Course Fee</dt>
                <dd>{{'PKR' . ' '.  number_format($course->feeAmount(), 2)}}</dd>
                <dt>Start Date</dt>
                <dd>{{\Carbon\Carbon::parse($course->courseStartDate())->format('F j, Y')}}</dd>
            </dl>
            <a href="{{route('site.course-detail', $course->id())}}"
               class="learnmore">Learn More</a>
        </div>
    </div>
</div>
