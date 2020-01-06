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


                $sql = "INSERT INTO `epms_complain`(`Emp_ID`,`Equip_code`,`Complain_Date`,`Complain`)
            VALUES ('$Empid','$Eqpcode','$Compdate','$Complain')";

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
                    
                    
                    $sql = "select * from `epms_complain`";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td>".$row["Com_sn"]."</td>
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