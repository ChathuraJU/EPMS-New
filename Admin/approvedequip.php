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
                    <h5 class="panel-title"><b>Approved Equipments </b></h5>
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
                            <th>Specification No.</th>
                            <th>Equipment Name</a>
                            <th>Quantity </th>
                            <th>View</th>
                            <th>Action</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>FN-02-2017</th>
                            <th>Incubator</a>
                            <td>10</a></td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_form_vertical">View <i class="icon-eye position-right"></i></button></td>
                            <td><a href="tec_createform.php"> Create TEC </a></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>FN-03-2017</th>
                            <th> Pendents</a>
                            <td>10</a></td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_form_vertical">View <i class="icon-eye position-right"></i></button></td>
                            <td><a href="tec_createform.php"> Create TEC </a></td>
                            <td></td>
                        </tr>
                 
                    </tbody>
                </table>

                <!-- Vertical form modal -->
                <div id="modal_form_vertical" class="modal fade" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h5 class="modal-title">Vertical form</h5>
                            </div>

                            <form action="#">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>First name</label>
                                                <input type="text" placeholder="Eugene" class="form-control">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Last name</label>
                                                <input type="text" placeholder="Kopyov" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Address line 1</label>
                                                <input type="text" placeholder="Ring street 12" class="form-control">
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Address line 2</label>
                                                <input type="text" placeholder="building D, flat #67" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label>City</label>
                                                <input type="text" placeholder="Munich" class="form-control">
                                            </div>

                                            <div class="col-sm-4">
                                                <label>State/Province</label>
                                                <input type="text" placeholder="Bayern" class="form-control">
                                            </div>

                                            <div class="col-sm-4">
                                                <label>ZIP code</label>
                                                <input type="text" placeholder="1031" class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Email</label>
                                                <input type="text" placeholder="eugene@kopyov.com" class="form-control">
                                                <span class="help-block">name@domain.com</span>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>Phone #</label>
                                                <input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control">
                                                <span class="help-block">+99-99-9999-9999</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit form</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /vertical form modal -->

            </div>
            <!-- /control position -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

<?php require_once('footer.php');?>