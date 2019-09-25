<?php require_once('incl/header.php');?>

<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Employee Management</span></h4>
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
                <li><a href="#"> Employee Management </a></li>
                <li class="active"> Manage Employee </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Clickable title -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title"> Add New Employee </h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <form class="stepy-validation" action="#">
                <fieldset title="1">
                    <legend class="text-semibold">Personal data </legend>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name With Initials: <span class="text-danger">*</span></label>
                                    <input type="text" name="initials" class="form-control required" placeholder=" C J Udurawana">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full Name: <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control required" placeholder="John Doe">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
									<label class="display-block text-semibold">Gender</label>
									<label class="radio-inline radio-right">
										<input type="radio" name="male" >
										Male
									</label>

									<label class="radio-inline radio-right">
										<input type="radio" name="female" >
										Female
                                    </label> 
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salutation: <span class="text-danger">*</span></label>
                                    <select name="salutation" data-placeholder="Choose a Salutation..." class="select required">
                                        <option></option> 
                                        <option value="1">Mr.</option> 
                                        <option value="2">Mrs.</option> 
                                        <option value="3">Miss.</option> 
                                        <option value="4">Ms.</option> 
                                        <option value="5">Dr.</option> 
                                        <option value="6">Rev.</option> 
                                        <option value="7">Other.</option> 
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Date of Birth : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                        <input type="text" class="form-control daterange-single" placeholder="03/18/2013">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> NIC : <span class="text-danger">*</span></label>
                                    <input type="text" name="nic" class="form-control required" placeholder="***********V">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address : <span class="text-danger">*</span></label>
                                    <input type="text" name="address" class="form-control required" placeholder="58/1 Peradeniya rd, Kandy">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email address: <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control required" placeholder="your@email.com">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Home Phone No. :</label>
                                    <input type="text" name="home_tel" class="form-control" placeholder="+91-81-2256-978" data-mask="+99-99-9999-9999">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile Phone No. :<span class="text-danger">*</span></label>
                                    <input type="text" name="tel" class="form-control required" placeholder="+94-71-6865-623" data-mask="+99-99-9999-999">
                                </div>
                            </div>

                        </div>
                    
                </fieldset>

                <fieldset title="2">
                    <legend class="text-semibold">Job Data</legend>   

                        <div class="row">
                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="global_assets/images/jobdata.jpg" height ="300px"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="content-group-lg">
                                            <label>Join Date : <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                                <input type="text" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label>Work ID:<span class="text-danger">*</span></label>
                                        <input type="text" name="workid" placeholder="national work id" class="form-control required">

                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <label> Job Title : <span class="text-danger">*</span></label>
                                        <select name="jobtitle" data-placeholder="Choose a job title..." class="select-search required">
                                            <option></option> 
                                            <option value="1"> Doctor </option> 
                                            <option value="2"> Consultant </option> 
                                            <option value="3"> Laboratorist </option> 
                                            <option value="4"> Nurse </option> 
                                            <option value="5"> Surgeon </option> 
                                            <option value="7"> Cardiologist</option> 
                                            <option value="7"> ..........</option> 
                                            <option value="7"> Psycologist</option> 
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

                <fieldset title="3">
                    <legend class="text-semibold">Additional Data</legend>

                        <div class="col-md-6" style="height: 100%;">
                            <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                <img src="global_assets/images/done.jpg" height ="300px"  />
                            </div>
                        </div>

                        <div class="col-md-6">

                            <div class="row">
                                <div class="form-group">
                                    <label> Profile Picture:</label>
                                        <input type="file" class="file-input"data-browse-class="btn btn-primary" data-remove-class="btn btn-default" accept="image/*">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group">
                                    <label> Aditional Information :</label>
                                    <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                                </div>
                            </div>

                        </div>

                </fieldset>

                <button type="submit" class="btn btn-primary stepy-finish">Submit <i class="icon-check position-right"></i></button>

            </form>
        </div> 
        <!-- /clickable title -->
    </div>
    <!-- /content area -->

</div>
<!-- /main content -->

<?php require_once('incl/footer.php');?>

  