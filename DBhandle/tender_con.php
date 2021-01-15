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
            case "save":
                    save($conn);
                    break;

                case "get_data":
                    getdata($conn);
                    break;

                case "geteqpqtydata":
                    geteqpqtydata($conn);
                    break;

                case "get_nrf":
                    get_nrf($conn);
                    break;

            }
        }

        function save($conn){
            $procid = $_POST["proid"];
            $eqpname = $_POST["eqpname"];
            $qty = $_POST["qty"];
            $title = $_POST["proctitle"];
            $nature = $_POST["procnature"];
            $nrp = $_POST["nrp"];
            $opening = $_POST["bidcolop"];
            $closing = $_POST["bidcolcls"];

                $sql = "INSERT INTO `epms_tenders`(`Procurement_id`,`Equip_name`,`Quantity`,`Procure_title`,
                `Procure_nature`,`Procure_nrp`,`Tender_op_date`,`Tender_col_date`)
                 VALUES ('$procid','$eqpname','$qty','$title','$nature','$nrp','$opening','$closing')";

                 $result = mysqli_query($conn, $sql);

                if (!$result) {
                    echo mysqli_error($conn);
                }
                else{
                    $sql = "SELECT MAX(Tender_sn) AS id FROM `epms_tenders`";

                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0)
                    {
                        $row = mysqli_fetch_assoc($result);
                        $dddd = $row["id"];
                        move_uploaded_file($_FILES["rbiddoc"]["tmp_name"],"../Bid_Documents/$dddd.pdf");
                    }   


                    echo "success";
                }




        }


function geteqpqtydata($conn){

    $id = $_POST["id"];


    $sql = "SELECT * FROM `epms_tec` WHERE `Procurement_id` = '$id';";

    $result2 = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result2) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result2)) {
            $dataArray[] = $row;
        }
    } else {
        echo "0 results";
    }

    echo json_encode($dataArray);



}

function get_nrf($conn){
    $sql = "Select `*` from `epms_tec`";
    $result = mysqli_query($conn, $sql);
         if (mysqli_num_rows($result) > 0) {
             // output data of each row
             while($row = mysqli_fetch_assoc($result)) {

                 $tec_sn = $row["Tec_sn"];

                 $status = $row["Bid_status"];
                 $clr = "";

                 switch($status){
                     case "Approved":
                         $clr = "#65eb89";
                         break;
                     case "Rejected":
                         $clr = "#d67272";
                         break;
}

             }
            }
        }



        // function getdata(){
        //     $servername = "localhost";
        //         $username = "root";
        //         $password = "";
        //         $db = "nhk_epms";
                
        //             // Create connection
        //             $conn = mysqli_connect($servername, $username, $password, $db);
        //             // Check connection
        //             if (!$conn) {
        //                 die("Connection failed: " . mysqli_connect_error());
        //             }
                    
                    
        //             $sql = "select * from `epms_tenders`";
                    
                    
        //             $result = mysqli_query($conn, $sql);
    
        //             if (mysqli_num_rows($result) > 0) {
        //                 // output data of each row
        //                 while($row = mysqli_fetch_assoc($result)) {
        //                     echo "<tr><td>" . $row["Tender_id"] . "</td><td>" . $row["Procurement_id"] . "</td>
        //                     <td>" . $row["Procure_title"] . "</td><td>" . $row["Procure_nature"] . "</td>
        //                     <td>" . $row["Tender_op_date"] . "</td><td>" . $row["Tender_col_date"] . "</td>
        //                     <td>
        //                         <ul class='icons-list'>
        //                             <li><a href=""><i class='icon-pencil7'></i></a></li>
        //                         </ul>
        //                     </td>
        //                     </tr>";
        //                 }
        //             } else {
        //                 echo "0 results";
        //             }


        // }


?>
        

