<?php require_once('header.php');

date_default_timezone_set("Asia/Colombo");
$tod = date("Y-m-d");

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



?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> SURVEY </span></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home </a></li>
                <li><a href="survey_history.php"> Survey </a></li>
                <li class="active"> Yearly Survey </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">


        <!-- Clickable title -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h6 class="panel-title"><b> Yearly Survey Form </b></h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>
            
            <form class="stepy-basic" id="srvcrtfrm" enctype="multipart/form-data">
                <fieldset title="1">
                    <legend class="text-semibold"> Survey Details </legend>
                    
                        <div class="row">
                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="../global_assets/images/survey.jpg" height ="300px"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">  
                                        <label  class="col-lg-3 control-label"> Survey ID : </label>
                                        <input type="text" id="surid" name="surid" placeholder="Pending.." class="form-control" readonly/>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label"> Employee ID : <span class="text-danger">*</span></label>
                                        <input value="<?php echo $usr["Emp_id"] ?>" type="text" id="empid" name="empid" class="form-control required" placeholder="Ex :- EMP0001" readonly />
                                    </div>
                                </div>

                                <?php
                                if ($usr["Emp_assigned_unit"]==''){
                                    echo '<div class="row">
                                   <div class="form-group">
                                       <label  class="col-lg-3 control-label"> Ward : <span class="text-danger">*</span></label>
                                       <input value="'.$unit.'" type="text" id="ward" name="ward" class="form-control" readonly>
                                       <input type="hidden" name="unit"/>
                                   </div>
                               </div>';
                                }
                                else{
                                   
                               echo '<div class="row">
                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label"> Unit : <span class="text-danger">*</span></label>
                                        <input value="'.$unit.'" type="text" id="unit" name="unit" class="form-control" readonly>
                                        <input type="hidden" name="ward"/>
                                    </div>
                                </div>';
                                }
                                
                                
                                ?>
                                

                               

                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label"> Year :  <span class="text-danger">*</span></label>
                                        <input type="text" id="year" name="year" class="form-control required" placeholder="Type the year of the survey.." />
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Submission Date : <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                                            <input type="text" id="anytime-weekdaya" name="subdate" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                        </div>
              
                                    </div>
                                </div>

                            </div>

                        </div>
                    
                </fieldset>

                <fieldset title="2">
                    <legend class="text-semibold"> Equipment Details </legend>  
                    
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  class=> Equipment Code :  </label>
                                    <select id="equipcode" name="equipcode" data-placeholder="Choose a Equipment..." class="select required">
                                        <option></option>  
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label> Equipment Name : <span class="text-danger">*</span></label>
                                    <input type="text" id="equip5" name="equip5" class="form-control">
                                </div>
                            </div> 
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="content-group-lg">
                                        <label>Date of Installation : <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                                            <input type="text" class="form-control" id="anytime-weekday" name="doi5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label> Present Status : <span class="text-danger">*</span></label>
                                    <input type="text" id="pstat" name="pstat" class="form-control">
                                </div>
                            </div> 
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label> Remarks :</label>
                                    <div class="input-group">
                                        <textarea id="remarks5" name="remarks5" rows="4" cols="100"  placeholder="If you want to add any info, do it here." class="form-control required"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <button class="btn btn-primary btn-block" id="btn_add">Add</button>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <!-- Basic responsive table -->
                            <div class="panel panel-flat">
                                <div class="panel-heading">
                                    <h5 class="panel-title">Equipment List</h5>
                                    <div class="heading-elements">
                                        <ul class="icons-list">
                                            <li><a data-action="collapse"></a></li>
                                            <li><a data-action="reload"></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="table" id="tblajx">
                                        <thead>
                                            <tr>
                                                <th> Equipment Code </th>
                                                <th> Equipment Name </th>
                                                <th> Date of Installatiion </th>
                                                <th> Present Status </th>
                                                <th> Reason </th>
                                                <th> Action <th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /basic responsive table -->
                        </div>

                </fieldset>


                <a id="save" class="btn btn-primary stepy-finish">Submit <i class="icon-check position-right"></i></a>
            </form>
        </div> 
        <!-- /clickable title -->


    </div>
    <!-- /content area -->

    <script>


        function storeTblValues()
            {
                var TableData = new Array();

                $('#tblajx tr').each(function(row, tr){
                    TableData[row]={
                        "testequip" : $(tr).find('td:eq(0)').text()
                        , "equip5" :$(tr).find('td:eq(1)').text()
                        , "anytime-weekday" :$(tr).find('td:eq(2)').text()
                        , "pstat" : $(tr).find('td:eq(3)').text()
                        , "remarks5" : $(tr).find('td:eq(4)').text()
                    }    
                }); 
                TableData.shift();  // first row will be empty - so remove
                return TableData;
            }


        // wizard and datepicker js
        $( document ).ready(function() {

            $.fn.stepy.defaults.legend = false;
            $.fn.stepy.defaults.transition = 'fade';
            $.fn.stepy.defaults.duration = 150;
            $.fn.stepy.defaults.backLabel = '<i class="icon-arrow-left13 position-left"></i> Back';
            $.fn.stepy.defaults.nextLabel = 'Next <i class="icon-arrow-right14 position-right"></i>';


            // Stepy basic
            $(".stepy-basic").stepy({
                next: function(index) {
                    if(index==3){
                        get_data();
                    }
                },                  
                back: function(index) {
                    
                },
                finish: function() {
                    // alert("test first");
                    TableData = JSON.stringify(storeTblValues());
                    formData = new FormData($("#srvcrtfrm")[0]);
                    formData.append('pTableData', TableData);
                    $.ajax({
                        type: "POST",
                        url: "../DBhandle/survey_create_con.php?code=submit",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data){
                            swal({
                                    title: "Survey Submitted Successfully!",
                                    text: "Click OK to Continue",
                                    confirmButtonColor: "#66BB6A",
                                    type: "success"
                                },
                                function(isConfirm){
                                    if (isConfirm) {
                                        location.reload();
                                    }
                                });
                        }
                    });
                    preventDefault();
                }
            });+


            $('.stepy-basic').find('.button-next').addClass('btn btn-primary');
            $('.stepy-basic').find('.button-back').addClass('btn btn-default');

            $("#anytime-weekday").AnyTime_picker({
                format: "%W, %D of %M, %Z"
            });

            $("#anytime-weekdaya").AnyTime_picker({
                format: "%D %M, %Z"
            });

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


        //get data 
        $(document).ready(function () {

            //to select box
                //unit name
            $.ajax({
                method: "POST",
                url: "../DBhandle/survey_create_con.php?code=get_unitselect_data",
                processData: false,
                contentType: false
            })
                .done(function (data) {
                $("#unit").append(data);
                });
                
                //ward name
            $.ajax({
                method: "POST",
                url: "../DBhandle/survey_create_con.php?code=get_wardselect_data",
                processData: false,
                contentType: false
            })
                .done(function (data) {
                $("#ward").append(data);
                });

                //equip code
            $.ajax({
                method: "POST",
                url: "../DBhandle/survey_create_con.php?code=get_codeselect_data",
                processData: false,
                contentType: false
            })
                .done(function (data) {
                $("#equipcode").append(data);
                });
        });

            //equip name
        $("#equipcode").change(function () {
           var eqcode = $(this).val();

            $.ajax({
                method: "POST",
                url: "../DBhandle/survey_create_con.php?code=get_eq_name",
                data: {"eqcode":eqcode}
            })
                .done(function (data) {
                    $("#equip5").val(data);
                });

        });

        //pass record
        $("#btn_add").click(function(){
            var val1 = $('#equipcode').val();
            var val2 = $('#equip5').val();
            var val3 = $('#anytime-weekday').val();
            var val4 = $('#pstat').val();
            var val5 = $('#remarks5').val();


            
            $("#tblajx tbody").append("<tr><td>"+val1+"</td><td>"+val2+"</td><td>"+val3+"</td><td>"+val4+"</td><td>"+val5+"</td><td><ul class='icons-list'><li><a href='#'><i class='icon-pencil7'></i></a></li><li><a href='#'><i class='icon-trash'></i></a></li></ul></td></tr>");
        });

        //delete the record from the table
        $("#tblajx tbody").on("click",".icon-trash",function () { //trash icon click function
            var id = $(this).closest("tr").attr("id");
            $(this).closest("tr").remove();
        });//On table Delete function


        //edit the record
        $("#tblajx tbody").on("click",".icon-pencil7",function () {

            var cur = $(this).closest("tr");

            $("#equipcode").select2().val(cur.find("td:eq(0)").text()).trigger("change");
            $("#equip5").val(cur.find("td:eq(1)").text());
            $("#anytime-weekday").val(cur.find("td:eq(2)").text());
            $("#pstat").val(cur.find("td:eq(3)").text());
            $("#remarks5").val(cur.find("td:eq(4)").text());


        });
    </script> 


</div>
<!-- /Main content -->
<?php require_once('footer.php');?>

