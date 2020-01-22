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


if (isset($_GET["code"])) {
    $code = $_GET["code"];
    switch ($code) {
        case "get_data":
            getdata($conn);
            break;

        case "get_rejdata":
            get_rejdata($conn);
            break;

        case "get_appdata":
            get_appdata($conn);
            break;
        case "save":
            save_modal($conn);
            break;


    }
}


function getdata($conn)
{


    $sql = "SELECT * FROM `epms_minapp_sent` WHERE `Status` = 'Sent'";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row["Minapp_sent_sn"] . "</td>
                    <td>" . $row["Equipment_name"] . "</td>
                    <td>" . $row["Count"] . "</td>
                    <td>" . $row["Status"] . "</td>
                    <td>" . $row["Min_approval"] . "</td>
                    <td>" . $row["Min_app_doc_id"] . "</td>
                    <td>
                        <ul class='icons-list'>
                                <button onclick='modalpop(" . $row["Minapp_sent_sn"] . ")' class='btn btn-default btn-sm'>View <i class='icon-eye position-right'></i></button>
    
                         </ul>
                    
                    </td>
                    <td></td>

                </tr>";
        }
    } else {
        echo "0 results";
    }


}


function get_rejdata($conn)
{
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


    $sql = "SELECT * FROM `epms_minapp_sent` WHERE `Min_approval` = 'Rejected'";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                        <td>" . $row["Equipment_name"] . "</td>
                        <td>" . $row["Count"] . "</td>
                        <td>" . $row["Min_approval"] . "</td>
                        <td>" . $row["Min_app_doc_id"] . "</td>
    
                    </tr>";
        }
    } else {
        echo "0 results";
    }


}


function get_appdata($conn)
{
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


    $sql = "SELECT * FROM `epms_minapp_sent` WHERE `Min_approval` = 'Approved'";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            $type = "Indirect Purchase";

            echo "<tr>
                        <td>" . $row["Equipment_name"] . "</td>
                        <td>" . $row["Count"] . "</td>
                        <td>" . $row["Min_app_doc_id"] . "</td>
                        <td>" . $row["Min_approval"] . "</td>
                        <td><a href='tec_create.php?name=".$row["Equipment_name"]."&qty=".$row["Count"]."&type=".$type."'> CREATE TEC </a></td>
                    </tr>";
        }
    } else {
        echo "0 results";
    }


}


function save_modal($conn)
{

    $id = $_POST["Minapp_sent_snmodal"];
    $Min_approval = $_POST["minapp0"];
    $Min_app_doc_id = $_POST["minappdoc"];

    if ($Min_approval == "Approved") {
        $sql = "UPDATE `epms_minapp_sent` SET `Min_approval`='$Min_approval', `Min_app_doc_id`='$Min_app_doc_id' , `Status`='Ready'  WHERE `Minapp_sent_sn` = '$id'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo mysqli_error($conn);
        } else {
            echo "success";
        }
    }
    else{
        $sql = "UPDATE `epms_minapp_sent` SET `Min_approval`='$Min_approval', `Min_app_doc_id`='$Min_app_doc_id' , `Status`='Stop'  WHERE `Minapp_sent_sn` = '$id'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            echo mysqli_error($conn);
        } else {
            echo "success";
        }
    }

}


?>