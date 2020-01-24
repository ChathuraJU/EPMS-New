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
        case "sent":
            sent($conn);
            break;
        case "send_data":
            send_data($conn);
            break;

    }
}



function getdata($conn){


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

    $sql = "SELECT *,
              SUM(rapp.`Req_eqp_qty`) AS c
            FROM
              `epms_req_prim_app` rapp
            WHERE rapp.`Status` = 'pending' and `Procurement_type` ='3'
            GROUP BY rapp.`Req_equip`";
    $result = mysqli_query($conn, $sql);


    if (!$result) {
        echo mysqli_error($conn);
    }
    else{

        while($row = mysqli_fetch_assoc($result)) {

            $nameeqp = $row["Req_equip"];
            $counteqp = $row["c"];

            $sql1 = "INSERT INTO epms_minapp_sent(`Equipment_name`,`Count`,`Status`)
            VALUES ('$nameeqp','$counteqp','sent')";

            $result1 = mysqli_query($conn, $sql1);

            if (!$result1) {
                echo mysqli_error($conn);
            }
            else{
                echo "success";
            }
        }

        $sql2 = "UPDATE `epms_req_prim_app` SET `Status` = 'Sent' WHERE `Status` ='pending' and `Procurement_type` ='3'";
        $result2 = mysqli_query($conn, $sql2);

        if (!$result2) {
            echo mysqli_error($conn);
        }
        else{
            echo "success";
        }

    }




}


function send_data($conn){

    $sql = "SELECT *,
              SUM(rapp.`Req_eqp_qty`) AS c
            FROM
              `epms_req_prim_app` rapp
            WHERE rapp.`Status` = 'pending' and `Procurement_type` ='3'
            GROUP BY rapp.`Req_equip`";
    $result = mysqli_query($conn, $sql);


    if (!$result) {
        echo mysqli_error($conn);
    }
    else{

        while($row = mysqli_fetch_assoc($result)) {

            $nameeqp = $row["Req_equip"];
            $counteqp = $row["c"];

            $sql1 = "INSERT INTO epms_minapp_sent(`Equipment_name`,`Count`,`Status`)
            VALUES ('$nameeqp','$counteqp','sent')";

            $result1 = mysqli_query($conn, $sql1);

            if (!$result1) {
                echo mysqli_error($conn);
            }
            else{
                echo "success";
            }
        }

    }





}
?>