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


    $sql = "select * from `epms_tec`";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                            <td>" . $row["Tec_sn"] . "</td>
                            <td>" . $row["Procurement_id"] . "</td>
                            <td>" . $row["Tec_id"] . "</td>
                            <td>" . $row["Backside_ok"] . "</td>
                            <td><a href='tender_create.php?proid=".$row["Procurement_id"]."'> CREATE TEC </a></td>

                            </tr>";
        }
    } else {
        echo "0 results";
    }

}


?>



