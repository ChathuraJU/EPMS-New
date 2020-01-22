<?php require_once('header.php');?>
    <!-- Main content -->
    <div class="content-wrapper" id="content">

        <!-- Page header -->
        <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="page-header-content border-bottom border-bottom-success-300">
                <div class="page-title">
                    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> REQUISITION </span></h4>
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
                    <li><a href="req_create.php"> Requisition </a></li>
                    <li class="active"> Proceed to Procure </li>
                </ul>

            </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content">
            <!-- Control position -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h5 class="panel-title"><b> Proceed to Procure </b></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <table id="pendingtec" class="table datatable-responsive-control-right">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Procurement Type</th>
                        <th>Equipment Name  </th>
                        <th>Count  </th>
                        <th>Status</th>


                    </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
            </div>
            <!-- /control position -->

        </div>
        <!-- /content area -->

        <script>

            function mydatatable(){

                $('#pendingtec').DataTable();
            }

            //get data
            $(document).ready(function () {
                // mydatatable();

                $.ajax({
                    method: "POST",
                    url: "../DBhandle/proceedto_procure_con.php?code=get_data",
                    processData: false,
                    contentType: false
                })
                    .done(function (data) {
                        $('#pendingtec').DataTable().destroy();
                        $('#pendingtec tbody').empty();
                        $('#pendingtec tbody').append(data);
                        mydatatable();
                    });
            });

            $( document ).ready(function(){

                // Table setup
                // ------------------------------

                // Setting datatable defaults
                $.extend( $.fn.dataTable.defaults, {
                    autoWidth: false,
                    responsive: true,
                    columnDefs: [{
                        orderable: false,
                        width: '100px',
                        targets: [ 4 ]
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


            });

            // select2
            $( document ).ready(function(){

                // Default initialization
                $('.select').select2({
                    minimumResultsForSearch: Infinity
                });


                // Select with search
                $('.select-search').select2();


                // Fixed width. Single select
                $('.select-fixed-single').select2({
                    minimumResultsForSearch: Infinity,
                    width: 250
                });
            });
        </script>

    </div>
    <!-- /main content -->

<?php require_once('footer.php');?>