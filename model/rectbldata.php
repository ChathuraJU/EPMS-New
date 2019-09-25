<?php

    // Unescape the string values in the JSON array
    $tableData = stripcslashes($_POST['pTableData']);

    // Decode the JSON array
    $tableData = json_decode($tableData,TRUE);

    // now $tableData can be accessed like a PHP array
    echo $tableData[1]['equipment'];
        
?>