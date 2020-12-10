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
                    <h4 class="count-card-title">{{$TotalClassCategory}}</h4>
                    <h5 class="count-card-text">Total Category</h5>
                </div>
            </div>
        </div>

	</div>
</div>



@endsection
