<?php require_once('incl/header.php');?>

<!-- Main content -->
<div class="content-wrapper" id="content">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
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
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title"><b> Request An Equipment </b></h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <form class="stepy-clickable" action="#">
                <fieldset title="1">
                    <legend class="text-semibold"> Requesition Details </legend>
                    
                        <div class="row">
                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="global_assets/images/request.jpg" height ="300px"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">  
                                        <label> Requisition ID : </label>
                                        <input type="text" name="reqid" class="form-control" readonly/>
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
                                        <label> Request Date : <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                            <input type="text" id="reqdate" name="reqdate" class="form-control daterange-single" placeholder="06/09/2019">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Employee ID : <span class="text-danger">*</span></label>
                                        <select name="empid" data-placeholder="Choose an ID..." class="select-search required">
                                            <option></option> 
                                            <option value="1"> KGH-000001 </option> 
                                            <option value="2"> KGH-000002 </option> 
                                            <option value="3"> KGH-000003 </option> 
                                            <option value="4"> KGH-000004 </option> 
                                            <option value="5"> KGH-000005 </option> 
                                            <option value="6"> KGH-000006 </option> 
                                            <option value="7"> KGH-000007 </option> 
                                            <option value="8">............</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Unit : <span class="text-danger">*</span></label>
                                        <select name="unit" data-placeholder="Choose a unit..." class="select-search required">
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
                                        <select name="ward" data-placeholder="Choose a ward..." class="select-search required">
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
                                    <img src="global_assets/images/Equipment.jpg" height ="300px"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">
                                        <label> Equipment : <span class="text-danger">*</span></label>
                                        <select id="equip" name="equip" data-placeholder="Choose a Equipment..." class="select required">
                                            <option></option> 
                                            <option value="1"> Multi Para Monitors </option> 
                                            <option value="2"> Sphygmomanometer </option> 
                                            <option value="3"> Syringe Pump </option> 
                                            <option value="4"> Nebulizer </option> 
                                            <option value="5"> Head Light </option> 
                                            <option value="6"> Pulse Oxyeter </option> 
                                            <option value="7"> Air Metress </option> 
                                            <option value="7">............</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label>Quantity : </label>
                                        <input type="text" value="" class="touchspin-empty">
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <label> Priority : <span class="text-danger">*</span></label>
                                        <select name="jobtitle" data-placeholder="Choose a job title..." class="select required">
                                            <option></option> 
                                            <option value="1"> Critical </option> 
                                            <option value="2"> High </option> 
                                            <option value="3"> Medium </option> 
                                            <option value="4"> Low </option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Reason :</label>
                                        <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
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
                                            <tr>
                                                <td><a href="equipment.php"> Sphygmomanometer </a></td>
                                                <td> 05 </td>
                                                <td> High </td>
                                                <td> Need to replace mercury Sphygmomanometers and not enough quantity </td>
                                                <td class="text-center">
                                                    <ul class="icons-list">
                                                        <li><a href="#" data-toggle="modal" data-target="#edit_modal"><i class="icon-pencil7"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href="equipment.php"> Nebulizer </a></td>
                                                <td> 02 </td>
                                                <td> Critical </td>
                                                <td> Not enough Quantity </td>
                                                <td class="text-center">
                                                    <ul class="icons-list">
                                                        <li><a href="#" data-toggle="modal" data-target="#edit_modal"><i class="icon-pencil7"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /basic responsive table -->
                        </div>
                </fieldset>

                <fieldset title="3">
                    <legend class="text-semibold"> Confirmation </legend>

                        <!-- <div class="col-md-6" style="height: 100%;">
                            <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                <img src="global_assets/images/confirm.jpg" height ="300px"  />
                            </div>
                        </div> -->

                        <div class="col-md-6">Ask someone how to get the previusly entered  details to a form as a summary here
                        </div>

                </fieldset>


                <button type="submit" class="btn btn-primary stepy-finish">Submit <i class="icon-check position-right"></i></button>
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
                    "equipment" : $(tr).  ('td:eq(0)').text()
                    , "qty" :$(tr).find('td:eq(1)').text()
                    , "priority" : $(tr).find('td:eq(2)').text()
                    , "reason" : $(tr).find('td:eq(3)').text()
                }    
            }); 
            TableData.shift();  // first row will be empty - so remove
            return TableData;
        }

        $("#btn_add").click(function(){

                TableData = JSON.stringify(storeTblValues());
                
                $.ajax({
                type: "POST",
                url: "model/rectbldata.php",
                data: "pTableData=" + TableData,
                success: function(msg)
                        {
                            alert(msg);
                        }
                });
            });





    </script>

</div>
<!-- /main content -->


<?php require_once('incl/footer.php');?>
