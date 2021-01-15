<?php 
session_start();
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
            $Empid = $_POST["empid"];
            $Eqpcode = $_POST["eqpcode"];
            $Compdate = $_POST["compdate"];
            $Complain = $_POST["complain"];


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

                $sql1 ="SELECT Complain_id FROM epms_complain ORDER BY Com_sn DESC LIMIT 1 ";
                    $result1=mysqli_query($conn,$sql1);

                    $rowcount=mysqli_num_rows($result1);

                    if ($rowcount>0) {
                        $row = mysqli_fetch_assoc($result1);
                        $last_id = $row["Complain_id"];
                    }

                    $com_number = substr($last_id,4,9);
                    $newcom_number = str_pad(intval($com_number) + 1, strlen($com_number),'0', STR_PAD_LEFT);
                    $new_comid = "COM-".$newcom_number;


                $sql = "INSERT INTO `epms_complain`(`Complain_id`,`Emp_ID`,`Equip_code`,`Complain_Date`,`Complain`)
            VALUES ('$new_comid','$Empid','$Eqpcode','$Compdate','$Complain')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo mysqli_error($conn);
            }
            else{
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
                    
                    $emp_id = $_SESSION["user"]["emp_id"];

                    $sql = "select * from `epms_complain` where epms_complain.Emp_id= '$emp_id'";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td>".$row["Complain_id"]."</td>
                            <td>" . $row["Emp_id"] . "</td>
                            <td>" . $row["Equip_code"] . "</td>
                            <td>" . $row["Complain_Date"] . "</td>
                            <td>" . $row["Complain"] . "</td>
                            <td>
                                <ul class='icons-list'>
                                    <li><a href=><i class='icon-pencil7'></i></a></li>
                                </ul>
                            </td>
                            </tr>";
                        }
                    } else {
                        echo "0 results";
                    }
    
    
        }

        


?>