<?php require_once('header.php');?>

<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
        <div class="page-header page-header-default">
            <div class="page-header-content">
                <div class="page-title">
                    <h4>
                        <i class="icon-arrow-left52 position-left"></i>
                        <span class="text-semibold">Employee Management</span>
                    </h4>
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
        <!-- Clickable title -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title"><b> Add New Employee </b></h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <form class="stepy-clickable" id="empcrtfrm" action="#">
                <fieldset title="1">
                    <legend class="text-semibold">Personal data </legend>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name With Initials: <span class="text-danger">*</span></label>
                                    <input type="text" name="initials" class="form-control required" placeholder=" C J Udurawana">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Full Name: <span class="text-danger">*</span></label>
                                    <input type="text" name="fname" class="form-control required" placeholder="John Doe">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
									<label class="display-block text-semibold">Gender</label>
									<label class="radio-inline radio-right">
										<input type="radio" value="Male" name="morf" class="styled" checked="checked">
										Male
									</label>

									<label class="radio-inline radio-right">
										<input type="radio" value="Female" name="morf" class="styled" checked="checked" >
										Female
                                    </label> 
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salutation: <span class="text-danger">*</span></label>
                                    <select name="salutation" data-placeholder="Choose a Salutation..." class="select-search required">
                                        <option></option> 
                                        <option>Mr.</option> 
                                        <option>Mrs.</option> 
                                        <option>Miss.</option> 
                                        <option>Ms.</option> 
                                        <option>Dr.</option> 
                                        <option>Rev.</option> 
                                        <option>Other.</option> 
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="content-group-lg">
                                    <label> Date of Birth : </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                                            <input type="text" class="form-control" id="anytime-weekday" name="dob" placeholder="Wednesday, 4th of June, 2014">
                                        </div>
                                    </label>
                                </div>
                            </div>



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> NIC : <span class="text-danger">*</span></label>
                                    <input type="text" name="nic" class="form-control required" placeholder="**********V" data-mask='999999999-V'>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address : <span class="text-danger">*</span></label>
                                    <input type="text" name="address" class="form-control required" placeholder="58/1 Peradeniya rd, Kandy">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email address: <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control required" placeholder="your@email.com">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Home Phone No. :</label>
                                    <input type="text" name="home_tel" class="form-control" placeholder="+94-81-2256-978" data-mask="+99-99-9999-999">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile Phone No. :<span class="text-danger">*</span></label>
                                    <input type="text" name="mob_tel" class="form-control required" placeholder="+94-71-6865-623" data-mask="+99-99-9999-999">
                                </div>
                            </div>

                        </div>
                    
                </fieldset>

                <fieldset title="2">
                    <legend class="text-semibold">Job Data</legend>   

                        <div class="row">
                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="../global_assets/images/jobdata.jpg" height ="300px"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="content-group-lg">
                                        <label>Join Date : <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar3"></i></span>
                                            <input type="text" id="anytime-weekdaya" name="djoin" class="form-control required" placeholder="Try me&hellip;">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label>Work ID:<span class="text-danger">*</span></label>
                                        <input type="text" name="workid" placeholder="national work id" class="form-control required" data-mask="H-999999">
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <label>Job Role: <span class="text-danger">*</span></label>
                                        <input type="text" id="jtitle" name="jtitle" class="form-control required" placeholder="Designation of the Employee">
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <label> Unit : </label>
                                        <select id="unit" name="unit" data-placeholder="Choose a unit..." class="select-search required">
                                            <option></option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Ward : </label>
                                        <select id="ward" name="ward" data-placeholder="Choose a ward..." class="select-search required">
                                            <option></option> 
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                </fieldset>



                <a id="save" class="btn btn-primary stepy-finish">Submit <i class="icon-check position-right"></i></a>

            </form>
        </div> 
        <!-- /clickable title -->
    </div>
    <!-- /content area -->

    <script>

        // wizard and datepicker
        $( document ).ready(function() {

            $.fn.stepy.defaults.legend = false;
            $.fn.stepy.defaults.transition = 'fade';
            $.fn.stepy.defaults.duration = 150;
            $.fn.stepy.defaults.backLabel = '<i class="icon-arrow-left13 position-left"></i> Back';
            $.fn.stepy.defaults.nextLabel = 'Next <i class="icon-arrow-right14 position-right"></i>';


            // Stepy basic
            $(".stepy-clickable").stepy({

                next: function(index) {

                },
                back: function(index) {
                    
                },
                finish: function() {
                    
                    sendData = new FormData($("#empcrtfrm")[0]);
                    $.ajax({
                        method: "POST",
                        url: "../DBhandle/employee_create_con.php?code=save",
                        data: sendData,
                        processData: false,
                        contentType: false
                    }).done(function (msg) {
                        getdatatotable();
                        $("#initials").val("");
                        $("#fname").val("");
                        $("#morf").val("");
                        $("#salutation").val("");
                        $("#dob").val("");
                        $("#nic").val("");
                        $("#address").val("");
                        $("#email").val("");
                        $("#home_tel").val("");
                        $("#mob_tel").val("");
                        $("#djoin").val("");
                        $("#workid").val("");
                        $("#jtitle").val("");
                        $("#unit").val("");
                        $("#ward").val("");
                    });
         
                    preventDefault();
                }
            });


            $('.stepy-clickable').find('.button-next').addClass('btn btn-primary');
            $('.stepy-clickable ').find('.button-back').addClass('btn btn-default');

            $("#anytime-weekday").AnyTime_picker({
                format: "%W, %D of %M, %Z"
            });

            $("#anytime-weekdaya").AnyTime_picker({
                format: "%D %M, %Z"
            });
        });

        // radio button
        $( document ).ready(function() {
            
            // Switchery
            // ------------------------------

            // Initialize multiple switches
            var elems = Array.prototype.slice.call(document.querySelectorAll('.switchery'));
            elems.forEach(function(html) {
                var switchery = new Switchery(html);
            });

            // Colored switches
            var primary = document.querySelector('.switchery-primary');
            var switchery = new Switchery(primary, { color: '#2196F3' });

            var danger = document.querySelector('.switchery-danger');
            var switchery = new Switchery(danger, { color: '#EF5350' });

            var warning = document.querySelector('.switchery-warning');
            var switchery = new Switchery(warning, { color: '#FF7043' });

            var info = document.querySelector('.switchery-info');
            var switchery = new Switchery(info, { color: '#00BCD4'});

                    
            // Default initialization
            $(".styled").uniform();

            // File input
            $(".file-styled").uniform({
                wrapperClass: 'bg-blue',
                fileButtonHtml: '<i class="icon-file-plus"></i>'
            });

            // Bootstrap switch
            // ------------------------------

            $(".switch").bootstrapSwitch();
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

        
        //get data 
        $(document).ready(function () {

            //to select box
                //unit name
                $.ajax({
                    method: "POST",
                    url: "../DBhandle/employee_create_con.php?code=get_unitselect_data",
                    processData: false,
                    contentType: false
                })
                    .done(function (data) {
                    $("#unit").append(data);
                    });
     
                //ward name
                $.ajax({
                    method: "POST",
                    url: "../DBhandle/employee_create_con.php?code=get_wardselect_data",
                    processData: false,
                    contentType: false
                })
                    .done(function (data) {
                    $("#ward").append(data);
                    });

        });


    </script>

</div>
<!-- /main content -->

<?php require_once('footer.php');?>

  