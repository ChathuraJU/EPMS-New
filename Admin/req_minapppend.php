<?php require_once('header.php');?>
    <!-- Main content -->
    <div class="content-wrapper" id="content">

        <!-- Page header -->
        <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="page-header-content border-bottom border-bottom-success-300">
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
                    <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home </a></li>
                    <li><a href="#"> Requisition </a></li>
                    <li class="active"> Pending Ministry Approvals </li>
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
            <!-- Restore column visibility -->
            <div class="panel panel-flat">
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
                    Select the needed columns from the dropdown and click on the print button to get them printed 
                </div>

                <table class="table datatable-colvis-restore">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Equipment Name</th>
                            <th>Count </th>
                            <th>Primal Approval Date Range </th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>00001</td>
                            <td>Incubator</td>
                            <td>10</td>
                            <td>11.01.2018-29.12.2018</td>
                            <td>Not Sent</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>00001</td>
                            <td>Incubator</td>
                            <td>10</td>
                            <td>11.01.2018-29.12.2018</td>
                            <td>Not Sent</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>00001</td>
                            <td>Incubator</td>
                            <td>10</td>
                            <td>11.01.2018-29.12.2018</td>
                            <td>Not Sent</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>00001</td>
                            <td>Incubator</td>
                            <td>10</td>
                            <td>11.01.2018-29.12.2018</td>
                            <td>Not Sent</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>00001</td>
                            <td>Incubator</td>
                            <td>10</td>
                            <td>11.01.2018-29.12.2018</td>
                            <td>Not Sent</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>00001</td>
                            <td>Incubator</td>
                            <td>10</td>
                            <td>11.01.2018-29.12.2018</td>
                            <td>Not Sent</td>
                            <td></td>
                        </tr>
                        
                    </tbody>
                </table>

                <div class="text-right">
                    <button type="button" class="btn btn-primary" onclick="window.location.href='../reports/minapletter.php'"> Print Letter <i class="icon-fax position-right"></i></button>
                </div>

            </div>
            <!-- /restore column visibility -->

            
      primal approval date range picker needed

        </div>
        <!-- /content area -->

        <script>
            document.addEventListener('DOMContentLoaded', function() {

                // Table setup
                // ------------------------------

                // Setting datatable defaults
                $.extend( $.fn.dataTable.defaults, {
                    autoWidth: false,
                    dom: '<"datatable-header"fBl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
                    language: {
                        search: '<span>Filter:</span> _INPUT_',
                        searchPlaceholder: 'Type to filter...',
                        lengthMenu: '<span>Show:</span> _MENU_',
                        paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
                    }
                });

                // Restore column visibility
                $('.datatable-colvis-restore').DataTable({
                    buttons: [
                        {
                            extend: 'colvis',
                            text: '<i class="icon-grid7"></i> <span class="caret"></span>',
                            className: 'btn bg-teal-400 btn-icon',
                            postfixButtons: [ 'colvisRestore' ]
                        }
                    ],
                    columnDefs: [
                        {
                            targets: -1,
                            visible: false
                        }
                    ]
                });

                // External table additions
                // ------------------------------
                
                // Launch Uniform styling for checkboxes
                $('.ColVis_Button').addClass('btn btn-primary btn-icon').on('click mouseover', function() {
                    $('.ColVis_collection input').uniform();
                });

                // Enable Select2 select for the length option
                $('.dataTables_length select').select2({
                    minimumResultsForSearch: Infinity,
                    width: 'auto'
                });
                
            });

        </script>

    </div>
    <!-- /main content -->

<?php require_once('footer.php');?>