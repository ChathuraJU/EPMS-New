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
                       
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line">
                <ul class="breadcrumb">
                    <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home </a></li>
                    <li><a href="#"> Requisition </a></li>
                    <li class="active"> Requisitions List </li>
                </ul>

           
            </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content">
            <!-- Control position -->
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h5 class="panel-title"><b> New Requisitions </b></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <table id="reqlist" class="table datatable-button-html5-basic" >
                    <thead>
                        <tr>
                            <th>Requisition ID</th>
                            <th>Requisition Date</th>
                            <th>Unit</th>
                            <th>Ward</th>
                            <th>Status</th>
                            <th></th>
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

                $.extend($.fn.dataTable.defaults, {
                    autoWidth: false,
                    dom: '<"datatable-header"fB><"datatable-scroll-wrap"t><"datatable-footer"lip>',
                    language: {
                        search: '<span>Find:</span> _INPUT_',
                        searchPlaceholder: 'Type the keyword...',
                        lengthMenu: '<span>Show:</span> _MENU_',
                        paginate: {
                            'first': 'First',
                            'last': 'Last',
                            'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;',
                            'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;'
                        }
                    }
                });

                $('.datatable-button-html5-basic').DataTable({
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
                            targets: [4]
                        },
                        {
                            orderable: false,
                            targets: [4]
                        }
                    ],
                    buttons: {
                        dom: {
                            button: {
                                className: 'btn bg-blue-400'
                            }
                        },
                        buttons: [
                            {
                                extend: 'pdfHtml5',
                                text: 'Export to PDF <i class="icon-file-pdf position-right"></i>',
                                exportOptions: {
                                    columns: ':visible:not(.not-export-col)'
                                },
                                title: "REQUEST LIST REPORT"
                            }
                        ]
                    },
                });
            }

            //get data
            $(document).ready(function () {
                    mydatatable();

                $.ajax({
                    method: "POST",
                    url: "../DBhandle/req_list_con.php?code=get_data3",
                    processData: false,
                    contentType: false
                })
                    .done(function (data) {
                        $('#reqlist').DataTable().destroy();
                        $('#reqlist tbody').empty();
                        $('#reqlist tbody').append(data);
                        mydatatable();
                    });
            });



            
            // Table setup
            // ------------------------------

            // Setting datatable defaults
            // $.extend( $.fn.dataTable.defaults, {
            //     autoWidth: false,
            //     responsive: true,
            //     columnDefs: [{
            //         orderable: false,
            //         width: '100px',
            //         targets: [ 4 ]
            //     }],
            //     dom: '<"datatable-header"fl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
            //     language: {
            //         search: '<span>Filter:</span> _INPUT_',
            //         searchPlaceholder: 'Type to filter...',
            //         lengthMenu: '<span>Show:</span> _MENU_',
            //         paginate: { 'first': 'First', 'last': 'Last', 'next': $('html').attr('dir') == 'rtl' ? '&larr;' : '&rarr;', 'previous': $('html').attr('dir') == 'rtl' ? '&rarr;' : '&larr;' }
            //     },
            //     drawCallback: function () {
            //         $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').addClass('dropup');
            //     },
            //     preDrawCallback: function() {
            //         $(this).find('tbody tr').slice(-3).find('.dropdown, .btn-group').removeClass('dropup');
            //     }
            // });





            $( document ).ready(function(){
                
                // Styled file input
                $('.file-styled').uniform({
                    fileButtonClass: 'action btn bg-primary-400'
                });

            });


        </script>

    </div>
    <!-- /main content -->

<?php require_once('footer.php');?>