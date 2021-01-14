@extends('Layout.app')
@section('title','Dashboard Summary')
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
                    <h4 class="count-card-title">{{$TotalClassList}}</h4>
                    <h5 class="count-card-text">Total Class List</h5>
                </div>
            </div>
        </div>

<!--
        <div class="col-md-3 py-2">
            <div class="card card-color">
                <div class="card-body">
                    <h4 class="count-card-title">{{$TotalCoursePlan}}</h4>
                    <h5 class="count-card-text">Total Course Plan</h5>
                </div>
            </div>
        </div>
-->

        <div class="col-md-3 py-2">
            <div class="card card-color">
                <div class="card-body">
                    <h4 class="count-card-title">{{$TotalFileDocument}}</h4>
                    <h5 class="count-card-text">Total File Document</h5>
                </div>
            </div>
        </div>

	</div>
</div>



@endsection
