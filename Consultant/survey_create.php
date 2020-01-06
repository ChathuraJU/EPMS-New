<?php require_once('headercon.php');?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> Survey </span></h4>
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
                <li><a href="dashboardcon.php"><i class="icon-home2 position-left"></i> Home </a></li>
                <li><a href="survey_history.php"> Survey </a></li>
                <li class="active"> Yearly Survey </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Clickable title -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title"><b> Yearly Survey Form </b></h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>
 
            <form class="stepy-clickable" id="srvcrtfrm" action="#">
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
                                        <input type="text" id="surid" name="surid" class="form-control" readonly/>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label"> Employee ID : <span class="text-danger">*</span></label>
                                        <input type="text" id="empid" name="empid" class="form-control" />
                                        <!-- <input type="text" id="empid" name="empid" class="form-control" placeholder="should autofill" readonly/> -->
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label"> Unit : <span class="text-danger">*</span></label>
                                        <select id="unit" name="unit" data-placeholder="Choose the unit..." class="select-search required">
                                            <option></option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label"> Ward : <span class="text-danger">*</span></label>
                                        <select id="ward" name="ward" data-placeholder="Choose the ward..." class="select-search required">
                                            <option></option> 
                                        </select>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Year : (should be the year only) <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                            <input type="text" id="year" name="year" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Submission Date : (auto select the submitting date) <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                            <input type="text" id="subdate" name="subdate" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
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
                                    <label  class=> Equipment Code : (equipment codes of the ward/unit items </label>
                                    <select id="equipcode" name="equipcode" data-placeholder="Choose a Equipment..." class="select required">
                                        <option></option> 
                                        <option value="EQUIP000001"> EQUIP000001 </option> 
                                        <option value="EQUIP000002"> EQUIP000002 </option> 
                                        <option value="EQUIP000003"> EQUIP000003 </option> 
                                        <option value="EQUIP000004"> EQUIP000004 </option> 
                                        <option value="EQUIP000005"> EQUIP000005 </option> 
                                        <option value="EQUIP000006"> EQUIP000006 </option> 
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label> Equipment Name : (auto update the name of the equipment when the code is given) <span class="text-danger">*</span></label>
                                    <input type="text" id="equipname" name="equipname" class="form-control"  />
                                </div>
                            </div> 
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label> Equipment Make :(auto update) <span class="text-danger">*</span></label>
                                    <input type="text" id="equipmake" name="equipmake" class="form-control"  />
                                </div>
                            </div> 

                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label> Equipment Model: (auto update) <span class="text-danger">*</span></label>
                                    <input type="text" id="equipmodel" name="equipmodel" class="form-control"  />
                                </div>
                            </div> 
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label> Equipment Serial No.: (auto update) <span class="text-danger">*</span></label>
                                    <input type="text" name="equipcode" class="form-control"  />
                                </div>
                            </div> 

                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label> Present Status : <span class="text-danger">*</span></label>
                                    <input type="text" id="equipstatus" name="equipstatus" class="form-control"  />
                                </div>
                            </div> 
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="content-group-lg">
                                        <label>Date of Installation : <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                            <input type="text"  id="installdate" name="installdate" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Remarks :</label>
                                    <div class="input-group">
                                        <textarea id="remarks" name="remarks" rows="4" cols="60"  placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <button class="btn btn-primary btn-block" id="btn_add">Add</button>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>

                </fieldset>

                <fieldset title="3">
                    <legend class="text-semibold"> Confirmation </legend>

                    <div class="panel-body">
                    <fieldset>
                        <legend class="text-semibold">
                            <i class="icon-file-text2 position-left"></i>
                            Survey Details
                            <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse in" id="demo1">
                            <div class="row">
                                <div class="form-group">  
                                    <label class="col-lg-3 control-label"> Survey ID : </label>
                                    <div class="col-lg-9">
                                        <input type="text" name="suridf" id="suridf" class="form-control" readonly/>
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"> Emp ID : </label>
                                    <div class="col-lg-9">
                                        <input type="text" name="empidf" id="empidf" class="form-control" readonly/>
                                    </div>
                                </div> 
                            </div> 

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"> Unit : </label>
                                    <div class="col-lg-9">
                                        <input type="text" name="unitf" id="unitf" class="form-control" readonly/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"> ward : </label>
                                    <div class="col-lg-9">
                                        <input type="text" name="wardf" id="wardf" class="form-control" readonly/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"> Year : </label>
                                    <div class="col-lg-9">
                                        <input type="text" name="yearf" id="yearf" class="form-control" readonly/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"> Submission Date : </label>
                                    <div class="col-lg-9">
                                        <input type="text" name="subdatef" id="subdatef" class="form-control" readonly/>
                                    </div>
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

                            <!-- Display the table here -->

                            <!-- Basic responsive table -->
                            <div class="panel panel-flat">
                                <div class="table-responsive">
                                    <table class="table" id="tblajx">
                                        <thead>
                                            <tr>
                                                
                                                <th> Equipment Code </th>
                                                <th> Equipment Name </th>
                                                <th> Make </th>
                                                <th> Model </th>
                                                <th> Serial No. </th>
                                                <th> Present Status </th>
                                                <th> Date of Installation </th>
                                                <th> Remarks </th>
                                            
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
                        "Equipment Code" : $(tr).find('td:eq(0)').text()
                        , "Equipment Name" :$(tr).find('td:eq(1)').text()
                        , "Make" : $(tr).find('td:eq(2)').text()
                        , "Model" : $(tr).find('td:eq(3)').text()
                        , "Serial No" : $(tr).find('td:eq(4)').text()
                        , "Present Status" :$(tr).find('td:eq(5)').text()
                        , "Date of Installation" : $(tr).find('td:eq(6)').text()
                        , "Remarks" : $(tr).find('td:eq(7)').text()
                    }    
                }); 
                TableData.shift();  // first row will be empty - so remove
                return TableData;
            }


            function get_data(){
                var val1 = $('#surid').val();
                $('#suridf').val(val1);
                var val2 = $('#empid').val();
                $('#empidf').val(val2);
                var val3 = $('#unit').val();
                $('#unitf').val(val3);
                var val4 = $('#ward').val();
                $('#wardf').val(val4);
                var val5 = $('#year').val();
                $('#yearf').val(val5);
                var val6 = $('#subdate').val();
                $('#subdatef').val(val6);

            }


        // wizard and datepicker
        $( document ).ready(function() {

            $.fn.stepy.defaults.legend = false;
            $.fn.stepy.defaults.transition = 'fade';
            $.fn.stepy.defaults.duration = 150;
            $.fn.stepy.defaults.backLabel = '<i class="icon-arrow-left13 position-left"></i> Back';
            $.fn.stepy.defaults.nextLabel = 'Next <i class="icon-arrow-right14 position-right"></i>';


            // Stepy basic
            $(".stepy-clickable").stepy({
                next: function(index) {
                    if(index==3){
                        get_data();
                    }
                },
                back: function(index) {
                    
                },
                finish: function() {
                    TableData = JSON.stringify(storeTblValues());
                    sendData = new FormData($("#srvcrtfrm")[0]);
                    sendData.append('pTableData', TableData);
                    $.ajax({
                        type: "POST",
                        url: "reports/survey_report.php",
                        data: sendData,
                        processData: false,
                        contentType: false,
                        success: function(data){
                            download(data, "mydownload.pdf", "application/pdf;base64");
                        }
                    });

                    preventDefault();
                }
            });+


            $('.stepy-clickable').find('.button-next').addClass('btn btn-primary');
            $('.stepy-clickable ').find('.button-back').addClass('btn btn-default');

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

            
            $("#btn_add").click(function(){
                var val1 = $('#equipcode').val();
                var val2 = $('#equip').val();
                var val3 = $('#equipmake').val();
                var val4 = $('#equipmodel').val();
                var val5=$('#equipsno').val();
                var val6 = $('#status').val();
                var val7=$('#installdate').val();
                var val8=$('#remarks').val();
                
                $("#tblajx tbody").append("<tr><td>"+val1+"</td><td>"+val2+"</td><td>"+val3+"</td><td>"+val4+"</td><td>"+val5+"</td><td>"+val6+"</t><td>"+val7+"</td><td>"+val8+"</td><td><ul class='icons-list'><li><a href='#'><i class='icon-pencil7'></i></a></li><li><a href='#'><i class='icon-trash'></i></a></li></ul></td></tr>");
            });

        function mydatatable(){
                // $('#tblajx').DataTable();
            }

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

                    mydatatable();
                    
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

                    mydatatable();



            });



    </script> 


</div>
<!-- /Main content -->
<?php require_once('footer.php');?>

