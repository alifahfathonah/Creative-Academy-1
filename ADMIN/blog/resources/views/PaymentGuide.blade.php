@extends('Layout.app')
@section('title','Payment Guide')
@section('content')


    <div id="MainDiv" class="container d-none">
        <div class="row">
            <div class="col-md-12 p-5">
                <h3 class="text-center">Payment Guide</h3>
                <button id="addNewBtnId" class="btn my-3 btn-sm btn-danger">Add New</button>

                <table id="SelectTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">ID</th>
                        <th class="th-sm">Payment Des</th>
                        <th class="th-sm">Payment Price</th>
                        <th class="th-sm">Payment Banner</th>
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
                                <input type="text" id="PaymentGuideDesEditId" class="form-control mb-4" placeholder="Payment Guide Description">
                                <input type="text" id="PaymentGuidePriceEditId" class="form-control mb-4" placeholder="Payment Guide Price">
                                <input type="text" id="PaymentGuideBannerEditId" class="form-control mb-4" placeholder="Payment Guide Banner">
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
                                <input type="text" id="PaymentGuideDesAddId" class="form-control mb-4" placeholder="Payment Guide Description">
                                <input type="text" id="PaymentGuidePriceAddId" class="form-control mb-4" placeholder="Payment Guide Price">
                                <input type="text" id="PaymentGuideBannerAddId" class="form-control mb-4" placeholder="Payment Guide Banner">
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

        getPaymentGuideData();

        function getPaymentGuideData(){
            axios.get('/getPaymentGuideData')
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
                                "<td>" + jsonData[i].banner + "</td>" +
                                "<td>" + jsonData[i].des +"</td>" +
                                "<td>" + jsonData[i].price +"</td>" +
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
                            PaymentGuideEdit(id);
                            $('#editModal').modal('show');
                        });



                        // Payment Guide data table js
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
            PaymentGuideDelete(id);
        });

        // Course Delete Method
        function PaymentGuideDelete(DeleteId){

            $('#DeleteConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation.......

            axios.post('/PaymentGuideDelete',{
                id:DeleteId
            })
                .then(function (response){
                    $('#DeleteConfirmBtn').html("Yes");

                    if (response.status==200 && response.data==1){
                        $('#deleteModal').modal('hide');
                        toastr.success('Delete Success');
                        getPaymentGuideData();
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
        function PaymentGuideEdit(EditId){
            axios.post('/getPaymentGuideDetails',{
                id:EditId
            })
                .then(function (response){
                    if (response.status==200){
                        $('#EditForm').removeClass('d-none');
                        $('#EditLoader').addClass('d-none');

                        let id= $('#EditId').html();

                        let jsonData=response.data;
                        $('#PaymentGuideDesEditId').val(jsonData[0].des);
                        $('#PaymentGuidePriceEditId').val(jsonData[0].price);
                        $('#PaymentGuideBannerEditId').val(jsonData[0].banner);
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
            let des=$('#PaymentGuideDesEditId').val();
            let price=$('#PaymentGuidePriceEditId').val();
            let banner=$('#PaymentGuideBannerEditId').val();

            PaymentGuideUpdate(id,des,price,banner);
        })

        //Course Update Method
        function PaymentGuideUpdate(id,des,price,banner){

            if (des.length==0){
                toastr.error('Payment Guide Des is Required !');
            }
            else if (price.length==0){
                toastr.error('Payment Guide Price is Required !');
            }
            else if (banner.length==0){
                toastr.error('Payment Guide Banner is Required !');
            }
            else{

                $('#editConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>"); //Animation.......

                axios.post('/PaymentGuideUpdate',{
                    id:id,
                    des:des,
                    price:price,
                    banner:banner
                })
                    .then(function (response){
                        $('#editConfirmBtn').html("Save");

                        if (response.status==200 && response.data==1){
                            $('#editModal').modal('hide');
                            toastr.success('Update Success');
                            getPaymentGuideData();
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

            let des=$('#PaymentGuideDesAddId').val();
            let price=$('#PaymentGuidePriceAddId').val();
            let banner=$('#PaymentGuideBannerAddId').val();


            PaymentGuideAdd(des,price,banner);
        })
        // Payment Guide Add Method
        function PaymentGuideAdd(des,price,banner) {

            if (des.length==0){
                toastr.error('Payment Guide Des is Required !');
            }
            else if (price.length==0){
                toastr.error('Payment Guide Price is Required !');
            }
            else if (banner.length==0){
                toastr.error('Payment Guide Banner is Required !');
            }
            else{

                $('#AddConfirmBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div>") //Animation....

                axios.post('/PaymentGuideAdd', {
                    des:des,
                    price:price,
                    banner:banner
                })
                    .then(function(response) {
                        $('#AddConfirmBtn').html("Save");
                        if(response.status==200){
                            if (response.data == 1) {
                                $('#addModal').modal('hide');
                                toastr.success('Add Success');
                                getPaymentGuideData();

                                $('#PaymentGuideDesAddId').val('');
                                $('#PaymentGuidePriceAddId').val('');
                                $('#PaymentGuideBannerAddId').val('');

                            } else {
                                $('#addModal').modal('hide');
                                toastr.error('Add Fail');
                                getPaymentGuideData();
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

