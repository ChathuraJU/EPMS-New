<?php require_once('header.php');?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> Specification </span></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                   
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home </a></li>
                <li><a href="#"> Specification </a></li>
                <li class="active">TEC List</li>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Control position -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 class="panel-title"><b> Technical Evaluation Committee List</b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <table id="teclist" class="table table-bordered table-hover datatable-highlight" class="table bg-slate-600">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Procurement ID</th>
                        <th>TEC ID</th>
                        <th>Members</th>
                        <th>Action</th>

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

            $('#teclist').DataTable();
        }

        //get data
        $(document).ready(function () {
            mydatatable();

            $.ajax({
                method: "POST",
                url: "../DBhandle/tec_list_con.php?code=get_data",
                processData: false,
                contentType: false
            })
                .done(function (data) {
                    $('#teclist').DataTable().destroy();
                    $('#teclist tbody').empty();
                    $('#teclist tbody').append(data);
                    mydatatable();
                });
        });






        //table
        $( document ).ready(function(){

            // Table setup
            // ------------------------------

            // Setting datatable defaults
            $.extend( $.fn.dataTable.defaults, {
                autoWidth: false,
                order: [[ 2, "desc" ]],
                columnDefs: [{
                    orderable: false,
                    width: '100px',
                    targets: [ 4 ]
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

