<?php 
    if(isset($_GET["code"])){
        $code=$_GET["code"];
        switch($code){
            case "save":
                    save();
                    break;
            case "get_unitselect_data":
                get_unitselect_data();
                break;
            case "get_wardselect_data":
                get_wardselect_data();
                break;

                
            }
        }

        function save(){
            $namewi = $_POST["initials"];
            $namefull = $_POST["fname"];
            $gender = $_POST["morf"];
            $salute = $_POST["salutation"]; 
            $bdate = $_POST["dob"];
            $nationalid = $_POST["nic"]; 
            $Address = $_POST["address"];
            $mail = $_POST["email"]; 
            $Hphone = $_POST["home_tel"];
            $Mphone = $_POST["mob_tel"]; 
            $jdate = $_POST["djoin"];
            $workingid = $_POST["workid"]; 
            $jtitle = $_POST["jtitle"];
            $Unit = $_POST["unit"];
            $Ward = $_POST["ward"]; 

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


                $sql = "INSERT INTO `epms_employee`(`Emp_nwi`,`Emp_name`,`Emp_gender`,`Emp_salutation`,
                `Emp_dob`,`Emp_nic`,`Emp_add`,`Emp_email`,`Emp_tel_home`,`Emp_tel_mobile`,`Emp_join_date`,`Emp_job_role`,
                `Emp_workid`,`Emp_assigned_unit`,`Emp_assigned_ward`)
            VALUES ('$namewi','$namefull','$gender','$salute','$bdate','$nationalid','$Address',
            '$mail','$Hphone','$Mphone','$jdate','$jtitle','$workingid','$Unit','$Ward')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo mysqli_error($conn);
            }
            else{
                echo "success";
            }
        }
        

        //get unit list to the unit select box
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

        //get ward list to the ward select box
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