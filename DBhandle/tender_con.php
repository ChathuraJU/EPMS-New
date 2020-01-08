<?php 
    if(isset($_GET["code"])){
        $code=$_GET["code"];
        switch($code){
            case "save":
                    save();
                    break;

                case "get_data":
                    getdata();
                    break;

            }
        }

        function save(){
            $procid = $_POST["procid"];
            $eqpname = $_POST["eqpname"];
            $qty = $_POST["qty"];
            $title = $_POST["proctitle"];
            $nature = $_POST["procnature"];
            $nrp = $_POST["nrp"]; 
            $closing = $_POST["bidcolop"];
            $opening = $_POST["bidcolcls"];

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

                $sql1 ="SELECT Tender_id FROM epms_tender ORDER BY Tender_sn DESC LIMIT 1 ";
                $result1=mysqli_query($conn,$sql1);

                $rowcount=mysqli_num_rows($result1);

                if ($rowcount>0) {
                    $row = mysqli_fetch_assoc($result1);
                    $last_id = $row["Tender_id"];
                }

                $tnd_number = substr($last_id,4,9);
                $newtnd_number = str_pad(intval($tnd_number) + 1, strlen($tnd_number),'0', STR_PAD_LEFT);
                $new_tndid = "KGH-".$newtnd_number;

                $sql = "INSERT INTO `epms_unit`(`Tender_id`,`Procurement_id`,`Equip_name`,`Quantity`,`Procure_title`,
                `Procure_nature`,`Procure_nrp`,`Tender_op_date`,`Tender_col_date`)
                 VALUES ('$new_tndid','$procid','$eqpname','$qty','$title','$nature','$nrp','$closing','$opening')";

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
                        move_uploaded_file($_FILES["rbidchk"]["tmp_name"],"../Bid Documents/$dddd.pdf");
                    }   

                    $sql2 = "SELECT MAX(Tender_sn) AS id FROM `epms_tenders`";

                    $result2 = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result2) > 0)
                    {
                        $row = mysqli_fetch_assoc($result2);
                        $dddd = $row["id"];
                        move_uploaded_file($_FILES["rbiddoc"]["tmp_name"],"../Bid Checklists/$dddd.pdf");
                    }   

                    echo "success";
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