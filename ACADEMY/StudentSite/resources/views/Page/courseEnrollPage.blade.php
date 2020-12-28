@extends('Layout.app')
@section('title','Contact')
@section('content')

    <div class="text-center section-marginTop container-fluid">
        <h5 class="title-text mt-2"><b></b></h5>
        <p class="des-text"></p>
        <div class="row">
            @foreach($result as $result)
                <div class="col-md-5 ml-5 p-1 mb-3">
                    <div class="card text-center">
                            <div class="card-body">
                                <img class="item-logoBig" src="{{$result->img}}"><br>
                                <h5 class="title-text mt-2">{{$result->title}}</h5>
                                <h6 class="card-subtitle text-success mt-2">Course Fee: {{$result->fee}}</h6>
                                <h6 class="card-subtitle text-success mt-2">Total Class: {{$result->totalClass}} Total Student: {{$result->totalStudent}}</h6>
                                <h5 class="des-text mt-2">{{$result->des}}</h5>
                            </div>
                    </div>
                </div>

                <div class="col-md-5 ml-5 p-1 mb-3">
                    <div class="text-center">
                        <div class="col-md-10 ml-5 mt-3 contactPage-form">
                            <h5 class="service-card-title">Payment Details</h5>
                            <div class="form-group">
                                <select class="form-control" id="">
                                    <option>Bkash</option>
                                    <option>DBBL</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input id="" type="text" class="form-control  w-100" placeholder="Trx ID">
                            </div>
                            <div class="form-group">
                                <input id="" type="text" class="form-control  w-100" placeholder="Payment Mobile No">
                            </div>
                            <button id="contactSendBtnId" type="submit" class="btn btn-block normal-btn w-100">CONFIRM PAYMENT</button>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>
    </div>



@endsection

@section('script')
    <script type="text/javascript">



    </script>
@endsection
