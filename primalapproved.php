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
                <li><a href="#"> Requisition </a></li>
                <li class="active"> Requested Equipments </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Advanced legend -->
        <form action="#">
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title"> Requested Equipments </h5>
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
                            Enter your information
                            <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse in" id="demo1">
                            <div class="form-group">
                                <label>Enter your name:</label>
                                <input type="text" class="form-control" placeholder="Eugene Kopyov">
                            </div>

                            <div class="form-group">
                                <label>Enter your password:</label>
                                <input type="password" class="form-control" placeholder="Your strong password">
                            </div>

                            <div class="form-group">
                                <label>Repeat password:</label>
                                <input type="password" class="form-control" placeholder="Repeat password">
                            </div>

                            <div class="form-group">
                                <label>Your message:</label>
                                <textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend class="text-semibold">
                            <i class="icon-reading position-left"></i>
                            Add personal details
                            <a class="control-arrow" data-toggle="collapse" data-target="#demo2">
                                <i class="icon-circle-down2"></i>
                            </a>
                        </legend>

                        <div class="collapse in" id="demo2">
                            <div class="form-group">
                                <label>Your country:</label>
                                <select data-placeholder="Select your country" class="select">
                                    <option value="USA">USA</option> 
                                    <option value="United Kingdom">United Kingdom</option> 
                                    <option value="...">...</option> 
                                    <option value="Australia">Australia</option> 
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Select your state:</label>
                                <select data-placeholder="Select your state" class="select">
                                    <option></option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="KY">Kentucky</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                    </optgroup>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="display-block">Gender:</label>

                                <label class="radio-inline">
                                    <input type="radio" name="gender2" class="styled" checked="checked">
                                    Male
                                </label>

                                <label class="radio-inline">
                                    <input type="radio" name="gender2" class="styled">
                                    Female
                                </label>
                            </div>

                            <div class="form-group">
                                <label>Your CV:</label>
                                <input type="file" class="file-styled">
                                <span class="help-block">Accepted formats: pdf, doc. Max file size 2Mb</span>
                            </div>

                            <div class="form-group">
                                <label>About yourself:</label>
                                <textarea rows="5" cols="5" placeholder="Few words about yourself..." class="form-control"></textarea>
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

</div>
<!-- /Main content -->
<?php require_once('incl/footer.php');?>

