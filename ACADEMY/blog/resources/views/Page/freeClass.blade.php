@extends('Layout.app')
@section('title', 'Free Class')
@section('content')
    <div class="container  section-marginbg">
        <div class="row">
            @foreach($freeclass as $freeclass)
                <div class="col-md-3 p-1">
                    <div class="card pb-3">
                        <div class="text-center">
                            <img class="card-img" src="{{$freeclass->img}}" alt="Card image cap">
                            <a class="opener" data-url="{{$freeclass->video}}"><img id="videoPlay" class="play-small mt-3" src="{{ asset('images/play.svg') }}"></a>
                            <p class="des-text mt-2"><b>{{$freeclass->title}}</b></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
