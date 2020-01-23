<?php require_once('header.php');

date_default_timezone_set("Asia/Colombo");
$tod = date("Y-m-d");



?>
    <!-- Main content -->
    <div class="content-wrapper" id="content">

        <!-- Page header -->
        <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> BIDS </span></h4>
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
                    <li><a href="#"> Bids </a></li>
                    <li class="active"> View NRFs </li>
                </ul>

            </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content">
            <!-- Control position -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h5 class="panel-title"><b> View NRFs </b></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <table id="nrfs" class="table datatable-responsive-control-right" >
                    <thead>
                        <tr>
                            <th>Procurement ID</th>
                            <th>Bidder ID</th>
                            <th>NRF</th>
                            <th>NRF Submitted Date</th>
                            <th>NRF Approval </th>
                            <th>NRF Approval Date</th>
                            <th>Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <!-- /control position -->

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
                            NRF Details
                            <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse in" id="demo1">
                            <form id="modal-form" enctype="multipart/form-data" method="POST">
                                <input type="text" id="nrf_snmodal" name="nrf_snmodal" class="hidden" >
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label> NRF Approval :</label>
                                        <input type="text" id="nrfapprvl" name="nrfapprvl" class="form-control" placeholder="Approved / Rejected" >
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                <div class="content-group-lg">
                                    <label> NRF Approval Date : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                                            <input value="<?php echo $tod ?>" type="text" class="form-control" id="nrfappdate" name="nrfappdate">
                                        </div>
                                    </label>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label> Add Reason:</label>
                                            <textarea name="nrfappreason" placeholder="Add remarks here." class="form-control"></textarea>
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

                $('#nrfs').DataTable();
            }

            //get data
            $(document).ready(function () {
                    mydatatable();

                $.ajax({
                    method: "POST",
                    url: "../DBhandle/nrfs_con.php?code=get_data",
                    processData: false,
                    contentType: false
                })
                    .done(function (data) {
                        $('#nrfs').DataTable().destroy();
                        $('#nrfs tbody').empty();
                        $('#nrfs tbody').append(data);
                        mydatatable();
                    });
            });

            function modalpop(val){
                $("#nrf_snmodal").val(val);
                $("#modal_form_vertical").modal("show");
            }



            
            // Table setup
            // ------------------------------

            // Setting datatable defaults
            $.extend( $.fn.dataTable.defaults, {
                autoWidth: false,
                responsive: true,
                columnDefs: [{ 
                    orderable: false,
                    width: '100px',
                    targets: [ 6 ]
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

            $( document ).ready(function(){
                
                // Styled file input
                $('.file-styled').uniform({
                    fileButtonClass: 'action btn bg-primary-400'
                });

            });

                $("#reqsubmit").click(function(){
                    f= new FormData($("#modal-form")[0]);
                        $.ajax({
                            method: "POST",
                            url: "../DBhandle/nrfs_con.php?code=apprvnrf",
                            data: f,
                            processData: false,
                            contentType: false
                        })
                            .done(function(msg) {

                              

                            });
                });




        </script>

    </div>
    <!-- /main content -->

<?php require_once('footer.php');?>