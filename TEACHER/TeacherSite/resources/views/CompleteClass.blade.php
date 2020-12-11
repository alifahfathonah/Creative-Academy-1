@extends('Layout.app')
@section('title','Complete Class')
@section('content')


    <div id="MainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <h3 class="text-center">Complete Class</h3>
                <button id="addNewBtnId" class="btn my-3 btn-sm btn-color">Add New</button>

                <table id="SelectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">Phone No</th>
                        <th class="th-sm">IP Address</th>
                        <th class="th-sm">Date</th>
                        <th class="th-sm">Time</th>
                        <th class="th-sm">Title</th>
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
                    <h5 class="modal-title w-100 mx-4" id="myModalLabel">Complete Class Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center p-5">
                    <h5 id="EditId" class="mt-3 mb-3 d-none"></h5>
                    <div id="EditForm" class="d-none w-100">

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="CompleteClassPhnEditId" class="form-control mb-4" placeholder="Enter Phone No">
                                <input type="text" id="CompleteClassIP_AddressEditId" class="form-control mb-4" placeholder="IP Address">
                                <input type="text" id="CompleteClassDateEditId" class="form-control mb-4" placeholder="Complete Class Date">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="CompleteClassTimeEditId" class="form-control mb-4" placeholder="Complete Class Time">
                                <input type="text" id="CompleteClassVideoEditId" class="form-control mb-4" placeholder="Complete Class Video Link">
                                <input type="text" id="CompleteClassTitleEditId" class="form-control mb-4" placeholder="Complete Class Title">
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
                        <h5 class="mb-4">Add Complete Class</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="CompleteClassPhnAddId" class="form-control mb-4" placeholder="Enter Phone No">
                                <input type="text" id="CompleteClassIP_AddressAddId" class="form-control mb-4" placeholder="IP Address">
                                <input type="text" id="CompleteClassDateAddId" class="form-control mb-4" placeholder="Complete Class Date">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="CompleteClassTimeAddId" class="form-control mb-4" placeholder="Complete Class Time">
                                <input type="text" id="CompleteClassVideoAddId" class="form-control mb-4" placeholder="Complete Class Video Link">
                                <input type="text" id="CompleteClassTitleAddId" class="form-control mb-4" placeholder="Complete Class Title">
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

        getCompleteClassData();

        function getCompleteClassData(){
            axios.get('/getCompleteClassData')
                .then(function (response){

                    if(response.status==200){

                        $('#MainDiv').removeClass('d-none');
                        $('#loaderDiv').addClass('d-none');

                        $('#SelectTable').DataTable().destroy();
                        $('#MainTableData').empty();

                        let jsonData=response.data;
                        $.each(jsonData, function (i, item){

                            $('<tr>').html(
                                "<td>" + jsonData[i].phn +"</td>" +
                                "<td>" + jsonData[i].ip_address + "</td>" +
                                "<td>" + jsonData[i].date +"</td>" +
                                "<td>" + jsonData[i].time +"</td>" +
                                "<td>" + jsonData[i].title +"</td>" +
                                "<td><a class='EditBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-edit edit-btn-color'></i></a></td>" +
                                "<td><a class='DeleteBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-trash-alt delete-btn-color'></i></a></td>"
                            ).appendTo('#MainTableData');
                        });

                        // Complete Class Table Delete Icon Click
                        $('.DeleteBtn').click(function (){
                            let id=$(this).data('id');
                            $('#DeleteId').html(id);
                            $('#deleteModal').modal('show');
                        });


                        // Complete Class Table Edit Icon Click
                        $('.EditBtn').click(function (){
                            let id=$(this).data('id');
                            $('#EditId').html(id);
                            CompleteClassEdit(id);
                            $('#editModal').modal('show');
                        });



                        // Complete Class data table js
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

        // Complete Class Delete Confirm Btn
        $('#DeleteConfirmBtn').click(function (){
            let id=$('#DeleteId').html();
            CompleteClassDelete(id);
        });

        // Complete Class Delete Method
        function CompleteClassDelete(DeleteId){

            $('#DeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation.......

            axios.post('/CompleteClassDelete',{
                id:DeleteId
            })
                .then(function (response){
                    $('#DeleteConfirmBtn').html("Yes");

                    if (response.status==200 && response.data==1){
                        $('#deleteModal').modal('hide');
                        toastr.success('Delete Success');
                        getCompleteClassData();
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





        // Each Complete Class Edit Details
        function  CompleteClassEdit(EditId){
            axios.post('/getCompleteClassDetails',{
                id:EditId
            })
                .then(function (response){
                    if (response.status==200){
                        $('#EditForm').removeClass('d-none');
                        $('#EditLoader').addClass('d-none');

                        let id= $('#EditId').html();

                        let jsonData=response.data;
                        $('#CompleteClassPhnEditId').val(jsonData[0].phn);
                        $('#CompleteClassIP_AddressEditId').val(jsonData[0].ip_address);
                        $('#CompleteClassDateEditId').val(jsonData[0].date);
                        $('#CompleteClassTimeEditId').val(jsonData[0].time);
                        $('#CompleteClassVideoEditId').val(jsonData[0].video_link);
                        $('#CompleteClassTitleEditId').val(jsonData[0].title);
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
            let phn=$('#CompleteClassPhnEditId').val();
            let ip_address=$('#CompleteClassIP_AddressEditId').val();
            let date=$('#CompleteClassDateEditId').val();
            let time=$('#CompleteClassTimeEditId').val();
            let video_link=$('#CompleteClassVideoEditId').val();
            let title=$('#CompleteClassTitleEditId').val();

            CompleteClassUpdate(id,phn,ip_address,date,time,video_link,title);
        })

        //Complete Class Update Method
        function CompleteClassUpdate(id,phn,ip_address,date,time,video_link,title){

            if (phn.length==0){
                toastr.error('Phone No is Required !');
            }
            else if (ip_address.length==0){
                toastr.error('IP Address is Required !');
            }
            else if (date.length==0){
                toastr.error('Date is Required !');
            }
            else if (time.length==0){
                toastr.error('Time is Required !');
            }
            else if (video_link.length==0){
                toastr.error('Video Link is Required !');
            }
            else if (title.length==0){
                toastr.error('Title is Required !');
            }
            else{

                $('#editConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation.......

                axios.post('/CompleteClassUpdate',{
                    id:id,
                    phn:phn,
                    ip_address:ip_address,
                    date:date,
                    time:time,
                    video_link:video_link,
                    title:title,
                })
                    .then(function (response){
                        $('#editConfirmBtn').html("Save");

                        if (response.status==200 && response.data==1){
                            $('#editModal').modal('hide');
                            toastr.success('Update Success');
                            getCompleteClassData();
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



        // Complete Class New btn Click
        $('#addNewBtnId').click(function(){
            $('#addModal').modal('show');
        });

        // Complete Class Modal Save Btn
        $('#AddConfirmBtn').click(function() {

            let phn=$('#CompleteClassPhnAddId').val();
            let ip_address=$('#CompleteClassIP_AddressAddId').val();
            let date=$('#CompleteClassDateAddId').val();
            let time=$('#CompleteClassTimeAddId').val();
            let video_link=$('#CompleteClassVideoAddId').val();
            let title=$('#CompleteClassTitleAddId').val();

            CompleteClassAdd(phn,ip_address,date,time,video_link,title);
        })
        // Complete Class Add Method
        function CompleteClassAdd(phn,ip_address,date,time,video_link,title) {

            if (phn.length==0){
                toastr.error('Phone No is Required !');
            }
            else if (ip_address.length==0){
                toastr.error('IP Address is Required !');
            }
            else if (date.length==0){
                toastr.error('Date is Required !');
            }
            else if (time.length==0){
                toastr.error('Time is Required !');
            }
            else if (video_link.length==0){
                toastr.error('Video Link is Required !');
            }
            else if (title.length==0){
                toastr.error('Title is Required !');
            }
            else{

                $('#AddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation....

                axios.post('/CompleteClassAdd', {
                    phn:phn,
                    ip_address:ip_address,
                    date:date,
                    time:time,
                    video_link:video_link,
                    title:title,
                })
                    .then(function(response) {
                        $('#AddConfirmBtn').html("Save");
                        if(response.status==200){
                            if (response.data == 1) {
                                $('#addModal').modal('hide');
                                toastr.success('Add Success');
                                getCompleteClassData();

                                $('#CompleteClassPhnAddId').val('');
                                $('#CompleteClassIP_AddressAddId').val('');
                                $('#CompleteClassDateAddId').val('');
                                $('#CompleteClassTimeAddId').val('');
                                $('#CompleteClassVideoAddId').val('');
                                $('#CompleteClassTitleAddId').val('');

                            } else {
                                $('#addModal').modal('hide');
                                toastr.error('Add Fail');
                                getCompleteClassData();
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



