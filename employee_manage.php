<?php require_once('incl/header.php');?>

<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Employee Management</span></h4>
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
        <!-- Control position -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h5 class="panel-title"> Manage Employee </h5>
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
                        <th>Employee ID</th>
                        <th>Employee Work ID</th>
                        <th>Employee Name</th>
                        <th>Job Title</th>
                        <th>Work Place</th>
                        <th>Join Date</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#"> KGH-000001 </a></td>
                        <td> SL-6455246</td>
                        <td> Dr. Sanath Udagedara</td>
                        <td> Consultant Orthopedic Surgeon</td>
                        <td> Orthopedic Unit </td>
                        <td>22 Jun 2001</td>
                        <td><span class="label label-success">Active</span></td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-spinner11"></i> Update</a></li>
                                        <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                        <li></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="#"> KGH-000002 </a></td>
                        <td> SL-6469246</td>
                        <td> Dr.D.K.Dasanayake</td>
                        <td> Allergy & Immunology Specialist </td>
                        <td> Allergy &  Immunology Unit </td>
                        <td>22 Jun 2012</td>
                        <td><span class="label label-default">Inactive</span></td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-spinner11"></i> Update</a></li>
                                        <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                        <li></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="#"> KGH-000003 </a></td>
                        <td> SL-9869246</td>
                        <td> Dr.S.N.B.Dolapihilla</td>
                        <td> Cardiologist </td>
                        <td> Cardiology Unit </td>
                        <td>22 Jun 2012</td>
                        <td><span class="label label-info">Freezed</span></td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-spinner11"></i> Update</a></li>
                                        <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                        <li></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><a href="#"> KGH-000004 </a></td>
                        <td> SL-6985646</td>
                        <td> Dr.(Mrs)S.C.A.Arambepola</td>
                        <td> Psychiatrist </td>
                        <td> Psyciatry Unit </td>
                        <td>22 Jun 2013</td>
                        <td><span class="label label-danger">Blocked</span></td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-spinner11"></i> Update</a></li>
                                        <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                        <li></li>
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