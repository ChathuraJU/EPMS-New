<?php require_once('headermoic.php');?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> User Control </span></h4>
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
                <li><a href="dashboardmoic.php"><i class="icon-home2 position-left"></i> Home </a></li>
                <li><a href="rec_list.php"> Tech Evaluation Committee </a></li>
                <li class="active">Technical Evaluation Committee Form</li>
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
                    <h5 class="panel-title"><b>Technical Evaluation Committe Form</b></h5>
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
                            <i class="icon-file-text2 position-left"></i>
                            Procurement Details
                            <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse in" id="demo1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Specification No. : </label>
                                        <input type="text" id="specno" name="specno" placeholder="Pending.." class="form-control" readonly>       
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ministry Approved Equipment ID : </label>
                                        <input type="text" id="proid" name="proid" placeholder="Not Applicable.." class="form-control" >       
                                    </div>
                                </div> 

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Procurement Type :</label>
                                        <select id="procuretype" name="procuretype" data-placeholder="Direct/Indirect" class="select-search required" >
                                            <option></option> 
                                            <option value="1"> Direct Purchase </option> 
                                            <option value="2"> Indirect Purchase </option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Procurement Entity :</label>
                                        <input type="text" id="proentity" name="proentity" class="form-control required" placeholder="Hospital Name"> 
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nature of the Procurement : </label>
                                        <input type="text" id="pronature" name="pronature" class="form-control required" placeholder="DPC"> 
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Title of the Procurement </label>
                                        <input type="text" id="protitle" name="protitle" class="form-control required" placeholder="title"> 
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Procurement ID (auto generate):</label>
                                        <input type="text" id="proid" name="proid" placeholder="Pending.." class="form-control" readonly>
                                    </div>
                                </div> 
                                <div class="col-md-4"></div>
 
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="text-semibold">
                            <i class="icon-reading position-left"></i>
                            Members of TEC
                            <a class="control-arrow" data-toggle="collapse" data-target="#demo2">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse in" id="demo2">
                            <label><b>Chairmen </b> </label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employee ID :</label>
                                        <input type="text" id="empid" name="empid" placeholder="Pending.." class="form-control" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employee Name:</label> 
                                        <input type="text" id="empname" name="empname" class="form-control required" placeholder="Sanath Udagedara">  
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Designation : <span class="text-danger">*</span></label>
                                            <select name="designation" data-placeholder="Choose the user type..." class="select-search required">
                                                <option></option> 
                                                <option value="1"> Director </option> 
                                                <option value="2"> Assistant Director </option> 
                                                <option value="3"> MOIC </option> 
                                                <option value="4"> Chief Accountant </option> 
                                                <option value="4"> BME </option> 
                                            </select>
                                    </div>
                                </div>

                                <div class="col-md-6"></div>

                            </div>
                            
                            <label><b> Member 01 </b></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employee ID :</label>
                                        <input type="text" id="empid" name="empid" placeholder="Pending.." class="form-control" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employee Name:</label> 
                                        <input type="text" id="empname" name="empname" class="form-control required" placeholder="Sanath Udagedara">  
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Designation : <span class="text-danger">*</span></label>
                                            <select name="designation" data-placeholder="Choose the user type..." class="select-search required">
                                                <option></option> 
                                                <option value="1"> Director </option> 
                                                <option value="2"> Assistant Director </option> 
                                                <option value="3"> MOIC </option> 
                                                <option value="4"> Chief Accountant </option> 
                                                <option value="4"> BME </option> 
                                            </select>
                                    </div>
                                </div>

                                <div class="col-md-6"></div>

                            </div>

                            <label><b> Member 02 </b></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employee ID :</label>
                                        <input type="text" id="empid" name="empid" placeholder="Pending.." class="form-control" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employee Name:</label> 
                                        <input type="text" id="empname" name="empname" class="form-control required" placeholder="Sanath Udagedara">  
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Designation : <span class="text-danger">*</span></label>
                                            <select name="designation" data-placeholder="Choose the user type..." class="select-search required">
                                                <option></option> 
                                                <option value="1"> Director </option> 
                                                <option value="2"> Assistant Director </option> 
                                                <option value="3"> MOIC </option> 
                                                <option value="4"> Chief Accountant </option> 
                                                <option value="4"> BME </option> 
                                            </select>
                                    </div>
                                </div>

                                <div class="col-md-6"></div>

                            </div>
                            
                            <label><b> Member 03 </b></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employee ID :</label>
                                        <input type="text" id="empid" name="empid" placeholder="Pending.." class="form-control" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employee Name:</label> 
                                        <input type="text" id="empname" name="empname" class="form-control required" placeholder="Sanath Udagedara">  
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Designation : <span class="text-danger">*</span></label>
                                            <select name="designation" data-placeholder="Choose the user type..." class="select-search required">
                                                <option></option> 
                                                <option value="1"> Director </option> 
                                                <option value="2"> Assistant Director </option> 
                                                <option value="3"> MOIC </option> 
                                                <option value="4"> Chief Accountant </option> 
                                                <option value="4"> BME </option> 
                                            </select>
                                    </div>
                                </div>

                                <div class="col-md-6"></div>

                            </div>
                            
                            <label><b> Member 04 </b></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employee ID :</label>
                                        <input type="text" id="empid" name="empid" placeholder="Pending.." class="form-control" >
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Employee Name:</label> 
                                        <input type="text" id="empname" name="empname" class="form-control required" placeholder="Sanath Udagedara">  
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label> Designation : <span class="text-danger">*</span></label>
                                            <select name="designation" data-placeholder="Choose the user type..." class="select-search required">
                                                <option></option> 
                                                <option value="1"> Director </option> 
                                                <option value="2"> Assistant Director </option> 
                                                <option value="3"> MOIC </option> 
                                                <option value="4"> Chief Accountant </option> 
                                                <option value="4"> BME </option> 
                                            </select>
                                    </div>
                                </div>

                                <div class="col-md-6"></div>

                            </div>

                        </div>
                    </fieldset>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
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



    </script>

</div>
<!-- /Main content -->
<?php require_once('footer.php');?>

