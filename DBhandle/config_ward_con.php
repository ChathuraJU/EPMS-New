<?php 
    if(isset($_GET["code"])){
        $code=$_GET["code"];
        switch($code){
            case "save":
                    save();
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

?>