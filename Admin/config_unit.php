<?php require_once('header.php');?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> Configuration </span></h4>
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
                <li><a href="#"> Configuration </a></li>
                <li class="active"> Create / Manage Unit </li>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- 2 columns form -->
        <form id="unitcreateform" class="form-horizontal" action="#">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title"><b>Create New Unit</b></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <div class="panel-body">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Unit No. :</label>
                                    <div class="col-lg-9">
                                        <input type="uno" name="uno" class="form-control required" readonly >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Unit Name </label>
                                    <div class="col-lg-9">
                                        <input type="text" id="uname" name="uname" class="form-control required" placeholder="Respiratory Unit">    
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label"> Location :</label>
                                    <div class="col-lg-9">
                                        <input type="text" id="loc" name="loc" class="form-control required" placeholder="ex : Block A"> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Unit Head ID:</label>
                                    <div class="col-lg-9">
                                        <select id="uheadid" name="uheadid" data-placeholder="Choose an ID..." class="select-search required">
                                            <option></option> 
                                        </select> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Unit Head Name :</label>
                                    <div class="col-lg-9">
                                        <select id="uheadname" name="uheadname" data-placeholder="Choose an ID..." class="select-search required">
                                            <option></option> 
                                        </select>              
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Unit Email :</label>
                                    <div class="col-lg-9">
                                        <input type="text" id="uemail" name="uemail" class="form-control required" placeholder="unitname@gmail.com">  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Unit Telephone :</label>
                                    <div class="col-lg-9">
                                        <input type="text" id="utel" name="utel" class="form-control required" data-mask="+99-99-9999-999" >  
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>

                    <div class="text-right">
                        <a id="save" class="btn btn-primary">Submit  <i class="icon-arrow-right14 position-right"></i></a>
                    </div>
                </div>
            </div>
        </form>
        <!-- /2 columns form -->

        <!-- Highlighting rows and columns -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h5 class="panel-title"> <b> Unit List </b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <table id="unitmngtbl" class="table table-bordered table-hover datatable-highlight" class="table bg-slate-600">
                <thead>
                    <tr>
                        <th>Unit No.</th>
                        <th>Unit Name</th>
                        <th>Location</th>
                        <th>Unit Head ID </th>
                        <th>Unit Head Name</th>
                        <th>Unit e-Mail</th>
                        <th>Unit Telephone</th>
                        <th class="text-center">Actions</th>  
                    </tr>
                </thead>
                <tbody>


                </tbody>
            </table>
        </div>
        <!-- /highlighting rows and columns -->

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

        //save form
        $("#save").click(function(){
        sendData = new FormData($("#unitcreateform")[0]);
    
                $.ajax({
                    method: "POST",
                    url: "../DBhandle/config_unit_con.php?code=save",
                    data: sendData,
                    processData: false,
                    contentType: false
                }).done(function (msg) {
                    alert(msg);
                });

                // preventDefault();
            });

        function mydatatable(){

            $('#unitmngtbl').DataTable();
        }

        //get data 
        $(document).ready(function () {

            //to select box
                //unit head id
                $.ajax({
                    method: "POST",
                    url: "../DBhandle/config_unit_con.php?code=get_uheadidselect_data",
                    processData: false,
                    contentType: false
                })
                    .done(function (data) {
                        $("#uheadid").append(data);
                    });


                //unit head name
                $.ajax({
                    method: "POST",
                    url: "../DBhandle/config_unit_con.php?code=get_uheadnameselect_data",
                    processData: false,
                    contentType: false
                })
                    .done(function (data) {
                        $("#uheadname").append(data);
                    });


                //to table
                $.ajax({
                    method: "POST",
                    url: "../DBhandle/config_unit_con.php?code=get_data",
                    processData: false,
                    contentType: false
                })
                    .done(function (data) {
                        $('#unitmngtbl').DataTable().destroy();
                        $('#unitmngtbl tbody').append(data);
                        mydatatable();
                    });
                });
    </script>

</div>
<!-- /Main content -->
<?php require_once('footer.php');?>

