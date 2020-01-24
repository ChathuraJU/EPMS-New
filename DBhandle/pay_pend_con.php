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


    $sql =  "SELECT * FROM epms_bids WHERE Order_status ='Order Placed'";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                            <td>" . $row["Procurement_id"] . "</td>
                            <td>" . $row["Bidder_id"] . "</td>
                            <td>" . $row["Bid_status"] . "</td>
                            <td><a href='../Admin/pay_fundsalloc.php?proc=".$row["Procurement_id"]."'>MAKE PAYMENT</a></td>
                            
                            </tr>";
        }
    } else {
        echo "0 results";
    }

}


?>