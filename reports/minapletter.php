<?php
  function fetch_data()
 {
     $output = '';

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


     $sql = "SELECT
                    *,
                    SUM(rapp.`Req_eqp_qty`) AS c
                FROM
                    `epms_req_prim_app` rapp
                WHERE rapp.`Status` = 'pending' and `Procurement_type` ='3'
                GROUP BY rapp.`Req_equip`";
     $result = mysqli_query($conn, $sql);
     while($row = mysqli_fetch_array($result))
     {
         $output .= '<tr>  
                           <td>'.$row["Req_equip"].'</td>  
                           <td>'.$row["c"].'</td>  

                      </tr>  
                           ';
     }
     return $output;
 }






    require_once('../tcpdf/tcpdf.php');
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('helvetica');
//    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
//    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '50', PDF_MARGIN_RIGHT);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);
    $obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
    $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    $obj_pdf->SetFont('helvetica', '', 9);
    $obj_pdf->AddPage();
    $content = '';
    $content .= '
<div>
    <img src="../global_assets/images/pdftop.png" height="100" width="600">
</div>
<hr style="color: black">

    <h4>Ministry of Health,<br>Nutrion & Indigenous Medicine,<br>Colombo,<br>Sri Lanka,<br><br>............  </h4>
    </br>
    <h4> Dear Sir / Madam, </h4>
    </br>

    <h4><u><b> Medical & Laboratory Equipment Requisition List - 2020 </b></u></h4>

    <h4>Following depicts the Medical and Laboratory Equipments needed for the year 2020. </h4>

    <div style="width: 08px"></div>
    <table border="1" cellspacing="0" cellpadding="3" style="margin-top: 20px;">
        <tr>

            <th width="80%"><b>Equipment Name</b></th>
            <th width="20%"><b>Count</b> </th>
                
           </tr>
      ';
    $content .= fetch_data();


        $content .=       '      </table>

                     </br>
                     <h4>
                     </h4>

                     <h4>Thank You!</h4>
                     </br>
                     </br>
                     <h4>........................</h4>
                     <h4></h4>
                     <h4></h4>
                     <h4></h4>
                     <h4></h4>
                     <h4></h4>
                     <h4></h4>
                     <h4></h4>
                     <h4></h4>




                     <hr style="color: black">

                     <div>
                        <img src="../global_assets/images/pdfbot.jpg" height="100">
                    </div>
                     
                     ';
    $obj_pdf->writeHTML($content);
    $obj_pdf->Output('file.pdf', 'I');
    ?>