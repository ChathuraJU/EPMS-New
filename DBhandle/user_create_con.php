<?php 

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

    if(isset($_GET["code"])){
        $code=$_GET["code"];
        switch($code){
            case "save":
                save($conn);
                break;

            case "get_empidselect_data":
                get_empidselect_data($conn);
                break;               

            case "get_utypeselect_data":
                get_utypeselect_data($conn);
                break;
            case "get_data":
                getdata($conn);
                break;

            case "get_emp_name":
                get_emp_name($conn);
            break;
            }
        }

        function save($conn){
            $emplid = $_POST["empid"];
            $emplname = $_POST["emp5"];
            $usetyp = $_POST["utype"];
            $usestat = $_POST["ustatus"]; 
            $Uname = $_POST["username"];
            $Upassword = $_POST["userpassword"]; 
            $Ucreate = $_POST["ucreated"];
            $Udeny = $_POST["udeniedd"]; 

            $md5pass=md5($Upassword);

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


        //function to get the employee ids from the db to  Ward Head ID select box
        function  get_empidselect_data($conn){
      
            $sql = "select * from `epms_employee`";
            
            
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<option value='".$row["Emp_id"]."'>".$row["Emp_id"]."</option>");
                }
            } else {
                echo "0 results";
            }
        }

        //get equipment name for the relevant equip code
        function get_emp_name($conn){
            $emp_n = $_POST["emp"];

            $sql = "SELECT 
                        * 
                    FROM
                        `epms_employee` e
                        WHERE e.`Emp_id`='$emp_n'";


            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row["Emp_name"];
                }
            } else {
                echo "0 results";
            }
        }


        //function to get the user types from the db to  Ward Head ID select box
        function  get_utypeselect_data($conn){
          
            $sql = "select * from `epms_user_type`";
            
            
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo("<option value='".$row["User_type_name"]."'>".$row["User_type_name"]."</option>");
                }
            } else {
                echo "0 results";
            }
        }


?>