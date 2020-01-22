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
            getdata($conn);
            break;



    }
}



function getdata($conn){


    $sql = "SELECT * FROM `epms_minapp_sent` WHERE `Status` = 'Ready'";



    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>" . $row["Proceedto_procure_sn"] . "</td>
                    <td>" . $row["Procurement_type"] . "</td>
                    <td>" . $row["Equipment_name"] . "</td>
                    <td>" . $row["Count"] . "</td>
                    <td>" . $row["Status"] . "</td>

                    <td>
                        
                    
                    </td>
                    <td></td>

                </tr>";
        }
    } else {
        echo "0 results";
    }


}




?>