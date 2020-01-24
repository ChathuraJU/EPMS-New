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
        case "get_biddata":
            get_biddata($conn);
            break;
        case "apprvbid":
            apprvbid($conn);
            break;

    }
}


function get_biddata($conn){



    $sql = "SELECT * FROM `epms_bids` AS b , `epms_preliminaryeval` AS p ,
            `epms_tenders` AS t  WHERE b.`Bid_id`= p.`Bid_id` AND b.`Procurement_id` = t.`Procurement_id`";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {

            $precent = ($row["Count"]/22)*100;
            $tender_sn = $row["Tender_sn"];

            $status = $row["Bid_status"];
            $clr = "";

            switch($status){
                case "Approved":
                    $clr = "#65eb89";
                    break;
                case "Rejected":
                    $clr = "#d67272";
                    break;
            }
            echo "<tr style='background-color: ".$clr."'><td>" . $row["Procurement_id"] . "</td>
                    <td>" . $row["Bidder_id"] . "</td>
                    <td>" . $row["Procure_title"] . "</td>
                    <td>" . $row["Quantity"] . "</td>
                    <td>" . $row["Unit_price"] . "</td>
                    <td><a href='../../EPMS/Bid_Documents/$tender_sn.pdf'>DOC </a></td>
                    <td>
                        <div class='progress'>
                            <div class='progress-bar progress-bar-info' style='width: ".$precent."%;'></div>
                        </div>
                    </td>
                    <td>
                        <button onclick='modalpop(" . $row["Bids_sn"] . ")' class='btn btn-default btn-sm'>EVALUATE</button>
                    </td>

                    </tr>";
        }
    } else {
        echo "0 results";
    }

}

function apprvbid($conn){
    $bd1 = $_POST["bidapprvl"];
    $bd2= $_POST["bidappdate"];
    $bd3 = $_POST["bidreason"];
    $bd_sn= $_POST["bidappmodal"];

//    echo $bd1;
//    echo $bd2;
//    echo $bd3;
//    echo $bd_sn;

    $sql1 ="UPDATE nhk_epms.`epms_bids` SET `Bid_status` = '$bd1', `Bid_approval_date` = '$bd2', `Remark`= '$bd3' WHERE `Bids_sn` = '$bd_sn'";
    $sql2 ="UPDATE 
                  `epms_bids` ep
                SET
                  ep.`Bid_status` = 'Rejected' 
                WHERE ep.`Procurement_id` = 
                  (SELECT 
                    `procurement_id`
                  FROM
                    (SELECT * FROM `epms_bids`) AS pp 
                  WHERE `Bids_sn` = '$bd_sn') AND ep.`Bids_sn` != '$bd_sn'";
    $result1=mysqli_query($conn,$sql1);
    $result2=mysqli_query($conn,$sql2);


    if (!$result1) {
        echo mysqli_error($conn);
    } else {
        if (!$result2) {
            echo mysqli_error($conn);
        } else {
            echo "success";
        }
    }
}







?>