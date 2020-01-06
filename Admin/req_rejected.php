<?php require_once('header.php');?>
    <!-- Main content -->
    <div class="content-wrapper" id="content">

        <!-- Page header -->
        <div class="page-header page-header-default">
            <div class="page-header-content">
                <div class="page-title">
                    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> Requisition </span></h4>
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
                    <li><a href="#"> Requisition </a></li>
                    <li class="active"> Pending Requisitions </li>
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
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h5 class="panel-title"><b> Rejected Requisitions </b></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <table class="table datatable-responsive-control-right">
                    <thead>
                        <tr>
                            <th>Requisition ID</th>
                            <th>Requisition Date</th>
                            <th>Name of the Consultant</th>
                            <th>Requisition Type</th>
                            <th>Equipment</th>
                            <th>Quantity</th>
                            <th>Approval</th>
                            <th>Rejected Date</th>
                            <th>Reason</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#"> REQ-000001  </a></td>
                            <td> 07 Dec 2017</td>
                            <td> Dr. Dushantha Mahagedara</td>
                            <td> Annual Request</td>
                            <td> Oximeter for Sleep Observation Machine </td>
                            <td> 01 </td>
                            <td> Declined </td>
                            <td> 07 Jan 2018</td>
                            <td> give a reason</td>
                            <td><a href="#"><i class="icon-eye"></i> View </a> </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="#"> REQ-000002 </a></td>
                            <td> 10 Jan 2018</td>
                            <td> Dr. Dushantha Mahagedara</td>
                            <td> Annual Request</td>
                            <td> Pulse Oxyeter </td>
                            <td> 01 </td>
                            <td> Approved </td>
                            <td> 07 Jan 2018</td>
                            <td>.....................</td>
                            <td><a href="#"><i class="icon-eye"></i> View</a> </td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="#"> REQ-000003 </a></td>
                            <td> 18 Jan 2018</td>
                            <td> Dr. A.W.M.Wazil</td>
                            <td> Annual Request</td>
                            <td> Syringe Pump </td>
                            <td> 02 </td>
                            <td> Declined </td>
                            <td> 07 Jan 2018</td>
                            <td>..........................</td>
                            <td><a href="#"><i class="icon-eye"></i> View</a> </td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="#"> REQ-000004 </a></td>
                            <td> 18 Jan 2018</td>
                            <td> Dr. S.C.A.Arambepola</td>
                            <td> Precipitate Request</td>
                            <td> Syringe Pump </td>
                            <td> 02 </td>
                            <td> Declined </td>
                            <td> 07 Jan 2018</td>
                            <td>.................</td>
                            <td><a href="#"><i class="icon-eye"></i> View</a> </td>
                            <td></td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /control position -->
        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

<?php require_once('footer.php');?>