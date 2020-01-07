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

            case "get_equipselect_data":
                get_equipselect_data();
                break;
            }
        }

        function save(){
            $Equipname = $_POST["eqpname"];


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

                $sql1 ="SELECT Bid_checklist_no FROM epms_bid_checklist ORDER BY Checklist_sn DESC LIMIT 1 ";
                $result1=mysqli_query($conn,$sql1);

                $rowcount=mysqli_num_rows($result1);

                if ($rowcount>0) {
                    $row = mysqli_fetch_assoc($result1);
                    $last_id = $row["Bid_checklist_no"];
                }

                $chkl_number = substr($last_id,5,10);
                $newchkl_number = str_pad(intval($chkl_number) + 1, strlen($chkl_number),'0', STR_PAD_LEFT);
                $new_chklid = "CHKL-".$newchkl_number;
                


                $sql = "INSERT INTO `epms_bid_checklist`(`Bid_checklist_no`,`Equip_name`)
            VALUES ('$new_chklid','$Equipname')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo mysqli_error($conn);
            }
            else{

                $sql = "SELECT MAX(Bid_checklist_no) AS id FROM `epms_bid_checklist`";

                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0)
                {
                    $row = mysqli_fetch_assoc($result);
                    $dddd = $row["id"];
                    move_uploaded_file($_FILES["checkdoc"]["tmp_name"],"../Bid_Documents/$dddd.pdf");
                }   

                echo "success";
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
                    
                    
                    $sql = "select * from `epms_bid_checklist`";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td>" . $row["Bid_checklist_no"] . "</td>
                            <td>" . $row["Equip_name"] . "</td>
                            <td></td>
                            <td>
                                <ul class='icons-list'>
                                    <li><a><i class='icon-pencil7'></i></a></li>
                                    <li><a><i class='icon-trash'></i></a></li>
                                </ul>
                            </td>
                            </tr>";
                        }
                    } else {
                        echo "0 results";
                    }
    
    
        }


        function get_equipselect_data(){
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
                    
                    
                    $sql = "select * from `epms_equipment`";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option>" . $row["Equip_name"] . "</option>";
                        }
                    } else {
                        echo "0 results";
                    }
        }


?>