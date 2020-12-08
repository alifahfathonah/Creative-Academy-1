<div class="container section-margin">
    <div class="row">
        <div class="col-md-6">
            <h4>How To Join</h4>
            <p class="text-justify des-text ">{!! $PaymentGuide[0]->des !!}</p>
            <div class="row ">
                <div class="col-md-4 p-2 col-sm-12 text-center">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="">{{$TotalClass}}</h4>
                            <p class="des-text m-0">Class Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2 col-sm-12 text-center">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="">{{$TotalStudent}}</h4>
                            <p class="des-text m-0">Total Student</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 p-2 col-sm-12 text-center">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="">{{$PaymentGuide[0]->price}}</h4>
                            <p class="des-text m-0">Total Course</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="card h-100">
                <img class="card-img-top" src="{{$PaymentGuide[0]->banner}}" alt="Card image cap">
                <div class="card-body">
                    <a href="{{ url('registration') }}"  class="btn mt-2 btn-outline">Join Now </a>
                </div>
            </div>
        </div>
    </div>
</div>
