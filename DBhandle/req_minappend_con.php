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
        case "sent":
            sent($conn);
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


    $sql = "SELECT
              *,
              SUM(rapp.`Req_eqp_qty`) AS c
            FROM
              `epms_req_prim_app` rapp
            WHERE rapp.`Status` = 'pending' and `Procurement_type` ='3'
            GROUP BY rapp.`Req_equip`";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>" . $row["Req_equip"] . "</td>
                <td>" . $row["c"] . "</td>
                <td>" . $row["Status"] . "</td>
    
            
                
                </tr>";
        }
    } else {
        echo "0 results";
    }


}

function sent($conn){
    $sql2 = "UPDATE `epms_req_prim_app` SET `Status` = 'Sent' WHERE `Status` ='pending' and `Procurement_type` ='3'";
    $result2 = mysqli_query($conn, $sql2);

    if (!$result) {
        echo mysqli_error($conn);
    }
    else{
        echo "success";
    }



}



?>