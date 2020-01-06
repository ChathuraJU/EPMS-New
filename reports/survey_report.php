<?php

$emplid = $_POST["empidf"];
$Unit = $_POST["unitf"];
$Ward = $_POST["wardf"]; 
$Year = $_POST["yearf"];
$Subdate = $_POST["subdatef"]; 

// Unescape the string values in the JSON array
$tableData = stripcslashes($_POST['pTableData']);

// Decode the JSON array
$tableData = json_decode($tableData,TRUE);
$Ward = $_POST["wardf"];

// now $tableData can be accessed like a PHP array

require_once('../tcpdf/tcpdf.php');
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$obj_pdf->SetTitle("Generate HTML Table Data To PDF From MySQL Database Using TCPDF In PHP");
$obj_pdf->SetHeaderData('watt.png', '20', PDF_HEADER_TITLE, PDF_HEADER_STRING);
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


    <h2><u><b> Survey Details - 2020 </b></u></h2>

    <h4>Following depicts the Medical and Laboratory Equipments Currently being used in the unit : '.$tableData[1]["Model"].' / ward : '.$Ward.' </h4>

    <div style="width: 08px"></div>
    <table border="1" cellspacing="0" cellpadding="3" style="margin-top: 20px;">
        <tr>

            <th width="20%"><b>Employee ID</b></th>
            <th width="20%"><b>Unit</b></th>
            <th width="20%"><b>Ward</b> </th>
            <th width="20%"><b>Year</b></th>
            <th width="20%"><b>Submission Date</b> </th>
                
           </tr>
      ';

      $content .= //fetch_data();
'           <tr> 

                <td style="font-family: Arial">'.$emplid.'</td>  
                <td style="font-family: Arial">'.$Unit.'</td>    
                <td style="font-family: Arial">'.$Ward.'</td>  
                <td style="font-family: Arial">'.$Year.'</td>  
                <td style="font-family: Arial">'.$Subdate.'</td>                           


            </tr>
            

    </table>
    ;';


$content = '<table  border="1">
    <tr>
        <th>Equipment Code</th>
        <th>Equipment Name</th>
        <th>Make</th>
        <th>Model</th>
        <th>Serial No. </th>
        <th>Present Status</th>
        <th>Date of Installation</th>
        <th>Remarks</th>
    </tr>
';

      foreach ($tableData as $key => $value) {
        $eqpcode =  $value["Equipment Code"];
        $empname = $value["Equipment Name"];
        $Make = $value["Make"];
        $Model = $value["Model"]; 
        $Serial_no = $value["Serial No"];
        $PresentStat = $value["Present Status"]; 
        $doi = $value["Date of Installation"];
        $Remarks =$value["Remarks"];

        $content .='<tr>
        <td>'. $eqpcode.'</td>
        <td>'. $empname.'</td>
        <td>'. $Make.'</td>
        <td>'. $Model.'</td>
        <td>'. $Serial_no.'</td>
        <td>'. $PresentStat.'</td>
        <td>'. $doi.'</td>
        <td>'. $Remarks.'</td>

      
        </tr>';

    

    }

    $content .='</table>';
      
  

    $obj_pdf->writeHTML($content);
    $obj_pdf->Output('file.pdf', 'I');
    ?>