<?php require_once('header.php');

date_default_timezone_set("Asia/Colombo");
$tod = date("Y-m-d");

function get_user_data(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "nhk_epms";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $user_id = $_SESSION["user"]["uid"];
    $sql = "SELECT 
              * 
            FROM
              epms_employee emp 
              INNER JOIN epms_users usr 
                ON usr.`Emp_id` = emp.`Emp_id` 
        WHERE usr.`User_sn` = '$user_id' ";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            return $row;
        }
    } else {
        echo "0 results";
    }

}


$usr = get_user_data();


if ($usr["Emp_assigned_unit"]==''){
    $unit = $usr["Emp_assigned_ward"];
}
else{
    $unit = $usr["Emp_assigned_unit"];
}

?>



<?php

if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'MOIC') {
    ?>

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-default"
             style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $usr["Emp_id"] ?></h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE ID</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-vcard icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $usr["Emp_nwi"] ?></h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE NAME</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-user-tie icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $unit ?></h3>
                                <span class="text-uppercase text-size-mini">UNIT / WARD</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-location4 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $tod ?></h3>
                                <span class="text-uppercase text-size-mini">DATE</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-calendar52 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <div class="row">
            <div class="col-md-4">
                <!-- Requests stats colored -->
                <div class="panel text-center bg-success-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Equipment Requests</h6>
                        <div class="opacity-75 content-group">Total</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Accepted </div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Pending</div>
                                <h5 class="text-semibold no-margin">8,472</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Requests stats colored -->
            </div>

            <div class="col-md-4">
                <!-- Approved equip stats colored -->
                <div class="panel text-center bg-purple-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Primal Approved Equipment Requests</h6>
                        <div class="opacity-75 content-group">Total here</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Direct Purchase</div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Indirect Purchase</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /approved eqp stats colored -->

            </div>

            <div class="col-md-4">
                <!-- Ministry App equip stats colored -->
                <div class="panel text-center bg-danger-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Minstry Approval Equipment </h6>
                        <div class="opacity-75 content-group">Total here</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Accepted</div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /ministry app eqp stats colored -->

            </div>

        </div>

        <script src="../global_assets/js/demo_pages/general_widgets_stats.js"></script>
        <script src="../global_assets/js/demo_pages/general_widgets_content.js"></script>
    </div>
    <!-- /main content -->

    <?php
}else if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'Admin'){

    ?>

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-default"
             style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $usr["Emp_id"] ?></h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE ID</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-vcard icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $usr["Emp_nwi"] ?></h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE NAME</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-user-tie icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $unit ?></h3>
                                <span class="text-uppercase text-size-mini">UNIT / WARD</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-location4 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $tod ?></h3>
                                <span class="text-uppercase text-size-mini">DATE</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-calendar52 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <div class="row">
            <div class="col-md-4">
                <!-- Requests stats colored -->
                <div class="panel text-center bg-success-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Equipment Requests</h6>
                        <div class="opacity-75 content-group">Total</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Accepted </div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Pending</div>
                                <h5 class="text-semibold no-margin">8,472</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Requests stats colored -->
            </div>

            <div class="col-md-4">
                <!-- Approved equip stats colored -->
                <div class="panel text-center bg-purple-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Primal Approved Equipment Requests</h6>
                        <div class="opacity-75 content-group">Total here</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Direct Purchase</div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Indirect Purchase</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /approved eqp stats colored -->

            </div>

            <div class="col-md-4">
                <!-- Ministry App equip stats colored -->
                <div class="panel text-center bg-danger-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Minstry Approval Equipment </h6>
                        <div class="opacity-75 content-group">Total here</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Accepted</div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /ministry app eqp stats colored -->

            </div>

        </div>

        <script src="../global_assets/js/demo_pages/general_widgets_stats.js"></script>
        <script src="../global_assets/js/demo_pages/general_widgets_content.js"></script>
    </div>
    <!-- /main content -->

    <?php

}else if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'Director'){

    ?>

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-default"
             style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $usr["Emp_id"] ?></h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE ID</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-vcard icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $usr["Emp_nwi"] ?></h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE NAME</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-user-tie icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $unit ?></h3>
                                <span class="text-uppercase text-size-mini">UNIT / WARD</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-location4 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $tod ?></h3>
                                <span class="text-uppercase text-size-mini">DATE</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-calendar52 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <div class="row">
            <div class="col-md-4">
                <!-- Requests stats colored -->
                <div class="panel text-center bg-success-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Equipment Requests</h6>
                        <div class="opacity-75 content-group">Total</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Accepted </div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Pending</div>
                                <h5 class="text-semibold no-margin">8,472</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Requests stats colored -->
            </div>

            <div class="col-md-4">
                <!-- Approved equip stats colored -->
                <div class="panel text-center bg-purple-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Primal Approved Equipment Requests</h6>
                        <div class="opacity-75 content-group">Total here</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Direct Purchase</div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Indirect Purchase</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /approved eqp stats colored -->

            </div>

            <div class="col-md-4">
                <!-- Ministry App equip stats colored -->
                <div class="panel text-center bg-danger-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Minstry Approval Equipment </h6>
                        <div class="opacity-75 content-group">Total here</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Accepted</div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /ministry app eqp stats colored -->

            </div>

        </div>

        <script src="../global_assets/js/demo_pages/general_widgets_stats.js"></script>
        <script src="../global_assets/js/demo_pages/general_widgets_content.js"></script>
    </div>
    <!-- /main content -->


    <?php

}else if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'Consultant'){

    ?>

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-default"
             style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $usr["Emp_id"] ?></h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE ID</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-vcard icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $usr["Emp_nwi"] ?></h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE NAME</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-user-tie icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $unit ?></h3>
                                <span class="text-uppercase text-size-mini">UNIT / WARD</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-location4 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $tod ?></h3>
                                <span class="text-uppercase text-size-mini">DATE</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-calendar52 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <div class="row">
            <div class="col-md-4">
                <!-- Requests stats colored -->
                <div class="panel text-center bg-success-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Equipment Requests</h6>
                        <div class="opacity-75 content-group">Total</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Accepted </div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Pending</div>
                                <h5 class="text-semibold no-margin">8,472</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Requests stats colored -->
            </div>

            <div class="col-md-4">
                <!-- Approved equip stats colored -->
                <div class="panel text-center bg-purple-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Primal Approved Equipment Requests</h6>
                        <div class="opacity-75 content-group">Total here</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Direct Purchase</div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Indirect Purchase</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /approved eqp stats colored -->

            </div>

            <div class="col-md-4">
                <!-- Ministry App equip stats colored -->
                <div class="panel text-center bg-danger-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Minstry Approval Equipment </h6>
                        <div class="opacity-75 content-group">Total here</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Accepted</div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /ministry app eqp stats colored -->

            </div>

        </div>

        <script src="../global_assets/js/demo_pages/general_widgets_stats.js"></script>
        <script src="../global_assets/js/demo_pages/general_widgets_content.js"></script>
    </div>
    <!-- /main content -->

    <?php

}else if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'Chief Accountant'){

    ?>


    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-default"
             style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $usr["Emp_id"] ?></h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE ID</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-vcard icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $usr["Emp_nwi"] ?></h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE NAME</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-user-tie icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $unit ?></h3>
                                <span class="text-uppercase text-size-mini">UNIT / WARD</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-location4 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $tod ?></h3>
                                <span class="text-uppercase text-size-mini">DATE</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-calendar52 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <div class="row">
            <div class="col-md-4">
                <!-- Requests stats colored -->
                <div class="panel text-center bg-success-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Equipment Requests</h6>
                        <div class="opacity-75 content-group">Total</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Accepted </div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Pending</div>
                                <h5 class="text-semibold no-margin">8,472</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Requests stats colored -->
            </div>

            <div class="col-md-4">
                <!-- Approved equip stats colored -->
                <div class="panel text-center bg-purple-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Primal Approved Equipment Requests</h6>
                        <div class="opacity-75 content-group">Total here</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Direct Purchase</div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Indirect Purchase</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /approved eqp stats colored -->

            </div>

            <div class="col-md-4">
                <!-- Ministry App equip stats colored -->
                <div class="panel text-center bg-danger-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Minstry Approval Equipment </h6>
                        <div class="opacity-75 content-group">Total here</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Accepted</div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /ministry app eqp stats colored -->

            </div>

        </div>

        <script src="../global_assets/js/demo_pages/general_widgets_stats.js"></script>
        <script src="../global_assets/js/demo_pages/general_widgets_content.js"></script>
    </div>
    <!-- /main content -->


    <?php

}else if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'Surgical Pharmacist'){

    ?>

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-default"
             style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $usr["Emp_id"] ?></h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE ID</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-vcard icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $usr["Emp_nwi"] ?></h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE NAME</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-user-tie icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $unit ?></h3>
                                <span class="text-uppercase text-size-mini">UNIT / WARD</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-location4 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin"><?php echo $tod ?></h3>
                                <span class="text-uppercase text-size-mini">DATE</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-calendar52 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <div class="row">
            <div class="col-md-4">
                <!-- Requests stats colored -->
                <div class="panel text-center bg-success-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Equipment Requests</h6>
                        <div class="opacity-75 content-group">Total</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Accepted </div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                            <div class="col-xs-4">
                                <div class="text-uppercase text-size-mini opacity-75">Pending</div>
                                <h5 class="text-semibold no-margin">8,472</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Requests stats colored -->
            </div>

            <div class="col-md-4">
                <!-- Approved equip stats colored -->
                <div class="panel text-center bg-purple-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Primal Approved Equipment Requests</h6>
                        <div class="opacity-75 content-group">Total here</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Direct Purchase</div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Indirect Purchase</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /approved eqp stats colored -->

            </div>

            <div class="col-md-4">
                <!-- Ministry App equip stats colored -->
                <div class="panel text-center bg-danger-400 has-bg-image">
                    <div class="panel-body">
                        <h6 class="text-semibold no-margin-bottom mt-5">Minstry Approval Equipment </h6>
                        <div class="opacity-75 content-group">Total here</div>
                        <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                    </div>

                    <div class="panel-body panel-body-accent pb-15">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Accepted</div>
                                <h5 class="text-semibold no-margin">2,483</h5>
                            </div>

                            <div class="col-xs-6">
                                <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                <h5 class="text-semibold no-margin">1,257</h5>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /ministry app eqp stats colored -->

            </div>

        </div>

        <script src="../global_assets/js/demo_pages/general_widgets_stats.js"></script>
        <script src="../global_assets/js/demo_pages/general_widgets_content.js"></script>
    </div>
    <!-- /main content -->

    <?php

}








?>




<?php require_once('footer.php');?>

