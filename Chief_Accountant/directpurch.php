<?php require_once('headerchef.php');?>
    <!-- Main content -->
    <div class="content-wrapper" id="content">

        <!-- Page header -->
        <div class="page-header page-header-default">
            <div class="page-header-content">
                <div class="page-title">
                    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> Requisition </span></h4>
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
                    <li><a href="dashboardchef.php"><i class="icon-home2 position-left"></i> Home </a></li>
                    <li><a href="#"> Requisition  </a></li>
                    <li class="active"> Direct Purchases </li>
                </ul>

                <ul class="breadcrumb-elements">
                    <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-gear position-left"></i>
                            Settings
                            <span class="caret"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content">
            <!-- Control position -->
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title"><b>Direct Purchases</b></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>


                <table class="table datatable-responsive-control-right">
                    <thead>
                        <tr>
                            <th>Primal Approved Equipment ID </th>
                            <th>Requisition ID</th>
                            <th>Requisition Equipment No.</th>
                            <th>Primal Approval Date</th>
                            <th>Proceed To Procure </th>
                            <th></th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PAPP-REQ-000001-01</td>
                            <td><a href="reqequip.php"> REQ-000001 </a></td>
                            <td><a href="reqapproval.php"> REQ-000001-01  </a></td>
                            <td>XXXXXX</td>
                            <td> 07 Dec 2017</td>
                            <!-- <td><a href="tec_createform.php"> Proceed </a></td> -->
                            <td></td>
                           
                        </tr>

                        <tr>
                            <td>PAPP-REQ-000001-02</td>
                            <td><a href="reqequip.php"> REQ-000001  </a></td>
                            <td><a href="reqapproval.php"> REQ-000001-02  </a></td>
                            <td>XXXXXX</td>
                            <td> 07 Dec 2017</td>
                            <!-- <td><a href="tec_createform.php"> Proceed </a></td> -->
                            <td></td>
                            
                        </tr>

                        <tr>
                            <td>PAPP-REQ-000002-01</td>
                            <td><a href="reqequip.php"> REQ-000002 </a></td>
                            <td><a href="reqapproval.php"> REQ-000002-01  </a></td>
                            <td>XXXXXX</td>
                            <td> 07 Dec 2017</td>
                            <!-- <td><a href="tec_createform.php"> Proceed </a></td> -->
                            <td></td>
                            
                        </tr>


                    </tbody>
                </table>
            </div>
            <!-- /control position -->
        </div>
        <!-- /content area -->

        <script>
                    
            // Table setup
            // ------------------------------

            // Setting datatable defaults
            $.extend( $.fn.dataTable.defaults, {
                autoWidth: false,
                responsive: true,
                columnDefs: [{ 
                    orderable: false,
                    width: '100px',
                    targets: [ 5 ]
                }],
                dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
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


            
            // Control position
            $('.datatable-responsive-control-right').DataTable({
                responsive: {
                    details: {
                        type: 'column',
                        target: -1
                    }
                },
                columnDefs: [
                    {
                        className: 'control',
                        orderable: false,
                        targets: -1
                    },
                    { 
                        width: "100px",
                        targets: [5]
                    },
                    { 
                        orderable: false,
                        targets: [5]
                    }
                ]
            });
        </script>

    </div>
    <!-- /main content -->

<?php require_once('footer.php');?>




