<?php 

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


if(isset($_GET["code"])){
    $code=$_GET["code"];
    switch($code){
        case "submit":
            submitt($conn);
            break;

        case "get_unitselect_data":
            get_unitselect_data();
            break;

        case "get_wardselect_data":
            get_wardselect_data();
            break;

        case "get_codeselect_data":
            get_codeselect_data();
            break;
        }
    }


    function submitt($conn){

        $tbdata = stripcslashes($_POST['pTableData']);

        $equipmentsarray = json_decode($tbdata,TRUE);

        $surid = $_POST["surid"];
        $empid = $_POST["empid"];
        $unit = $_POST["unit"];
        $ward= $_POST["ward"];
        $year = $_POST["year"];
        $subdate = $_POST["subdate"];

        //create req id
        $sql1 ="SELECT Sur_id FROM epms_survey ORDER BY Sur_sn DESC LIMIT 1 ";
        $result1=mysqli_query($conn,$sql1);

        $rowcount=mysqli_num_rows($result1);

        if ($rowcount>0) {
            $row = mysqli_fetch_assoc($result1);
            $last_id1 = $row["Sur_id"];
        }

        $sur_number = substr($last_id1,4,10);
        $newsur_number = str_pad(intval($sur_number) + 1, strlen($sur_number),'0', STR_PAD_LEFT);
        $new_surid = "SUR-".$newsur_number;

        $sql = "INSERT INTO `epms_survey`(`Sur_id`,`Emp_id`,`Unit_Name`,`Ward_Name`,`Year`,`Submit_date`)
            VALUES ('$new_surid','$empid','$unit','$ward','$year','$subdate')";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo mysqli_error($conn);
        }
        else{
            echo "success";
        }


        $sql = "SELECT MAX(`Sur_sn`) AS id FROM `epms_survey`";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $lastid = $row["id"];
        }

        //create sur_eqp id
        $sql2 ="SELECT Sur_equip_id FROM epms_survey_equip ORDER BY Sur_eqp_sn DESC LIMIT 1 ";
        $result2=mysqli_query($conn,$sql2);

        $rowcount=mysqli_num_rows($result2);

        if ($rowcount>0) {
            $row = mysqli_fetch_assoc($result2);
            $last_id2 = $row["Sur_equip_id"];
        }

        $sureqp_number = substr($last_id2,4,11);
        $newsureqp_number = str_pad(intval($sureqp_number) + 1, strlen($sureqp_number),'0', STR_PAD_LEFT);
        $new_sureqpid = "SUR-".$newsureqp_number;


        foreach($equipmentsarray as $i => $eqname){

            $equipcode =  $equipmentsarray[$i]['equipcode'];
            $equipname =  $equipmentsarray[$i]['equipname'];
            $presentstat =  $equipmentsarray[$i]['presentstat'];
            $doi =  $equipmentsarray[$i]['doi'];
            $remarks =  $equipmentsarray[$i]['remarks'];

            $sql = "INSERT INTO epms_survey_equip(`Sur_equip_id`,`Equipment_code`,`Equipment_name`,`Present_Status`,`Date_of_installation`,`Remarks`)
            VALUES ('$new_sureqpid','$equipcode','$equipname','$presentstat','$doi','$remarks')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo mysqli_error($conn);
            }
            else{
                echo "success";
            }

        }


    }




        function get_unitselect_data(){
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
                    
                    
                    $sql = "select * from `epms_unit`";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option>" . $row["Unit_name"] . "</option>";
                        }
                    } else {
                        echo "0 results";
                    }
        }

        function get_wardselect_data(){
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
                    
                    
                    $sql = "select * from `epms_ward`";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option>" . $row["Ward_name"] . "</option>";
                        }
                    } else {
                        echo "0 results";
                    }
        }

        function get_codeselect_data(){
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
                    
                    
                    $sql = "select * from `epms_inventory`";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option>" . $row["Equip_code"] . "</option>";
                        }
                    } else {
                        echo "0 results";
                    }
        }
?>