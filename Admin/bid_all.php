<?php require_once('header.php');

date_default_timezone_set("Asia/Colombo");
$tod = date("Y-m-d");

?>

<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> BIDS</span></h4>
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
                <li class="active">Evaluate Bids</li>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 class="panel-title"><b> Evaluate Bids </b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <table id="evaluatebid" class="table table-bordered table-hover datatable-highlight">
                <thead>
                <tr>

                    <th>Procurement ID</th>
                    <th>Bidder ID</th>
                    <th>Procurement Title</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Bid Document</th> <!--submitted document-->
                    <th>Preliminalry Evaluation</th> <!--percentage of count-->
                    <th>Action</th>
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
                                <input type="hidden" id="bidappmodal" name="bidappmodal"  >

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label> BID Approval :</label>
                                            <input type="text" id="bidapprvl" name="bidapprvl" class="form-control" placeholder="Approved / Rejected" >
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="content-group-lg">
                                            <label> BID Approval Date : </label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                                                <input value="<?php echo $tod ?>" type="text" class="form-control" id="bidappdate" name="bidappdate">
                                            </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label> Add Reason:</label>
                                            <textarea name="bidreason" placeholder="Add remarks here." class="form-control"></textarea>
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

            $('#evaluatebid').DataTable();
        }

        function getdatatotable(){
            //to table
            $.ajax({
                method: "POST",
                url: "../DBhandle/bid_all_con.php?code=get_biddata",
                processData: false,
                contentType: false
            })
                .done(function (data) {
                    $('#evaluatebid').DataTable().destroy();
                    $('#evaluatebid tbody').empty();
                    $('#evaluatebid tbody').append(data);
                    mydatatable();
                });

        }

        //get data
        $(document).ready(function () {

            getdatatotable();
        });


        function modalpop(val){
            $("#bidappmodal").val(val);
            $("#modal_form_vertical").modal("show");
        }


        //modal submit bid evaluation

        $("#reqsubmit").click(function(){
            f= new FormData($("#modal-form")[0]);
            $.ajax({
                method: "POST",
                url: "../DBhandle/bid_all_con.php?code=apprvbid",
                data: f,
                processData: false,
                contentType: false
            })
                .done(function(msg) {
                    swal({
                            title: "Evaluation Successfull!",
                            text: "Click OK to Continue",
                            confirmButtonColor: "#66BB6A",
                            type: "success"
                        },
                        function(isConfirm){
                            if (isConfirm) {
                                location.reload();
                            }
                        });
                });
        });









        //table
        $( document ).ready(function(){

            // Table setup
            // ------------------------------

            // Setting datatable defaults
            $.extend( $.fn.dataTable.defaults, {
                autoWidth: false,
                columnDefs: [{
                    orderable: false,
                    width: '100px',
                    targets: [ 7 ]
                }],
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
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

            // Highlighting rows and columns on mouseover
            var lastIdx = null;
            var table = $('.datatable-highlight').DataTable();

            $('.datatable-highlight tbody').on('mouseover', 'td', function() {
                var colIdx = table.cell(this).index().column;

                if (colIdx !== lastIdx) {
                    $(table.cells().nodes()).removeClass('active');
                    $(table.column(colIdx).nodes()).addClass('active');
                }
            }).on('mouseleave', function() {
                $(table.cells().nodes()).removeClass('active');
            });


        });



    </script>

</div>
<!-- /Main content -->
<?php require_once('footer.php');?>

