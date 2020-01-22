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
                    <li><a href="#"> Requisition </a></li>
                    <li class="active"> Pending Ministry Approvals </li>
                </ul>

            </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content">
            <!-- Control position -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h5 class="panel-title"><b>Pending Ministry Approvals</b></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">

                </div>

                <table id="minapppend" class="table datatable-responsive-control-right">
                    <thead>
                        <tr>
                            <th>Equipment Name</th>
                            <th>Count </th>
                            <th>Status</th>

                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

                <div class="text-right">
                    <button type="button" id="minletter" class="btn btn-primary"> Print Letter <i class="icon-fax position-right"></i></button>
                </div>

            </div>
            <!-- Control position -->

        </div>
        <!-- /content area -->

        <script>

            function mydatatable(){

                $('#minapppend').DataTable();
            }

            function getdata(){
                $.ajax({
                    method: "POST",
                    url: "../DBhandle/req_minappend_con.php?code=get_data",
                    processData: false,
                    contentType: false
                })
                    .done(function (data) {
                        $('#minapppend').DataTable().destroy();
                        $('#minapppend tbody').empty();
                        $('#minapppend tbody').append(data);
                        mydatatable();
                    });

            }

            //get data
            $(document).ready(function () {
                // mydatatable();
                    getdata();

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
                        targets: [ 2 ]
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

            function ajaxsent(){

                $.ajax({
                    method: "POST",
                    url: "../DBhandle/req_minappend_con.php?code=sent",
                    processData: false,
                    contentType: false
                }).done(function (msg) {
                    getdata();


                });

            }


            $("#minletter").click(function () {

                window.open('../reports/minapletter.php', '_blank');




                setTimeout(ajaxsent, 10000);


            });

        </script>

    </div>
    <!-- /main content -->

<?php require_once('footer.php');?>