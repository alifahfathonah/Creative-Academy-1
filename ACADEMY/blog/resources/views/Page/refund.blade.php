@extends('Layout.app')
@section('title', 'Refund Policy')
@section('content')
    <div class="jumbotron jumbotron-fluid text-center pt-5">
        <div class="row">
            <div class="col-md-12">
                <h5 class="title-text mt-5 pt-5">Refund Policy</h5>
            </div>
        </div>
    </div>
    <div class="container des-text section-margin">
        <div class="row">
            <div class="col-md-12">
                {!! $refund[0]->des!!}
            </div>
        </div>
    </div>
@endsection

