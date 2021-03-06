<?php
session_start();
//if (!isset($_SESSION["user"]) || $_SESSION["user"]["utype"] != "Admin") {
//    header("location:../index.php");
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> EPMS | KGH </title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">

    <link href="../global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="../global_assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/core.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <link href="../global_assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="../global_assets/js/plugins/loaders/pace.min.js"></script>
    <script src="../global_assets/js/core/libraries/jquery.min.js"></script>
    <script src="../global_assets/js/core/libraries/bootstrap.min.js"></script>
    <script src="../global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="../global_assets/js/core/libraries/jasny_bootstrap.min.js"></script>
    <script src="../global_assets/js/core/libraries/jquery_ui/interactions.min.js"></script>

    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="../global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="../global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="../global_assets/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="../global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="../global_assets/js/plugins/pickers/daterangepicker.js"></script>
    <script src="../global_assets/js/plugins/forms/wizards/stepy.min.js"></script>            <!--form-->
    <script src="../global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="../global_assets/js/plugins/forms/selects/selectboxit.min.js"></script>
    <script src="../global_assets/js/plugins/forms/styling/uniform.min.js"></script>        <!--form-->
    <script src="../global_assets/js/plugins/notifications/jgrowl.min.js"></script>        <!--date picker-->
    <script src="../global_assets/js/plugins/pickers/anytime.min.js"></script>                <!--date picker-->
    <script src="../global_assets/js/plugins/pickers/pickadate/picker.js"></script>        <!--date picker-->
    <script src="../global_assets/js/plugins/pickers/pickadate/picker.date.js"></script>    <!--date picker-->
    <script src="../global_assets/js/plugins/pickers/pickadate/legacy.js"></script>
    <script src="../global_assets/js/plugins/forms/validation/validate.min.js"></script><!--date picker-->
    <script src="../global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>
    <!--image uploader-->
    <script src="../global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>
    <!--image uploader-->
    <script src="../global_assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
    <!--image uploader-->
    <script src="../global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <!--responsive datatable-->
    <script src="../global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <!--responsive datatable-->
    <script src="../global_assets/js/plugins/tables/footable/footable.min.js"></script>
    <script src="../global_assets/js/plugins/forms/styling/switch.min.js"></script>        <!--radio button -->
    <script src="../global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
    <script src="../global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script src="../global_assets/js/plugins/extensions/contextmenu.js"></script>
    <script src="../global_assets/js/plugins/visualization/sparkline.min.js"></script>
    <script src="../global_assets/js/plugins/notifications/bootbox.min.js"></script>
    <script src="../global_assets/js/plugins/notifications/sweet_alert.min.js"></script>
    <script src="../global_assets/js/plugins/uploaders/dropzone.min.js"></script>
    <script src="../global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js"></script>
    <script src="../global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js"></script>
    <script src="../global_assets/js/plugins/tables/datatables/extensions/buttons.min.js"></script>
    <script src="../global_assets/js/plugins/media/fancybox.min.js"></script>
    <script src="../global_assets/js/plugins/forms/inputs/duallistbox.min.js"></script>
    <script src="../global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="../global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <!--pdf -->
    <script src="../global_assets/js/jquery.tabletojson.min.js"></script>
    <!--    <script src="../global_assets/js/jspdf.customfonts.min.js"></script>-->
    <script src="../global_assets/js/jspdf.debug.js"></script>
    <!--    <script src="../global_assets/js/jspdf.js"></script>-->
    <script src="../global_assets/js/jspdf.plugin.autotable.min.js"></script>


    <script src="../assets/js/app.js"></script>
    <script src="../global_assets/js/demo_pages/dashboard.js"></script>


    <!-- <script src="../global_assets/js/demo_pages/wizard_stepy.js"></script> -->
    <!-- <script src="../global_assets/js/demo_pages/picker_date.js"></script> -->
    <!-- <script src="../global_assets/js/demo_pages/uploader_bootstrap.js"></script> -->
    <!-- <script src="../global_assets/js/demo_pages/datatables_responsive.js"></script> -->
    <!-- <script src="../global_assets/js/demo_pages/form_checkboxes_radios.js"></script> -->
    <!-- <script src="../global_assets/js/demo_pages/form_validation.js"></script> -->
    <!-- <script src="../global_assets/js/demo_pages/datatables_advanced.js"></script> -->
    <!-- <script src="../global_assets/js/demo_pages/datatables_data_sources.js"></script> -->
    <!-- <script src="../global_assets/js/demo_pages/form_input_groups.js"></script> -->
    <!-- <script src="../global_assets/js/demo_pages/table_responsive.js"></script> -->
    <!-- <script src="../global_assets/js/demo_pages/table_elements.js"></script> -->
    <!-- <script src="../global_assets/js/demo_pages/form_select2.js"></script> -->
    <!-- <script src="../global_assets/js/demo_pages/components_modals.js"></script> -->
    <script src="../global_assets/js/demo_pages/uploader_dropzone.js"></script>
    <!-- <script src="../global_assets/js/demo_pages/form_layouts.js"></script> need??? -->
    <script src="../global_assets/js/demo_pages/datatables_api.js"></script>


    <!-- /theme JS files -->
</head>


