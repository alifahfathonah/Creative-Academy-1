@extends('Classroom.app')
@section('title','Classroom')
@section('content')
<div class="container section-marginmd  mb-3">
    <div class="row ">
        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">
                    <h1 class="classroom-count-value TotalClass"></h1>
                    <h1 class="des-text">Total Class Uploaded</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card ">
                <div class="card-body">
                    <h1 class="classroom-count-value TotalFile"></h1>
                    <h1 class="des-text">Your File Uploaded</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">
                    <h1 class="classroom-count-value TotalMessage"></h1>
                    <h1 class="des-text">Message From Instructor</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3 p-2">
            <div class="card">
                <div class="card-body">
                    <h1 class="classroom-count-value TotalViews"></h1>
                    <h1 class="des-text">Total Views From You</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 p-2">
            <div class="card">
                <div class="card-body center-screen p-4">
                    <div class="loader CompleteUnCompleteChartLoader"></div>
                    <h5 class="title-text CompleteUnCompleteChartWrong d-none">Not Available</h5>
                    <canvas class="d-none" id="CompleteUnCompleteChart" width="200" height="200"></canvas>
                    <h5 class="des-text mt-3 text-justify">Your Progress</h5>
                </div>
            </div>
        </div>
        <div class="col-md-8 p-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="title-text">What's New</h5><hr>
                    <div class="center-screen pl-4 pr-4 pt-1 pb-1">
                        <div class="loader LatestLoader"></div>
                        <h5 class="title-text LatestWrong d-none">Not Available</h5>
                    </div>
                    <div class="table-responsive">
                    <table class="myTable table-sm LatestTable table-borderless table des-text">
                        <tbody class="tableBody">
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Classroom.vimeoModal')
@endsection

@section('script')
    <script>

        $(document).ready(function () {
            let LoadingAnim="<div class='spinner-grow spinner-grow-sm text-danger' role='status'></div>";
            var ctx = document.getElementById('CompleteUnCompleteChart');
            var iframe = $('#vimeo-player')[0];
            var player = $f(iframe);
            $('.vimoModal').on('hidden.bs.modal', function (e) {
                player.api('pause');
            })

            getSummaryData();

            function getSummaryData() {
            let TotalClass=$('.TotalClass').html(LoadingAnim);
            let TotalFile=$('.TotalFile').html(LoadingAnim);
            let TotalMessage=$('.TotalMessage').html(LoadingAnim);
            let TotalViews=$('.TotalViews').html(LoadingAnim);

            axios.post('/classRoomSummary')
                .then(function(response) {
                    if(response.status==200){
                        var jsonData=response.data;
                        $('#CompleteUnCompleteChart').removeClass('d-none');
                        $('.CompleteUnCompleteChartLoader').addClass('d-none');
                        TotalClass.html(jsonData['TotalClass']);
                        TotalFile.html(jsonData['TotalFile']);
                        TotalMessage.html(jsonData['TotalMessage']);
                        TotalViews.html(jsonData['TotalView']);
                        let completeClass=parseInt(jsonData['UniqueView']);
                        let totalClass=parseInt(jsonData['TotalClass']);
                        let uncompleteClass=totalClass-completeClass;
                        ShowCompleteUnCompleteChart(completeClass,uncompleteClass);
                    }
                    else{
                        TotalClass.html('--')
                        TotalFile.html('--')
                        TotalMessage.html('--')
                        TotalViews.html('--')
                        $('.CompleteUnCompleteChartWrong').removeClass('d-none')
                        $('.CompleteUnCompleteChartLoader').addClass('d-none')
                    }
                })
                .catch(function(error) {
                    TotalClass.html('--')
                    TotalFile.html('--')
                    TotalMessage.html('--')
                    TotalViews.html('--')
                    $('.CompleteUnCompleteChartWrong').removeClass('d-none')
                    $('.CompleteUnCompleteChartLoader').addClass('d-none')
                });
            }


            function ShowCompleteUnCompleteChart(completeClass,uncompleteClass) {
                var data1 = {
                    labels: ['Complete', 'Not Complete'],
                    datasets: [
                        {
                            data: [completeClass,uncompleteClass],
                            backgroundColor: ["#0271D1", "#FF2D20"]
                        }
                    ],
                };
                var myDoughnutChart = new Chart(ctx, {
                    type: 'doughnut',
                    data :data1
                });
            }

            LatestUpload();
            function LatestUpload() {
            axios.post('/latestUpload')
                .then(function(response) {
                    $('.LatestLoader').addClass('d-none')
                    $('.LatestWrong').addClass('d-none')
                    if(response.status==200){
                        var jsonData=response.data;
                        $('.tableBody').empty();
                        $.each(jsonData, function(i, item) {
                            $('<tr>').html(
                                "<td class='title'>" + jsonData[i].title+"</td>" +
                                "<td><a href='#' class='playVimeo' data-id=" + jsonData[i].video_link +" ><i class='fas fa-play-circle'></i></a></td>"
                            ).appendTo('.tableBody');
                        });

                        $('.playVimeo').click(function (event) {
                            let id=$(this).data('id');
                            let title=$(this).closest('tr').find('.title').html();
                            $('.vimoFrame').attr('src',id);
                            $('.vimoTitle').html(title);
                            $('.vimoLoader').removeClass('d-none');
                            $('.vimoFrame').addClass('d-none');
                            $('.vimoModal').modal('show');
                            AddVideoView(id,title);
                            event.preventDefault();
                            event.stopImmediatePropagation();
                        })
                    }
                    else{
                        $('.LatestWrong').removeClass('d-none')
                    }
                })
                .catch(function(error) {
                    $('.LatestWrong').removeClass('d-none')
                    $('.LatestLoader').addClass('d-none')
                });
        }

        function AddVideoView(video_link,title) {
            axios.post('/addVideoView',{
                video_link:video_link,
                title:title
            }).then(function (response) {
                setTimeout(function () {
                    $('.vimoFrame').removeClass('d-none')
                    $('.vimoLoader').addClass('d-none')
                },2000)
            }).catch(function () {
                setTimeout(function () {
                    $('.vimoFrame').removeClass('d-none')
                    $('.vimoLoader').addClass('d-none')
                },2000)
            })
        }
        });
    </script>
@endsection
