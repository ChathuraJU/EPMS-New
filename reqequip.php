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
                <li class="active"> Requested Equipments </li> 
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
                    <h5 class="panel-title"> <b> Requested Equipments </b> </h5>
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
                                                        <li><a href="reqapproval.php"><i class="icon-pencil7"></i></a></li>
                                                        <li><a href="reqapproval.php"><i class="icon-eye"></i></a></li>
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
                                                        <li><a href="reqapproval.php"><i class="icon-pencil7"></i></a></li>
                                                        <li><a href="reqapproval.php"><i class="icon-eye"></i></a></li>
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

                </div>
            </div>
        </form>
        <!-- /a legend -->

    </div>
    <!-- /content area -->

</div>
<!-- /Main content -->
<?php require_once('incl/footer.php');?>

