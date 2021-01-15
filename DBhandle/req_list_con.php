<?php
session_start();
    if(isset($_GET["code"])){
        $code=$_GET["code"];
        switch($code){


            case "get_data":
                getdata();
                break;

            case "get_data2":
                getdata2();
                break;

            case "get_data3":
                getdata3();
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


                    $sql = "select * from `epms_requisition` where Req_status = 'Pending'";


                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td>" . $row["Req_id"] . "</td>
                            <td>" . $row["Req_date"] . "</td>
                            <td>" . $row["Unit_Name"] . "</td>
                            <td>" . $row["Ward_Name"] . "</td>
                            <td>" . $row["Req_status"] . "</td>
                            <td><a href='req_details.php?id=".$row["Req_sn"]."'> PROCEED </a></td>
                            <td></td>

                            
                            </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

        }

        function getdata2(){
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

                    $emp_id = $_SESSION["user"]["emp_id"];
                    $sql = "select * from `epms_requisition` where Req_status = 'Pending' and  epms_requisition.Emp_id= '$emp_id'";


                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td>" . $row["Req_id"] . "</td>
                            <td>" . $row["Req_date"] . "</td>
                            <td>" . $row["Unit_Name"] . "</td>
                            <td>" . $row["Ward_Name"] . "</td>
                            <td>" . $row["Req_status"] . "</td>
                            <td></td>

                            
                            </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

        }

        function getdata3(){
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

                    $emp_id = $_SESSION["user"]["emp_id"];
                    $sql = "select * from `epms_requisition` where Req_status = 'Pending'";


                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>
                            <td>" . $row["Req_id"] . "</td>
                            <td>" . $row["Req_date"] . "</td>
                            <td>" . $row["Unit_Name"] . "</td>
                            <td>" . $row["Ward_Name"] . "</td>
                            <td>" . $row["Req_status"] . "</td>
                            <td></td>

                            
                            </tr>";
                        }
                    } else {
                        echo "0 results";
                    }

        }


?>




