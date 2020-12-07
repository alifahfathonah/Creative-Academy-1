@extends('Layout.app')

@section('content')


<div class="container">
	<div class="row">

        <div class="col-md-3 py-2">
        	<div class="card card-color">
        		<div class="card-body">
        			<h3 class="count-card-title">{{$TotalVisitor}}</h3>
					<h4 class="count-card-text">Total Visitor</h4>
        		</div>
        	</div>
        </div>

        <div class="col-md-3 py-2">
            <div class="card card-color">
                <div class="card-body">
                    <h3 class="count-card-title">{{$TotalCourse}}</h3>
                    <h4 class="count-card-text">Total Course</h4>
                </div>
            </div>
        </div>

        <div class="col-md-3 py-2">
            <div class="card card-color">
                <div class="card-body">
                    <h3 class="count-card-title">{{$TotalStudent}}</h3>
                    <h4 class="count-card-text">Total Student</h4>
                </div>
            </div>
        </div>

	</div>
</div>



@endsection
