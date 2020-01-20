<?php require_once('header.php');?>

<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
        <div class="page-header-content border-bottom border-bottom-success-300">
            <div class="page-title">
                <h4>
                    <i class="icon-arrow-left52 position-left"></i>
                    <span class="text-semibold">Configuration </span>
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
                <li><a href="#"> Configuration  </a></li>
                <li class="active">  Organization Details </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">
        <!-- Clickable title -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <h6 class="panel-title"><b> Update Organzation Details </b></h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <form class="stepy-clickable" id="orgdetailsfrm" action="#">
                <fieldset title="1">
                    <legend class="text-semibold">Basic Details </legend>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Hospital Name: <span class="text-danger">*</span></label>
                                        <input type="text" name="hosname" class="form-control required" placeholder="Name of the Hospital">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label>Address: <span class="text-danger">*</span></label>
                                        <input type="text" name="hosaddress" class="form-control required" placeholder="John Doe">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label>Letter Head : </label>
                                        <input type="file" id="ltrhd" name="ltrhd" class="file-input">

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="../global_assets/images/hospital3.jpg" height ="275px"  />
                                </div>
                            </div>
                        </div>

                </fieldset>

                <fieldset title="2">
                    <legend class="text-semibold">Contact Details</legend>  
                        <div class="row">
                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 40px;">
                                    <img src="../global_assets/images/conthos1.jpg" height ="275px"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row"></div>
                                <div class="row">
                                    <div class="form-group">
                                        <label> Hotline :</label>
                                        <input type="text" name="hotline" class="form-control" placeholder="+94-81-2256-978" data-mask="(+99)-99-9999-999">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label> Phone No. :</label>
                                        <input type="text" name="hos_tel" class="form-control" placeholder="+94-81-2256-978" data-mask="(+99)-99-9999-999">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label> Fax :</label>
                                        <input type="text" name="hosfax" class="form-control" placeholder="+94-81-2256-978" data-mask="(+99)-99-9999-999">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label> Email :</label>
                                        <input type="text" name="hosemail" class="form-control" placeholder="prasad@gmail.com">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row"></div>

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
                    
                    sendData = new FormData($("#orgdetailsfrm")[0]);
                    $.ajax({
                        method: "POST",
                        url: "../DBhandle/config_org_con.php?code=save",
                        data: sendData,
                        processData: false,
                        contentType: false
                    }).done(function (msg) {
                        getdatatotable();
                        $("#hosname").val("");
                        $("#hosaddress").val("");
                        $("#ltrhd").val("");
                        $("#hotline").val("");
                        $("#hos_tel").val("");
                        $("#hosfax").val("");
                        $("#hosemail").val("");
                
                    });
                    preventDefault();
                }
            });
    //get data 
    $(document).ready(function () {

        getdatatotable();

    });


            $('.stepy-clickable').find('.button-next').addClass('btn btn-primary');
            $('.stepy-clickable ').find('.button-back').addClass('btn btn-default');

            $("#anytime-weekday").AnyTime_picker({
                format: "%W, %D of %M, %Z"
            });
            });

        // pickdate
        $( document ).ready(function(){

            $('.pickadate-strings').pickadate({
                weekdaysShort: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                showMonthsShort: true
            });
        });

        //uploader
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

<?php require_once('footer.php');?>

  