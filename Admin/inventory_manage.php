<?php require_once('header.php');?>
<!-- Main content -->
<div class="content-wrapper" id="content">

    <!-- Page header -->
    <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> INVENTORY </span></h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <button class="btn btn-default btn-sm" type="button" data-toggle="modal" data-target="#modal_form_vertical">Statistics <i class="icon-bars-alt text-primary"></i></button>
                    <button class="btn btn-default btn-sm" type="button" data-toggle="modal" data-target="#modal_form_vertical">Reports <i class="icon-notebook text-primary"></i></button>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home </a></li>
                <li><a href="req_create.php"> Inventory </a></li>
                <li class="active"> Manage Inventory </li>
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
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 class="panel-title"><b> Manage Inventory </b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <table id="mnginventory"  class="table datatable-responsive-control-right">
                <thead>
                    <tr>
                        <th>Equipment Code </th>
                        <th>Equipment Name</th>
                        <th>Recieved Date</th>
                        <th>Recieved Condition</th>
                        <th>Vendor</th>
                        <th>Action</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody>
                        <!-- <td>Equipment Code </td>
                        <td>Equipment Name</td>
                        <td>Recieved Date</td>
                        <td>Recieved Condition</td>
                        <td>Vendor</td>
                        <td>
                            <ul class="icons-list">
                                <li><button class="btn btn-default btn-sm" type="button" data-toggle="modal" data-target="#modal_form_vertical">View <i class="icon-eye position-right"></i></button>  </li>
                            </ul>
                        </td>
                        <td></td> -->
                </tbody>
            </table>
        </div>
        <!-- /control position -->

        <!-- Vertical form modal -->
        <div id="modal_form_vertical" class="modal fade " tabindex="-1" >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">

                        <fieldset>
                            <legend class="text-semibold">
                                <i class="icon-pencil5 position-left"></i>
                                Equipment Details
                                <a class="control-arrow" data-toggle="collapse" data-target="#demo1">
                                    <i class="icon-circle-down2"></i>
                                </a>
                            </legend>

                            <div class="collapse in" id="demo1">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Warranty Period (In-months):</label>
                                            <input type="text" id="warrenty" name="warrenty" class="form-control" readonly>
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Preventive (In-months):</label>
                                            <input type="text" id="prevent" name="prevent" class="form-control" readonly>
                                        </div>
                                    </div>    
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Vendor :</label>
                                            <input type="text" id="vendor" name="vendor" class="form-control"  readonly>
                                        </div>
                                    </div>  
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Maintenance Service Provider:</label>
                                            <input type="text" id="msp" name="msp" class="form-control" readonly>
                                        </div>
                                    </div>    
                                </div>


                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class="text-semibold">
                                <i class="icon-pencil5 position-left"></i>
                                Equipment Details22
                                <a class="control-arrow" data-toggle="collapse" data-target="#demo2">
                                    <i class="icon-circle-down2"></i>
                                </a>
                            </legend>

                            <div class="collapse in" id="demo2">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Equipment Code :</label>
                                            <input type="text" id="eqpcode" class="form-control"  readonly>
                                        </div>
                                    </div>    

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>  Equipment Name :</label>
                                            <input type="text" id="equipname" class="form-control"  readonly>
                                        </div>
                                    </div>  

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Power Requirement :</label>
                                            <input type="text" id="power" class="form-control"  readonly>
                                        </div>
                                    </div>  
                                </div>  

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Equipment Make:</label>
                                            <input type="text" id="equipmake" class="form-control"  readonly>
                                        </div>
                                    </div>    

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Equipment Model :</label>
                                            <input type="text" id="equipmodel" class="form-control" readonly>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label> Serial No. :</label>
                                            <input type="text" id="serial" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </fieldset>
                    </div>

                </div>
            </div>
        </div >
        <!-- /vertical form modal -->
    </div>
    <!-- /content area -->

    <script>

        function mydatatable(){

            $('#mnginventory').DataTable();
        }

        function getdatatotable(){
            //to table
            $.ajax({
                method: "POST",
                url: "../DBhandle/inventory_con.php?code=get_data",
                processData: false,
                contentType: false
            })
            .done(function (data) {
                $('#mnginventory').DataTable().destroy();
                $('#mnginventory tbody').empty();
                $('#mnginventory tbody').append(data);
                mydatatable();
            });

        }

        //get data 
        $(document).ready(function () {

            getdatatotable();
        });


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