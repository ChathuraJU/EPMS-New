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

    $sql = "INSERT INTO `epms_requisition`(`Req_id`,`Req_type`,`Req_date`,`Emp_id`,`Unit_Name`,`Ward_Name`)
        VALUES ('$reqid','$reqtype','$reqdate','$empid','$unit','$ward')";

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

        $sql = "INSERT INTO epms_req_equip(`Req_eqp_name`,`Req_sn`,`Req_equip_priority`,`Req_equip_reason`,`Req_equip_qty`)
        VALUES ('$equipment','$lastid','$qty','$priority','$reason')";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo mysqli_error($conn);
        }
        else{
            echo "success";
        }

    }


}


?>