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

        case "get_empidselect_data":
            get_empidselect_data();
            break; 

        case "get_unitselect_data":
            get_unitselect_data();
            break;

        case "get_wardselect_data":
            get_wardselect_data();
            break;

        case "get_equipselect_data":
            get_equipselect_data();
            break;

        }


    }


    function submitt($conn){

        $tbdata = stripcslashes($_POST['pTableData']);

        $equipmentsarray = json_decode($tbdata,TRUE);

        $reqid = $_POST["reqid"];
        $reqtype = $_POST["reqtype"];
        $reqdate = $_POST["reqdate"];
        $empid= $_POST["empid"];
        $unit = $_POST["unit"];
        $ward = $_POST["ward"];

        //create req id
        $sql1 ="SELECT Req_id FROM epms_requisition ORDER BY Req_sn DESC LIMIT 1 ";
        $result1=mysqli_query($conn,$sql1);

        $rowcount=mysqli_num_rows($result1);

        if ($rowcount>0) {
            $row = mysqli_fetch_assoc($result1);
            $last_id1 = $row["Req_id"];
        }

        $req_number = substr($last_id1,4,10);
        $newreq_number = str_pad(intval($req_number) + 1, strlen($req_number),'0', STR_PAD_LEFT);
        $new_reqid = "REQ-".$newreq_number;

        $sql = "INSERT INTO `epms_requisition`(`Req_id`,`Req_type`,`Req_date`,`Emp_id`,`Unit_Name`,`Ward_Name`)
            VALUES ('$new_reqid','$reqtype','$reqdate','$empid','$unit','$ward')";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo mysqli_error($conn);
        }
        else{
            echo "success";
        }


        $sql = "SELECT MAX(`Req_sn`) AS id FROM `epms_requisition`";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $lastid = $row["id"];
        }






        foreach($equipmentsarray as $i => $eqname){

            $equipment =  $equipmentsarray[$i]['equipment'];
            $qty =  $equipmentsarray[$i]['qty'];
            $priority =  $equipmentsarray[$i]['priority'];
            $reason =  $equipmentsarray[$i]['reason'];

            //create req_eqp id
            $sql2 ="SELECT Req_equip_id FROM epms_req_equip ORDER BY Req_eqp_sn DESC LIMIT 1 ";
            $result2=mysqli_query($conn,$sql2);

            $rowcount=mysqli_num_rows($result2);

            if ($rowcount>0) {
                $row = mysqli_fetch_assoc($result2);
                $last_id2 = $row["Req_equip_id"];
            }

            $reqeqp_number = substr($last_id2,7,13);
            $newreqeqp_number = str_pad(intval($reqeqp_number) + 1, strlen($reqeqp_number),'0', STR_PAD_LEFT);
            $new_reqeqpid = "REQEQP-".$newreqeqp_number;

            $sql = "INSERT INTO epms_req_equip(`Req_equip_id`,`Req_eqp_name`,`Req_sn`,`Req_equip_priority`,`Req_equip_reason`,`Req_equip_qty`)
            VALUES ('$new_reqeqpid','$equipment','$lastid','$priority','$reason','$qty')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo mysqli_error($conn);
            }
            else{
                echo "success";
            }

        }


    }

    //function to get the employee ids from the db to  Ward Head ID select box
    function  get_empidselect_data(){
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
            
            
            $sql = "select * from `epms_employee`";
            
            
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<option value='".$row["Emp_id"]."'>".$row["Emp_id"]."</option>");
                }
            } else {
                echo "0 results";
            }
    }

    //function to get the employee ids from the db to  Ward Head ID select box
    function  get_unitselect_data(){
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
                    echo("<option value='".$row["Unit_name"]."'>".$row["Unit_name"]."</option>");
                }
            } else {
                echo "0 results";
            }
    }

    //function to get the employee ids from the db to  Ward Head ID select box
    function  get_wardselect_data(){
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
                    echo("<option value='".$row["Ward_name"]."'>".$row["Ward_name"]."</option>");
                }
            } else {
                echo "0 results";
            }
    }

    //function to get the employee ids from the db to  Ward Head ID select box
    function  get_equipselect_data(){
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
            
            
            $sql = "select * from `epms_equipment`";
            
            
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<option value='".$row["Equip_name"]."'>".$row["Equip_name"]."</option>");
                }
            } else {
                echo "0 results";
            }
    }

?>