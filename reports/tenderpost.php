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
    <img src="../global_assets/images/pdftop.png" height="100">
</div>
<hr style="color: black">

    <h2>Tender Notice - 2020  </h2>
    </br>
    <h4> Procurement of Medical Equipments - 2020 </h4>
    </br>


    <h4>Bids are calling for the Procurement of following Equipments. Pay the relevant Non-refundable Payment and collect the Bid Document on or before the closing date.</h4>
    <h4> Bid Collecting Time Period : .......... </h4>
    <h4> Bids Opening Date : ............. </h4>

    <div style="width: 08px"></div>
    <table border="1" cellspacing="0" cellpadding="3" style="margin-top: 20px;">
        <tr>
            <th width="15%"><b>No</b></th>
            <th width="55%"><b>Equipment Name</b></th>
            <th width="15%"><b>Count</b> </th>
            <th width="15%"><b>Non-Refundable Payment </th>
                
           </tr>
      ';
    $content .= //fetch_data();
        '           <tr> 
                          <td style="font-family: Arial">000001</td>  
                          <td style="font-family: Arial">Incubator</td>  
                          <td style="font-family: Arial">10</td> 
                          <td style="font-family: Arial">LKR 2000</td>                        


                    </tr>
                    <tr> 
                          <td style="font-family: Arial">000002</td>  
                          <td style="font-family: Arial">Respirometer</td>  
                          <td style="font-family: Arial">04</td>  
                          <td style="font-family: Arial">LKR 2000</td>        
                                               

                    </tr>
                    <tr> 
                        <td style="font-family: Arial">000008</td>  
                        <td style="font-family: Arial">Fluid Warmer</td>  
                        <td style="font-family: Arial">10</td>   
                        <td style="font-family: Arial">LKR 2000</td>                            

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