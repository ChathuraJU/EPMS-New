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


    $sql = "select * from `epms_req_prim_app`";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            $type = $row["Procurement_type"];
            switch($type){
                case "2":
                    $type = "Direct Purchase";
                    break;
                case "3":
                    $type = "Indirect Purchase";
                    break;
            }

            echo "<tr>
                            <td>" . $row["Prim_app_eqp_id"] . "</td>
                            <td>" . $row["Req_equip_id"] . "</td>
                            <td>" . $row["Req_equip"] . "</td>
                            <td>" . $row["Req_eqp_qty"] . "</td>
                            <td>" . $row["Req_primapp_date"] . "</td>
                            <td>" . $type . "</td>
                            <td>
                                <ul class='icons-list'>
                                    <button type=\"button\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal_form_vertical\">View <i class=\"icon-eye position-right\"></i></button>

                                </ul>
                            </td>
                            <td></td>
                            
                            </tr>";
        }
    } else {
        echo "0 results";
    }


}





?>