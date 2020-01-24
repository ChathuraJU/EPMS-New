<?php require_once('header.php'); ?>


<?php

date_default_timezone_set("Asia/Colombo");
$tod = date("Y-m-d");

$id = $_GET["id"];

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


    $sql = "SELECT * FROM `epms_requisition` ep WHERE ep.`Req_sn`='$id'";


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
    <div class="page-header page-header-default"
         style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> REQUISITION </span>
                </h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-notebook text-primary"></i>
                        <span>Reports</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home </a></li>
                <li><a href="req_create.php"> Requisitions </a></li>
                <li><a href="req_list.php"> Requisition List </a></li>
                <li class="active"> Requisition Details</li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <input type="hidden" id="passid" value="<?php echo $id ?>">
    <!-- Content area -->
    <div class="content">
        <!-- Advanced legend -->
        <form action="#">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h5 class="panel-title"><b> Requisition Details </b></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <fieldset>
                        <legend class="text-semibold">
                            <i class="icon-pencil5 position-left"></i>
                            Basic Details
                            <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse in" id="demo1">
                            <div class="col-lg-6">

                                <div class="row">
                                    <div class="form-group">
                                        <label> Request ID :</label>
                                        <input type="text" id="reqid" value="<?php echo $data["Req_id"] ?>" class="form-control"
                                               placeholder="REQ-000001" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Unit :</label>
                                        <input type="text" id="unit" class="form-control" value="<?php echo $data["Unit_Name"] ?>" placeholder="Unit Name"
                                               readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Ward :</label>
                                        <input type="text" id="ward" class="form-control" value="<?php echo $data["Ward_Name"] ?>" placeholder="Word No."
                                               readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Requisition Date : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                            <input type="text" id="reqdate" name="reqdate"
                                                   class="form-control daterange-single" value="<?php echo $data["Req_date"] ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Requisition type : </label>
                                        <input type="text" id="reqtype" class="form-control"
                                               value="<?php echo $data["Req_type"] ?>" placeholder="Annual Procurement" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="../global_assets/images/reqequip.jpg" height="300px"/>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="text-semibold">
                            <i class="icon-reading position-left"></i>
                            Equipment Details
                            <a class="control-arrow" data-toggle="collapse" data-target="#demo2">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse in" id="demo2">
                            <div class="row">
                                <!-- Basic responsive table -->
                                <div class="panel panel-flat">
                                    <div class="table-responsive">
                                        <table class="table" id="reqdetails">
                                            <thead>
                                            <tr>
                                                <th> #</th>
                                                <th> Requisition Equipment No.</th>
                                                <th> Equipment Name</th>
                                                <th> Quantity</th>
                                                <th> Priority</th>
                                                <th> Primal Approval</th>
                                                <th> Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- /basic responsive table -->
                            </div>
                        </div>

                    </fieldset>
                    <fieldset>
                        <div class="col-lg-10"></div>
                        <div class="col-lg-2"><button type="button" onclick="location.href='req_list.php'" id="backrqlst" class="btn btn-primary">  <i class="icon-arrow-left16"></i>BACK</button></div>


                    </fieldset>

                </div>
            </div>
        </form>
        <!-- /a legend -->

    </div>
    <!-- /content area -->


    <!-- Edit modal -->
    <div id="edit_modal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary-400">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><b>Requisition Approval </b></h5>
                </div>

                <div class="modal-body">

                    <form id="frmapprove" enctype="multipart/form-data">

                        <fieldset>
                            <legend class="text-semibold">
                                <i class="icon-pencil7 position-left"></i>
                                Basic Details
                                <a class="control-arrow" data-toggle="collapse"
                                   data-target="#demo3">
                                    <i class="icon-circle-down2"></i>
                                </a>
                            </legend>

                            <div class="collapse in" id="demo3">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input id="empname2" name="empname2" type="hidden">
                                            <label> Requisition ID :</label>
                                            <input type="text" id="reqid1" class="form-control"
                                                    readonly>

                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Requisition Equipment ID :</label>
                                            <input type="text" id="reqequipid1" class="form-control"
                                                   placeholder="REQ-000001-01" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Requisition Date : </label>
                                            <input type="text" id="reqdate1" name="reqdate"
                                                   class="form-control" placeholder="02.03.2017"
                                                   readonly>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Name of the Consulatant:</label>
                                            <input type="text" id="empname1" class="form-control"
                                                   placeholder="Consultant Name" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Unit :</label>
                                            <input type="text" id="unit1" class="form-control"
                                                   placeholder="Unit Name" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Ward :</label>
                                            <input type="text" id="ward1" class="form-control"
                                                   placeholder="Ward No." readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Requisition Type :</label>
                                            <input type="text" id="reqtype1" class="form-control"
                                                   placeholder="Type of the Requisition" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Equipment Name :</label>
                                            <input type="text" id="equipname1" class="form-control"
                                                   placeholder=" Name of the Equipment" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Quantity :</label>
                                            <input type="text" id="quantity1" class="form-control"
                                                   placeholder="Amount" readonly>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label> Reason :</label>
                                            <textarea id="reason1" placeholder="Additional notes"
                                                      class="form-control" readonly></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <legend class="text-semibold">
                                <i class="icon-stack-check position-left"></i>
                                Primal Approval Details
                                <a class="control-arrow" data-toggle="collapse"
                                   data-target="#demo4">
                                    <i class="icon-circle-down2"></i>
                                </a>
                            </legend>

                            <div class="collapse in" id="demo4">

                                <input type="hidden" name="findrq" id="findrq"
                                       class="form-control">
                                <input type="hidden" name="findqty" id="findqty"
                                       class="form-control">
                                <input type="hidden" name="findeqpname" id="findeqpname"
                                       class="form-control">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Director Name :</label>
                                            <input type="text" id="empname2" name="empname2" class="form-control" value="<?php echo $usr["Emp_id"] ?>"  readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Primal Approval Date : </label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><iclass="icon-calendar5"></i></span>
                                                <input type="text" id="primappdate2" name="primappdate2" class="form-control" value="<?php echo $tod ?>"   readonly>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Primal Approval :</label>
                                            <select id="primapp2" name="primapp2"
                                                    data-placeholder="Pending"
                                                    class="select-search required">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6" id="prt">
                                        <div class="form-group">
                                            <label> Procurement Type :</label>
                                            <select id="procuretype2" name="procuretype2"
                                                    data-placeholder="Direct/Indirect"
                                                    class="select-search required">
                                                <option></option>
                                                <option value="1"> Not Applicable</option>
                                                <option value="2"> Direct Purchase</option>
                                                <option value="3"> Indirect Purchase</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label> Director Remarks:</label>
                                            <textarea name="additional-info2"
                                                      placeholder="Add remarks here."
                                                      class="form-control"></textarea>
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
                    <button type="button" id="reqsubmit" class="btn btn-primary"
                            data-dismiss="modal">Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- /edit modal -->


    <script>

        function getdatatotable() {

            var id = $("#passid").val();

            //to table
            $.ajax({
                method: "POST",
                url: "../DBhandle/req_details_con.php?code=table",
                data: {"id": id}
            })
                .done(function (data) {
                    $("#reqdetails tbody").empty();
                    $("#reqdetails tbody").append(data);
                });

        }

        //get data
        $(document).ready(function () {
            getdatatotable();

        });


        function getdata(val) {

            $.ajax({
                method: "POST",
                url: "../DBhandle/req_details_con.php?code=get_modal_data",
                data: {"data": val}
            })
                .done(function (data) {
                    var retData = JSON.parse(data);
                    $("#reqid1").val(retData[0].Req_id);
                    $("#reqequipid1").val(retData[0].Req_equip_id);
                    $("#findrq").val(retData[0].Req_equip_id);
                    $("#reqdate1").val(retData[0].Req_date);
                    $("#empname1").val(retData[0].Emp_id);
                    $("#unit1").val(retData[0].Unit_Name);
                    $("#ward1").val(retData[0].Ward_Name);
                    $("#reqtype1").val(retData[0].Req_type);
                    $("#equipname1").val(retData[0].Req_eqp_name);
                    $("#findeqpname").val(retData[0].Req_eqp_name);
                    $("#quantity1").val(retData[0].Req_equip_qty);
                    $("#findqty").val(retData[0].Req_equip_qty);
                    $("#reason1").val(retData[0].Req_equip_reason);


                });
        }


        $("#reqsubmit").click(function () {
            var status = $("#primapp2").val();

            f = new FormData($("#frmapprove")[0]);

            if (status == 1) {
                $.ajax({
                    method: "POST",
                    url: "../DBhandle/req_details_con.php?code=approved",
                    data: f,
                    processData: false,
                    contentType: false
                })
                    .done(function (data) {
                        swal({
                                title: "Request Approved Successfully!",
                                text: "Click OK to Continue",
                                confirmButtonColor: "#66BB6A",
                                type: "success"
                            },
                            function(isConfirm){
                                if (isConfirm) {
                                    getdatatotable();
                                }
                            });

                    });
            }
            else if (status == 2) {
                $.ajax({
                    method: "POST",
                    url: "../DBhandle/req_details_con.php?code=rejected",
                    data: f,
                    processData: false,
                    contentType: false
                })
                    .done(function (data) {
                        swal({
                                title: "Request Rejected Successfully!",
                                text: "Click OK to Continue",
                                confirmButtonColor: "#66BB6A",
                                type: "success"
                            },
                            function(isConfirm){
                                if (isConfirm) {
                                    getdatatotable();
                                }
                            });
                    });
            }

        });


        // select2
        $(document).ready(function () {

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

        // pickdate
        $(document).ready(function () {
            $('.pickadate-strings').pickadate({
                weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                showMonthsShort: true
            });
        });

    </script>


</div>
<!-- /Main content -->
<?php require_once('footer.php'); ?>

