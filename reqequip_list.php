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
                    <li class="active"> Requisitions Equipment List </li>
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
                    <h5 class="panel-title"><b> Manage Requisitioned Equipments </b></h5>
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
                            <th>Requisition Equipment ID</th>
                            <th>Requisition ID</th>
                            <th>Requisition Approval Document ID</th>
                            <th>Requisition Type</th>
                            <th>Primal Approval</th>
                            <th>Ward</th>
                            <th class="text-center">Actions</th>
                            <th></th>

                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="reqequip.php"> REQ-000001  </a></td>
                            <td> 07 Dec 2017</td>
                            <td> Dr. Dushantha Mahagedara</td>
                            <td> Annual Request</td>
                            <td> Respiratory Unit </td>
                            <td> None </td>

                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="reqequip.php"><i class="icon-eye"></i> View</a></li>
                                            <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                            <li></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="reqequip.php"> REQ-000002 </a></td>
                            <td> 10 Jan 2018</td>
                            <td> Dr. Dushantha Mahagedara</td>
                            <td> Annual Request</td>
                            <td> None </td>
                            <td> WD 44/45 </td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="reqequip.php"><i class="icon-eye"></i> View</a></li>          
                                            <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                            <li></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="reqequip.php"> REQ-000003 </a></td>
                            <td> 18 Jan 2018</td>
                            <td> Dr. A.W.M.Wazil</td>
                            <td> Annual Request</td>
                            <td> None </td>
                            <td> WD 69 </td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="reqequip.php"><i class="icon-eye"></i> View</a></li>
                                            <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="reqequip.php"> REQ-000004 </a></td>
                            <td> 18 Jan 2018</td>
                            <td> Dr. S.C.A.Arambepola</td>
                            <td> Precipitate Request</td>                     
                            <td> Psyciatry Unit  </td>
                            <td> None </td>
                            <td class="text-center">
                                <ul class="icons-list">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="reqeqip.php"><i class="icon-eye"></i> View</a></li>
                                            <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                        </ul>
                                    </li>
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