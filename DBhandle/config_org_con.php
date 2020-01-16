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


                $sql = "INSERT INTO `epms_org`(`Hos_name`,`Hos_add`,`Hos_hotline`,
                `Hos_phone`,`Hos_fax`,`Hos_email`)
            VALUES ('$HName','$Hadd','$Hotline','$Hos_tel','$Hosfax','$Email' )";

            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo mysqli_error($conn);
            }
            else{
                $sql = "SELECT MAX(Hos_sn) AS id FROM `epms_org`";

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