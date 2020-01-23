<?php require_once('header.php');
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


$eq_name = $_GET["name"];
$qty = $_GET["qty"];
$type = $_GET["type"];


$sql = "UPDATE `epms_req_prim_app` SET `Status`='TEC Created' WHERE `Req_equip`='$eq_name'";


$result = mysqli_query($conn, $sql);

?>



<!-- Main content -->
<div class="content-wrapper" id="content">

    <!-- Page header -->
    <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> SPECIFICATION </span></h4>
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
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="#"> Specification </a></li>
                <li class="active"> Create TEC </li>
            </ul>

        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Clickable title -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h6 class="panel-title"><b>Technical Evaluation Committe Form</b></h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <form class="stepy-basic" action="#" id="teclist">
                <fieldset title="1">
                    <legend class="text-semibold"> Procurement Details </legend>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Procurement ID:</label>
                                        <input type="text" id="proid" name="proid" placeholder="Pending.." class="form-control" readonly>
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tec ID:</label>
                                        <input type="text" id="tecid" name="tecid" placeholder="Pending.." class="form-control" readonly>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Procurement Type:</label>
                                        <input type="text" id="protype" name="protype" class="form-control" readonly value="<?php echo $type ?>">
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Equipment Name:</label>
                                        <input type="text" id="eqpname" name="eqpname"  class="form-control" readonly value="<?php echo $eq_name ?>">
                                    </div>
                                </div> 

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Quantity:</label>
                                        <input type="text" id="qty" name="qty" class="form-control" readonly value="<?php echo $qty ?>">
                                    </div>

                                </div>

                            </div>
                        </div>
                    
                </fieldset>

                <fieldset title="2">
                    <legend class="text-semibold"> <i class="icon-reading position-left"></i> Technical Evaluation Committee </legend>   

                            <div class="collapse in" id="demo2">
                                <!-- Basic example -->
                                <div class="panel panel-flat">
                        

                                    <div class="panel-body">
                                        <div class="row">
                                        <h5 class="content-group"><b>NOTE : </b> Please select a TEC of <b>05</b> including Director from the Employee list below.</h5>
                                        </div>
                                        <select multiple="multiple" class="form-control listbox required" id="select1" name="select1">
                                            <option></option> 
                                        </select>
                                    </div>
                                </div>
                                <!-- /basic example -->

                            </div>

                </fieldset>



                <button type="submit" class="btn btn-primary stepy-finish">Save <i class="icon-check position-right"></i></button>
            </form>
        </div> 
        <!-- /clickable title -->

    </div>
    <!-- /content area -->


    <script>








        //get data to select box
        $(document).ready(function () {
            //employee id ajax request
            $.ajax({
                method: "POST",
                url: "../DBhandle/tec_create_con.php?code=get_empnameselect_data",
                processData: false,
                contentType: false
            })
                .done(function (data) {
                    $("#select1").append(data);
                    $('#select1').trigger('bootstrapDualListbox.refresh');
                });
        });


        // steppy js
        $( document ).ready(function() {

            $.fn.stepy.defaults.legend = false;
            $.fn.stepy.defaults.transition = 'fade';
            $.fn.stepy.defaults.duration = 150;
            $.fn.stepy.defaults.backLabel = '<i class="icon-arrow-left13 position-left"></i> Back';
            $.fn.stepy.defaults.nextLabel = 'Next <i class="icon-arrow-right14 position-right"></i>';


                // Stepy callbacks
            $(".stepy-basic").stepy({

                next: function(index) {

                },
                back: function(index) {
                    
                },
                finish: function() {

                    var names = $("#select1").val();

                    sendData = new FormData($("#teclist")[0]);
                    sendData.append("names", names);
                    $.ajax({
                        method: "POST",
                        url: "../DBhandle/tec_create_con.php?code=save",
                        data: sendData,
                        processData: false,
                        contentType: false
                    }).done(function (msg) {

                        alert(msg);

                    });
                    preventDefault();
                }
            });

            $('.stepy-basic').find('.button-next').addClass('btn btn-primary');
            $('.stepy-basic').find('.button-back').addClass('btn btn-default');

        });


        // select2 js
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

        //tec select js
        $( document ).ready(function(){

            // Basic example
            $('.listbox').bootstrapDualListbox();
        });




    </script>

</div>
<!-- /main content -->


<?php require_once('footer.php');?>
