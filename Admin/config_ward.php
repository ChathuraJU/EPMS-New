<?php require_once('header.php');?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="page-header-content border-bottom border-bottom-success-300">
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
                <li class="active"> Create / Manage Ward
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- 2 columns form -->
        <form id="wardcreateform" class="form-horizontal" action="#">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h5 class="panel-title"><b>Create New Ward</b></h5>
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ward No. :</label>
                                    <div class="col-lg-9">
                                        <input type="wno" name="wno" placeholder="pending.." class="form-control required" data-mask="WD99" readonly >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ward Name </label>
                                    <div class="col-lg-9">
                                        <input type="text" id="ward" name="ward" class="form-control required" >    
                                    </div> 
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ward Head ID:</label>
                                    <div class="col-lg-9">
                                        <select id="wheadid" name="wheadid" data-placeholder="Choose an ID..." class="select-search required">
                                            <option></option> 
                                        </select> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ward Head Name :</label>
                                    <div class="col-lg-9">
                                        <input type="text" id="emp5" name="emp5" class="form-control" readonly>          
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ward Email :</label>
                                    <div class="col-lg-9">
                                        <input type="text" id="wemail" name="wemail" class="form-control required" placeholder="unitname@gmail.com">  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Ward Telephone :</label>
                                    <div class="col-lg-9">
                                        <input type="text" id="wtel" name="wtel" class="form-control required" data-mask="+99-99-9999-999" >  
                                    </div>
                                </div>
                            </div>
                        </div>

                    </fieldset>

                    <div class="text-right">
                        <a id="save" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></a>
                    </div>
                </div>
            </div>
        </form>
        <!-- /2 columns form -->

        <!-- Highlighting rows and columns -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h5 class="panel-title"> <b> Wards List </b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <table class="table table-bordered table-hover datatable-highlight" id="wardmngtbl" class="table bg-slate-600">
                <thead>
                    <tr>
                        <th>Ward No.</th>
                        <th>Ward Name</th>
                        <th>Ward Head ID</th>
                        <th>Ward Head Name</th>
                        <th>Ward e-Mail</th>
                        <th>Ward Telephone</th>
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

        function mydatatable(){
            
            $('#wardmngtbl').DataTable();
        }

        function getdatatotable(){
            //to table
            $.ajax({
                method: "POST",
                url: "../DBhandle/config_ward_con.php?code=get_data",
                processData: false,
                contentType: false
            })
                .done(function (data) {
                    $('#wardmngtbl').DataTable().destroy();
                    $('#wardmngtbl tbody').empty();
                    $('#wardmngtbl tbody').append(data);
                    mydatatable();
                });

        }

        //table js
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
            
        // pickdate js
        $( document ).ready(function(){
            $('.pickadate-strings').pickadate({
                weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                showMonthsShort: true
            });
        });

        // select2 js
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


        $(document).ready(function () {
            //employee id ajax request
            $.ajax({
                method: "POST",
                url: "../DBhandle/config_ward_con.php?code=get_wheadidselect_data",
                processData: false,
                contentType: false
            })
                .done(function (data) {
                    $("#wheadid").append(data);
                });

            $("#wheadid").change(function () {
           var emp = $(this).val();

            $.ajax({
                method: "POST",
                url: "../DBhandle/config_ward_con.php?code=get_emp_name",
                data: {"emp":emp}
            })
                .done(function (data) {
                    $("#emp5").val(data);
                });

        });

        });





        //save form
        $("#save").click(function(){
            sendData = new FormData($("#wardcreateform")[0]);
                $.ajax({
                    method: "POST",
                    url: "../DBhandle/config_ward_con.php?code=save",
                    data: sendData,
                    processData: false,
                    contentType: false
                }).done(function (msg) {
                    swal({
                            title: "Ward Created Successfully!",
                            text: "Click OK to Continue",
                            confirmButtonColor: "#66BB6A",
                            type: "success"
                        },
                        function(isConfirm){
                            if (isConfirm) {
                                location.reload();
                            }
                        });
                });
        });

        //get data 
        $(document).ready(function () {

            getdatatotable();
        });

    </script>

</div>
<!-- /Main content -->
<?php require_once('footer.php');?>