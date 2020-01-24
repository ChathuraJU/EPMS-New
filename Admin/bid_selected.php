
<?php require_once('header.php');?>
<script src="pdftop.js"></script>

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
                <li class="active">Selected Bids</li>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 class="panel-title"><b> Selected Bid List</b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <table id="bidsselect" class="table table-bordered table-hover datatable-highlight">
                <thead>
                    <tr>
                        <th>Procurement ID</th>
                        <th>Bidder ID</th>
                        <th>Phone No</th>
                        <th>Status</th> <!--order placed, Order Not placed-->
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

    <!-- Edit modal -->
    <div id="edit_modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary-400">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><b>PLACE ORDER </b></h5>
                </div>

                <div class="modal-body">

                    <form id="frmapprove" enctype="multipart/form-data">

                        <fieldset>
                            <legend class="text-semibold">
                                <i class="icon-pencil7 position-left"></i>
                                Order Details
                                <a class="control-arrow" data-toggle="collapse"
                                   data-target="#demo3">
                                    <i class="icon-circle-down2"></i>
                                </a>
                            </legend>

                            <div class="collapse in" id="demo3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input id="" name="" type="hidden">
                                            <label> Procurement Title :</label>
                                            <input type="text" id="txt1" class="form-control" readonly>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Procurement ID :</label>
                                            <input type="text" id="txt2" class="form-control" readonly>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Equipment Name : </label>
                                            <input type="text" id="txt3" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Quantity :</label>
                                            <input type="text" id="txt4" class="form-control"readonly>
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <legend class="text-semibold">
                                        <i class="icon-stack-check position-left"></i>
                                        Schedule Meeting
                                        <a class="control-arrow" data-toggle="collapse"
                                           data-target="#demo4">
                                            <i class="icon-circle-down2"></i>
                                        </a>
                                    </legend>
                                    <div class="form-group">
                                        <label> Meeting Date : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><iclass="icon-calendar5"></i></span>
                                            <input type="text" id="txt5"
                                                   class="form-control pickadate-strings required"
                                                   placeholder="Try me&hellip;">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Venue :</label>
                                            <input type="text" id="txt6" class="form-control"
                                                   placeholder=" Name of the Equipment" >
                                        </div>
                                    </div>

                                </div>


                            </div>




                        </fieldset>

                    </form>
                    <!-- /a legend -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="button" id="placeorder" class="btn btn-primary">Place Order
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /edit modal -->


    <script>

        function mydatatable(){

            $('#bidsselect').DataTable();
        }

        function getdatatotable(){
            //to table
            $.ajax({
                method: "POST",
                url: "../DBhandle/bid_select_con.php?code=get_data",
                processData: false,
                contentType: false
            })
            .done(function (data) {
                $('#bidsselect').DataTable().destroy();
                $('#bidsselect tbody').empty();
                $('#bidsselect tbody').append(data);
                mydatatable();
            });

        }

        //get data 
        $(document).ready(function () {

        getdatatotable();
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
                    targets: [ 3 ]
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

        // pickdate
        $(document).ready(function () {
            $('.pickadate-strings').pickadate({
                weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                showMonthsShort: true
            });
        });


        function getdata(val){
            $.ajax({
                method: "POST",
                url: "../DBhandle/bid_select_con.php?code=get_modal_data",
                data: {"id": val}
            })
                .done(function (data) {
                    var recData = JSON.parse(data);
                    $("#txt1").val(recData[0].Procure_title)
                    $("#txt2").val(recData[0].Procurement_id)
                    $("#txt3").val(recData[0].Equip_name)
                    $("#txt4").val(recData[0].Quantity)
                });
        }




        $("#placeorder").click(function () {
            var procid = $("#txt2").val();

            $.ajax({
                method: "POST",
                url: "../DBhandle/bid_select_con.php?code=change_status",
                data: {"id": procid}
            })
                .done(function (data) {
                    alert(data);
                });


            pdf();

        } );
        //
function pdf() {
    const doc =new jsPDF('p', 'pt', 'a4',{filters: ['ASCIIHexEncode']});


    doc.setFontSize(24);
    doc.text(150, 50, "NATIONAL HOSPITAL KANDY");
    doc.setLineWidth(1.5);
    doc.line(20, 100, 585, 100);

    doc.setFontSize(12);
    doc.text(10,150,"Your bid has been approved by the TECHNICAL EVALUATION COMITTEE  for the following tender.")

    doc.setFontSize(10);
    doc.setFontType("normal");
    doc.text(30, 180, 'Procurement Title :' );
    doc.text(275, 180, $("#txt1").val());

    doc.text(30, 210, 'Procurement ID :' );
    doc.text(275, 210, $("#txt2").val());

    doc.text(30, 240, 'Equipment Name :' );
    doc.text(275, 240, $("#txt3").val());

    doc.text(30, 270, 'Quantity :' );
    doc.text(275, 270, $("#txt4").val());

    doc.setFontSize(12);
    doc.setFontType("normal");
    doc.text(10, 300,"Please meet the TEC on office hours. ,")

    doc.setFontSize(10);
    doc.setFontType("normal");

    doc.text(30, 330, 'DATE :' );
    doc.text(275, 330, $("#txt5").val());

    doc.text(30, 360, 'VENUE :' );
    doc.text(275, 360, $("#txt6").val());

    doc.setFontSize(12);
    doc.setFontType("normal");
    doc.text(10, 400,"Thank You!")


    doc.setLineWidth(1.5);
    doc.line(20, 480, 585, 480);


    doc.setFontSize(10);
    doc.setFontType("normal");
    doc.text(10,520,"For Your Reference : Contact Medical Officer Incharge on : +94-81-2245847 / +94-77-5666482")





    var string = doc.output('datauristring');
    var embed = "<embed width='100%' height='100%' src='" + string + "'/>"
    var x = window.open();
    x.document.open();
    x.document.write(embed);
    x.document.close();
}


    </script>


</div>
<!-- /Main content -->
<?php require_once('footer.php');?>

