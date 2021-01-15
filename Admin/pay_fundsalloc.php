<?php require_once('header.php');


date_default_timezone_set("Asia/Colombo");
$tod = date("Y-m-d");

$id = $_GET["proc"];

function get_user_data(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "nhk_epms";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_id = $_SESSION["user"]["uid"];
    $sql = "SELECT 
              * 
            FROM
              epms_employee emp 
              INNER JOIN epms_users usr 
                ON usr.`Emp_id` = emp.`Emp_id` 
        WHERE usr.`User_sn` = '$user_id' ";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    } else {
        echo "0 results";
    }

}


$usr = get_user_data();


if ($usr["Emp_assigned_unit"]==''){
    $unit = $usr["Emp_assigned_ward"];
}
else{
    $unit = $usr["Emp_assigned_unit"];
}


function get_data($id){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "nhk_epms";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }


    $sql = "SELECT * FROM epms_tenders ep
            WHERE ep.`Procurement_id` ='$id'";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    } else {
        echo "0 results";
    }

}

$data = get_data($id);





?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> PAYMENTS </span></h4>
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
                <li><a href="#"> Payments </a></li>
                <li class="active">Make Payments</li>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Clickable title -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h6 class="panel-title"><b> Make Payments </b></h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <form class="stepy-clickable" id="paymentform" action="#">
                <fieldset title="1">
                    <legend class="text-semibold">Fund Allocation Details</legend>
                        <div class="col-md-6" style="height: 100%;">
                            <div class="col-sm-4 col-sm-offset-2" style="margin-top: 30px;">
                                <img src="../global_assets/images/procure.jpg" height ="350px"  />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group">
                                    <label>Procurement ID : <span class="text-danger">*</span></label>
                                    <input type="text" id="procid" name="procid" value="<?php echo $data["Procurement_id"] ?>" class="form-control required"  >
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label>Equipment Name. : <span class="text-danger">*</span></label>
                                    <input type="text" id="eqpname" name="eqpname" value="<?php echo $data["Equip_name"] ?>" class="form-control required"  >
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label>Quantity : <span class="text-danger">*</span></label>
                                    <input type="text" id="qty" name="qty" value="<?php echo $data["Quantity"] ?>" class="form-control required" >
                                </div>
                            </div>

                            <div class="row">
                                <label>Amount: <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" name="amount" id="amount" placeholder="Enter the amount" class="form-control  required" data-mask="999,999,999.99">
                                    <span class="input-group-addon">LKR</span>
                                </div>
                            </div>
                            <div class="row">&nbsp;</div>
                            <div class="row">
                                <div class="form-group">
                                    <label> Funding Entity : <span class="text-danger">*</span></label>
                                    <input type="text" id="fundentity" name="fundentity" class="form-control required" >
                                </div>
                            </div>

                        </div>

                </fieldset>


                <fieldset title="2">
                    <legend class="text-semibold">Cheque Details</legend>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group">
                                    <label>Cheque Received Date : <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                        <input type="text" id="chqrdate" name="chqrdate" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label>Cheque No. : <span class="text-danger">*</span></label>
                                    <input type="text" id="chqno" name="chqno" class="form-control required"  >
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label>Copy of the Cheque :<span class="text-danger">*</span> </label>
                                    <input type="file" id="chqcopy" name="chqcopy" class="file-input">
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6" style="height: 100%;">
                            <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                <img src="../global_assets/images/chq.jpg" height ="300px"  />
                            </div>
                        </div>

                        <div class="row"></div>

                </fieldset>

                <fieldset title="3">
                    <legend class="text-semibold">Payment Details</legend>

                        <div class="row">
                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="../global_assets/images/fund1.jpg" height ="300px"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Good Recdeived (YES / NO). : <span class="text-danger">*</span></label>
                                        <input type="text" id="gr" name="gr" class="form-control required"  >
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="form-group">
                                        <label>Date of Payment : <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                            <input type="text" id="pdate" name="pdate" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="form-group">
                                        <label> Payment Status : <span class="text-danger">*</span></label>
                                        <select name="pstatus" id="pstatus" data-placeholder="Choose a job title..." class="select required">
                                            <option></option>
                                            <option value="Pending"> Pending </option>
                                            <option value="Paid"> Paid </option>
                                            <option value="Not Paid"> Not Paid </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label>Copy of Invoice :<span class="text-danger">*</span> </label>
                                        <input type="file" id="invoicecopy" name="invoicecopy" class="file-input">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label> Remark :</label>
                                <textarea class="form-control" name="remark" id="remark" rows="5" cols="5" placeholder="If you want to add any info, do it here." ></textarea>
                            </div>
                        </div>
                </fieldset>



                <a id="save" class="btn btn-primary stepy-finish">Submit <i class="icon-check position-right"></i></a>

            </form>
        </div>
        <!-- /clickable title -->

    </div>
    <!-- /content area -->

    <script>





        // select2
        $( document ).ready(function(){

            // Default initialization
            $('.select').select2({
                minimumResultsForSearch: Infinity
            });


            // Select with search
            $('.select-search').select2();


            // Fixed width. Single select
            $('.select-fixed-single').select2({
                minimumResultsForSearch: Infinity,
                width: 250
            });
        });

        //uploader
        $( document ).ready(function() {


            var modalTemplate = '<div class="modal-dialog modal-lg" role="document">\n' +
                '  <div class="modal-content">\n' +
                '    <div class="modal-header">\n' +
                '      <div class="kv-zoom-actions btn-group">{toggleheader}{fullscreen}{borderless}{close}</div>\n' +
                '      <h6 class="modal-title">{heading} <small><span class="kv-zoom-title"></span></small></h6>\n' +
                '    </div>\n' +
                '    <div class="modal-body">\n' +
                '      <div class="floating-buttons btn-group"></div>\n' +
                '      <div class="kv-zoom-body file-zoom-content"></div>\n' + '{prev} {next}\n' +
                '    </div>\n' +
                '  </div>\n' +
                '</div>\n';

            // Buttons inside zoom modal
            var previewZoomButtonClasses = {
                toggleheader: 'btn btn-default btn-icon btn-xs btn-header-toggle',
                fullscreen: 'btn btn-default btn-icon btn-xs',
                borderless: 'btn btn-default btn-icon btn-xs',
                close: 'btn btn-default btn-icon btn-xs'
            };

            // Icons inside zoom modal classes
            var previewZoomButtonIcons = {
                prev: '<i class="icon-arrow-left32"></i>',
                next: '<i class="icon-arrow-right32"></i>',
                toggleheader: '<i class="icon-menu-open"></i>',
                fullscreen: '<i class="icon-screen-full"></i>',
                borderless: '<i class="icon-alignment-unalign"></i>',
                close: '<i class="icon-cross3"></i>'
            };

            // File actions
            var fileActionSettings = {
                zoomClass: 'btn btn-link btn-xs btn-icon',
                zoomIcon: '<i class="icon-zoomin3"></i>',
                dragClass: 'btn btn-link btn-xs btn-icon',
                dragIcon: '<i class="icon-three-bars"></i>',
                removeClass: 'btn btn-link btn-icon btn-xs',
                removeIcon: '<i class="icon-trash"></i>',
                indicatorNew: '<i class="icon-file-plus text-slate"></i>',
                indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
                indicatorError: '<i class="icon-cross2 text-danger"></i>',
                indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>'
            };

            $('.file-input').fileinput({
                browseLabel: 'Browse',
                browseIcon: '<i class="icon-file-plus"></i>',
                showUpload: false,
                removeIcon: '<i class="icon-cross3"></i>',
                layoutTemplates: {
                    icon: '<i class="icon-file-check"></i>',
                    modal: modalTemplate
                },
                initialPreview: [
                    "broken.jpg"
                ],
                initialPreviewConfig: [
                    {caption: "Example Image", size: 930321, url: '{$url}'}
                ],
                initialPreviewAsData: true,
                overwriteInitial: true,
                previewZoomButtonClasses: previewZoomButtonClasses,
                previewZoomButtonIcons: previewZoomButtonIcons,
                fileActionSettings: fileActionSettings
            });

        });

        $.fn.stepy.defaults.legend = false;
        $.fn.stepy.defaults.transition = 'fade';
        $.fn.stepy.defaults.duration = 150;
        $.fn.stepy.defaults.backLabel = '<i class="icon-arrow-left13 position-left"></i> Back';
        $.fn.stepy.defaults.nextLabel = 'Next <i class="icon-arrow-right14 position-right"></i>';

        // wizard and datepicker
        $( document ).ready(function() {




            // Stepy basic 
            $(".stepy-clickable").stepy({

                next: function(index) {

                },
                back: function(index) {

                },
                finish: function() {

                    sendData = new FormData($("#paymentform")[0]);
                    $.ajax({
                        method: "POST",
                        url: "../DBhandle/pay_fundalloc_con.php?code=save",
                        data: sendData,
                        processData: false,
                        contentType: false
                    }).done(function (msg) {
                        swal({
                                title: "Payment Successfully!",
                                text: "Click OK to Continue",
                                confirmButtonColor: "#66BB6A",
                                type: "success"
                            },
                            function(isConfirm){
                                if (isConfirm) {
                                    window.location.href=""
                                }
                            });

                        getdatatotable();
                    });

                    preventDefault();

                }

            });
            $('.stepy-clickable').find('.button-next').addClass('btn btn-primary');
            $('.stepy-clickable ').find('.button-back').addClass('btn btn-default');






            $('.pickadate-strings').pickadate({
                weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                showMonthsShort: true
            });



        });

    </script>



</div>
<!-- /Main content -->
<?php require_once('footer.php');?>

