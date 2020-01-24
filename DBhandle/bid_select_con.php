<?php 
    if(isset($_GET["code"])){
        $code=$_GET["code"];
        switch($code){
            case "get_data":
                getdata();
                break;
            case "get_modal_data":
                get_modal_data();
                break;
            case "change_status":
                change_status();
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
                    
                    
                    $sql = "SELECT * FROM `epms_bids` b, `epms_bidders` bbb WHERE b.Bidder_id = bbb.`bidder_username` AND b.Bid_status = 'Approved';";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {

                            $sn_id = $row["Bids_sn"];

                            echo "<tr><td>" . $row["Procurement_id"] . "</td>
                            <td>" . $row["Bidder_id"] . "</td>
                            <td>" . $row["Com_phone"] . "</td>
                            <td>" . $row["Order_status"] . "</td>
                            <td>
                               <a onclick='getdata($sn_id)' data-toggle='modal' data-target='#edit_modal'>Place Order</a>
                            </td>
                            </tr>";
                        } //order button needed
                    } else {
                        echo "0 results";
                    }
    
        }

        function get_modal_data(){

            $id = $_POST["id"];

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
                      * 
                    FROM
                      `epms_bids` epb 
                      INNER JOIN epms_tenders ept 
                        ON epb.`Procurement_id` = ept.`Procurement_id` 
                    WHERE `Bids_sn` = '$id'
                    ";


            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {

                    $dataArray[] = $row;


                } //order button needed
            } else {
                echo "0 results";
            }


            echo json_encode($dataArray);


        }



function change_status(){

    $id = $_POST["id"];

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


    $sql = "UPDATE `epms_bids` ep SET `Order_status` = 'Order Placed' WHERE ep.`Procurement_id`='$id' AND ep.`Bid_status`='Approved'";


    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "success";
    } else {
        echo "0 results";
    }


}


        

?>