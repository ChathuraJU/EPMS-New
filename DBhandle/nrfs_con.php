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

        case "apprvnrf":
            apprvnrf($conn);
            break;

        }
    }


        function getdata($conn){

            $sql = "select * from `epms_nrf`";


            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {

                    $nrf_id = $row["NRF_id"];

                    echo "<tr>
                    <td>" . $row["Procurement_id"] . "</td>
                    <td>" . $row["Bidder_id"] . "</td>
                    <td><a href='../../Medicio/NRFs/$nrf_id.jpg'>NRF</a></td>
                    <td>" . $row["NRF_submitted_date"] . "</td>
                    <td>" . $row["NRF_approved_date"] . "</td>
                    <td>" . $row["NRF_approval"] . "</td>
                    <td>
                        <button onclick='modalpop(" . $row["NRF_sn"] . ")' class='btn btn-default btn-sm'>APPROVE</button>
                    </td>
                    <td></td>
   
                    </tr>";
                }
            } else {
                echo "0 results";
            }

        }


        

        function apprvnrf($conn){
                $nrf1 = $_POST["nrfapprvl"];
                $nrf2= $_POST["nrfappdate"];
                $nrf3 = $_POST["nrfappreason"];
                $nrf_sn= $_POST["nrf_snmodal"];

                    $sql1 ="UPDATE nhk_epms.`epms_nrf` SET `NRF_approval` = '$nrf1', `NRF_approved_date` = '$nrf2', `NRF_remark`= '$nrf3' WHERE `NRF_sn` = '$nrf_sn'";
                    $result1=mysqli_query($conn,$sql1);
    

                    if (!$result1) {
                        echo mysqli_error($conn);
                    } else {
                        echo "success";
                    }
            }
    





?>




