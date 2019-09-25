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
                <li class="active"> User Type </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->
    <!-- Content area -->
    <div class="content">

        <div class="panel panel-white">
            <div class="panel-heading">
                <h5 class="panel-title"><b>Add New User Type </b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <form class="form-horizontal form-validate-jquery" action="#">
                    <fieldset class="content-group">
                        <div class="row">
                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-md-4 col-xs-12 col-md-offset-2" style="margin-top: 50px;" >
                                    <img src="global_assets/images/usergroup.jpg" position="centre" class="userimage" />
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="form-group">  
                                        <label class="control-label col-lg-3">User Type No. : </label>
                                        <div class="col-lg-12">
                                            <input type="text" name="utno" class="form-control" readonly/>
                                        </div>
                                    </div>
                                </div>    
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-lg-3">User Type Name :<span class="text-danger">*</span></label>
                                        <div class="col-lg-12">
                                            <input type="text" name="utname" class="form-control" required="required" placeholder="Name of user type"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-lg-2">Privileges <span class="text-danger">*</span></label>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="checkbox checkbox-switchery switchery-xs">
                                                        <label>
                                                            <input type="checkbox" name="switchery_group" class="switchery" required="required">
                                                            Employee Creation
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="checkbox checkbox-switchery switchery-xs">
                                                        <label>
                                                            <input type="checkbox" name="switchery_group" class="switchery" required="required">
                                                            Employee Creation
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="checkbox checkbox-switchery switchery-xs">
                                                        <label>
                                                            <input type="checkbox" name="switchery_group" class="switchery" required="required">
                                                            Employee Creation
                                                        </label>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="checkbox checkbox-switchery switchery-xs">
                                                        <label>
                                                            <input type="checkbox" name="switchery_group" class="switchery">
                                                            Granting Privileges
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="checkbox checkbox-switchery switchery-xs">
                                                        <label>
                                                            <input type="checkbox" name="switchery_group" class="switchery">
                                                            Granting Privileges
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="checkbox checkbox-switchery switchery-xs">
                                                        <label>
                                                            <input type="checkbox" name="switchery_group" class="switchery">
                                                            Granting Privileges
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="checkbox checkbox-switchery switchery-xs">
                                                        <label>
                                                            <input type="checkbox" name="switchery_group" class="switchery">
                                                            Request Equipment
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="checkbox checkbox-switchery switchery-xs">
                                                        <label>
                                                            <input type="checkbox" name="switchery_group" class="switchery">
                                                            Request Equipment
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="checkbox checkbox-switchery switchery-xs">
                                                        <label>
                                                            <input type="checkbox" name="switchery_group" class="switchery">
                                                            Request Equipment
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-lg-4">Additional Information : </label>
                                        <div class="col-lg-8">
                                            <textarea rows="3" cols="5" name="textarea" class="form-control"  placeholder="text area"></textarea>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <br/>
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3"></div>
                            <div class="col-md-3">
                                <button type="reset" class="btn btn-danger stepy-finish position-right">Clear <i class="icon-cross position-right"></i></button>
                                <button type="submit" class="btn btn-primary stepy-finish position-right" >Save <i class="icon-check position-right"></i></button>
                            </div>
                        </div>
                        <br/>
                    </fieldset>
                </form>
            </div>
        </div>

        <!-- Highlighting rows and columns -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> User Types</h5>
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
                        <th>User Type No.</th>
                        <th>User Type Name</th>
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
                                        <li><a href="#"><i class="icon-spinner11"></i> Update</a></li>
                                        <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                        <li></li>
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
                                        <li><a href="#"><i class="icon-spinner11"></i> Update</a></li>
                                        <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                        <li></li>
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

