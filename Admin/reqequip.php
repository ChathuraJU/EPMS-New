<?php require_once('header.php');?>
<!-- Main content -->
<div class="content-wrapper">
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
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home </a></li>
                <li><a href="req_create.php"> Requisitions </a></li>
                <li><a href="req_list.php"> Requisition List </a></li>
                <li class="active"> Requisition Details  </li> 
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Advanced legend -->
        <form action="#">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h5 class="panel-title"> <b> Requisition Details </b> </h5>
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
                                        <input type="text" id="reqid" class="form-control" placeholder="REQ-000001" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Unit :</label>
                                        <input type="text" id="unit" class="form-control" placeholder="Unit Name" readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Ward :</label>
                                        <input type="text" id="ward" class="form-control" placeholder="Word No." readonly>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Requisition Date : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                            <input type="text" id="reqdate" name="reqdate" class="form-control daterange-single" value="03/18/2013" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Requisition type : </label>
                                        <input type="text" id="reqtype" class="form-control" placeholder="Annual Procurement" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="global_assets/images/reqequip.jpg" height ="300px"  />
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
                                        <table class="table" id="tblajx">
                                            <thead>
                                                <tr>
                                                    <th> Requisition Equipment No. </th>
                                                    <th> Equipment Name </th>
                                                    <th> Quantity </th>
                                                    <th> Priority </th>
                                                    <th> Primal Approval </th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="reqapproval.php"> REQ-000001-01 </a></td>
                                                    <td> Sphygmomanometers </td>
                                                    <td> 05 </td>
                                                    <td> High </td>
                                                    <td> Pending </td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li><a href="#" data-toggle="modal" data-target="#edit_modal"><i class="icon-pencil7"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><a href="equipment.php"> REQ-000001-02 </a></td>
                                                    <td> Nebulizer </td>
                                                    <td> 02 </td>
                                                    <td> Critical </td>
                                                    <td> Pending </td>
                                                    <td class="text-center">
                                                        <ul class="icons-list">
                                                            <li><a href="#" data-toggle="modal" data-target="#edit_modal"><i class="icon-pencil7"></i></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>



                                print button to print the approval details to a pdf and a file uploader here
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary"> Save <i class="icon-arrow-right14 position-right"></i></button>
                                </div>
                                <!-- /basic responsive table -->
                            </div>
                        </div>


                        <!-- Edit modal -->
                        <div id="edit_modal" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary-400">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h5 class="modal-title"><b>Requisition Approval </b></h5>
                                    </div>

                                    <div class="modal-body">

                                        <form action="#">

                                            <fieldset>
                                                <legend class="text-semibold">
                                                    <i class="icon-pencil7 position-left"></i>
                                                    Basic Details
                                                    <a class="control-arrow" data-toggle="collapse" data-target="#demo3">
                                                        <i class="icon-circle-down2"></i>
                                                    </a>
                                                </legend>

                                                <div class="collapse in" id="demo3">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label> Requisition ID :</label>
                                                                <input type="text" id="reqid" class="form-control" placeholder="REQ-000001" readonly>
                                                            </div>
                                                        </div>    

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label> Requisition Equipment ID :</label>
                                                                <input type="text" id="reqequipid" class="form-control" placeholder="REQ-000001-01" readonly>
                                                            </div>
                                                        </div>  

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label> Requisition Date : </label>
                                                                <input type="text"  id="reqdate" name="reqdate" class="form-control" placeholder="02.03.2017" readonly>
                                                            </div>
                                                        </div>

                                                    </div>  

                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label> Name of the Consulatant:</label>
                                                                <input type="text" id="empname" class="form-control" placeholder="Consultant Name" readonly>
                                                            </div>
                                                        </div>    

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label> Unit :</label>
                                                                <input type="text" id="unit" class="form-control" placeholder="Unit Name" readonly>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label> Ward :</label>
                                                                <input type="text" id="ward" class="form-control" placeholder="Ward No." readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label> Requisition Type :</label>
                                                                <input type="text" id="reqtype" class="form-control" placeholder="Type of the Requisition" readonly>
                                                            </div>
                                                        </div> 

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label> Equipment Name :</label>
                                                                <input type="text" id="equipname" class="form-control" placeholder=" Name of the Equipment" readonly>
                                                            </div>
                                                        </div>    

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label> Quantity :</label>
                                                                <input type="text" id="quantity" class="form-control" placeholder="Amount" readonly>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                        <div class="form-group">
                                                                <label> Reason :</label>
                                                                <textarea name="reason" id="reason" placeholder="Additional notes" class="form-control" readonly></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <legend class="text-semibold">
                                                    <i class="icon-stack-check position-left"></i>
                                                    Primal Approval Details
                                                    <a class="control-arrow" data-toggle="collapse" data-target="#demo4">
                                                        <i class="icon-circle-down2"></i>
                                                    </a>
                                                </legend>

                                                <div class="collapse in" id="demo4">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label> Director Name :</label>
                                                                <input type="text" id="empname" class="form-control" placeholder=" Dr. Sanath Gurusinghe" readonly>
                                                            </div>
                                                        </div>    

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label> Primal Approval Date : </label>
                                                                    <div class="input-group">
                                                                        <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                                                        <input type="text" id="primappdate" name="primappdate" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">   
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label> Primal Approval :</label>
                                                                <select id="primapp" name="primapp" data-placeholder="Pending" class="select-search required" >
                                                                    <option></option> 
                                                                    <option value="1">Approved</option> 
                                                                    <option value="2">Rejected</option> 
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-6" id="prt">
                                                            <div class="form-group">
                                                                <label> Procurement Type :</label>
                                                                <select id="procuretype" name="procuretype" data-placeholder="Direct/Indirect" class="select-search required" >
                                                                    <option></option> 
                                                                    <option value="1"> Not Applicable </option>
                                                                    <option value="2"> Direct Purchase </option> 
                                                                    <option value="3"> Indirect Purchase </option> 
                                                                </select>
                                                            </div>
                                                        </div>   
                                                        
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label> Director Remarks:</label>
                                                                <textarea name="additional-info"  placeholder="Add remarks here." class="form-control"></textarea>
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
                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /edit modal -->



                    </fieldset>

                </div>
            </div>
        </form>
        <!-- /a legend -->

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

        // pickdate
        $( document ).ready(function(){
            $('.pickadate-strings').pickadate({
                weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                showMonthsShort: true
            });
        });
    </script>


</div>
<!-- /Main content -->
<?php require_once('footer.php');?>

