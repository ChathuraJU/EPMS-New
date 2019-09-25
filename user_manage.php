<?php require_once('incl/header.php');?>
            <!-- Main content -->
            <div class="content-wrapper" id="content">

                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"> User Control </span> </h4>
                        </div>

                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="dashboard.php"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li><a href="user_create.php"> User Control </a></li>
                            <li class="active"> Manage User </li>
                        </ul>

                        <ul class="breadcrumb-elements">
                            <li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-gear position-left"></i>
                                    Settings
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
                                    <li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
                                    <li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-gear"></i> All settings</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Highlighting rows and columns -->
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title"> <b> Users </b></h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="reload"></a></li>
                    </ul>
                </div>
            </div>

            <table class="table table-bordered table-hover datatable-highlight">
                <thead>
                    <tr>
                        <th> # </th>
                        <th>User No.</th>
                        <th>User Name</th>
                        <th>Privileges</th>
                        <th>Additional Information</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> 01 </td>
                        <td>UT01</td>
                        <td>Super Admin</td>
                        <td>Traffic Court Referee</td>
                        <td>.......................................</td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-eye"></i> View</a></li>
                                        <li><a href="#"><i class="icon-spinner11"></i> Update</a></li>
                                        <li><a href="#"><i class="icon-bin"></i> Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td> 02 </td>
                        <td>UT02</td>
                        <td> Admin</td>
                        <td>privileges in tag form ////ask someone////</td>
                        <td>.......................................</td>
                        <td class="text-center">
                            <ul class="icons-list">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#"><i class="icon-eye"></i> View </a></li>
                                        <li><a href="#"><i class="icon-spinner11"></i> Update</a></li>
                                        <li><a href="#"><i class="icon-bin"></i> Delete</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- /highlighting rows and columns -->

                    
                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->


<?php require_once('incl/footer.php');?>
