<?php 
    if(isset($_GET["code"])){
        $code=$_GET["code"];
        switch($code){
            case "get_data":
                    getdata();
                    break;

            case "get_empidselect_data":
                get_epmidselect_data();
                break;

            case "get_utypeselect_data":
                get_utypeselect_data();
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
                
                
                $sql = "select * from `epms_users`";
                
                
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row["User_sn"] . "</td><td>" . $row["Emp_id"] . "</td>
                        <td>" . $row["Emp_name"]. "</td>
                        <td>" . $row["User_type_name"] . "</td><td>" . $row["User_username"] . "</td>
                        <td>" . $row["User_password"] . "</td>
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

    function get_epmidselect_data(){
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

    function get_utypeselect_data(){
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