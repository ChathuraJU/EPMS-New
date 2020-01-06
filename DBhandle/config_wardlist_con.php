<?php 
    if(isset($_GET["code"])){
        $code=$_GET["code"];
        switch($code){
            case "get_data":
                    getdata();
                    break;

            case "get_unitnameselect_data":
                get_unitnameselect_data();
                break;

            case "get_wheadidselect_data":
                get_wheadidselect_data();
                break;

            case "get_wheadnameselect_data":
                get_wheadnameselect_data();
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

    function get_unitnameselect_data(){
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