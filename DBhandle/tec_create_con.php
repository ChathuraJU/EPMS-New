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
             
            case "get_empnameselect_data":
                get_empnameselect_data($conn);
                break;

            case "save":
                save($conn);
                break;

            }
        }


        //function to get the employee names from the db to  Ward Head ID select box
        function  get_empnameselect_data($conn){

                
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


        function  save($conn){
            $protype = $_POST["protype"];
            $eqpname = $_POST["eqpname"];
            $qty = $_POST["qty"];
            $names = $_POST["names"];




            //create procurement id
            $sql1 ="SELECT Procurement_id FROM epms_tec ORDER BY Tec_sn DESC LIMIT 1 ";
                $result1=mysqli_query($conn,$sql1);

                $rowcount=mysqli_num_rows($result1);

                if ($rowcount>0) {
                    $row = mysqli_fetch_assoc($result1);
                    $last_id = $row["Procurement_id"];
                }

                $pro_number = substr($last_id,5,10);
                $newpro_number = str_pad(intval($pro_number) + 1, strlen($pro_number),'0', STR_PAD_LEFT);
                $new_proid = "PROC/".$newpro_number;


                //create procurement id
            $sql2 ="SELECT Tec_id FROM epms_tec ORDER BY Tec_sn DESC LIMIT 1 ";
                $result2=mysqli_query($conn,$sql2);

                $rowcount=mysqli_num_rows($result2);

                if ($rowcount>0) {
                    $row = mysqli_fetch_assoc($result2);
                    $last_id1 = $row["Tec_id"];
                }

                $tec_number = substr($last_id1,5,10);
                $newtec_number = str_pad(intval($tec_number) + 1, strlen($tec_number),'0', STR_PAD_LEFT);
                $new_tecid = "TECL/".$newtec_number;




                //save to epms_tec table
           $sql = "INSERT INTO `epms_tec`(`Procurement_id`,`Tec_id`,`Procurement_type`,`Equipment_name`,
                `Quantity`,`Backside_ok`)
                VALUES ('$new_proid','$new_tecid','$protype','$eqpname','$qty','$names')";

                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    echo mysqli_error($conn);
                }
                else{
                    echo "success";
                }
            }
 
?>