<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="dashboard.php"><img src="../global_assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
            </li>

        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="../global_assets/images/placeholders/placeholder.jpg" alt="">
                    <span> <?php echo $_SESSION["user"]["utype"] ?> </span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="profile.php"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="calender.php"><i class="icon-coins"></i> Events </a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-eye-blocked"></i> Lockscreen </a></li>
                    <li><a href="../login/logout_class.php"><i class="icon-switch"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-main bg-slate-800">
            <div class="sidebar-content ">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img
                                        src="../global_assets/images/placeholders/placeholder.jpg"
                                        class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold">  <?php echo $_SESSION["user"]["utype"] ?> </span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-office text-size-small"></i>  National Hospital Kandy
                                </div>
                            </div>

                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li>
                                        <a href="config_org.php"><i class="icon-cog3"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <?php
                if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'MOIC')
                {
                    ?>

                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Dashboard -->
                            <li><a href="dashboard.php"><i class="icon-home4"></i> <span>Dashboard</span></a>

                            </li>
                            <!-- /Dashboard -->

                            <!-- employee-->
                            <li>
                                <a href="#"><i class=" icon-users2"></i><span> Employee Management </span></a>
                                <ul>
                                    <li>
                                        <a href="employee_create.php"> New Employee </a>
                                    </li>

                                    <li>
                                        <a href="employee_manage.php"> Manage Employee </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- /employee-->

                            <!-- user groups-->
                            <li>
                                <a href="#"><i class="icon-user-check"></i> <span> User control </span></a>
                                <ul>

                                    <li>
                                        <a href="user_create.php"> Update Users </a>
                                    </li>

                                </ul>
                            </li>
                            <!-- /user groups-->

                            <!-- configuration-->
                            <li>
                                <a href="#"><i class="icon-wrench2"></i> <span> Configuration </span></a>
                                <ul>
                                    <li>
                                        <a href="config_org.php"> Update Organization Details</a>
                                    </li>

                                    <li>
                                        <a href="config_uporg.php"> Organization Details</a>
                                    </li>

                                    <li>
                                        <a href="config_unit.php"> Create / Manage Unit </a>
                                    </li>

                                    <li>
                                        <a href="config_ward.php"> Create / Manage Ward </a>
                                    </li>

                                    <li>
                                        <a href="config_equip.php"> Manage Equipment </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/configuration-->

                            <!--audit-->
                            <li>
                                <a href="#"><i class=" icon-stack-check"></i> <span> Survey </span></a>
                                <ul>

                                    <li>
                                        <a href="survey_history.php"> Ward/Unit Survey History </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/audit-->

                            <!--complain-->
                            <li>
                                <a href="#"><i class=" icon-notification2"></i> <span> Complains </span></a>
                                <ul>

                                    <li>
                                        <a href="complain_manage.php"> Manage Complains </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/complain-->

                            <!--requisition-->
                            <li>
                                <a href="#"><i class=" icon-pencil7"></i> <span> Requisitions </span></a>
                                <ul>
                                    <li>
                                        <a href="req_create.php"> Create Requisitions </a>
                                    </li>

                                    <li>
                                        <a href="req_list3.php"> All Requisitions </a>
                                    </li>

                                    <li>
                                        <a href="#">Primal Approved Requisitions</a>
                                        <ul>
                                            <li>
                                                <a href="req_primapproved.php"> Primal Approved Equipments </a>
                                            </li>
                                            <li>
                                                <a href="directpurch.php">Direct Purchases</a>
                                            </li>

                                            <li>
                                                <a href="indirectpurch.php">Indirect Purchases</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="req_primrejected.php">Primal Rejected Requisitions</a>
                                    </li>

                                    <li>
                                        <a href="req_penddirect_procure.php">Pending Direct Procurements</a>
                                    </li>


                                    <li>
                                        <a href="req_minapppend.php"> Pending Ministry Approvals </a>
                                    </li>

                                    <!-- to update the data after recieving the ministry letter -->
                                    <li>
                                        <a href="update_minapp.php"> Update Ministry Approvals </a>
                                    </li>

                                    <li>
                                        <a href="req_minrejected.php">Ministry Rejected Requisitions</a>
                                    </li>

                                    <li>
                                        <a href="req_minapproved.php"> Ministry Approved Requisitions</a>
                                    </li>

                                    <!--                                        <li>-->
                                    <!--                                            <a href="proceedto_procure.php"> Proceed to Procure</a>-->
                                    <!--                                        </li>-->


                                </ul>
                            </li>
                            <!--/requisition-->

                            <!--tec-->
                            <li>
                                <a href="#"><i class="icon-users4"></i> <span>Specification </span></a>
                                <ul>
                                    <li>
                                        <a href="tec_create.php"> Create Technical Evaluation Committee </a>
                                    </li>

                                    <li>
                                        <a href="tec_list.php"> TEC List </a>
                                    </li>

                                </ul>
                            </li>

                            <!--tender-->
                            <li>
                                <a href="#"><i class="icon-file-text"></i> <span> Tender </span></a>
                                <ul>
                                    <li>
                                        <a href="tender_create.php"> Create Tender </a>
                                    </li>



                                </ul>
                            </li>
                            <!--/tender-->

                            <!--Bidders-->
                            <li>
                                <a href="#"><i class="icon-user-tie"></i> <span> Bidder Management </span></a>
                                <ul>
                                    <li>
                                        <a href="bidders.php"> Bidders List</a>
                                    </li>

                                    <li>
                                        <a href="bidder_blocked.php"> Blocked Bidders </a>
                                    </li>
                                </ul>
                            </li>
                            <!--Bidders-->


                            <!--bids-->
                            <li>
                                <a href="#"><i class="icon-hammer2"></i> <span> Bids </span></a>
                                <ul>
                                    <!-- FOR FUTURE ENHANCEMENT
                                        <li>
                                            <a href="bid_checklist.php"> Bid Checklists </a>
                                        </li> -->
                                    <li>
                                        <a href="bid_nrf.php"> View NRFs </a>
                                    </li>


                                    <li>
                                        <a href="bid_all.php"> Evaluate Bids </a>
                                    </li>

                                    <li>
                                        <a href="bid_selected.php"> Selected Bids </a>
                                    </li>

                                    <li>
                                        <a href="bid_rejected.php"> Rejected Bids </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/bids-->

                            <!--order management-->
<!--                            <li>-->
<!--                                <a href="#"><i class="icon-list-unordered"></i> <span> Order Management </span></a>-->
<!--                                <ul>-->
<!--                                    <li>-->
<!--                                        <a href="order_create.php"> Create Order </a>-->
<!--                                    </li>-->
<!---->
<!--                                    <li>-->
<!--                                        <a href="order_list.php"> Order List </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <!--/order management-->

                            <!--payments-->
                            <li>
                                <a href="#"><i class="icon-coins"></i> <span> Payments </span></a>
                                <ul>


                                    <li>
                                        <a href="pay_history.php"> Payment History </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/payment-->

                            <!--inventory-->
                            <li>
                                <a href="#"><i class="icon-stack-plus"></i> <span> Inventory </span></a>
                                <ul>

                                    <li>
                                        <a href="inventory_manage.php"> Manage Inventory </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/inventory-->

                            <li><a href="calender.php"><i class="icon-calendar22"></i> <span> Events </span></a></li>
                            <li><a href="profile.php"><i class="icon-profile"></i> <span> Profile </span></a></li>
                            <li><a href="directory.php"><i class="icon-phone"></i> <span> Directory </span></a></li>
                            <!-- /main -->

                        </ul>
                    </div>
                </div>
                <!-- /Main navigation -->

            </div>
        </div>
        <!-- /Main sidebar -->

        <?php
        }

        else if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'Admin'){

                    ?>

        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Dashboard -->
                    <li><a href="dashboard.php"><i class="icon-home4"></i> <span>Dashboard</span></a>
                        <ul>
                            <li>
                                <a href="dashboard.php"> Admin Dashboard </a>
                            </li>

                            <li>
                                <a href="../Director/dashboarddir.php"> Director Dashboard </a>
                            </li>

                            <li>
                                <a href="../Chief_Accountant/dashboardchef.php"> Chief Accountant Dashboard</a>
                            </li>

                            <li>
                                <a href="..dashboardmoic.php"> MOIC Dashboard </a>
                            </li>

                            <li>
                                <a href="dashboardsurg.php"> Surgical Pharmacist Dashboard</a>
                            </li>

                            <li>
                                <a href="dashboardcon.php"> Consultant Dashboard </a>
                            </li>

                            <li>
                                <a href="dashboardbme.php"> BME Dashboard </a>
                            </li>

                        </ul>
                    </li>
                    <!-- /Dashboard -->

                    <!-- employee-->
                    <li>
                        <a href="#"><i class=" icon-users2"></i><span> Employee Management </span></a>
                        <ul>
                            <li>
                                <a href="employee_create.php"> New Employee </a>
                            </li>

                            <li>
                                <a href="employee_manage.php"> Manage Employee </a>
                            </li>
                        </ul>
                    </li>
                    <!-- /employee-->

                    <!-- user groups-->
                    <li>
                        <a href="#"><i class="icon-user-check"></i> <span> User control </span></a>
                        <ul>
                            <!-- <li>
                                <a href="user_type.php"> User Type </a>
                            </li> -->

                            <li>
                                <a href="user_create.php"> Update Users </a>
                            </li>
                            <!--<li>
                                <a href="user_manage.php"> Manage User </a>
                            </li>-->
                        </ul>
                    </li>
                    <!-- /user groups-->

                    <!-- configuration-->
                    <li>
                        <a href="#"><i class="icon-wrench2"></i> <span> Configuration </span></a>
                        <ul>
                            <li>
                                <a href="config_org.php"> Update Organization Details</a>
                            </li>

                            <li>
                                <a href="config_uporg.php"> Organization Details</a>
                            </li>

                            <li>
                                <a href="config_unit.php"> Create / Manage Unit </a>
                            </li>

                            <li>
                                <a href="config_ward.php"> Create / Manage Ward </a>
                            </li>

                            <li>
                                <a href="config_equip.php"> Manage Equipment </a>
                            </li>

                        </ul>
                    </li>
                    <!--/configuration-->

                    <!--audit-->
                    <li>
                        <a href="#"><i class=" icon-stack-check"></i> <span> Survey </span></a>
                        <ul>
                            <li>
                                <a href="survey_create.php"> Yearly Survey </a>
                            </li>

                            <li>
                                <a href="survey_history.php"> Ward/Unit Survey History </a>
                            </li>
                        </ul>
                    </li>
                    <!--/audit-->

                    <!--complain-->
                    <li>
                        <a href="#"><i class=" icon-notification2"></i> <span> Complains </span></a>
                        <ul>
                            <li>
                                <a href="complain_create.php"> Make a Complain </a>
                            </li>

                            <li>
                                <a href="complain_manage.php"> Manage Complains </a>
                            </li>
                        </ul>
                    </li>
                    <!--/complain-->

                    <!--requisition-->
                    <li>
                        <a href="#"><i class=" icon-pencil7"></i> <span> Requisitions </span></a>
                        <ul>
                            <li>
                                <a href="req_create.php"> Create Requisitions </a>
                            </li>

                            <li>
                                <a href="req_list.php"> All Requisitions </a>
                            </li>

                            <!--										<li>-->
                            <!--											<a href="reqequip_list.php"> Requisitioned Equipment List </a>-->
                            <!--										</li> -->

                            <li>
                                <a href="#">Primal Approved Requisitions</a>
                                <ul>
                                    <li>
                                        <a href="req_primapproved.php"> Primal Approved Equipments </a>
                                    </li>
                                    <li>
                                        <a href="directpurch.php">Direct Purchases</a>
                                    </li>

                                    <li>
                                        <a href="indirectpurch.php">Indirect Purchases</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="req_primrejected.php">Primal Rejected Requisitions</a>
                            </li>

                            <li>
                                <a href="req_penddirect_procure.php">Pending Direct Procurements</a>
                            </li>


                            <li>
                                <a href="req_minapppend.php"> Pending Ministry Approvals </a>
                            </li>

                            <!-- to update the data after recieving the ministry letter -->
                            <li>
                                <a href="update_minapp.php"> Update Ministry Approvals </a>
                            </li>

                            <li>
                                <a href="req_minrejected.php">Ministry Rejected Requisitions</a>
                            </li>

                            <li>
                                <a href="req_minapproved.php"> Ministry Approved Requisitions</a>
                            </li>

                            <!--                                        <li>-->
                            <!--                                            <a href="proceedto_procure.php"> Proceed to Procure</a>-->
                            <!--                                        </li>-->


                        </ul>
                    </li>
                    <!--/requisition-->

                    <!--tec-->
                    <li>
                        <a href="#"><i class="icon-users4"></i> <span>Specification </span></a>
                        <ul>
                            <li>
                                <a href="tec_create.php"> Create Technical Evaluation Committee </a>
                            </li>

                            <li>
                                <a href="tec_list.php"> TEC List </a>
                            </li>

                        </ul>
                    </li>

                    <!--tender-->
                    <li>
                        <a href="#"><i class="icon-file-text"></i> <span> Tender </span></a>
                        <ul>
                            <li>
                                <a href="tender_create.php"> Create Tender </a>
                            </li>

                            <li>
                                <a href="tender_table.php"> Post Tender </a>
                            </li>


                        </ul>
                    </li>
                    <!--/tender-->

                    <!--Bidders-->
                    <li>
                        <a href="#"><i class="icon-user-tie"></i> <span> Bidder Management </span></a>
                        <ul>
                            <li>
                                <a href="bidders.php"> Bidders List</a>
                            </li>

                            <li>
                                <a href="bidder_blocked.php"> Blocked Bidders </a>
                            </li>
                        </ul>
                    </li>
                    <!--Bidders-->


                    <!--bids-->
                    <li>
                        <a href="#"><i class="icon-hammer2"></i> <span> Bids </span></a>
                        <ul>
                            <!-- FOR FUTURE ENHANCEMENT
                                <li>
                                    <a href="bid_checklist.php"> Bid Checklists </a>
                                </li> -->
                            <li>
                                <a href="bid_nrf.php"> View NRFs </a>
                            </li>


                            <li>
                                <a href="bid_all.php"> Evaluate Bids </a>
                            </li>

                            <li>
                                <a href="bid_selected.php"> Selected Bids </a>
                            </li>

                            <li>
                                <a href="bid_rejected.php"> Rejected Bids </a>
                            </li>

                        </ul>
                    </li>
                    <!--/bids-->

                    <!--order management-->
                    <li>
                        <a href="#"><i class="icon-list-unordered"></i> <span> Order Management </span></a>
                        <ul>
                            <li>
                                <a href="order_create.php"> Create Order </a>
                            </li>

                            <li>
                                <a href="order_list.php"> Order List </a>
                            </li>
                        </ul>
                    </li>
                    <!--/order management-->

                    <!--payments-->
                    <li>
                        <a href="#"><i class="icon-coins"></i> <span> Payments </span></a>
                        <ul>
                            <li>
                                <a href="pay_fundsalloc.php"> Make Payment </a>
                            </li>

                            <li>
                                <a href="pay_pend.php"> Pending Payments </a>
                            </li>

                            <li>
                                <a href="pay_history.php"> Payment History </a>
                            </li>

                        </ul>
                    </li>
                    <!--/payment-->

                    <!--inventory-->
                    <li>
                        <a href="#"><i class="icon-stack-plus"></i> <span> Inventory </span></a>
                        <ul>
                            <li>
                                <a href="inventory_update.php"> Update Inventory </a>
                            </li>

                            <li>
                                <a href="inventory_manage.php"> Manage Inventory </a>
                            </li>
                        </ul>
                    </li>
                    <!--/inventory-->

                    <li><a href="calender.php"><i class="icon-calendar22"></i> <span> Events </span></a></li>
                    <li><a href="profile.php"><i class="icon-profile"></i> <span> Profile </span></a></li>
                    <li><a href="directory.php"><i class="icon-phone"></i> <span> Directory </span></a></li>
                    <!-- /main -->

                </ul>
            </div>
        </div>
        <!-- /Main navigation -->

    </div>
</div>
<!-- /Main sidebar -->

            <?php

        }else if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'Surgical Pharmacist'){

                ?>

                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Dashboard -->
                            <li><a href="dashboard.php"><i class="icon-home4"></i> <span>Dashboard</span></a>

                            </li>
                            <!-- /Dashboard -->

                            <!--Bidders-->
                            <li>
                                <a href="#"><i class="icon-user-tie"></i> <span> Bidder Management </span></a>
                                <ul>
                                    <li>
                                        <a href="bidders.php"> Bidders List</a>
                                    </li>

                                    <li>
                                        <a href="bidder_blocked.php"> Blocked Bidders </a>
                                    </li>
                                </ul>
                            </li>
                            <!--Bidders-->

                            <!--payments-->
                            <li>
                                <a href="#"><i class="icon-coins"></i> <span> Payments </span></a>
                                <ul>
                                    <li>
                                        <a href="pay_fundsalloc.php"> Make Payment </a>
                                    </li>

                                    <li>
                                        <a href="pay_pend.php"> Pending Payments </a>
                                    </li>

                                    <li>
                                        <a href="pay_history.php"> Payment History </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/payment-->

                            <!--inventory-->
                            <li>
                                <a href="#"><i class="icon-stack-plus"></i> <span> Inventory </span></a>
                                <ul>
                                    <li>
                                        <a href="inventory_update.php"> Update Inventory </a>
                                    </li>

                                    <li>
                                        <a href="inventory_manage.php"> Manage Inventory </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/inventory-->

                            <li><a href="calender.php"><i class="icon-calendar22"></i> <span> Events </span></a></li>
                            <li><a href="profile.php"><i class="icon-profile"></i> <span> Profile </span></a></li>
                            <li><a href="directory.php"><i class="icon-phone"></i> <span> Directory </span></a></li>
                            <!-- /main -->

                        </ul>
                    </div>
                </div>
                <!-- /Main navigation -->

                </div>
                </div>
                <!-- /Main sidebar -->

                <?php

            }else if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'Consultant'){

                ?>

                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Dashboard -->
                            <li><a href="dashboard.php"><i class="icon-home4"></i> <span>Dashboard</span></a>

                            </li>
                            <!-- /Dashboard -->

                            <!-- employee-->
                            <li>
                                <a href="#"><i class=" icon-users2"></i><span> Employee Management </span></a>
                                <ul>

                                    <li>
                                        <a href="employee_manage.php"> Manage Employee </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- /employee-->




                            <!--audit-->
                            <li>
                                <a href="#"><i class=" icon-stack-check"></i> <span> Survey </span></a>
                                <ul>
                                    <li>
                                        <a href="survey_create.php"> Yearly Survey </a>
                                    </li>

                                    <li>
                                        <a href="survey_history.php"> Ward/Unit Survey History </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/audit-->

                            <!--complain-->
                            <li>
                                <a href="#"><i class=" icon-notification2"></i> <span> Complains </span></a>
                                <ul>
                                    <li>
                                        <a href="complain_create.php"> Make a Complain </a>
                                    </li>

                                    <li>
                                        <a href="complain_manage.php"> Manage Complains </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/complain-->

                            <!--requisition-->
                            <li>
                                <a href="#"><i class=" icon-pencil7"></i> <span> Requisitions </span></a>
                                <ul>
                                    <li>
                                        <a href="req_create.php"> Create Requisitions </a>
                                    </li>

                                    <li>
                                        <a href="req_list2.php"> All Requisitions </a>
                                    </li>


                                </ul>
                            </li>
                            <!--/requisition-->




                            <li><a href="calender.php"><i class="icon-calendar22"></i> <span> Events </span></a></li>
                            <li><a href="profile.php"><i class="icon-profile"></i> <span> Profile </span></a></li>
                            <li><a href="directory.php"><i class="icon-phone"></i> <span> Directory </span></a></li>
                            <!-- /main -->

                        </ul>
                    </div>
                </div>
                <!-- /Main navigation -->

                </div>
                </div>
                <!-- /Main sidebar -->

                <?php

            }else if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'Director'){

                ?>

                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Dashboard -->
                            <li><a href="dashboard.php"><i class="icon-home4"></i> <span>Dashboard</span></a>

                            </li>
                            <!-- /Dashboard -->

                            <!-- employee-->
                            <li>
                                <a href="#"><i class=" icon-users2"></i><span> Employee Management </span></a>
                                <ul>
                                    <li>
                                        <a href="employee_create.php"> New Employee </a>
                                    </li>

                                    <li>
                                        <a href="employee_manage.php"> Manage Employee </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- /employee-->

                            <!-- user groups-->
                            <li>
                                <a href="#"><i class="icon-user-check"></i> <span> User control </span></a>
                                <ul>
                                    <!-- <li>
                                        <a href="user_type.php"> User Type </a>
                                    </li> -->

                                    <li>
                                        <a href="user_create.php"> Update Users </a>
                                    </li>
                                    <!--<li>
                                        <a href="user_manage.php"> Manage User </a>
                                    </li>-->
                                </ul>
                            </li>
                            <!-- /user groups-->

                            <!-- configuration-->
                            <li>
                                <a href="#"><i class="icon-wrench2"></i> <span> Configuration </span></a>
                                <ul>
                                    <li>
                                        <a href="config_org.php"> Update Organization Details</a>
                                    </li>

                                    <li>
                                        <a href="config_uporg.php"> Organization Details</a>
                                    </li>

                                    <li>
                                        <a href="config_unit.php"> Create / Manage Unit </a>
                                    </li>

                                    <li>
                                        <a href="config_ward.php"> Create / Manage Ward </a>
                                    </li>

                                    <li>
                                        <a href="config_equip.php"> Manage Equipment </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/configuration-->

                            <!--audit-->
                            <li>
                                <a href="#"><i class=" icon-stack-check"></i> <span> Survey </span></a>
                                <ul>


                                    <li>
                                        <a href="survey_history.php"> Ward/Unit Survey History </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/audit-->

                            <!--complain-->
                            <li>
                                <a href="#"><i class=" icon-notification2"></i> <span> Complains </span></a>
                                <ul>

                                    <li>
                                        <a href="complain_manage.php"> Manage Complains </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/complain-->

                            <!--requisition-->
                            <li>
                                <a href="#"><i class=" icon-pencil7"></i> <span> Requisitions </span></a>
                                <ul>

                                    <li>
                                        <a href="req_list.php"> All Requisitions </a>
                                    </li>

                                    <!--										<li>-->
                                    <!--											<a href="reqequip_list.php"> Requisitioned Equipment List </a>-->
                                    <!--										</li> -->

                                    <li>
                                        <a href="#">Primal Approved Requisitions</a>
                                        <ul>
                                            <li>
                                                <a href="req_primapproved.php"> Primal Approved Equipments </a>
                                            </li>
                                            <li>
                                                <a href="directpurch.php">Direct Purchases</a>
                                            </li>

                                            <li>
                                                <a href="indirectpurch.php">Indirect Purchases</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="req_primrejected.php">Primal Rejected Requisitions</a>
                                    </li>

                                    <li>
                                        <a href="req_penddirect_procure.php">Pending Direct Procurements</a>
                                    </li>


                                    <li>
                                        <a href="req_minapppend.php"> Pending Ministry Approvals </a>
                                    </li>

                                    <!-- to update the data after recieving the ministry letter -->
                                    <li>
                                        <a href="update_minapp.php"> Update Ministry Approvals </a>
                                    </li>

                                    <li>
                                        <a href="req_minrejected.php">Ministry Rejected Requisitions</a>
                                    </li>

                                    <li>
                                        <a href="req_minapproved.php"> Ministry Approved Requisitions</a>
                                    </li>

                                    <!--                                        <li>-->
                                    <!--                                            <a href="proceedto_procure.php"> Proceed to Procure</a>-->
                                    <!--                                        </li>-->


                                </ul>
                            </li>
                            <!--/requisition-->




                            <!--Bidders-->
                            <li>
                                <a href="#"><i class="icon-user-tie"></i> <span> Bidder Management </span></a>
                                <ul>
                                    <li>
                                        <a href="bidders.php"> Bidders List</a>
                                    </li>

                                    <li>
                                        <a href="bidder_blocked.php"> Blocked Bidders </a>
                                    </li>
                                </ul>
                            </li>
                            <!--Bidders-->


                            <!--bids-->
                            <li>
                                <a href="#"><i class="icon-hammer2"></i> <span> Bids </span></a>
                                <ul>
                                    <!-- FOR FUTURE ENHANCEMENT
                                        <li>
                                            <a href="bid_checklist.php"> Bid Checklists </a>
                                        </li> -->
                                    <li>
                                        <a href="bid_nrf.php"> View NRFs </a>
                                    </li>


                                    <li>
                                        <a href="bid_all.php"> Evaluate Bids </a>
                                    </li>

                                    <li>
                                        <a href="bid_selected.php"> Selected Bids </a>
                                    </li>

                                    <li>
                                        <a href="bid_rejected.php"> Rejected Bids </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/bids-->



                            <!--payments-->
                            <li>
                                <a href="#"><i class="icon-coins"></i> <span> Payments </span></a>
                                <ul>


                                    <li>
                                        <a href="pay_pend.php"> Pending Payments </a>
                                    </li>

                                    <li>
                                        <a href="pay_history.php"> Payment History </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/payment-->

                            <!--inventory-->
                            <li>
                                <a href="#"><i class="icon-stack-plus"></i> <span> Inventory </span></a>
                                <ul>

                                    <li>
                                        <a href="inventory_manage.php"> Manage Inventory </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/inventory-->

                            <li><a href="calender.php"><i class="icon-calendar22"></i> <span> Events </span></a></li>
                            <li><a href="profile.php"><i class="icon-profile"></i> <span> Profile </span></a></li>
                            <li><a href="directory.php"><i class="icon-phone"></i> <span> Directory </span></a></li>
                            <!-- /main -->

                        </ul>
                    </div>
                </div>
                <!-- /Main navigation -->

                </div>
                </div>
                <!-- /Main sidebar -->

                <?php

            }else if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'Chief Accountant'){

                ?>

                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Dashboard -->
                            <li><a href="dashboard.php"><i class="icon-home4"></i> <span>Dashboard</span></a>

                            </li>
                            <!-- /Dashboard -->






                            <!--tec-->
                            <li>
                                <a href="#"><i class="icon-users4"></i> <span>Specification </span></a>
                                <ul>
                                    <li>
                                        <a href="tec_create.php"> Create Technical Evaluation Committee </a>
                                    </li>

                                    <li>
                                        <a href="tec_list.php"> TEC List </a>
                                    </li>

                                </ul>
                            </li>

                            <!--tender-->
                            <li>
                                <a href="#"><i class="icon-file-text"></i> <span> Tender </span></a>
                                <ul>
                                    <li>
                                        <a href="tender_create.php"> Create Tender </a>
                                    </li>

                                    <li>
                                        <a href="tender_table.php"> Post Tender </a>
                                    </li>


                                </ul>
                            </li>
                            <!--/tender-->

                            <!--Bidders-->
                            <li>
                                <a href="#"><i class="icon-user-tie"></i> <span> Bidder Management </span></a>
                                <ul>
                                    <li>
                                        <a href="bidders.php"> Bidders List</a>
                                    </li>

                                    <li>
                                        <a href="bidder_blocked.php"> Blocked Bidders </a>
                                    </li>
                                </ul>
                            </li>
                            <!--Bidders-->


                            <!--bids-->
                            <li>
                                <a href="#"><i class="icon-hammer2"></i> <span> Bids </span></a>
                                <ul>
                                    <!-- FOR FUTURE ENHANCEMENT
                                        <li>
                                            <a href="bid_checklist.php"> Bid Checklists </a>
                                        </li> -->
                                    <li>
                                        <a href="bid_nrf.php"> View NRFs </a>
                                    </li>


                                    <li>
                                        <a href="bid_all.php"> Evaluate Bids </a>
                                    </li>

                                    <li>
                                        <a href="bid_selected.php"> Selected Bids </a>
                                    </li>

                                    <li>
                                        <a href="bid_rejected.php"> Rejected Bids </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/bids-->

<!--                            <!--order management-->-->
<!--                            <li>-->
<!--                                <a href="#"><i class="icon-list-unordered"></i> <span> Order Management </span></a>-->
<!--                                <ul>-->
<!--                                    <li>-->
<!--                                        <a href="order_create.php"> Create Order </a>-->
<!--                                    </li>-->
<!---->
<!--                                    <li>-->
<!--                                        <a href="order_list.php"> Order List </a>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <!--/order management-->-->

                            <!--payments-->
                            <li>
                                <a href="#"><i class="icon-coins"></i> <span> Payments </span></a>
                                <ul>
                                    <li>
                                        <a href="pay_fundsalloc.php"> Make Payment </a>
                                    </li>

                                    <li>
                                        <a href="pay_pend.php"> Pending Payments </a>
                                    </li>

                                    <li>
                                        <a href="pay_history.php"> Payment History </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/payment-->



                            <li><a href="calender.php"><i class="icon-calendar22"></i> <span> Events </span></a></li>
                            <li><a href="profile.php"><i class="icon-profile"></i> <span> Profile </span></a></li>
                            <li><a href="directory.php"><i class="icon-phone"></i> <span> Directory </span></a></li>
                            <!-- /main -->

                        </ul>
                    </div>
                </div>
                <!-- /Main navigation -->

                </div>
                </div>
                <!-- /Main sidebar -->

                <?php

            }
            else if (isset($_SESSION["user"]) && $_SESSION["user"]["utype"] == 'Director'){

                ?>

                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Dashboard -->
                            <li><a href="dashboard.php"><i class="icon-home4"></i> <span>Dashboard</span></a>

                            </li>
                            <!-- /Dashboard -->

                            <!-- employee-->
                            <li>
                                <a href="#"><i class=" icon-users2"></i><span> Employee Management </span></a>
                                <ul>
                                    <li>
                                        <a href="employee_create.php"> New Employee </a>
                                    </li>

                                    <li>
                                        <a href="employee_manage.php"> Manage Employee </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- /employee-->

                            <!-- user groups-->
                            <li>
                                <a href="#"><i class="icon-user-check"></i> <span> User control </span></a>
                                <ul>
                                    <!-- <li>
                                        <a href="user_type.php"> User Type </a>
                                    </li> -->

                                    <li>
                                        <a href="user_create.php"> Update Users </a>
                                    </li>
                                    <!--<li>
                                        <a href="user_manage.php"> Manage User </a>
                                    </li>-->
                                </ul>
                            </li>
                            <!-- /user groups-->

                            <!-- configuration-->
                            <li>
                                <a href="#"><i class="icon-wrench2"></i> <span> Configuration </span></a>
                                <ul>
                                    <li>
                                        <a href="config_org.php"> Update Organization Details</a>
                                    </li>

                                    <li>
                                        <a href="config_uporg.php"> Organization Details</a>
                                    </li>

                                    <li>
                                        <a href="config_unit.php"> Create / Manage Unit </a>
                                    </li>

                                    <li>
                                        <a href="config_ward.php"> Create / Manage Ward </a>
                                    </li>

                                    <li>
                                        <a href="config_equip.php"> Manage Equipment </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/configuration-->

                            <!--audit-->
                            <li>
                                <a href="#"><i class=" icon-stack-check"></i> <span> Survey </span></a>
                                <ul>


                                    <li>
                                        <a href="survey_history.php"> Ward/Unit Survey History </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/audit-->

                            <!--complain-->
                            <li>
                                <a href="#"><i class=" icon-notification2"></i> <span> Complains </span></a>
                                <ul>

                                    <li>
                                        <a href="complain_manage.php"> Manage Complains </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/complain-->

                            <!--requisition-->
                            <li>
                                <a href="#"><i class=" icon-pencil7"></i> <span> Requisitions </span></a>
                                <ul>

                                    <li>
                                        <a href="req_list.php"> All Requisitions </a>
                                    </li>


                                    <li>
                                        <a href="#">Primal Approved Requisitions</a>
                                        <ul>
                                            <li>
                                                <a href="req_primapproved.php"> Primal Approved Equipments </a>
                                            </li>
                                            <li>
                                                <a href="directpurch.php">Direct Purchases</a>
                                            </li>

                                            <li>
                                                <a href="indirectpurch.php">Indirect Purchases</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="req_primrejected.php">Primal Rejected Requisitions</a>
                                    </li>

                                    <li>
                                        <a href="req_penddirect_procure.php">Pending Direct Procurements</a>
                                    </li>


                                    <li>
                                        <a href="req_minapppend.php"> Pending Ministry Approvals </a>
                                    </li>

                                    <!-- to update the data after recieving the ministry letter -->
                                    <li>
                                        <a href="update_minapp.php"> Update Ministry Approvals </a>
                                    </li>

                                    <li>
                                        <a href="req_minrejected.php">Ministry Rejected Requisitions</a>
                                    </li>

                                    <li>
                                        <a href="req_minapproved.php"> Ministry Approved Requisitions</a>
                                    </li>

                                    <!--                                        <li>-->
                                    <!--                                            <a href="proceedto_procure.php"> Proceed to Procure</a>-->
                                    <!--                                        </li>-->


                                </ul>
                            </li>
                            <!--/requisition-->




                            <!--Bidders-->
                            <li>
                                <a href="#"><i class="icon-user-tie"></i> <span> Bidder Management </span></a>
                                <ul>
                                    <li>
                                        <a href="bidders.php"> Bidders List</a>
                                    </li>

                                    <li>
                                        <a href="bidder_blocked.php"> Blocked Bidders </a>
                                    </li>
                                </ul>
                            </li>
                            <!--Bidders-->


                            <!--bids-->
                            <li>
                                <a href="#"><i class="icon-hammer2"></i> <span> Bids </span></a>
                                <ul>
                                    <!-- FOR FUTURE ENHANCEMENT
                                        <li>
                                            <a href="bid_checklist.php"> Bid Checklists </a>
                                        </li> -->
                                    <li>
                                        <a href="bid_nrf.php"> View NRFs </a>
                                    </li>


                                    <li>
                                        <a href="bid_all.php"> Evaluate Bids </a>
                                    </li>

                                    <li>
                                        <a href="bid_selected.php"> Selected Bids </a>
                                    </li>

                                    <li>
                                        <a href="bid_rejected.php"> Rejected Bids </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/bids-->



                            <!--payments-->
                            <li>
                                <a href="#"><i class="icon-coins"></i> <span> Payments </span></a>
                                <ul>


                                    <li>
                                        <a href="pay_pend.php"> Pending Payments </a>
                                    </li>

                                    <li>
                                        <a href="pay_history.php"> Payment History </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/payment-->

                            <!--inventory-->
                            <li>
                                <a href="#"><i class="icon-stack-plus"></i> <span> Inventory </span></a>
                                <ul>

                                    <li>
                                        <a href="inventory_manage.php"> Manage Inventory </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/inventory-->

                            <li><a href="calender.php"><i class="icon-calendar22"></i> <span> Events </span></a></li>
                            <li><a href="profile.php"><i class="icon-profile"></i> <span> Profile </span></a></li>
                            <li><a href="directory.php"><i class="icon-phone"></i> <span> Directory </span></a></li>
                            <!-- /main -->

                        </ul>
                    </div>
                </div>
                <!-- /Main navigation -->

                </div>
                </div>
                <!-- /Main sidebar -->

                <?php

            }else{

                ?>

                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Dashboard -->
                            <li><a href="dashboard.php"><i class="icon-home4"></i> <span>Dashboard</span></a>

                            </li>
                            <!-- /Dashboard -->






                            <!--tec-->
                            <li>
                                <a href="#"><i class="icon-users4"></i> <span>Specification </span></a>
                                <ul>
                                    <li>
                                        <a href="tec_create.php"> Create Technical Evaluation Committee </a>
                                    </li>

                                    <li>
                                        <a href="tec_list.php"> TEC List </a>
                                    </li>

                                </ul>
                            </li>

                            <!--tender-->
                            <li>
                                <a href="#"><i class="icon-file-text"></i> <span> Tender </span></a>
                                <ul>
                                    <li>
                                        <a href="tender_create.php"> Create Tender </a>
                                    </li>

                                    <li>
                                        <a href="tender_table.php"> Post Tender </a>
                                    </li>


                                </ul>
                            </li>
                            <!--/tender-->

                            <!--Bidders-->
                            <li>
                                <a href="#"><i class="icon-user-tie"></i> <span> Bidder Management </span></a>
                                <ul>
                                    <li>
                                        <a href="bidders.php"> Bidders List</a>
                                    </li>

                                    <li>
                                        <a href="bidder_blocked.php"> Blocked Bidders </a>
                                    </li>
                                </ul>
                            </li>
                            <!--Bidders-->


                            <!--bids-->
                            <li>
                                <a href="#"><i class="icon-hammer2"></i> <span> Bids </span></a>
                                <ul>
                                    <!-- FOR FUTURE ENHANCEMENT
                                        <li>
                                            <a href="bid_checklist.php"> Bid Checklists </a>
                                        </li> -->
                                    <li>
                                        <a href="bid_nrf.php"> View NRFs </a>
                                    </li>


                                    <li>
                                        <a href="bid_all.php"> Evaluate Bids </a>
                                    </li>

                                    <li>
                                        <a href="bid_selected.php"> Selected Bids </a>
                                    </li>

                                    <li>
                                        <a href="bid_rejected.php"> Rejected Bids </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/bids-->

                            <!--                            <!--order management-->-->
                            <!--                            <li>-->
                            <!--                                <a href="#"><i class="icon-list-unordered"></i> <span> Order Management </span></a>-->
                            <!--                                <ul>-->
                            <!--                                    <li>-->
                            <!--                                        <a href="order_create.php"> Create Order </a>-->
                            <!--                                    </li>-->
                            <!---->
                            <!--                                    <li>-->
                            <!--                                        <a href="order_list.php"> Order List </a>-->
                            <!--                                    </li>-->
                            <!--                                </ul>-->
                            <!--                            </li>-->
                            <!--                            <!--/order management-->-->

                            <!--payments-->
                            <li>
                                <a href="#"><i class="icon-coins"></i> <span> Payments </span></a>
                                <ul>
                                    <li>
                                        <a href="pay_fundsalloc.php"> Make Payment </a>
                                    </li>

                                    <li>
                                        <a href="pay_pend.php"> Pending Payments </a>
                                    </li>

                                    <li>
                                        <a href="pay_history.php"> Payment History </a>
                                    </li>

                                </ul>
                            </li>
                            <!--/payment-->



                            <li><a href="calender.php"><i class="icon-calendar22"></i> <span> Events </span></a></li>
                            <li><a href="profile.php"><i class="icon-profile"></i> <span> Profile </span></a></li>
                            <li><a href="directory.php"><i class="icon-phone"></i> <span> Directory </span></a></li>
                            <!-- /main -->

                        </ul>
                    </div>
                </div>
                <!-- /Main navigation -->

                </div>
                </div>
                <!-- /Main sidebar -->

                <?php

            }















        ?>

