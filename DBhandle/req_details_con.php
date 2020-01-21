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

            case "get_data":
                getdata();
                break;
            case "get_modal_data":
                getmodaldata($conn);
                break;
            case "approved":
                approvedsaveform($conn);
                break;
            case "rejected":
                rejectedsaveform($conn);
                break;
            case "table":
                tabledata($conn);
                break;

        }
    }


function getdata(){
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


    $sql = "select * from `epms_requisition`";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>

                    <td>" . $row["Req_id"] . "</td>
                    <td>" . $row["Req_date"] . "</td>
                    <td>" . $row["Emp_id"] . "</td>
                    <td>" . $row["Unit_Name"] . "</td>
                    <td>" . $row["Ward_Name"] . "</td>
                    <td>" . $row["Req_type"] . "</td>
                 </tr>";
        }
    } else {
        echo "0 results";
    }

    $sql2 = "select * from `epms_req_equip` where `Req_sn` ='$id' ";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row["Req_eqp_sn"] . "</td>
                    <td>" . $row["Req_id"] . "</td>
                    <td>" . $row["Req_date"] . "</td>
                    <td>" . $row["Emp_id"] . "</td>
                    <td>" . $row["Unit_Name"] . "</td>
                    <td>" . $row["Ward_Name"] . "</td>
                    <td>" . $row["Req_type"] . "</td>
                 </tr>";
        }
    } else {
        echo "0 results";
    }


}


function getmodaldata($conn){



        $eq_req_sn =  $_POST["data"];

    $sql = "select * from `epms_requisition` , `epms_req_equip` where epms_requisition.Req_sn = epms_req_equip.Req_sn and Req_eqp_sn IN ('$eq_req_sn') ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
    } else {
        echo "0 results";
    }

    echo json_encode($array);

}

function approvedsaveform($conn){

    $dafindrq = $_POST["findrq"];
    $daid = $_POST["empname2"];
    $dadate = $_POST["primappdate2"];
    $findeqpname = $_POST["findeqpname"];
    $dafindqty = $_POST["findqty"];
    $datyp= $_POST["procuretype2"];
    $dainfo = $_POST["additional-info2"];


    $sql = "INSERT INTO `epms_req_prim_app`(`Req_equip_id`,`Req_app_emp`,`Req_primapp_date`,`Req_equip`,`Req_eqp_qty`,`Procurement_type`,`Req_primapp_remark`)
            VALUES ('$dafindrq','$daid','$dadate','$findeqpname','$dafindqty','$datyp','$dainfo')";

    $sql2 = "UPDATE `epms_req_equip` SET `Req_equip_approval` = 'Approved' WHERE Req_equip_id ='$dafindrq'";
    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);

    if (!$result) {
        echo mysqli_error($conn);
    }
    else{
        echo "success";
    }


}

function rejectedsaveform($conn){

    $dafindrq = $_POST["findrq"];
    $daid = $_POST["empname2"];
    $dadate = $_POST["primappdate2"];
    $findeqpname = $_POST["findeqpname"];
    $dafindqty = $_POST["findqty"];
    $dainfo = $_POST["additional-info2"];


    $sql = "INSERT INTO `epms_req_prim_rej`(`Req_equip_id`,`Req_app_emp`,`Req_rej_date`,`Req_equip`,`Req_eqp_qty`,`Req_rej_reason`)
            VALUES ('$dafindrq','$daid','$dadate','$findeqpname','$dafindqty','$dainfo')";

    $sql2 = "UPDATE `epms_req_equip` SET `Req_equip_approval` = 'Rejected' WHERE Req_equip_id ='$dafindrq'";



    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);

    if (!$result) {
        echo mysqli_error($conn);
    }
    else{
        echo "success";
    }
    if (!$result2) {
        echo mysqli_error($conn);
    }
    else{
        echo "success";
    }


}

function tabledata($conn){

    $id = $_POST["id"];


    $sql2 = "select * from `epms_req_equip` where `Req_sn` = '$id' ";


    $result2 = mysqli_query($conn, $sql2);

    if (mysqli_num_rows($result2) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result2)) {
            $eqid = $row["Req_eqp_sn"];
            echo "<tr>
                    <td>" . $row["Req_eqp_sn"] . "</td>
                    <td>" . $row["Req_equip_id"] . "</td>
                    <td>" . $row["Req_eqp_name"] . "</td>
                    <td>" . $row["Req_equip_qty"] . "</td>
                    <td>" . $row["Req_equip_priority"] . "</td>
                    <td>" . $row["Req_equip_approval"] . "</td>
                    <td>
                        <a onclick='getdata($eqid)' data-toggle='modal' data-target='#edit_modal'><i class='icon-pencil7'></i></a>
                    </td>
      
                 </tr>";
        }
    } else {
        echo "0 results";
    }

}




?>