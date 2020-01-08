<?php 
    if(isset($_GET["code"])){
        $code=$_GET["code"];
        switch($code){
            case "get_data":
                    getdata();
                    break;

            case "edit_data":
                edit_data();
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
                        $stat="";
                        if ($row["User_status"] ==1)
                            $stat= "Active";
                        else 
                            $stat= "Blocked";
                        
                        
                        echo "<tr id=". $row["User_sn"] ."><td>" . $row["User_sn"] . "</td><td>" . $row["Emp_id"] . "</td>
                        <td>" . $row["Emp_name"]. "</td>
                        <td>" . $row["User_type_name"] . "</td><td>" . $stat . "</td>
                        <td>
                            <ul class='icons-list'>
                                <li><a><i class='icon-pencil7 edit'></i></a></li>
                           </ul>
                        </td>
                        </tr>";
                    }
                } else {
                    echo "0 results";
                }
    }


    function edit_data(){
        $usrsn = $_POST["myData"];

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
            
            
            $sql = "select * from `epms_users` where User_sn ='$usrsn'" ;
            
            
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo json_encode($row);
                    }
            }
             else {
                echo "0 results";
            }

    }



?>