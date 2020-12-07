<div class="container-fluid section-margin">
    <div class="row">
        @foreach($CourseFeature as $CourseFeature)
            <div class="col-md-3 p-2">
                <div class="card  text-center">
                    <div class="card-body">
                        <img class="item-logo" src="{{$CourseFeature->img}}"><br>
                        <h5 class="title-text mt-2"><b> {{ $CourseFeature->title }} </b></h5>
                        <p class="des-text"> {{ $CourseFeature->des }}  </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
