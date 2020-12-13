@extends('Layout.app')
@section('title','Student List')
@section('content')


    <div id="MainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <h3 class="text-center">Student List</h3>

                <table id="SelectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">Student ID</th>
                        <th class="th-sm">Student Name</th>
                        <th class="th-sm">Student Email</th>
                        <th class="th-sm">Student Phone</th>
                        <th class="th-sm">Status</th>
                        <th class="th-sm">Status Edit</th>
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
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title w-100 mx-4" id="myModalLabel">Status Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center p-5">
                    <h5 id="EditId" class="mt-3 mb-3 d-none"></h5>
                    <div id="EditForm" class="d-none w-100">

                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" id="StatusEditId" class="form-control mb-4" placeholder="Course Title">
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



@endsection

@section('script')
    <script type="text/javascript">

        getStudentData();

        function getStudentData(){
            axios.get('/getStudentData')
                .then(function (response){

                    if(response.status==200){

                        $('#MainDiv').removeClass('d-none');
                        $('#loaderDiv').addClass('d-none');

                        $('#SelectTable').DataTable().destroy();
                        $('#MainTableData').empty();

                        let jsonData=response.data;
                        $.each(jsonData, function (i,item){

                            $('<tr>').html(
                                "<td>" + jsonData[i].id + "</td>" +
                                "<td>" + jsonData[i].name + "</td>" +
                                "<td>" + jsonData[i].email +"</td>" +
                                "<td>" + jsonData[i].phn +"</td>" +
                                "<td>" + jsonData[i].status +"</td>" +
                                "<td><a class='EditBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-edit edit-btn-color'></i></a></td>" +
                                "<td><a class='DeleteBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-trash-alt delete-btn-color'></i></a></td>"
                            ).appendTo('#MainTableData');
                        });

                        // Student Table Delete Icon Click
                        $('.DeleteBtn').click(function (){
                            let id=$(this).data('id');
                            $('#DeleteId').html(id);
                            $('#deleteModal').modal('show');
                        });


                        // Student Table Edit Icon Click
                        $('.EditBtn').click(function (){
                            let id=$(this).data('id');
                            $('#EditId').html(id);
                            StudentEdit(id);
                            $('#editModal').modal('show');
                        });


                        // Student data table js
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

        // Student Delete Confirm Btn
        $('#DeleteConfirmBtn').click(function (){
            let id=$('#DeleteId').html();
            StudentDelete(id);
        });

        // Student Delete Method
        function StudentDelete(DeleteId){

            $('#DeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation.......

            axios.post('/StudentDelete',{
                id:DeleteId
            })
                .then(function (response){
                    $('#DeleteConfirmBtn').html("Yes");

                    if (response.status==200 && response.data==1){
                        $('#deleteModal').modal('hide');
                        toastr.success('Delete Success');
                        getStudentData();
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





        // Each student Status Edit Details
        function StudentEdit(EditId){
            axios.post('/getStudentDetails',{
                id:EditId
            })
                .then(function (response){
                    if (response.status==200){
                        $('#EditForm').removeClass('d-none');
                        $('#EditLoader').addClass('d-none');

                        let id= $('#EditId').html();

                        let jsonData=response.data;
                        $('#StatusEditId').val(jsonData[0].status);
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
            let status=$('#StatusEditId').val();

            StudentUpdate(id,status);
        })

        //Course Update Method
        function StudentUpdate(id,status){

            if (status.length==0){
                toastr.error('Status is Required !');
            }
            else{

                $('#editConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation.......

                axios.post('/StudentUpdate',{
                    id:id,
                    status:status,
                })
                    .then(function (response){
                        $('#editConfirmBtn').html("Save");

                        if (response.status==200 && response.data==1){
                            $('#editModal').modal('hide');
                            toastr.success('Update Success');
                            getStudentData();
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


    </script>
@endsection
