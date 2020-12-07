@extends('Classroom.app')
@section('title','Tutorials')
@section('content')
    <div class="container section-marginmd">
        <div class="row app-card ml-2  mr-2">
            <div class="col-md-3 p-3">
                <select class="form-control tutorialCategoryOption">
                    @foreach($TutorialCategory as $TutorialCategory)
                        <option data-item="{{$TutorialCategory->name}}">{{$TutorialCategory->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 loaderDiv">
                <div class="loader mt-2">

                </div>
            </div>
            <div class="col-md-2 d-none wrongDiv">
                <div class="mt-3">
                    <h4 class="classroom-count-value">TRY AGAIN</h4>
                </div>
            </div>
            <div class="col-md-12 p-2 mt-2 ">
                <div class="table-responsive">
                <table class="myTable table des-text table-bordered ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Topic</th>
                            <th>Title</th>
                            <th>Source</th>
                            <th>Play</th>
                        </tr>

                    </thead>
                    <tbody class="tableBody">

                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
    @include('Classroom.vimeoModal')
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
    var iframe = $('#vimeo-player')[0];
    var player = $f(iframe);
    $('.vimoModal').on('hidden.bs.modal', function (e) {
        player.api('pause');
    })
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
    tutorialByCategory();
    $('.tutorialCategoryOption').change(function () {
        $('.loaderDiv').removeClass('d-none')
        $('.wrongDiv').addClass('d-none')
        let categorySelected=$(this).find('option:selected').data('item')
        $('.myTable').DataTable().destroy();
        $('.tableBody').empty();
        tutorialBySearch(categorySelected);
    })

    function tutorialBySearch(categorySelected) {
        axios.post('/tutorialByCategory',{
            ClassCategory:categorySelected
        })
            .then(function(response) {
                $('.loaderDiv').addClass('d-none')
                $('.wrongDiv').addClass('d-none')
                if(response.status==200){
                    var jsonData=response.data;
                    $('.myTable').DataTable().destroy();
                    $('.tableBody').empty();
                    $.each(jsonData, function(i, item) {
                        $('<tr>').html(
                            "<td>" + jsonData[i].serial_no + "</td>" +
                            "<td>" + jsonData[i].topic+"</td>" +
                            "<td class='title'>" + jsonData[i].title+"</td>" +
                            "<td><a target='_blank'  href='"+jsonData[i].source+"'><i class='fas fa-download'></i></a></td>" +
                            "<td><a  href='#' class='playVimeo' data-id=" + jsonData[i].video_link +" ><i class='fas fa-play-circle'></i></a></td>"
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

                    $('.myTable').DataTable({"order":false});
                }
                else{
                    $('.wrongDiv').removeClass('d-none')
                }
            })
            .catch(function(error) {
                $('.wrongDiv').removeClass('d-none')
                $('.loaderDiv').addClass('d-none')
            });

    }

    function tutorialByCategory() {
        let category="Laravel-Fundamental";
        axios.post('/tutorialByCategory',{
            ClassCategory:category
        })
            .then(function(response) {
                $('.loaderDiv').addClass('d-none')
                $('.wrongDiv').addClass('d-none')
                if(response.status==200){
                    var jsonData=response.data;
                    $('.myTable').DataTable().destroy();
                    $('.tableBody').empty();
                    $.each(jsonData, function(i, item) {
                        $('<tr>').html(
                            "<td>" + jsonData[i].serial_no + "</td>" +
                            "<td>" + jsonData[i].topic+"</td>" +
                            "<td class='title'>" + jsonData[i].title+"</td>" +
                            "<td><a target='_blank' href='"+jsonData[i].source+"'><i class='fas fa-download'></i></a></td>" +
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

                    $('.myTable').DataTable({"order":false});
                }
                else{
                    $('.wrongDiv').removeClass('d-none')
                }
            })
            .catch(function(error) {
                $('.wrongDiv').removeClass('d-none')
                $('.loaderDiv').addClass('d-none')
            });
    }
});
</script>
@endsection
