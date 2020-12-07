<div class="jumbotron bg-white section-margin jumbotron-fluid">
    <div class="row justify-content-md-center  text-center">
        <div class="col-md-8">
            <a class="opener" data-url="{{ asset($CoursePlan[0]->video)}}"><img class="play-logo" src="{{ asset('images/play.svg') }}"></a>
            <h5 class="title-text mt-2"><b>{{ $CoursePlan[0]->title }}</b></h5>
            <p class="des-text"> {{ $CoursePlan[0]->short_des }} </p>
        </div>
    </div>
</div>
