@extends('Layout.app')
@section('title','Class Category')
@section('content')


    <div id="MainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <h3 class="text-center">Class Category</h3>
                <button id="addNewBtnId" class="btn my-3 btn-sm btn-color">Add New</button>

                <table id="SelectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">ID</th>
                        <th class="th-sm">Image</th>
                        <th class="th-sm">Category Name</th>
                        <th class="th-sm">Description</th>
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
                    <h5 class="modal-title w-100 mx-4" id="myModalLabel">Category Update</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body text-center p-5">
                    <h5 id="EditId" class="mt-3 mb-3 d-none"></h5>
                    <div id="EditForm" class="d-none w-100">

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="CategoryNameEditId" class="form-control mb-4" placeholder="Category Name">
                                <input type="text" id="CategoryDesEditId" class="form-control mb-4" placeholder="Category Description">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="CategoryTitleEditId" class="form-control mb-4" placeholder="Category title">
                                <input type="text" id="CategoryImageEditId" class="form-control mb-4" placeholder="Category Image">
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
                        <h5 class="mb-4">Add Class Category</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="CategoryNameAddId" class="form-control mb-4" placeholder="Category Name">
                                <input type="text" id="CategoryDesAddId" class="form-control mb-4" placeholder="Category Description">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="CategoryTitleAddId" class="form-control mb-4" placeholder="Category Title">
                                <input type="text" id="CategoryImageAddId" class="form-control mb-4" placeholder="Category Image">
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

        getClassCategoryData();

        function getClassCategoryData(){
            axios.get('/getClassCategoryData')
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
                                "<td>" + jsonData[i].img +"</td>" +
                                "<td>" + jsonData[i].name + "</td>" +
                                "<td>" + jsonData[i].des +"</td>" +
                                "<td>" + jsonData[i].title +"</td>" +
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
                            ClassCategoryEdit(id);
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
            ClassCategoryDelete(id);
        });

        // Course Delete Method
        function ClassCategoryDelete(DeleteId){

            $('#DeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation.......

            axios.post('/ClassCategoryDelete',{
                id:DeleteId
            })
                .then(function (response){
                    $('#DeleteConfirmBtn').html("Yes");

                    if (response.status==200 && response.data==1){
                        $('#deleteModal').modal('hide');
                        toastr.success('Delete Success');
                        getClassCategoryData();
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
        function  ClassCategoryEdit(EditId){
            axios.post('/getClassCategoryDetails',{
                id:EditId
            })
                .then(function (response){
                    if (response.status==200){
                        $('#EditForm').removeClass('d-none');
                        $('#EditLoader').addClass('d-none');

                        let id= $('#EditId').html();

                        let jsonData=response.data;
                        $('#CategoryNameEditId').val(jsonData[0].name);
                        $('#CategoryDesEditId').val(jsonData[0].des);
                        $('#CategoryTitleEditId').val(jsonData[0].title);
                        $('#CategoryImageEditId').val(jsonData[0].img);
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
            let name=$('#CategoryNameEditId').val();
            let des=$('#CategoryDesEditId').val();
            let title=$('#CategoryTitleEditId').val();
            let img=$('#CategoryImageEditId').val();

            ClassCategoryUpdate(id,name,des,title,img);
        })

        //Course Update Method
        function ClassCategoryUpdate(id,name,des,title,img){

            if (name.length==0){
                toastr.error('Category Name is Required !');
            }
            else if (des.length==0){
                toastr.error('Category Description is Required !');
            }
            else if (title.length==0){
                toastr.error('Category Title is Required !');
            }
            else if (img.length==0){
                toastr.error('Category Image is Required !');
            }
            else{

                $('#editConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation.......

                axios.post('/ClassCategoryUpdate',{
                    id:id,
                    name:name,
                    des:des,
                    title:title,
                    img:img,
                })
                    .then(function (response){
                        $('#editConfirmBtn').html("Save");

                        if (response.status==200 && response.data==1){
                            $('#editModal').modal('hide');
                            toastr.success('Update Success');
                            getClassCategoryData();
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

            let name=$('#CategoryNameAddId').val();
            let des=$('#CategoryDesAddId').val();
            let title=$('#CategoryTitleAddId').val();
            let img=$('#CategoryImageAddId').val();

            ClassCategoryAdd(name,des,title,img);
        })
        // Course Add Method
        function ClassCategoryAdd(name,des,title,img) {

            if (name.length==0){
                toastr.error('Category Name is Required !');
            }
            else if (des.length==0){
                toastr.error('Category Description is Required !');
            }
            else if (title.length==0){
                toastr.error('Category Title is Required !');
            }
            else if (img.length==0){
                toastr.error('Category Image is Required !');
            }
            else{

                $('#AddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation....

                axios.post('/ClassCategoryAdd', {
                    name:name,
                    des:des,
                    title:title,
                    img:img,
                })
                    .then(function(response) {
                        $('#AddConfirmBtn').html("Save");
                        if(response.status==200){
                            if (response.data == 1) {
                                $('#addModal').modal('hide');
                                toastr.success('Add Success');
                                getClassCategoryData();

                                $('#CategoryNameAddId').val('');
                                $('#CategoryDesAddId').val('');
                                $('#CategoryTitleAddId').val('');
                                $('#CategoryImageAddId').val('');

                            } else {
                                $('#addModal').modal('hide');
                                toastr.error('Add Fail');
                                getClassCategoryData();
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

