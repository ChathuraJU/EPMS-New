<?php 
    if(isset($_GET["code"])){
        $code=$_GET["code"];
        switch($code){
             
            case "get_empnameselect_data":
                get_empnameselect_data();
                break;

            }
        }


        //function to get the employee names from the db to  Ward Head ID select box
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
                        echo("<option value='".$row["Emp_name"]."'>".$row["Emp_name"]."</option>");
                    }
                } else {
                    echo "0 results";
                }
        }
 
?>