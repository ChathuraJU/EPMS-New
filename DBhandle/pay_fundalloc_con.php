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
        case "save":
            save($conn);
            break;

    }
}

//save the form
function save($conn){
    $pay1 = $_POST["procid"];
    $pay2 = $_POST["fundentity"];
    $pay3 = $_POST["amount"];
    $pay4 = $_POST["gr"];
    $pay6 = $_POST["chqrdate"];
    $pay7 = $_POST["chqno"];
    $pay8 = $_POST["pdate"];
    $pay9 = $_POST["pstatus"];
    $pay10 = $_POST["remark"];






    $sql = "INSERT INTO `epms_payment`(`Procurement_id`,`Funded_entity`,`Amount`,`Good_received`,`Cheque_received_date`,
                `Cheque_no`,`Date_of_payment`,`Payment_status`,`Payment_remark`)
                VALUES ('$pay1','$pay2','$pay3','$pay4','$pay6','$pay7','$pay8','$pay9',
                '$pay10')";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo mysqli_error($conn);
    }
    else{
        $sql = "SELECT MAX(`Payment_sn`) AS id FROM `epms_payment`";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $row = mysqli_fetch_assoc($result);
            $dddd = $row["id"];

            move_uploaded_file($_FILES["invoicecopy"]["tmp_name"],"../Invoice/$dddd.jpg");
            move_uploaded_file($_FILES["chqcopy"]["tmp_name"],"../Cheque/$dddd.jpg");
        }




        echo "success";
    }
}





?>