<?php require_once('incl/header.php');?>
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
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home </a></li>
                <li><a href="#"> User Control </a></li>
                <li class="active"> Add New User </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- 2 columns form -->
        <form class="form-horizontal" action="#">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title"><b>Create New User</b></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  class="col-lg-3 control-label"> Employee ID : <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select name="empid" data-placeholder="Choose an ID..." class="select required">
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
                            </div> 
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Employee Name:</label>
                                    <div class="col-lg-9">
                                        <input type="text" id="empname" name="empname" class="form-control required" placeholder="Sanath Udagedara">  <!-- this should auto fill when the employee Id is selected -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  class="col-lg-3 control-label"> User Type : <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select name="utype" data-placeholder="Choose the user type..." class="select required">
                                            <option></option> 
                                            <option value="1"> Super Admin </option> 
                                            <option value="2"> Admin </option> 
                                            <option value="3"> Director </option> 
                                            <option value="4"> Assistant Director </option> 
                                            <option value="5"> MOIC </option> 
                                            <option value="6"> Chief Accountant </option> 
                                            <option value="7"> BME </option> 
                                            <option value="8"> Surgical Pharmacist </option> 
                                            <option value="8"> User A</option> <!-- users at account branch -->
                                            <option value="8"> User B</option> <!-- users at planning unit -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                    <label  class="col-lg-3 control-label"> User status : <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select name="ustatus" data-placeholder="Choose the user status..." class="select required">
                                            <option></option> 
                                            <option value="1"> Permanent </option> 
                                            <option value="2"> Temperory </option> 
                                        </select>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Enter Username:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control required" placeholder="may be the email">  <!-- change username after first login -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Enter password:</label>
                                    <div class="col-lg-9">
                                        <input type="password" class="form-control" placeholder="Your strong password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">User Created On :</label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                            <input type="text" class="form-control daterange-single" value="03/18/2013">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">User Denied On : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                        <input type="text" class="form-control daterange-single" value="03/18/2013">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
                    </div>
                </div>
            </div>
        </form>
        <!-- /2 columns form -->

        <!-- Highlighting rows and columns -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> <b> Users </b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <table class="table table-bordered table-hover datatable-highlight">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>User No.</th>
                        <th>User Name</th>
                        <th>Privileges</th>
                        <th>Additional Information</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 01 </td>
                        <td>UT01</td>
                        <td>Super Admin</td>
                        <td>Traffic Court Referee</td>
                        <td>.......................................</td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-eye"></i> View</a></li>
                                        <li><a href="#"><i class="icon-spinner11"></i> Update</a></li>
                                        <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td> 02 </td>
                        <td>UT02</td>
                        <td> Admin</td>
                        <td>privileges in tag form ////ask someone////</td>
                        <td>.......................................</td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-eye"></i> View </a></li>
                                        <li><a href="#"><i class="icon-spinner11"></i> Update</a></li>
                                        <li><a href="#"><i class="icon-bin"></i> Delete</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- /highlighting rows and columns -->

    </div>
    <!-- /content area -->

</div>
<!-- /Main content -->
<?php require_once('incl/footer.php');?>

