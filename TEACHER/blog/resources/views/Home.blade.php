@extends('Layout.app')

@section('content')


<div class="container">
	<div class="row">

        <div class="col-md-3 py-2">
        	<div class="card card-color">
        		<div class="card-body">
        			<h3 class="count-card-title">{{$TotalVisitor}}</h3>
					<h3 class="count-card-text">Total Visitor</h3>
        		</div>
        	</div>
        </div>

	</div>
</div>



@endsection
