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
            $Equipmake= $_POST["eqpmake"];
            $Powerreq = $_POST["power"];
            $Modelno = $_POST["eqpmodel"]; 
            $Serialno = $_POST["serial"];
            $Price = $_POST["price"]; 
            $Vendor = $_POST["vendor"];
            $Recievedvia = $_POST["recvia"];
            $Recievedate = $_POST["recdate"];
            $Recievecond = $_POST["reccondition"]; 
            $Warrentp = $_POST["warrenty"];
            $Preventive = $_POST["prevent"]; 
            $MSP = $_POST["msp"];
            $Adddetails = $_POST["additionaldetails"];

            
           
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


                $sql1 ="SELECT Equip_code FROM epms_inventory ORDER BY Inventory_sn DESC LIMIT 1 ";
                $result1=mysqli_query($conn,$sql1);

                $rowcount=mysqli_num_rows($result1);

                if ($rowcount>0) {
                    $row = mysqli_fetch_assoc($result1);
                    $last_id = $row["Equip_code"];
                }

                $inv_number = substr($last_id,4,11);
                $newinv_number = str_pad(intval($inv_number) + 1, strlen($inv_number),'0', STR_PAD_LEFT);
                $new_invcode = "INV-".$newinv_number;
                


                $sql = "INSERT INTO `epms_inventory`(`Equip_code`,`Equip_name`,`Equip_make`,`Equip_power`,`Equip_model`,
                `Equip_serial`,`Equip_price`,`Vendor`,`Recieved_via`,`Recieved_date`,`Recieved_cond`,`Warrenty_period`,
                `Preventive`,`MSP`,`Add_details`)
            VALUES ('$new_invcode','$Equipname','$Equipmake','$Powerreq','$Modelno','$Serialno','$Price',
            '$Vendor','$Recievedvia','$Recievedate','$Recievecond','$Warrentp','$Preventive','$MSP','$Adddetails')";


            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo mysqli_error($conn);
            }
            else{
                $sql = "SELECT MAX(Equip_code) AS id FROM `epms_inventory`";

                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0)
                {
                    $row = mysqli_fetch_assoc($result);
                    $dddd = $row["id"];
                    move_uploaded_file($_FILES["serveagg"]["tmp_name"],"../ServiceAG/$dddd.pdf");
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
                    
                    
                    $sql = "select * from `epms_inventory`";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td>" . $row["Equip_code"] . "</td>
                            <td>" . $row["Equip_name"] . "</td>
                            <td>" . $row["Recieved_date"] . "</td>
                            <td>" . $row["Recieved_cond"] . "</td>
                            <td>" . $row["Vendor"] . "</td>
                            <td>
                                <ul class='icons-list'>
                                    <li><a><i class='icon-pencil7'></i></a></li>
                                    <li><a><i class='icon-eye'></i></a></li>
                                </ul>
                            </td>
                            <td></td>
                            
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