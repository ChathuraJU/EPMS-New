<?php require_once('incl/header.php');?>
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
                    <li class="active"> Primal Approved Requisitions </li>
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
                    <h5 class="panel-title"><b> Primal Approved Requisitions </b></h5>
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
                            <th>Requisition Equipment No</th>
                            <th>Primal Approval</th>
                            <th>Primal Approval Date</th>
                            <th>Procurement Type</th>
                            <th>Ministry Approval</th>
                            <th>Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#"> REQ-000001-01  </a></td>
                            <td> Approved</td>
                            <td> 05.02.2017</td>
                            <td> Direct Purchase</td>
                            <td> Pending </td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li><a href="minapproval.php"><i class="icon-pencil7"></i></a></li>
                                    <li><a href="minapproval.php"><i class="icon-eye"></i></a></li>
                                </ul>
                            </td>
                            <td></td>
                        
                        </tr>
                        <tr>
                            <td><a href="#"> REQ-000001-02 </a></td>
                            <td> Approved</td>
                            <td> 08.02.2017</td>
                            <td> Indirect Purchase</td>
                            <td> Pending </td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li><a href="minapproval.php"><i class="icon-pencil7"></i></a></li>
                                    <li><a href="minapproval.php"><i class="icon-eye"></i></a></li>
                                </ul>
                            </td>
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

<?php require_once('incl/footer.php');?>