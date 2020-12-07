@extends('Classroom.app')
@section('title','Message')
@section('content')
    <div class="container section-marginmd">
        <div class="row">
            <div class="col-md-12 p-2 mainDiv d-none">
                <div class="app-card">
                    <div class="col-md-12 msgCard mt-2 ">
                    <ul class="msgList"></ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 loaderDiv">
                <div class="center-screen mt-5">
                    <div class="loader"></div>
                </div>
            </div>
            <div class="col-md-12 d-none wrongDiv">
                <div class="center-screen mt-5">
                    <h5 class="classroom-count-value">TRY AGAIN</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
        getMessageList();
        function getMessageList() {
            axios.get('/messageList')
                .then(function(response) {
                    $('.loaderDiv').addClass('d-none')
                    $('.wrongDiv').addClass('d-none')
                    $('.mainDiv').removeClass('d-none')
                    if(response.status==200){
                        var jsonData=response.data;
                        $.each(jsonData, function(i, item) {
                            $("<li class='m-2'>").html(
                                    jsonData[i].des
                            ).appendTo('.msgList');
                        });
                    }
                    else{
                        $('.loaderDiv').addClass('d-none')
                        $('.wrongDiv').removeClass('d-none')
                        $('.mainDiv').addClass('d-none')
                    }
                })
                .catch(function(error) {
                    $('.loaderDiv').addClass('d-none')
                    $('.wrongDiv').removeClass('d-none')
                    $('.mainDiv').addClass('d-none')
                });
        }
});
    </script>
@endsection

