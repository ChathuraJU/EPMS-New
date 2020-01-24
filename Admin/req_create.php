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
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="#"> Requisition </a></li>
                <li class="active"> Create Requisition </li>
            </ul>

            <ul class="breadcrumb-elements">
                <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-gear position-left"></i>
                        Settings
                        <span class="caret"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Clickable title -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h6 class="panel-title"><b> Request An Equipment </b></h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <form class="stepy-basic" id="frmdata" enctype="multipart/form-data">
                <fieldset title="1">
                    <legend class="text-semibold"> Requesition Details </legend>
                    
                        <div class="row">
                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="../global_assets/images/request.jpg" height ="300px"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">  
                                        <label> Requisition ID : </label>
                                        <input type="text" id="reqid" name="reqid" placeholder="Pending" class="form-control" readonly/>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <label> Request Type : <span class="text-danger">*</span></label>
                                        <select id="reqtype" name="reqtype" data-placeholder="Choose a Request type" class="select-search required" >
                                            <option > Annual Request </option> 
                                            <option > Precipitate Request </option> 
                                        </select>
                                    </div> 
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <div class="content-group-lg">
                                            <label>Request Date : <span class="text-danger">*</span></label>
                                            <input type="text" id="reqdate" name="reqdate" class="form-control" value="<?php echo $tod ?>" readonly/>

                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="form-group">
                                        <label> Employee ID : <span class="text-danger">*</span></label>
                                        <input type="text" id="empid" name="empid" class="form-control" value="<?php echo $usr["Emp_id"] ?>" readonly/>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Unit : <span class="text-danger">*</span></label>
                                        <input type="text" id="unit" name="unit" class="form-control" value="<?php echo $usr["Emp_assigned_unit"] ?>" readonly/>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Ward : <span class="text-danger">*</span></label>
                                        <input type="text" id="ward" name="ward" class="form-control" value="<?php echo $usr["Emp_assigned_ward"] ?>" readonly/>

                                    </div>
                                </div>

                            </div>

                        </div>
                    
                </fieldset>

                <fieldset title="2">
                    <legend class="text-semibold"> Equipment Details </legend>   

                        <div class="row">
                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="../global_assets/images/Equipment.jpg" height ="300px"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">
                                        <label> Equipment : <span class="text-danger">*</span></label>
                                        <select id="equip" name="equip" data-placeholder="Choose a Equipment..." class="select-search required">
                                            <option></option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label>Quantity : </label>
                                        <input type="text" id="qty" name="qty" value="" class="touchspin-empty">
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <label> Priority : <span class="text-danger">*</span></label>
                                        <select name="priority" id="priority" data-placeholder="Choose a job title..." class="select required">
                                            <option></option> 
                                            <option value="Critical"> Critical </option> 
                                            <option value="High"> High </option> 
                                            <option value="Medium"> Medium </option> 
                                            <option value="Low"> Low </option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Reason :</label>
                                        <textarea class="form-control" name="reason" id="reason" rows="5" cols="5" placeholder="If you want to add any info, do it here." ></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <button class="btn btn-primary btn-block" id="btn_add">Add</button>
                                    </div>
                                </div>
                          
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
                                                <th> Equipment </th>
                                                <th> Quantity </th>
                                                <th> Priority </th>
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


                <button type="submit" class="btn btn-primary stepy-finish">Save <i class="icon-check position-right"></i></button>
            </form>
        </div> 
        <!-- /clickable title -->

    </div>
    <!-- /content area -->


    <script>


        function storeTblValues()
        {
            var TableData = new Array();

            $("#tblajx tr").each(function(row, tr){
                TableData[row]={
                    "equipment" : $(tr).find('td:eq(0)').text()
                    , "qty" :$(tr).find('td:eq(1)').text()
                    , "priority" : $(tr).find('td:eq(2)').text()
                    , "reason" : $(tr).find('td:eq(3)').text()
                }
            });
            TableData.shift();  // first row will be empty - so remove
            return TableData;
        }



        //get data to select box
        $(document).ready(function () {

            //Equip name ajax request
            $.ajax({
                method: "POST",
                url: "../DBhandle/req_create_con.php?code=get_equipselect_data",
                processData: false,
                contentType: false
            })
                .done(function (data) {
                    $("#equip").append(data);
                });

        });

        //Steppy
        $( document ).ready(function() {

            $.fn.stepy.defaults.legend = false;
            $.fn.stepy.defaults.transition = 'fade';
            $.fn.stepy.defaults.duration = 150;
            $.fn.stepy.defaults.backLabel = '<i class="icon-arrow-left13 position-left"></i> Back';
            $.fn.stepy.defaults.nextLabel = 'Next <i class="icon-arrow-right14 position-right"></i>';


                // Stepy callbacks
            $(".stepy-basic").stepy({
                next: function(index,e) {


                    if(index==3){
                        get_data();
                    }
                },                  
                back: function(index) {
                    
                },
                finish: function() {
                // alert("test first");
                    TableData = JSON.stringify(storeTblValues());
                    formData = new FormData($("#frmdata")[0]);
                    formData.append('pTableData', TableData);
                    $.ajax({
                        type: "POST",
                        url: "../DBhandle/req_create_con.php?code=submit",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data){
                            swal({
                                    title: "Request Submitted Successfully!",
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
            });

            $('.stepy-basic').find('.button-next').addClass('btn btn-primary');
            $('.stepy-basic').find('.button-back').addClass('btn btn-default');

        });

        var validate = {
            ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
            errorClass: 'validation-error-label',
            successClass: 'validation-valid-label',
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },

            // Different components require proper error label placement
            errorPlacement: function(error, element) {

                // Styled checkboxes, radios, bootstrap switch
                if (element.parents('div').hasClass("checker") || element.parents('div').hasClass("choice") || element.parent().hasClass('bootstrap-switch-container') ) {
                    if(element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                        error.appendTo( element.parent().parent().parent().parent() );
                    }
                    else {
                        error.appendTo( element.parent().parent().parent().parent().parent() );
                    }
                }

                // Unstyled checkboxes, radios
                else if (element.parents('div').hasClass('checkbox') || element.parents('div').hasClass('radio')) {
                    error.appendTo( element.parent().parent().parent() );
                }

                // Input with icons and Select2
                else if (element.parents('div').hasClass('has-feedback') || element.hasClass('select2-hidden-accessible')) {
                    error.appendTo( element.parent() );
                }

                // Inline checkboxes, radios
                else if (element.parents('label').hasClass('checkbox-inline') || element.parents('label').hasClass('radio-inline')) {
                    error.appendTo( element.parent().parent() );
                }

                // Input group, styled file input
                else if (element.parent().hasClass('uploader') || element.parents().hasClass('input-group')) {
                    error.appendTo( element.parent().parent() );
                }

                else {
                    error.insertAfter(element);
                }
            },
            rules: {
                email: {
                    email: true
                }
            }
        }

        //Date Picker
        $( document ).ready(function(){
            $('.pickadate-strings').pickadate({
                weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                showMonthsShort: true
            });

        });


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

                    
        // touchspin
        $( document ).ready(function() {

            // Switchery
            var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
            elems.forEach(function(html) {
                var switchery = new Switchery(html);
            });


            // Styled checkboxes/radios
            $(".styled").uniform();

            // Update uniform when select between styled and unstyled
            $('.input-group-addon input[type=radio]').on('click', function() {
                $.uniform.update("[name=addon-radio]");
            });

            
            // Init with empty values
            $(".touchspin-empty").TouchSpin();

        });



        // var count = 0;

            $("#btn_add").click(function(){
                var val1 = $('#equip').val();
                var val2 =$('#qty').val();
                var val3 = $('#priority').val();
                var val4 =$('#reason').val();

                // count = count++;
                
                $("#tblajx tbody").append("<tr ><td>"+val1+"</td><td>"+val2+"</td><td>"+val3+"</td><td>"+val4+"</td><td><ul class='icons-list'><li><a href='#'><i class='icon-pencil7'></i></a></li><li><a href='#'><i class='icon-trash'></i></a></li></ul></td></tr>");
            });


            //Remove record from table
            $("#tblajx tbody").on("click",".icon-trash",function () { //trash icon click function
                var id = $(this).closest("tr").attr("id");
                $(this).closest("tr").remove();
            });//On table Delete function


            //edit the record
            $("#tblajx tbody").on("click",".icon-pencil7",function () {

                var cur = $(this).closest("tr");

                $("#equip").select2().val(cur.find("td:eq(0)").text()).trigger("change");
                $("#qty").val(cur.find("td:eq(1)").text());
                $("#priority").select2().val(cur.find("td:eq(2)").text()).trigger("change");
                $("#reason").val(cur.find("td:eq(3)").text());


            });

    </script>

</div>
<!-- /main content -->


<?php require_once('footer.php');?>
