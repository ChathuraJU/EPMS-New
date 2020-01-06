<?php
//  function fetch_data()
// {
//     $output = '';
//     $conn = db_con();
//     $sql = "SELECT *from employees";
//     $result = mysqli_query($conn, $sql);
//     while($row = mysqli_fetch_array($result))
//     {
//         $output .= '<tr>  
//                           <td>'.$row["id"].'</td>  
//                           <td>'.$row["priority"].'</td>  
//                           <td>'.$row["date"].' '.$row["time"].'</td>
//                           <td>'.$row["location_name"].'</td>  
//                           <td>'.$row["name"].'</td>  
//                           <td>'.$row["first_name"].' '.$row["last_name"].'</td>
//                      </tr>  
//                           ';
//     }
//     return $output;
// } 






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
    <img src="../global_assets/images/pdftop1.png" height="100" width="600">
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
            <th width="15%"><b>No</b></th>
            <th width="70%"><b>Equipment Name</b></th>
            <th width="15%"><b>Count</b> </th>
                
           </tr>
      ';
    $content .= //fetch_data();
        '           <tr> 
                          <td style="font-family: Arial">000001</td>  
                          <td style="font-family: Arial">Incubator</td>  
                          <td style="font-family: Arial">10</td>                         


                    </tr>
                    <tr> 
                          <td style="font-family: Arial">000002</td>  
                          <td style="font-family: Arial">Respirometer</td>  
                          <td style="font-family: Arial">04</td>                         

                    </tr>
                    <tr> 
                          <td style="font-family: Arial">000003</td>  
                          <td style="font-family: Arial">DNA EXtractor</td>  
                          <td style="font-family: Arial">01</td>                         

                    </tr>
                    <tr> 
                          <td style="font-family: Arial">000004</td>  
                          <td style="font-family: Arial">Medical Grade Refrigerator</td>  
                          <td style="font-family: Arial">02</td>                         

                    </tr>
                    <tr> 
                        <td style="font-family: Arial">000005</td>  
                        <td style="font-family: Arial">Holmium Laser Device</td>  
                        <td style="font-family: Arial">01</td>                         

                    </tr>
                    <tr> 
                        <td style="font-family: Arial">000006</td>  
                        <td style="font-family: Arial">Pendents</td>  
                        <td style="font-family: Arial">05</td>                         

                    </tr>
                    <tr> 
                        <td style="font-family: Arial">000007</td>  
                        <td style="font-family: Arial">Foot Ware Items</td>  
                        <td style="font-family: Arial">200</td>                         

                    </tr>
                    <tr> 
                        <td style="font-family: Arial">000008</td>  
                        <td style="font-family: Arial">Fluid Warmer</td>  
                        <td style="font-family: Arial">10</td>                         

                    </tr>

                     </table>

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