@extends('Layout.app')
@section('title','Course Plan')
@section('content')


    <div id="MainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <h3 class="text-center">Course Plan</h3>
                <button id="addNewBtnId" class="btn my-3 btn-sm btn-color">Add New</button>

                <table id="SelectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">ID</th>
                        <th class="th-sm">Title</th>
                        <th class="th-sm">Description</th>
                        <th class="th-sm">Key Points</th>
                        <th class="th-sm">Video</th>
                        <th class="th-sm">Edit</th>
                        <th class="th-sm">Delete</th>
                    </tr>
                    </thead>
                    <tbody id="MainTableData">


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @include('Component.loader')
    @include('Component.wrong')


    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body text-center p-3">
                    <h5 class="mt-4">Do You Want To Delete?</h5>
                    <h5 id="DeleteId" class="mt-4 d-none"></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
                    <button id="DeleteConfirmBtn" type="button" class="btn btn-sm btn-danger">Yes</button>
                </div>
            </div>
        </div>
    </div>




    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title w-100 mx-4" id="myModalLabel">Course Plan Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center p-5">
                    <h5 id="EditId" class="mt-3 mb-3 d-none"></h5>
                    <div id="EditForm" class="d-none w-100">

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="CoursePlanTitleEditId" class="form-control mb-4" placeholder="Course Plan Title">
                                <textarea type="text"class="form-control mb-4" id="CoursePlanDesEditId" placeholder="Course Plan Description" rows="3"></textarea>
                            </div>
                            <div class="col-md-6">
                                <textarea type="text"class="form-control mb-4" id="CoursePlanPointsEditId" placeholder="Course Plan Points" rows="3"></textarea>
                                <input type="text" id="CoursePlanVideoEditId" class="form-control mb-4" placeholder="Course Plan Video Link">
                            </div>
                        </div>
                    </div>

                    @include('Component.editSectionLoader')
                    @include('Component.editSectionWrong')

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    <button id="editConfirmBtn" type="button" class="btn btn-sm btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body p-5 text-center">
                    <div id="AddForm" class=" w-100">
                        <h5 class="mb-4">Add Course Plan</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="CoursePlanTitleAddId" class="form-control mb-4" placeholder="Course Plan Title">
                                <textarea type="text"class="form-control mb-4" id="CoursePlanDesAddId" placeholder="Course Plan Description" rows="3"></textarea>
                            </div>
                            <div class="col-md-6">
                                <textarea type="text"class="form-control mb-4" id="CoursePlanPointsAddId" placeholder="Course Plan Points" rows="3"></textarea>
                                <input type="text" id="CoursePlanVideoAddId" class="form-control mb-4" placeholder="Course Plan Video Link">
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancel</button>
                    <button  id="AddConfirmBtn" type="button" class="btn  btn-sm  btn-danger">Save</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script type="text/javascript">

        getCoursePlanData();

        function getCoursePlanData(){
            axios.get('/getCoursePlanData')
                .then(function (response){

                    if(response.status==200){

                        $('#MainDiv').removeClass('d-none');
                        $('#loaderDiv').addClass('d-none');

                        $('#SelectTable').DataTable().destroy();
                        $('#MainTableData').empty();

                        let jsonData=response.data;
                        $.each(jsonData, function (i, item){

                            $('<tr>').html(
                                "<td>" + jsonData[i].id +"</td>" +
                                "<td>" + jsonData[i].title + "</td>" +
                                "<td>" + jsonData[i].short_des +"</td>" +
                                "<td>" + jsonData[i].key_points +"</td>" +
                                "<td>" + jsonData[i].video +"</td>" +
                                "<td><a class='EditBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-edit btn-outline-success edit-btn-color'></i></a></td>" +
                                "<td><a class='DeleteBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-trash-alt btn-outline-danger delete-btn-color'></i></a></td>"
                            ).appendTo('#MainTableData');
                        });

                        // Course Plan Table Delete Icon Click
                        $('.DeleteBtn').click(function (){
                            let id=$(this).data('id');
                            $('#DeleteId').html(id);
                            $('#deleteModal').modal('show');
                        });


                        // Course Plan Table Edit Icon Click
                        $('.EditBtn').click(function (){
                            let id=$(this).data('id');
                            $('#EditId').html(id);
                            CoursePlanEdit(id);
                            $('#editModal').modal('show');
                        });



                        // Course Plan data table js
                        $('#SelectTable').DataTable();
                        $('.dataTables_length').addClass('bs-select');
                        //
                    }
                    else{
                        $('#loaderDiv').addClass('d-none');
                        $('#wrongDiv').removeClass('d-none');
                    }

                })
                .catch(function (error){
                    $('#loaderDiv').addClass('d-none');
                    $('#wrongDiv').removeClass('d-none');
                })
        }

        // Course Plan Delete Confirm Btn
        $('#DeleteConfirmBtn').click(function (){
            let id=$('#DeleteId').html();
            CoursePlanDelete(id);
        });

        // Course Plan Delete Method
        function CoursePlanDelete(DeleteId){

            $('#DeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation.......

            axios.post('/CoursePlanDelete',{
                id:DeleteId
            })
                .then(function (response){
                    $('#DeleteConfirmBtn').html("Yes");

                    if (response.status==200 && response.data==1){
                        $('#deleteModal').modal('hide');
                        toastr.success('Delete Success');
                        getCoursePlanData();
                    }
                    else{
                        $('#deleteModal').modal('hide');
                        toastr.error('Delete Fail');
                    }
                })
                .catch(function (error){
                    $('#deleteModal').modal('hide');
                    toastr.error('Delete Fail');
                })
        }





        // Each Course Plan Edit Details
        function  CoursePlanEdit(EditId){
            axios.post('/getCoursePlanDetails',{
                id:EditId
            })
                .then(function (response){
                    if (response.status==200){
                        $('#EditForm').removeClass('d-none');
                        $('#EditLoader').addClass('d-none');

                        let id= $('#EditId').html();

                        let jsonData=response.data;
                        $('#CoursePlanTitleEditId').val(jsonData[0].title);
                        $('#CoursePlanDesEditId').val(jsonData[0].short_des);
                        $('#CoursePlanPointsEditId').val(jsonData[0].key_points);
                        $('#CoursePlanVideoEditId').val(jsonData[0].video);
                    }
                    else{
                        $('#EditLoader').addClass('d-none');
                        $('#EditWrong').removeClass('d-none');
                    }

                })
                .catch(function (error){
                    $('#EditLoader').addClass('d-none');
                    $('#EditWrong').removeClass('d-none');
                })
        }

        //
        $('#editConfirmBtn').click(function (){
            let id= $('#EditId').html();
            let title=$('#CoursePlanTitleEditId').val();
            let short_des=$('#CoursePlanDesEditId').val();
            let key_points=$('#CoursePlanPointsEditId').val();
            let video=$('#CoursePlanVideoEditId').val();

            CoursePlanUpdate(id,title,short_des,key_points,video);
        })

        //Course Plan Update Method
        function CoursePlanUpdate(id,title,short_des,key_points,video){

            if (title.length==0){
                toastr.error('Title is Required !');
            }
            else if (short_des.length==0){
                toastr.error('Short des is Required !');
            }
            else if (key_points.length==0){
                toastr.error('key Points is Required !');
            }
            else if (video.length==0){
                toastr.error('Video Link is Required !');
            }
            else{

                $('#editConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation.......

                axios.post('/CoursePlanUpdate',{
                    id:id,
                    title:title,
                    short_des:short_des,
                    key_points:key_points,
                    video:video,
                })
                    .then(function (response){
                        $('#editConfirmBtn').html("Save");

                        if (response.status==200 && response.data==1){
                            $('#editModal').modal('hide');
                            toastr.success('Update Success');
                            getCoursePlanData();
                        }
                        else{
                            $('#editModal').modal('hide');
                            toastr.error('Update Fail !');
                        }
                    })
                    .catch(function (error){
                        $('#editModal').modal('hide');
                        toastr.error('Something Went Wrong !');
                    })
            }

        }



        // Course Plan New btn Click
        $('#addNewBtnId').click(function(){
            $('#addModal').modal('show');
        });

        // Course Plan Modal Save Btn
        $('#AddConfirmBtn').click(function() {

            let title=$('#CoursePlanTitleAddId').val();
            let short_des=$('#CoursePlanDesAddId').val();
            let key_points=$('#CoursePlanPointsAddId').val();
            let video=$('#CoursePlanVideoAddId').val();

            CoursePlanAdd(title,short_des,key_points,video);
        })
        // Complete Class Add Method
        function CoursePlanAdd(title,short_des,key_points,video) {

            if (title.length==0){
                toastr.error('Title is Required !');
            }
            else if (short_des.length==0){
                toastr.error('Short des is Required !');
            }
            else if (key_points.length==0){
                toastr.error('key Points is Required !');
            }
            else if (video.length==0){
                toastr.error('Video Link is Required !');
            }
            else{

                $('#AddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation....

                axios.post('/CoursePlanAdd', {
                    title:title,
                    short_des:short_des,
                    key_points:key_points,
                    video:video,
                })
                    .then(function(response) {
                        $('#AddConfirmBtn').html("Save");
                        if(response.status==200){
                            if (response.data == 1) {
                                $('#addModal').modal('hide');
                                toastr.success('Add Success');
                                getCoursePlanData();

                                $('#CoursePlanTitleAddId').val('');
                                $('#CoursePlanDesAddId').val('');
                                $('#CoursePlanPointsAddId').val('');
                                $('#CoursePlanVideoAddId').val('');

                            } else {
                                $('#addModal').modal('hide');
                                toastr.error('Add Fail');
                                getCoursePlanData();
                            }
                        }
                        else{
                            $('#addModal').modal('hide');
                            toastr.error('Something Went Wrong !');
                        }
                    })
                    .catch(function(error) {
                        $('#addModal').modal('hide');
                        toastr.error('Something Went Wrong !');
                    });
            }

        }

    </script>
@endsection




