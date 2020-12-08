@extends('Layout.app')
@section('title','All Course')
@section('content')


    <div id="MainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <h3 class="text-center">Course Feature List</h3>
                <button id="addNewBtnId" class="btn my-3 btn-sm btn-color">Add New</button>

                <table id="SelectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">ID</th>
                        <th class="th-sm">Course Feature Image</th>
                        <th class="th-sm">Course Feature Title</th>
                        <th class="th-sm">Course Feature Des</th>
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
                    <h5 class="modal-title w-100 mx-4" id="myModalLabel">Course Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center p-5">
                    <h5 id="EditId" class="mt-3 mb-3 d-none"></h5>
                    <div id="EditForm" class="d-none w-100">

                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" id="CourseFeatureTitleEditId" class="form-control mb-4" placeholder="Course Feature Title">
                                <input type="text" id="CourseFeatureDesEditId" class="form-control mb-4" placeholder="Course Feature Description">
                                <input type="text" id="CourseFeatureImageEditId" class="form-control mb-4" placeholder="Course Feature Image">
                            </div>
                        </div>
                    </div>

                    @include('Component.editSectionLoader')
                    @include('Component.editSectionWrong')

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Cancle</button>
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
                        <h5 class="mb-4">Add Course</h5>

                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" id="CourseFeatureTitleAddId" class="form-control mb-4" placeholder="Course Feature Title">
                                <input type="text" id="CourseFeatureDesAddId" class="form-control mb-4" placeholder="Course Feature Description">
                                <input type="text" id="CourseFeatureImageAddId" class="form-control mb-4" placeholder="Course Feature Image">
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

        getCourseFeatureData();

        function getCourseFeatureData(){
            axios.get('/getCourseFeatureData')
                .then(function (response){

                    if(response.status==200){

                        $('#MainDiv').removeClass('d-none');
                        $('#loaderDiv').addClass('d-none');

                        $('#SelectTable').DataTable().destroy();
                        $('#MainTableData').empty();

                        let jsonData=response.data;
                        $.each(jsonData, function (i, item){

                            $('<tr>').html(
                                "<td>" + jsonData[i].id + "</td>" +
                                "<td>" + jsonData[i].img + "</td>" +
                                "<td>" + jsonData[i].title + "</td>" +
                                "<td>" + jsonData[i].des +"</td>" +
                                "<td><a class='EditBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-edit edit-btn-color'></i></a></td>" +
                                "<td><a class='DeleteBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-trash-alt delete-btn-color'></i></a></td>"
                            ).appendTo('#MainTableData');
                        });

                        // Course Table Delete Icon Click
                        $('.DeleteBtn').click(function (){
                            let id=$(this).data('id');
                            $('#DeleteId').html(id);
                            $('#deleteModal').modal('show');
                        });


                        // Course Table Edit Icon Click
                        $('.EditBtn').click(function (){
                            let id=$(this).data('id');
                            $('#EditId').html(id);
                            CourseFeatureEdit(id);
                            $('#editModal').modal('show');
                        });



                        // Course data table js
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

        // Course Delete Confirm Btn
        $('#DeleteConfirmBtn').click(function (){
            let id=$('#DeleteId').html();
            CourseFeatureDelete(id);
        });

        // Course Delete Method
        function CourseFeatureDelete(DeleteId){

            $('#DeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation.......

            axios.post('/CourseFeatureDelete',{
                id:DeleteId
            })
                .then(function (response){
                    $('#DeleteConfirmBtn').html("Yes");

                    if (response.status==200 && response.data==1){
                        $('#deleteModal').modal('hide');
                        toastr.success('Delete Success');
                        getCourseFeatureData();
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





        // Each Course Edit Details
        function CourseFeatureEdit(EditId){
            axios.post('/getCourseFeatureDetails',{
                id:EditId
            })
                .then(function (response){
                    if (response.status==200){
                        $('#EditForm').removeClass('d-none');
                        $('#EditLoader').addClass('d-none');

                        var id= $('#EditId').html();

                        var jsonData=response.data;
                        $('#CourseFeatureTitleEditId').val(jsonData[0].title);
                        $('#CourseFeatureDesEditId').val(jsonData[0].des);
                        $('#CourseFeatureImageEditId').val(jsonData[0].img);
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
            let title=$('#CourseFeatureTitleEditId').val();
            let des=$('#CourseFeatureDesEditId').val();
            let img=$('#CourseFeatureImageEditId').val();

            CourseUpdate(id,title,des,img);
        })

        //Course Update Method
        function CourseUpdate(id,title,des,img){

            if (title.length==0){
                toastr.error('Course Title is Required !');
            }
            else if (des.length==0){
                toastr.error('Course Description is Required !');
            }
            else if (img.length==0){
                toastr.error('Course Image is Required !');
            }
            else{

                $('#editConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation.......

                axios.post('/courseFeatureUpdate',{
                    id:id,
                    title:title,
                    des:des,
                    img:img,
                })
                    .then(function (response){
                        $('#editConfirmBtn').html("Save");

                        if (response.status==200 && response.data==1){
                            $('#editModal').modal('hide');
                            toastr.success('Update Success');
                            getCourseFeatureData();
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



        // Course Add New btn Click
        $('#addNewBtnId').click(function(){
            $('#addModal').modal('show');
        });

        // Course Add Modal Save Btn
        $('#AddConfirmBtn').click(function() {

            let title=$('#CourseFeatureTitleAddId').val();
            let des=$('#CourseFeatureDesAddId').val();
            let img=$('#CourseFeatureImageAddId').val();

            CourseFeatureAdd(title,des,img);
        })
        // Course Add Method
        function CourseFeatureAdd(title,des,img) {

            if (title.length==0){
                toastr.error('Course Title is Required !');
            }
            else if (des.length==0){
                toastr.error('Course Description is Required !');
            }
            else if (img.length==0){
                toastr.error('Course Image is Required !');
            }
            else{
                $('#AddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation....

                axios.post('/CourseFeatureAdd', {
                    title:title,
                    des:des,
                    img:img
                })
                    .then(function(response) {
                        $('#AddConfirmBtn').html("Save");
                        if(response.status==200){
                            if (response.data == 1) {
                                $('#addModal').modal('hide');
                                toastr.success('Add Success');
                                getCourseFeatureData();

                                $('#CourseFeatureTitleAddId').val('');
                                $('#CourseFeatureDesAddId').val('');
                                $('#CourseFeatureImageAddId').val('');

                            } else {
                                $('#addModal').modal('hide');
                                toastr.error('Add Fail');
                                getCourseFeatureData();
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

