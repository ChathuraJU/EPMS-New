<?php 
session_start();
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
                    
                    $emp_id = $_SESSION["user"]["emp_id"];

                    
                    $sql = "select * from `epms_survey`,`epms_survey_equip` where epms_survey.Sur_id = epms_survey_equip.Sur_id and epms_survey.Emp_id= '$emp_id'";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td>" . $row["Sur_id"] . "</td>
                            <td>" . $row["Year"] . "</td>
                            <td>" . $row["Unit_Name"] . "</td>
                            <td>" . $row["Ward_Name"] . "</td>
                            <td>" . $row["Equipment_code"] . "</td>
                            <td>" . $row["Present_Status"] . "</td>
                            <td></td>
                            
                            </tr>";
                        }
                    } else {
                        echo "0 results";
                    }
    
    
        }



?>