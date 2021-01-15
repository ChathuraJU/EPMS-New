<?php require_once('header.php');

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


    $sql =  "SELECT * FROM `epms_payment` WHERE `Payment_status` = 'paid'";


    $result = mysqli_query($conn, $sql);

    

?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> PAYMENTS </span></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                    <a href="#" class="btn btn-link btn-float has-text"><i class="icon-notebook text-primary"></i> <span>Reports</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home </a></li>
                <li><a href="#"> Payments </a></li>
                <li class="active">Pending Payments</li>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 class="panel-title"><b> Payment History</b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <table id="payhistory" class="table table-bordered table-hover datatable-highlight" class="table bg-slate-600">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Procurement ID</th>
                        <th>Cheque No.</th>
                        <th>Date of Payment</th>
                        <th>Paid Amount</th>
                        <th>Invoice</th>
                        <th>Cheque</th>

                    </tr>
                </thead>
                <tbody>
                   <?php 
                   
                   if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                        <td>" . $row["Payment_sn"] . "</td>
                                        <td>" . $row["Procurement_id"] . "</td>
                                        <td>" . $row["Cheque_no"] . "</td>
                                        <td>" . $row["Date_of_payment"] . "</td>
                                        <td>" . $row["Amount"] . "</td>
                                        <td><a href='../Invoice/".$row["Payment_sn"].".jpg'>Invoice</a></td>
                                        <td><a href='../Cheque/".$row["Payment_sn"].".jpg'>Cheque</a></td>
                                        
                                        </tr>";
                    }
                } else {
                    echo "0 results";
                }
                   ?>

                </tbody>
            </table>

        </div>
        <!-- /control position -->
    </div>
    <!-- /content area -->

    <script>
    //table
    $( document ).ready(function(){

        // Table setup
        // ------------------------------

        // Setting datatable defaults
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            columnDefs: [{ 
                orderable: false,
                width: '100px',
                targets: [ 3 ]
            }],
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            language: {
                search: '<span>Filter:</span> _INPUT_',
                searchPlaceholder: 'Type to filter...',
                lengthMenu: '<span>Show:</span> _MENU_',
                paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            },
            drawCallback: function () {
                $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
            },
            preDrawCallback: function() {
                $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
            }
        });

        // Highlighting rows and columns on mouseover
        var lastIdx = null;
        var table = $('.datatable-highlight').DataTable();

        $('.datatable-highlight tbody').on('mouseover', 'td', function() {
            var colIdx = table.cell(this).index().column;

            if (colIdx !== lastIdx) {
                $(table.cells().nodes()).removeClass('active');
                $(table.column(colIdx).nodes()).addClass('active');
            }
        }).on('mouseleave', function() {
            $(table.cells().nodes()).removeClass('active');
        });


    });


    </script>



</div>
<!-- /Main content -->
<?php require_once('footer.php');?>

