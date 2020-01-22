<?php require_once('header.php');?>
<!-- Main content -->
<div class="content-wrapper" id="content">

    <!-- Page header -->
    <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> REQUISITION </span></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-notebook text-primary"></i> <span>Reports</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home </a></li>
                <li><a href="#"> Requisition </a></li>
                <li class="active"> Update Ministry Approvals </li>
            </ul>

        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 class="panel-title"><b>Update Ministry Approvals</b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">

            </div>

            <table id="upminapp" class="table datatable-responsive-control-right">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Equipment Name</th>
                    <th>Count </th>
                    <th>Status</th>
                    <th>Ministry Approval</th>
                    <th>Ministry Approval Document ID</th>
                    <th>Action</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

        </div>
        <!-- Control position -->

    </div>
    <!-- /content area -->

    <!-- Vertical form modal -->
    <div id="modal_form_vertical" class="modal fade " tabindex="-1" >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">

                    <fieldset>
                        <legend class="text-semibold">
                            <i class="icon-pencil5 position-left"></i>
                            Basic Details
                            <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse in" id="demo1">
                            <form id="modal-form">
                                <input type="text" id="Minapp_sent_snmodal" name="Minapp_sent_snmodal" class="hidden">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label> Ministry Approval :</label>
                                        <input type="text" id="minapp0" name="minapp0" class="form-control" placeholder="Approved / Rejected" >
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label> Ministry Approval Document ID :</label>
                                        <input type="text" id="minappdoc" name="minappdoc" class="form-control" >
                                    </div>
                                </div>

                            </div>

                            </form>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" id="reqsubmit" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                </div>

            </div>
        </div>
    </div >
    <!-- /vertical form modal -->

    <script>


        function mydatatable(){

            $('#upminapp').DataTable();
        }

        //get data
        $(document).ready(function () {
            // mydatatable();

            $.ajax({
                method: "POST",
                url: "../DBhandle/update_minapp_con.php?code=get_data",
                processData: false,
                contentType: false
            })
                .done(function (data) {
                    $('#upminapp').DataTable().destroy();
                    $('#upminapp tbody').empty();
                    $('#upminapp tbody').append(data);
                    mydatatable();
                });
        });

        function modalpop(val){
            $("#Minapp_sent_snmodal").val(val);
            $("#modal_form_vertical").modal("show");
        }


        $("#reqsubmit").click(function () {

            formData = new FormData($("#modal-form")[0]);

            $.ajax({
                type: "POST",
                url: "../DBhandle/update_minapp_con.php?code=save",
                data: formData,
                processData: false,
                contentType: false,
                success: function(data){
                    $.ajax({
                        method: "POST",
                        url: "../DBhandle/update_minapp_con.php?code=get_data",
                        processData: false,
                        contentType: false
                    })
                        .done(function (data) {
                            $('#upminapp').DataTable().destroy();
                            $('#upminapp tbody').empty();
                            $('#upminapp tbody').append(data);
                            mydatatable();
                        });
                }
            });

        });

        $( document ).ready(function(){

            // Table setup
            // ------------------------------

            // Setting datatable defaults
            $.extend( $.fn.dataTable.defaults, {
                autoWidth: false,
                responsive: true,
                columnDefs: [{
                    orderable: false,
                    width: '100px',
                    targets: [ 7 ]
                }],
                dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
                language: {
                    search: '<span>Filter:</span> _INPUT_',
                    searchPlaceholder: 'Type to filter...',
                    lengthMenu: '<span>Show:</span> _MENU_',
                    paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
                },
                drawCallback: function () {
                    $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
                },
                preDrawCallback: function() {
                    $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
                }
            });

            // Control position
            $('.datatable-responsive-control-right').DataTable({
                responsive: {
                    details: {
                        type: 'column',
                        target: -1
                    }
                },
                columnDefs: [
                    {
                        className: 'control',
                        orderable: false,
                        targets: -1
                    },
                    {
                        width: "100px",
                        targets: [5]
                    },
                    {
                        orderable: false,
                        targets: [5]
                    }
                ]
            });

        });



    </script>

</div>
<!-- /main content -->

<?php require_once('footer.php');?>