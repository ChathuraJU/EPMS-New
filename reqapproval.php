<?php require_once('incl/header.php');?>
<!-- Main content -->
<div class="content-wrapper">
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
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home </a></li>
                <li><a href="req_create.php"> Requisitions </a></li>
                <li><a href="req_list.php"> Requisition List </a></li>
                <li><a href="reqequip.php"> Requisition Equipments </a></li>
                <li class="active"> Requisition Approval </li> 
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Advanced legend -->
        <form action="#">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title"> <b> Requisition Approval </b> </h5>
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
                                            <label> Requisition Type :</label>
                                            <input type="text" id="reqtype" class="form-control" placeholder="Type of the Requisition" readonly>
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

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Reason :</label>
                                            <input type="text" id="reason" class="form-control" placeholder="Additional Info" readonly>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Director Name :</label>
                                            <input type="text" id="empname" class="form-control" placeholder=" Dr. Sanath Gurusinghe" readonly>
                                        </div>
                                    </div>    

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Primal Approval :</label>
                                            <select name="primapp" data-placeholder="Pending" class="select required">
                                                <option></option> 
                                                <option value="1"> ApprovE </option> 
                                                <option value="2"> Reject </option> 
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Procurement Type :</label>
                                            <select name="procuretype" data-placeholder="Direct/Indirect" class="select required">
                                                <option></option> 
                                                <option value="1"> Direct Purchase </option> 
                                                <option value="2"> Indirect Purchase </option> 
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

                                <!-- <div class="row">  
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Ministry Approval :</label>
                                            <select name="minapp" data-placeholder="Pending" class="select required">
                                                <option></option> 
                                                <option value="1"> Approved </option> 
                                                <option value="2"> Rejected </option> 
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Ministry Approval Date:</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                                <input type="text" class="form-control daterange-single" value="03/18/2013">
                                            </div>
                                        </div>
                                    </div>    

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Remarks:</label>
                                            <input type="text" id="ministryremark" class="form-control" placeholder=" Additonal info" >
                                        </div>
                                    </div>   
                                </div> -->
                        </div>
                    </fieldset>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary"> Save <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <!-- /a legend -->

    </div>
    <!-- /content area -->

</div>
<!-- /Main content -->
<?php require_once('incl/footer.php');?>

