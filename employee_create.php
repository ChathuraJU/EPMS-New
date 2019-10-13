<?php require_once('incl/header.php');?>

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

            <form class="stepy-clickable" action="#">
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
                                    <input type="text" name="name" class="form-control required" placeholder="John Doe">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
									<label class="display-block text-semibold">Gender</label>
									<label class="radio-inline radio-right">
										<input type="radio" name="radio-inline-right" class="styled" checked="checked">
										Male
									</label>

									<label class="radio-inline radio-right">
										<input type="radio" name="radio-inline-right" class="styled" checked="checked" >
										Female
                                    </label> 
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Salutation: <span class="text-danger">*</span></label>
                                    <select name="salutation" data-placeholder="Choose a Salutation..." class="select-search required">
                                        <option></option> 
                                        <option value="1">Mr.</option> 
                                        <option value="2">Mrs.</option> 
                                        <option value="3">Miss.</option> 
                                        <option value="4">Ms.</option> 
                                        <option value="5">Dr.</option> 
                                        <option value="6">Rev.</option> 
                                        <option value="7">Other.</option> 
                                    </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Date of Birth : </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                        <input type="text" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> NIC : <span class="text-danger">*</span></label>
                                    <input type="text" name="nic" class="form-control required" placeholder="***********V">
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
                                    <input type="text" name="home_tel" class="form-control" placeholder="+91-81-2256-978" data-mask="+99-99-9999-9999">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile Phone No. :<span class="text-danger">*</span></label>
                                    <input type="text" name="tel" class="form-control required" placeholder="+94-71-6865-623" data-mask="+99-99-9999-999">
                                </div>
                            </div>

                        </div>
                    
                </fieldset>

                <fieldset title="2">
                    <legend class="text-semibold">Job Data</legend>   

                        <div class="row">
                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="global_assets/images/jobdata.jpg" height ="300px"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="content-group-lg">
                                            <label>Join Date : <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                                <input type="text" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label>Work ID:<span class="text-danger">*</span></label>
                                        <input type="text" name="workid" placeholder="national work id" class="form-control required">
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <label> Job Title : <span class="text-danger">*</span></label>
                                        <select name="jobtitle" data-placeholder="Choose a job title..." class="select-search required">
                                            <option></option> 
                                            <option value="1"> Doctor </option> 
                                            <option value="2"> Consultant </option> 
                                            <option value="3"> Laboratorist </option> 
                                            <option value="4"> Nurse </option> 
                                            <option value="5"> Surgeon </option> 
                                            <option value="7"> Cardiologist</option> 
                                            <option value="7"> ..........</option> 
                                            <option value="7"> Psycologist</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Unit : <span class="text-danger">*</span></label>
                                        <select id="unit" name="unit" data-placeholder="Choose a unit..." class="select-search required">
                                            <option></option> 
                                            <option value="1">Respiratory Unit</option> 
                                            <option value="2">ENT Clinic</option> 
                                            <option value="3">Cath Lab.</option> 
                                            <option value="4">KT OT</option> 
                                            <option value="5">Skin Clinic</option> 
                                            <option value="6">Radiology Unit</option> 
                                            <option value="7">Cardiology Unit</option> 
                                            <option value="7">............</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label> Ward : <span class="text-danger">*</span></label>
                                        <select id="ward" name="ward" data-placeholder="Choose a ward..." class="select-search required">
                                            <option></option> 
                                            <option value="1"> None </option> 
                                            <option value="2"> WD 01 </option> 
                                            <option value="3"> WD 02 </option> 
                                            <option value="4"> WD 03 </option> 
                                            <option value="5">........</option> 
                                            <option value="7">........</option> 
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                </fieldset>

                <fieldset title="3">
                    <legend class="text-semibold">Additional Data</legend>

                        <div class="col-md-6" style="height: 100%;">
                            <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                <img src="global_assets/images/done.jpg" height ="300px"  />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group">
                                    <label>Employee ID :</label>
                                    <input type="text" id="empid" name="empid" placeholder="Pending.." class="form-control" readonly>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="form-group">
                                    <label> Profile Picture :</label>
                                    <input type="file" class="file-input-ajax" multiple="multiple">                                </div>
                            </div>

                        </div>

                </fieldset>

                <button type="submit" class="btn btn-primary stepy-finish">Submit <i class="icon-check position-right"></i></button>

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
                    
                    return false;
                }
            });


            $('.stepy-clickable').find('.button-next').addClass('btn btn-primary');
            $('.stepy-clickable ').find('.button-back').addClass('btn btn-default');

            $('.pickadate-strings').pickadate({
                weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                showMonthsShort: true
            });
        });

        // image upload
        $( document ).ready(function() {

            //
            // Define variables
            //

            // Modal template
            var modalTemplate = '<div class="modal-dialog modal-lg" role="document">\n' +
                '  <div class="modal-content">\n' +
                '    <div class="modal-header">\n' +
                '      <div class="kv-zoom-actions btn-group">{toggleheader}{fullscreen}{borderless}{close}</div>\n' +
                '      <h6 class="modal-title">{heading} <small><span class="kv-zoom-title"></span></small></h6>\n' +
                '    </div>\n' +
                '    <div class="modal-body">\n' +
                '      <div class="floating-buttons btn-group"></div>\n' +
                '      <div class="kv-zoom-body file-zoom-content"></div>\n' + '{prev} {next}\n' +
                '    </div>\n' +
                '  </div>\n' +
                '</div>\n';

            // Buttons inside zoom modal
            var previewZoomButtonClasses = {
                toggleheader: 'btn btn-default btn-icon btn-xs btn-header-toggle',
                fullscreen: 'btn btn-default btn-icon btn-xs',
                borderless: 'btn btn-default btn-icon btn-xs',
                close: 'btn btn-default btn-icon btn-xs'
            };

            // Icons inside zoom modal classes
            var previewZoomButtonIcons = {
                prev: '<i class="icon-arrow-left32"></i>',
                next: '<i class="icon-arrow-right32"></i>',
                toggleheader: '<i class="icon-menu-open"></i>',
                fullscreen: '<i class="icon-screen-full"></i>',
                borderless: '<i class="icon-alignment-unalign"></i>',
                close: '<i class="icon-cross3"></i>'
            };

            // File actions
            var fileActionSettings = {
                zoomClass: 'btn btn-link btn-xs btn-icon',
                zoomIcon: '<i class="icon-zoomin3"></i>',
                dragClass: 'btn btn-link btn-xs btn-icon',
                dragIcon: '<i class="icon-three-bars"></i>',
                removeClass: 'btn btn-link btn-icon btn-xs',
                removeIcon: '<i class="icon-trash"></i>',
                indicatorNew: '<i class="icon-file-plus text-slate"></i>',
                indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
                indicatorError: '<i class="icon-cross2 text-danger"></i>',
                indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>'
            };

            $(".file-input-ajax").fileinput({
                uploadUrl: "http://localhost", // server upload action
                uploadAsync: true,
                maxFileCount: 5,
                initialPreview: [],
                fileActionSettings: {
                    removeIcon: '<i class="icon-bin"></i>',
                    removeClass: 'btn btn-link btn-xs btn-icon',
                    uploadIcon: '<i class="icon-upload"></i>',
                    uploadClass: 'btn btn-link btn-xs btn-icon',
                    zoomIcon: '<i class="icon-zoomin3"></i>',
                    zoomClass: 'btn btn-link btn-xs btn-icon',
                    indicatorNew: '<i class="icon-file-plus text-slate"></i>',
                    indicatorSuccess: '<i class="icon-checkmark3 file-icon-large text-success"></i>',
                    indicatorError: '<i class="icon-cross2 text-danger"></i>',
                    indicatorLoading: '<i class="icon-spinner2 spinner text-muted"></i>',
                },
                layoutTemplates: {
                    icon: '<i class="icon-file-check"></i>',
                    modal: modalTemplate
                },
                initialCaption: "No file selected",
                previewZoomButtonClasses: previewZoomButtonClasses,
                previewZoomButtonIcons: previewZoomButtonIcons
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



       

    </script>

</div>
<!-- /main content -->

<?php require_once('incl/footer.php');?>

  