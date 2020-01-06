<?php 
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
                
                
                $sql = "select * from `epms_employee`";
                
                
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>" . $row["Emp_id"] . "</td><td>" . $row["Emp_workid"] . "</td>
                        <td>" . $row["Emp_name"] . "</td><td>" . $row["Emp_job_role"] . "</td>
                        <td>" . $row["Emp_assigned_unit"] . "</td><td>" . $row["Emp_assigned_ward"] . "</td>
                        <td>" . $row["Emp_join_date"] . "</td>
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




?>