<?php require_once('incl/header.php');?>
<!-- Main content -->
<div class="content-wrapper" id="content">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> User Control </span> </h4>
            </div>

        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="user_create.php"> User Control </a></li>
                <li class="active"> Manage User </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

        <!-- Highlighting rows and columns -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h5 class="panel-title"> <b> Users List </b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>
            <table  class="table table-bordered table-hover datatable-highlight" >
                <thead>
                    <tr>
                        <th> # </th>
                        <th>User No.</th>
                        <th>User Name</th>
                        <th>Privileges</th>
                        <th>Additional Information</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 01 </td>
                        <td>UT01</td>
                        <td>Super Admin</td>
                        <td>Traffic Court Referee</td>
                        <td>.......................................</td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-eye"></i> View</a></li>
                                        <li><a href="#"><i class="icon-spinner11"></i> Update</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td> 02 </td>
                        <td>UT02</td>
                        <td> Admin</td>
                        <td>privileges in tag form ////ask someone////</td>
                        <td>.......................................</td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-eye"></i> View </a></li>
                                        <li><a href="#"><i class="icon-spinner11"></i> Update</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>

                </tbody>


            </table>
        </div>
        <!-- /highlighting rows and columns -->

                
    </div>
    <!-- /content area -->

    <script>

        
        $( document ).ready(function(){

            // Table setup
            // ------------------------------

            // Setting datatable defaults
            $.extend( $.fn.dataTable.defaults, {
                autoWidth: false,
                columnDefs: [{ 
                    orderable: false,
                    width: '100px',
                    targets: [ 5 ]
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
<!-- /main content -->


<?php require_once('incl/footer.php');?>
