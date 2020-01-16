<?php require_once('header.php');?>

<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Employee Management</span></h4>
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
                <li><a href="#"> Employee Management </a></li>
                <li class="active"> Manage Employee </li>
            </ul>

        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h5 class="panel-title"><b>Manage Employee </b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <table id="empmangtb" class="table datatable-responsive-control-right">
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee Work ID</th>
                        <th>Employee Name</th>
                        <th>Unit</th>
                        <th>Ward</th>
                        <th>Job Title</th>
                        <th>Join Date</th>
                        <th>Actions</th>
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
        // Setting datatable defaults
        $.extend( $.fn.dataTable.defaults, {
            autoWidth: false,
            responsive: true,
            columnDefs: [{ 
                orderable: false,
                width: '100px',
                targets: [ 8 ]
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

        function mydatatable(){
            
            $('#empmangtb').DataTable();
        }


        $(document).ready(function () {
                mydatatable();

            $.ajax({
                method: "POST",
                url: "../DBhandle/employee_create_con.php?code=get_data",
                processData: false,
                contentType: false
            })
                .done(function (data) {
                    $('#empmangtb').DataTable().destroy();
                    $('#empmangtb tbody').empty();
                    $('#empmangtb tbody').append(data);
                    mydatatable();
                });
        });

        
    </script>

</div>
<!-- /main content -->

<?php require_once('footer.php');?>