<?php 
    if(isset($_GET["code"])){
        $code=$_GET["code"];
        switch($code){
            case "save":
                save();
                break;

            case "get_empidselect_data":
                get_empidselect_data();
                break;               
            case "get_empnameselect_data":
                get_empnameselect_data();
                break;
            case "get_utypeselect_data":
                get_utypeselect_data();
                break;
            case "get_data":
                getdata();
                break;
            }
        }

        function save(){
            $emplid = $_POST["empid"];
            $emplname = $_POST["empname"];
            $usetyp = $_POST["utype"];
            $usestat = $_POST["ustatus"]; 
            $Uname = $_POST["username"];
            $Upassword = $_POST["userpassword"]; 
            $Ucreate = $_POST["ucreated"];
            $Udeny = $_POST["udeniedd"]; 

            $md5pass=md5($Upassword);

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


                $sql = "INSERT INTO `epms_users`(`Emp_id`,`Emp_name`,`User_type_name`,`User_status`,
                `User_username`,`User_password`,`User_access_assigned_date`,`User_access_denied_date`)
            VALUES ('$emplid','$emplname','$usetyp','$usestat','$Uname','$md5pass','$Ucreate',
            '$Udeny')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo mysqli_error($conn);
            }
            else{
                echo "success";
            }
        }



        function  get_empidselect_data(){
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
                
                
                $sql = "select * from `epms_employee`";
                
                
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<option>" . $row["Emp_id"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
        }

        function  get_empnameselect_data(){
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
                
                
                $sql = "select * from `epms_employee`";
                
                
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<option>" . $row["Emp_name"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
        }
 
        function  get_utypeselect_data(){
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
                
                
                $sql = "select * from `epms_user_type`";
                
                
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<option>" . $row["User_type_name"] . "</option>";
                    }
                } else {
                    echo "0 results";
                }
        }


?>