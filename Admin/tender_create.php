<?php require_once('header.php');?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> Tender </span></h4>
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
                <li><a href="#"> Tender </a></li>
                <li class="active"> Create Tender</li>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- 2 columns form -->
        <form id="tendercreateform" class="form-horizontal" action="#">
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title"><b>Create a Tender</b></h5>
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
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Procurement ID :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <select id="procid" name="procid" data-placeholder="Select the Procurement ID.." class="select required">
                                            <option></option>  
                                        </select>                              
                                    </div>
                                </div>
                            </div>
        
                           
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Equipment Name :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="eqpname" name="eqpname" class="form-control required"  >
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Quantity :<span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="qty" name="qty" class="form-control required"  >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label class="col-lg-3 control-label" > Title of the Procurement : <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="proctitle" name="proctitle" class="form-control required"  />
                                    </div>                           
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label class="col-lg-3 control-label"> Nature of the Procurement : <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input type="text" id="procnature" name="procnature" class="form-control required"  />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Non Refundable Payment:</label>
                                    <div class="col-lg-9">
                                        <div class="input-group">
                                            <input type="text" name="nrp" id="nrp" placeholder="Enter the NRP amount" class="form-control  required" data-mask="999,999,999.99">
                                            <span class="input-group-addon">LKR</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-4 control-label"> Bid Collection Date (Openning Date) : <span class="text-danger">*</span></label>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                            <input type="text" id="bidcolop" name="bidcolop" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="content-group-lg">
                                        <label class="col-lg-4 control-label">Bid Collection Date (Closing Date) : <span class="text-danger">*</span></label>
                                        <div class="col-lg-8">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                                <input type="text"  id="bidcolcls" name="bidcolcls" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                           

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label ">Bid Checklist (General Document): </label>
                                    <div class="col-lg-9">
                                        <input type="file" id="rbidchk" name="rbidchk" class="file-input">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label ">Bid Document (General Document): </label>
                                    <div class="col-lg-9">
                                        <input type="file" id="rbiddoc" name="rbiddoc" class="file-input">
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


    </div>
    <!-- /content area -->

    <script>
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

        // uploader and datepicker js
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


            $('.pickadate-strings').pickadate({
                weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                showMonthsShort: true
            });
        });

        //save form
        $("#save").click(function(){
        sendData = new FormData($("#tendercreateform")[0]);
    
                $.ajax({
                    method: "POST",
                    url: "../DBhandle/tender_con.php?code=save",
                    data: sendData,
                    processData: false,
                    contentType: false
                }).done(function (msg) {
                    getdatatotable();
                    $("#procid").val("");
                    $("#eqpname").val("");
                    $("#qty").val("");
                    $("#proctitle").val("");
                    $("#procnature").val("");
                    $("#nrp").val("");
                    $("#bidcolop").val("");
                    $("#bidcolcls").val("");


                    getdatatotable();
                
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

