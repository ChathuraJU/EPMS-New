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

        <script src="../global_assets/js/demo_pages/general_widgets_stats.js"></script>
        <script src="../global_assets/js/demo_pages/general_widgets_content.js"></script>
    </div>
    <!-- /main content -->

    <?php

}








?>




<?php require_once('footer.php');?>

