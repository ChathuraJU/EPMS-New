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
            $HName = $_POST["hosname"];
            $Hadd = $_POST["hosaddress"];
            $Lttrhd = $_POST["ltrhd"];
            $Hotline = $_POST["hotline"]; 
            $Hos_tel = $_POST["hos_tel"];
            $Hosfax = $_POST["hosfax"]; 
            $Email = $_POST["hosemail"]; 

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


                $sql = "INSERT INTO `epms_employee`(`Hos_name`,`Hos_add`,`Hos_ltrhd`,`Hos_hotline`,
                `Hos_tel`,`Hos_fax`,`Hos_email`)
            VALUES ('$HName','$Hadd','$Lttrhd','$Hotline','$Hos_tel','$Hosfax','$Email' )";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo mysqli_error($conn);
            }
            else{
                $sql = "SELECT MAX(Bid_checklist_no) AS id FROM `epms_organization`";

                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0)
                {
                    $row = mysqli_fetch_assoc($result);
                    $dddd = $row["id"];
                    move_uploaded_file($_FILES["ltrhd"]["tmp_name"],"../Admin/Docs/$dddd.pdf");
                }   

                echo "success";
            }
        }
        
?>