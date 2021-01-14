@extends('Layout.app')
@section('title','File Document')
@section('content')


    <div id="MainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <h4 class="text-center">File document</h4>
                <button id="addNewBtnId" class="btn my-3 btn-sm btn-color">Add New</button>

                <table id="SelectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">ID</th>
                        <th class="th-sm">Title</th>
                        <th class="th-sm">Document</th>
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
                    <h5 class="modal-title w-100 mx-4" id="myModalLabel">File Document Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center p-5">
                    <h5 id="EditId" class="mt-3 mb-3 d-none"></h5>
                    <div id="EditForm" class="d-none w-100">

                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" id="FileDocumentTitleEditId" class="form-control mb-4" placeholder="File Document Title">
                                <input type="text" id="FileDocumentUrlEditId" class="form-control mb-4" placeholder="File Document Url">
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
                        <h5 class="mb-4">Add File Document</h5>

                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" id="FileDocumentTitleAddId" class="form-control mb-4" placeholder="File Document Title">
                                <input type="text" id="FileDocumentUrlAddId" class="form-control mb-4" placeholder="File Document Url">
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

        getFileDocumentData();

        function getFileDocumentData(){
            axios.get('/getFileDocumentData')
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
                                "<td>" + jsonData[i].doc_url +"</td>" +
                                "<td><a class='EditBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-edit btn-outline-success edit-btn-color'></i></a></td>" +
                                "<td><a class='DeleteBtn' data-id=" + jsonData[i].id + " ><i class='fas fa-trash-alt btn-outline-danger delete-btn-color'></i></a></td>"
                            ).appendTo('#MainTableData');
                        });

                        // File Document Table Delete Icon Click
                        $('.DeleteBtn').click(function (){
                            let id=$(this).data('id');
                            $('#DeleteId').html(id);
                            $('#deleteModal').modal('show');
                        });


                        // File Document Table Edit Icon Click
                        $('.EditBtn').click(function (){
                            let id=$(this).data('id');
                            $('#EditId').html(id);
                            FileDocumentEdit(id);
                            $('#editModal').modal('show');
                        });



                        // File Document data table js
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

        // File Document Delete Confirm Btn
        $('#DeleteConfirmBtn').click(function (){
            let id=$('#DeleteId').html();
            FileDocumentDelete(id);
        });

        //File Document Delete Method
        function FileDocumentDelete(DeleteId){

            $('#DeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation.......

            axios.post('/FileDocumentDelete',{
                id:DeleteId
            })
                .then(function (response){
                    $('#DeleteConfirmBtn').html("Yes");

                    if (response.status==200 && response.data==1){
                        $('#deleteModal').modal('hide');
                        toastr.success('Delete Success');
                        getFileDocumentData();
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





        // Each File Document Edit Details
        function  FileDocumentEdit(EditId){
            axios.post('/getFileDocumentDetails',{
                id:EditId
            })
                .then(function (response){
                    if (response.status==200){
                        $('#EditForm').removeClass('d-none');
                        $('#EditLoader').addClass('d-none');

                        let id= $('#EditId').html();

                        let jsonData=response.data;
                        $('#FileDocumentTitleEditId').val(jsonData[0].title);
                        $('#FileDocumentUrlEditId').val(jsonData[0].doc_url);
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
            let title=$('#FileDocumentTitleEditId').val();
            let doc_url=$('#FileDocumentUrlEditId').val();

            FileDocumentUpdate(id,title,doc_url);
        })

        //File Document Update Method
        function FileDocumentUpdate(id,title,doc_url){

            if (title.length==0){
                toastr.error('Title is Required !');
            }
            else if (doc_url.length==0){
                toastr.error('Doc url is Required !');
            }
            else{

                $('#editConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation.......

                axios.post('/FileDocumentUpdate',{
                    id:id,
                    title:title,
                    doc_url:doc_url,
                })
                    .then(function (response){
                        $('#editConfirmBtn').html("Save");

                        if (response.status==200 && response.data==1){
                            $('#editModal').modal('hide');
                            toastr.success('Update Success');
                            getFileDocumentData();
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



        // File Document New btn Click
        $('#addNewBtnId').click(function(){
            $('#addModal').modal('show');
        });

        // File Document Modal Save Btn
        $('#AddConfirmBtn').click(function() {

            let title=$('#FileDocumentTitleAddId').val();
            let doc_url=$('#FileDocumentUrlAddId').val();

            FileDocumentAdd(title,doc_url);
        })
        // File Document Add Method
        function FileDocumentAdd(title,doc_url) {

            if (title.length==0){
                toastr.error('Title is Required !');
            }
            else if (doc_url.length==0){
                toastr.error('Doc Url is Required !');
            }
            else{

                $('#AddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation....

                axios.post('/FileDocumentAdd', {
                    title:title,
                    doc_url:doc_url,
                })
                    .then(function(response) {
                        $('#AddConfirmBtn').html("Save");
                        if(response.status==200){
                            if (response.data == 1) {
                                $('#addModal').modal('hide');
                                toastr.success('Add Success');
                                getFileDocumentData();

                                $('#FileDocumentTitleAddId').val('');
                                $('#FileDocumentUrlAddId').val('');

                            } else {
                                $('#addModal').modal('hide');
                                toastr.error('Add Fail');
                                getFileDocumentData();
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





