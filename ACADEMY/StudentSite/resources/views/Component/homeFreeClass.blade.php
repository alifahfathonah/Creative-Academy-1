<div class="jumbotron bg-white section-margin jumbotron-fluid">
    <div class="container text-center">
        <h5 class="title-text mt-2"><b>FREE CLASS</b></h5>
        <p class="des-text m-0"></p>
        <div class="row">
            <div class="owl-carousel owl-theme">
                @foreach($freeClass as $freeClass)
                    <div class="item m-1 card pb-5 my-5">
                        <div class="text-center">
                            <img class="" src="{{$freeClass->img}}" alt="Card image cap">
                            <a class="opener" data-url="{{ $freeClass->video}}"><img id="videoPlay" class="play-small mt-3" src="{{ asset('images/play.svg') }}"></a>
                            <p class="des-text mt-2"><b>{{ $freeClass->title}}</b></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="d-inline m-0">
            <i id="customPrevBtn" class="btn normal-btn"><</i>
            <i id="customNextBtn" class="btn normal-btn">></i>
        </div>
    </div>
</div>
