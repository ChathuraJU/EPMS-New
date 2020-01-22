<?php
if(isset($_GET["code"])){
    $code=$_GET["code"];
    switch($code){
        case "get_data":
            getdata();
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


    $sql = "SELECT * FROM `epms_requisition` AS R , `epms_req_equip` AS R1 , `epms_employee` AS E WHERE R.Req_sn = R1.Req_sn AND R.Emp_id = E.Emp_id";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>" . $row["Req_date"] . "</td>
                <td>" . $row["Emp_name"] . "</td>
                <td>" . $row["Req_id"] . "</td>
                <td>" . $row["Req_equip_id"] . "</td>
                <td>" . $row["Req_eqp_name"] . "</td>
                <td>" . $row["Req_equip_approval"] . "</td>
                <td></td>
            
                
                </tr>";
        }
    } else {
        echo "0 results";
    }


}





?>