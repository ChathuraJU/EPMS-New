<?php require_once('incl/header.php');?>
<!-- Main content -->
<div class="content-wrapper">
    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> Survey </span></h4>
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
                <li><a href="survey_history.php"> Survey </a></li>
                <li class="active"> Yearly Survey </li>
            </ul>
        </div>
    </div>
    <!-- /page header -->

    <!-- Content area -->
    <div class="content">

        <!-- Clickable title -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h6 class="panel-title"><b> Yearly Survey Form </b></h6>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>
 
            <form class="stepy-clickable" action="#">
                <fieldset title="1">
                    <legend class="text-semibold"> Survey Details </legend>
                    
                        <div class="row">
                            <div class="col-md-6" style="height: 100%;">
                                <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                    <img src="global_assets/images/survey.jpg" height ="300px"  />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="form-group">  
                                        <label  class="col-lg-3 control-label"> Survey ID : </label>
                                        <input type="text" name="surid" class="form-control" readonly/>
                                    </div>
                                </div> 

                                <div class="row">
                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label"> Employee ID : <span class="text-danger">*</span></label>
                                        <input type="text" name="empid" class="form-control" placeholder="should autofill" readonly/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label"> Unit : <span class="text-danger">*</span></label>
                                        <select name="unit" data-placeholder="Employee's Units only" class="select-search required">
                                            <option></option> 
                                            <option value="1">None</option> 
                                            <option value="2">ENT Clinic</option> 
                                            <option value="3">Cath Lab.</option>  
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label"> Ward : <span class="text-danger">*</span></label>
                                        <select name="ward" data-placeholder="Employee's wards only" class="select-search required">
                                            <option></option> 
                                            <option value="1"> None </option> 
                                            <option value="2"> WD 01 </option> 
                                            <option value="3"> WD 02 </option>  
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label"> Year : (should be the year only) <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                            <input type="text" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label  class="col-lg-3 control-label"> Submission Date : (auto select the submitting date) <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar22"></i></span>
                                            <input type="text" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    
                </fieldset>

                <fieldset title="2">
                    <legend class="text-semibold"> Equipment Details </legend>  
                    
                        <br>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label  class=> Equipment Code : (equipment codes of the ward/unit items </label>
                                    <select id="equipcode" name="equipcode" data-placeholder="Choose a Equipment..." class="select required">
                                        <option></option> 
                                        <option value="1"> EQUIP000001 </option> 
                                        <option value="2"> EQUIP000002 </option> 
                                        <option value="3"> EQUIP000003 </option> 
                                        <option value="4"> EQUIP000004 </option> 
                                        <option value="5"> EQUIP000005 </option> 
                                        <option value="6"> EQUIP000006 </option> 
                                        <option value="7">............</option> 
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label> Equipment : (auto update the name of the equipment when the code is given) <span class="text-danger">*</span></label>
                                    <input type="text" id="equipname" name="equipname" class="form-control" readonly />
                                </div>
                            </div> 
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label> Equipment Make :(auto update) <span class="text-danger">*</span></label>
                                    <input type="text" id="equipmake" name="equipmake" class="form-control" readonly />
                                </div>
                            </div> 

                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label> Equipment Model: (auto update) <span class="text-danger">*</span></label>
                                    <input type="text" id="equipmodel" name="equipmodel" class="form-control" readonly />
                                </div>
                            </div> 
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label> Equipment Serial No.: (auto update) <span class="text-danger">*</span></label>
                                    <input type="text" name="equipcode" class="form-control" readonly />
                                </div>
                            </div> 

                            <div class="col-md-6">
                                <div class="form-group">  
                                    <label> Present Status : <span class="text-danger">*</span></label>
                                    <input type="text" id="equipstatus" name="equipstatus" class="form-control"  />
                                </div>
                            </div> 
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="content-group-lg">
                                        <label>Join Date : <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="icon-calendar5"></i></span>
                                            <input type="text"  id="equiprecvdate" name="equiprecvdate" class="form-control pickadate-strings required" placeholder="Try me&hellip;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="cil-md-6">
                                <div class="form-group">
                                    <label> Remarks :</label>
                                    <div class="input-group">
                                        <textarea id="remarks" name="remarks" rows="3" cols="60" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-4">
                                <button class="btn btn-primary btn-block" id="btn_add">Add</button>
                            </div>
                            <div class="col-sm-4"></div>
                        </div>


                        <br>
                        <br>
                        <div class="row">
                            <!-- Basic responsive table -->
                            <div class="panel panel-flat">

                                <div class="table-responsive">
                                    <table class="table" id="tblajx">
                                        <thead>
                                            <tr>
                                                <th> Equipment Code </th>
                                                <th> Equipment Name </th>
                                                <th> Make </th>
                                                <th> Model </th>
                                                <th> Serial No. </th>
                                                <th> Present Status </th>
                                                <th> Installed Date </th>
                                                <th> Remarks </th>
                                                <th>Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="inventory.php"> EQUIP000001 </a></td>
                                                <td> Sphygmomanometer </td>
                                                <td> AAA </td>
                                                <td> sf9sf </td>
                                                <td> 3256464623 </td>
                                                <td> Good </td>
                                                <td> 06/05/2008 </td>
                                                <td> hello from the other side </td>
                                                <td class="text-center">
                                                    <ul class="icons-list">
                                                        <li><a href="#" data-toggle="modal" data-target="#edit_modal"><i class="icon-pencil7"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><a href="inventory.php"> EQUIP000010 </a></td>
                                                <td> Incubator </td>
                                                <td> BBB </td>
                                                <td> frsd4gd </td>
                                                <td> 3256464623 </td>
                                                <td> Medium </td>
                                                <td> 06/05/2008 </td>
                                                <td> hello from the other side </td>
                                                <td class="text-center">
                                                    <ul class="icons-list">
                                                        <li><a href="#" data-toggle="modal" data-target="#edit_modal"><i class="icon-pencil7"></i></a></li>
                                                        <li><a href="#" data-toggle="modal" data-target="#remove_modal"><i class="icon-trash"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /basic responsive table -->
                        </div>
                </fieldset>

                <fieldset title="3">
                    <legend class="text-semibold"> Confirmation </legend>

                        <!-- <div class="col-md-6" style="height: 100%;">
                            <div class="col-sm-4 col-sm-offset-2" style="margin-top: 50px;">
                                <img src="global_assets/images/confirm.jpg" height ="300px"  />
                            </div>
                        </div> -->

                        <div class="col-md-6">Ask someone how to get the previusly entered  details to a form as a summary here
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
<!-- /Main content -->
<?php require_once('incl/footer.php');?>

