<?php 
    if(isset($_GET["code"])){
        $code=$_GET["code"];
        switch($code){
            case "tableData":
                    save();
                    break;
            case "save1":
                newsave();
                break;

            case "get_unitselect_data":
                get_unitselect_data();
                break;

            case "get_wardselect_data":
                get_wardselect_data();
                break;
            }
        }

        function newsave(){
         
            $survid = $_POST["suridf"];
            $emplid = $_POST["empidf"];
            $Unit = $_POST["unitf"];
            $Ward = $_POST["wardf"]; 
            $Year = $_POST["yearf"];
            $Subdate = $_POST["subdatef"]; 

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

                $sql = "INSERT INTO `epms_survey`(`Survey_id`,`Emp_id`,`Unit_name`,`Ward_name`,
                `Year`,`Submit_date`)
                VALUES ('$survid','$emplid','$Unit','$Ward','$Year','$Subdate')";

                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    echo mysqli_error($conn);
                }
                else{
                    echo "success";
                }


        }

        function save(){


            $survid = $_POST["suridf"];
            $emplid = $_POST["empidf"];
            $Unit = $_POST["unitf"];
            $Ward = $_POST["wardf"]; 
            $Year = $_POST["yearf"];
            $Subdate = $_POST["subdatef"]; 

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



                    

            // Unescape the string values in the JSON array
            $tableData = stripcslashes($_POST['pTableData']);

            // Decode the JSON array
            $tableData = json_decode($tableData,TRUE);
            $Ward = $_POST["wardf"];

            // now $tableData can be accessed like a PHP array


            $sql = "INSERT INTO `epms_survey`(`Survey_id`,`Emp_id`,`Unit_name`,`Ward_name`,
                `Year`,`Submit_date`)
                VALUES ('$survid','$emplid','$Unit','$Ward','$Year','$Subdate')";

                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    echo mysqli_error($conn);
                }
                else{
                    foreach ($tableData as $key => $value) {
                        $eqpcode =  $value["Equipment Code"];
                        $empname = $value["Equipment Name"];
                        $Make = $value["Make"];
                        $Model = $value["Model"]; 
                        $Serial_no = $value["Serial No"];
                        $PresentStat = $value["Present Status"]; 
                        $doi = $value["Date of Installation"];
                        $Remarks =$value["Remarks"];
                    
                    
                        echo $eqpcode, $Ward;
        
                        $sql = "SELECT MAX(Survey_id) AS id FROM `epms_survey`";

                        $result = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($result) > 0)
                        {
                            $row = mysqli_fetch_assoc($result);
                            $dddd = $row["id"];

                            $sql = "INSERT INTO `epms_survey_equip`(`Survey_id`,`Equipment_code`,`Equipment_name`,`Make`,`Model`,
                            `Serial_No`,`Present_Status`,`Date_of_installation`, `Remarks`)
                            VALUES ('$dddd','$eqpcode','$empname','$Make','$Model','$Serial_no','$PresentStat','$doi','$Remarks')";
            
                            $result = mysqli_query($conn, $sql);
                            
                        } 
        
                    }
        
                    if (!$result) {
                        echo mysqli_error($conn);
                    }
                    else{
                        echo "success";
                        
                    }

                   
                }

            

                
        }

        function get_unitselect_data(){
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
                    
                    
                    $sql = "select * from `epms_unit`";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option>" . $row["Unit_name"] . "</option>";
                        }
                    } else {
                        echo "0 results";
                    }
        }

        function get_wardselect_data(){
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
                    
                    
                    $sql = "select * from `epms_ward`";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<option>" . $row["Ward_name"] . "</option>";
                        }
                    } else {
                        echo "0 results";
                    }
        }

?>