<?php require_once('header.php');?>

<!-- Main content -->
<div class="content-wrapper" id="content">

    <!-- Page header -->
    <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> Requisition </span></h4>
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
                                            <option></option> 
                                            <option value="1"> Annual Request </option> 
                                            <option value="2"> Precipitate Request </option> 
                                        </select>
                                    </div> 
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <div class="content-group-lg">
                                            <label>Request Date : <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                                <input type="text" id="reqdate" name="reqdate" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                
                                <div class="row">
                                    <div class="form-group">
                                        <label> Employee ID : <span class="text-danger">*</span></label>
                                        <select id="empid" name="empid" data-placeholder="Choose an ID..." class="select-search required">
                                            <option></option> 
                                            <option value="KGH-000001"> KGH-000001 </option> 
                                            <option value="KGH-000002"> KGH-000002 </option> 
                                            <option value="KGH-000003"> KGH-000003 </option> 
                                            <option value="KGH-000004"> KGH-000004 </option> 
                                            <option value="KGH-000005"> KGH-000005 </option> 
                                            <option value="KGH-000006"> KGH-000006 </option> 
                                            <option value="KGH-000007"> KGH-000007 </option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Unit : <span class="text-danger">*</span></label>
                                        <select name="unit" id="unit" data-placeholder="Choose a unit..." class="select-search required">
                                            <option></option> 
                                            <option value="1">Respiratory Unit</option> 
                                            <option value="2">ENT Clinic</option> 
                                            <option value="3">Cath Lab.</option> 
                                            <option value="4">KT OT</option> 
                                            <option value="5">Skin Clinic</option> 
                                            <option value="6">Radiology Unit</option> 
                                            <option value="7">Cardiology Unit</option> 
                                            <option value="7">............</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Ward : <span class="text-danger">*</span></label>
                                        <select id="ward" name="ward" data-placeholder="Choose a ward..." class="select-search required">
                                            <option></option> 
                                            <option value="1"> None </option> 
                                            <option value="2"> WD 01 </option> 
                                            <option value="3"> WD 02 </option> 
                                            <option value="4"> WD 03 </option> 
                                            <option value="5">........</option> 
                                            <option value="7">........</option> 
                                        </select>
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
                                            <option value="Multi Para Monitors "> Multi Para Monitors </option> 
                                            <option value="Sphygmomanometer"> Sphygmomanometer </option> 
                                            <option value="Syringe Pump"> Syringe Pump </option> 
                                            <option value="Nebulizer"> Nebulizer </option> 
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

                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <button class="btn btn-primary btn-block" id="btn_add">Add</button>
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

                <fieldset title="3">
                    <legend class="text-semibold"> Confirmation </legend>

                    <div class="panel-body">
                    <fieldset>
                        <legend class="text-semibold">
                            <i class="icon-file-text2 position-left"></i>
                            Requisition Details
                            <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse in" id="demo1">

                            <div class="row">
                                <div class="form-group">  
                                    <label class="col-lg-3 control-label">  Requisition ID :  </label>
                                    <div class="col-lg-9">
                                    <input type="text" id="reqidf" class="form-control" readonly/>
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"> Request Type :  </label>
                                    <div class="col-lg-9">
                                    <input type="text" id="reqtypef" class="form-control" readonly/>
                                    </div>
                                </div> 
                            </div> 

                            <div class="row">
                                <div class="form-group">  
                                    <label class="col-lg-3 control-label">  Request Date :  </label>
                                    <div class="col-lg-9">
                                    <input type="text" id="reqdatef" class="form-control" readonly/>
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">  Employee ID : </label>
                                    <div class="col-lg-9">
                                    <input type="text" id="empidf" class="form-control" readonly/>
                                    </div>
                                </div> 
                            </div> 

                            <div class="row">
                                <div class="form-group">  
                                    <label class="col-lg-3 control-label"> Unit : </label>
                                    <div class="col-lg-9">
                                    <input type="text" id="unitf" class="form-control" readonly/>
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">  Ward : </label>
                                    <div class="col-lg-9">
                                    <input type="text" id="wardf" class="form-control" readonly/>
                                    </div>
                                </div> 
                            </div> 

                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="text-semibold">
                            <i class="icon-stack2"></i>
                            Equipment Details
                            <a class="control-arrow" data-toggle="collapse" data-target="#demo2">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse in" id="demo2">
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
                                    <table class="table" id="tblajx1">
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

            // function get_data(){
            //     var val1 = $('#reqid').val();
            //     $('#reqidf').val(val1);
            //     var val2 = $('#reqtype').val();
            //     $('#reqtypef').val(val2);
            //     var val3 = $('#reqdate').val();
            //     $('#reqdatef').val(val3);
            //     var val4 = $('#empid').val();
            //     $('#empidf').val(val4);
            //     var val5 = $('#unit').val();
            //     $('#unitf').val(val5);
            //     var val6 = $('#ward').val();
            //     $('#wardf').val(val6);

            // }



            $( document ).ready(function() {

                $.fn.stepy.defaults.legend = false;
                $.fn.stepy.defaults.transition = 'fade';
                $.fn.stepy.defaults.duration = 150;
                $.fn.stepy.defaults.backLabel = '<i class="icon-arrow-left13 position-left"></i> Back';
                $.fn.stepy.defaults.nextLabel = 'Next <i class="icon-arrow-right14 position-right"></i>';


                 // Stepy callbacks
                $(".stepy-basic").stepy({
                    next: function(index) {
                        if(index==3){
                            get_data();
                        }
                    },
                    next: function(index) {

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
                                alert(data);
                            }
                        });


                        preventDefault();
                    }
                });

                $('.stepy-basic').find('.button-next').addClass('btn btn-primary');
                $('.stepy-basic').find('.button-back').addClass('btn btn-default');

            });

            $( document ).ready(function(){
                $('.pickadate-strings').pickadate({
                    weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    showMonthsShort: true
                });

            });

            $( document ).ready(function(){
                // Bootstrap switch
                // ------------------------------

                $(".switch").bootstrapSwitch();

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




            $("#btn_add").click(function(){
                var val1 = $('#equip').val();
                var val2 =$('#qty').val();
                var val3 = $('#priority').val();
                var val4 =$('#reason').val();
                
                $("#tblajx tbody").append("<tr><td>"+val1+"</td><td>"+val2+"</td><td>"+val3+"</td><td>"+val4+"</td><td><ul class='icons-list'><li><a href='#'><i class='icon-pencil7'></i></a></li><li><a href='#'><i class='icon-trash'></i></a></li></ul></td></tr>");
            });


    </script>

</div>
<!-- /main content -->


<?php require_once('footer.php');?>
