<?php require_once('header.php');?>

<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h4>
                    <i class="icon-arrow-left52 position-left"></i>
                    <span class="text-semibold">Inventory</span>
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
                <li><a href="#"> Inventory </a></li>
                <li class="active"> Update Inventory </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Clickable title -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h6 class="panel-title"><b> Update the Inventory </b></h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <form class="stepy-clickable" id="invntryfrm" action="#">
                <fieldset title="1">
                    <legend class="text-semibold">Equipment Specs</legend>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Equipment Code</label>
                                    <input type="text" id="eqpcode" name="eqpcode" placeholder="Pending.." class="form-control" readonly/>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Equipment Name: <span class="text-danger">*</span></label>
                                        <select id="eqpname" name="eqpname" data-placeholder="Choose the Equipment..." class="select-search required">
                                            <option></option> 
                                        </select>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Equipment Make: <span class="text-danger">*</span></label>
                                    <input type="text" name="eqpmake" class="form-control required" placeholder="Select a Make">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Equipment Model No.: <span class="text-danger">*</span></label>
                                    <input type="text" name="eqpmodel" class="form-control required" placeholder="Select a Model">
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
									<label>Power Requirement</label>
                                    <div class="input-group">
                                        <input type="text" name="power" placeholder="Enter the Amount"
                                                class="mspborder form-control  required">
                                        <span class="input-group-addon">Watt (W)</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                <label>Serial No.: <span class="text-danger">*</span></label>
                                    <input type="text" name="serial" class="form-control required" placeholder="Type the serial no">
                                </div>
                            </div>

                        </div>

                    
                </fieldset>

                <fieldset title="2">
                    <legend class="text-semibold">Procument Details</legend>   

                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="../global_assets/images/invntry.jpg" height ="300px"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Procurement Id: <span class="text-danger">*</span></label>
                                            <select id="proid" name="proid" data-placeholder="Choose the Procurement ID..." class="select-search required">
                                                <option></option> 
                                            </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label>Price:</label>
                                        <div class="input-group">
                                            <input type="text" name="price" id="price" placeholder="Enter the Price" class="form-control  required" data-mask="999,999,999.99">
                                            <span class="input-group-addon">LKR</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label>vendor:</label>
                                        <input type="text" name="vendor" class="form-control required" placeholder="Type Vendor name">
                                    </div>
                                </div> 

                                <div class="row">
                                        <div class="form-group">
                                            <label>Recieved Via:</label>
                                            <select class="select required" name="recvia"
                                                    data-placeholder="Select Option">
                                                <option></option>
                                                <option value="Donation">Donation</option>
                                                <option value="Procure">Procure</option>
                                            </select>
                                        </div>
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <label> Recieved Date <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                            <input type="text" id="recdate" name="recdate" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                	 <div class="form-group">
                                        <label>Recieved Condition:</label>
                                        <select class="select-search required" name="reccondition"
                                                data-placeholder="Select Condition">
                                            <option></option>
                                            <option value="Brand New">Brand New</option>
                                            <option value="Used">Used</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        
                </fieldset>

                <fieldset title="3">
                    <legend class="text-semibold">Service Details</legend>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Warranty Period (In Months):</label>
                                    <div class="input-group">
                                        <input type="text" name="warrenty" id="warrenty"
                                                placeholder="Enter Number of Months"
                                                class="mspborder form-control required">
                                        <span class="input-group-addon">Months</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                	<div class="form-group">
                                        <label>Preventive Period (In Months):</label>
                                        <div class="input-group">
                                            <input type="text" name="prevent" id="prevent"
                                                    placeholder="Enter Number of Months"
                                                    class="mspborder form-control required">
                                            <span class="input-group-addon">Months</span>
                                        </div>
                                    </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Maintenance Service Provider:</label>
                                    <input type="text" id="msp" name="msp" placeholder="Enter the Name"
                                            class="mspborder form-control  required">
                                </div>
                            </div>

                            <div class="col-md-6">

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
									<label class="control-label ">Attach Service Agreement (pdf):</label>
									<div class="col-lg-10">
										<input type="file" id="serveagg" name="serveagg" class="file-input">
									</div>
								</div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Additional Details About The Equipment:</label>
                                    <textarea type="text" rows="5" name="additionaldetails"
                                                placeholder="Add Details"
                                                class=" form-control">
                                    </textarea>
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

        // uploader , steppy wizard, date picker
        $( document ).ready(function() {

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

            $('.file-input').fileinput({
                browseLabel: 'Browse',
                browseIcon: '<i class="icon-file-plus"></i>',
                showUpload: false,
                removeIcon: '<i class="icon-cross3"></i>',
                layoutTemplates: {
                    icon: '<i class="icon-file-check"></i>',
                    modal: modalTemplate
                },
                initialPreview: [
                    "broken.jpg"
                ],
                initialPreviewConfig: [
                    {caption: "Example Image", size: 930321, url: '{$url}'}
                ],
                initialPreviewAsData: true,
                overwriteInitial: true,
                previewZoomButtonClasses: previewZoomButtonClasses,
                previewZoomButtonIcons: previewZoomButtonIcons,
                fileActionSettings: fileActionSettings
            });


            //wizard and datepixker

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
                    
                    sendData = new FormData($("#invntryfrm")[0]);
                    $.ajax({
                        method: "POST",
                        url: "../DBhandle/inventory_con.php?code=save",
                        data: sendData,
                        processData: false,
                        contentType: false
                    }).done(function (msg) {
                        alert(msg);
                    });

                    preventDefault();
                }
            });


            $('.stepy-clickable').find('.button-next').addClass('btn btn-primary');
            $('.stepy-clickable ').find('.button-back').addClass('btn btn-default');

            $('.pickadate-strings').pickadate({
                weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                showMonthsShort: true
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
                //Equipment name
            $.ajax({
                method: "POST",
                url: "../DBhandle/inventory_con.php?code=get_equipselect_data",
                processData: false,
                contentType: false
            })
                .done(function (data) {
                $("#eqpname").append(data);
                });

                mydatatable();


        });



    </script>

</div>
<!-- /main content -->

<?php require_once('footer.php');?>

  