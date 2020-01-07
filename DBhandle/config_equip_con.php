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
            $equipno = $_POST["eqpno"];
            $equipname = $_POST["eqpname"];


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

                //create eqp id
                $sql1 ="SELECT Equip_id FROM epms_equipment ORDER BY Equip_sn DESC LIMIT 1 ";
                $result1=mysqli_query($conn,$sql1);

                $rowcount=mysqli_num_rows($result1);

                if ($rowcount>0) {
                    $row = mysqli_fetch_assoc($result1);
                    $last_id = $row["Equip_id"];
                }

                $eqp_number = substr($last_id,4,11);
                $neweqp_number = str_pad(intval($eqp_number) + 1, strlen($eqp_number),'0', STR_PAD_LEFT);
                $new_eqpid = "EQP-".$neweqp_number;

                $sql = "INSERT INTO `epms_equipment`(`Equip_id`,`Equip_name`)
            VALUES ('$new_eqpid','$equipname')";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo mysqli_error($conn);
            }
            else{
                echo "success";
            }
        }

?>