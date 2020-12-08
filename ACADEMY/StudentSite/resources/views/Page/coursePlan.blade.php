@extends('Layout.app')
@section('title', 'Course Plan')
@section('content')
    <div class="container  section-marginbg ">
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-text"><b>What You Going To Learn</b></h5>
                <p class="des-text">{{ $coursePlan[0]->short_des }} </p>
                {!! $coursePlan[0]->key_points !!}
            </div>
            <div class="col-md-6">
                <video id="video1" controls width="100%">
                    <source src="{{ asset($coursePlan[0]->video)}}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
@endsection
