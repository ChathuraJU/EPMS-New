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

            case "get_wheadidselect_data":
                get_wheadidselect_data();
                break;

            case "get_wheadnameselect_data":
                get_wheadnameselect_data();
                break;
            }
        }


        function save(){
            $wardno = $_POST["wno"];
            $wardname = $_POST["ward"];
            $wardheadid = $_POST["wheadid"];
            $wardheadname = $_POST["wheadname"];
            $wardemail = $_POST["wemail"]; 
            $wardtel = $_POST["wtel"];

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


                $sql = "INSERT INTO `epms_ward`(`Ward_no`,`Ward_name`,`Ward_head_id`,
                `Ward_head`,`Ward_email`,`Ward_telephone`)
            VALUES ('$wardno','$wardname','$wardheadid','$wardheadname','$wardemail','$wardtel')";

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
                    
                    
                    $sql = "select * from `epms_ward`";
                    
                    
                    $result = mysqli_query($conn, $sql);
    
                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><td>" . $row["Ward_no"] . "</td>
                            <td>" . $row["Ward_name"] . "</td>
                            <td>" . $row["Ward_head_id"] . "</td>
                            <td>" . $row["Ward_head"] . "</td>
                            <td>" . $row["Ward_email"] . "</td>
                            <td>" . $row["Ward_telephone"] . "</td>
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
    
        //function to get the employee ids from the db to  Ward Head ID select box
        function get_wheadidselect_data(){
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
    
        //function to get the Employee names from the db to the Ward Head name select box
        function get_wheadnameselect_data(){
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
    
      
    

?>