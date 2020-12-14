@extends('Layout.app')
@section('title','Dashboard Summery')
@section('content')


<div class="container">
	<div class="row">

        <div class="col-md-3 py-2">
        	<div class="card card-color">
        		<div class="card-body">
        			<h4 class="count-card-title">{{$TotalVisitor}}</h4>
					<h5 class="count-card-text">Total Visitor</h5>
        		</div>
        	</div>
        </div>

        <div class="col-md-3 py-2">
            <div class="card card-color">
                <div class="card-body">
                    <h4 class="count-card-title">{{$TotalCourse}}</h4>
                    <h5 class="count-card-text">Total Course</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 py-2">
            <div class="card card-color">
                <div class="card-body">
                    <h4 class="count-card-title">{{$TotalStudent}}</h4>
                    <h5 class="count-card-text">Total Student</h5>
                </div>
            </div>
        </div>


        <div class="col-md-3 py-2">
            <div class="card card-color">
                <div class="card-body">
                    <h4 class="count-card-title">{{$TotalLogin}}</h4>
                    <h5 class="count-card-text">Total Login</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 py-2">
            <div class="card card-color">
                <div class="card-body">
                    <h4 class="count-card-title">{{$TotalTeacher}}</h4>
                    <h5 class="count-card-text">Total Teacher</h5>
                </div>
            </div>
        </div>



        <div class="col-md-3 py-2">
            <div class="card card-color">
                <div class="card-body">
                    <h4 class="count-card-title">{{$TotalNotice}}</h4>
                    <h5 class="count-card-text">Total Notice</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 py-2">
            <div class="card card-color">
                <div class="card-body">
                    <h4 class="count-card-title">{{$TotalBlog}}</h4>
                    <h5 class="count-card-text">Total Blog</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 py-2">
            <div class="card card-color">
                <div class="card-body">
                    <h4 class="count-card-title">{{$TotalContact}}</h4>
                    <h5 class="count-card-text">Total Contact</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 py-2">
            <div class="card card-color">
                <div class="card-body">
                    <h4 class="count-card-title">{{$TotalReview}}</h4>
                    <h5 class="count-card-text">Total Review</h5>
                </div>
            </div>
        </div>

	</div>
</div>



@endsection
