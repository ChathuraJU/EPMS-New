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
                    <li class="active"> Requisitions List </li>
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
                    <h5 class="panel-title"><b> Manage Requisitions </b></h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="collapse"></a></li>
                            <li><a data-action="reload"></a></li>
                        </ul>
                    </div>
                </div>

                <table  class="table datatable-responsive-control-right" >
                    <thead>
                        <tr>
                            <th>Requisition ID</th>
                            <th>Requisition Date</th>
                            <th>Requisition Type</th>
                            <th>Unit</th>
                            <th>Ward</th>
                            <th>Primal Approval</th>
                            <th>Primal Approval Document</th>
                            <th></th>

                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="reqequip.php"> REQ-000001  </a></td>
                            <td> 07 Dec 2017</td>
                            <td> Annual Request</td>
                            <td> Respiratory Unit </td>
                            <td> None </td>
                            <td> Pending</td>
                            <td><button type="button" class="btn btn-default btn-sm" id="sweet_prompt">Upload <i class="icon-upload position-right"></i></button></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="reqequip.php"> REQ-000002 </a></td>
                            <td> 10 Jan 2018</td>
                            <td> Annual Request</td>
                            <td> None </td>
                            <td> WD 44/45 </td>
                            <td> Pending</td>
                            <td><button type="button" class="btn btn-default btn-sm" id="sweet_prompt">Upload <i class="icon-upload position-right"></i></button></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="reqequip.php"> REQ-000003 </a></td>
                            <td> 18 Jan 2018</td>
                            <td> Annual Request</td>
                            <td> None </td>
                            <td> WD 69 </td>
                            <td> Pending</td>
                            <td><button type="button" class="btn btn-default btn-sm" id="sweet_prompt">Upload <i class="icon-upload position-right"></i></button></td>
                            <td></td>

                        </tr>
                        <tr>
                            <td><a href="reqequip.php"> REQ-000004 </a></td>
                            <td> 18 Jan 2018</td>
                            <td> Precipitate Request</td>                     
                            <td> Psyciatry Unit  </td>
                            <td> None </td>
                            <td> Pending</td>
                            <td><button type="button" class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal_form_inline">Upload <i class="icon-upload position-right"></i></button></td>
                            <td></td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /control position -->

            <!-- Inline form modal -->
            <div id="modal_form_inline" class="modal fade" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content text-center">
                        <div class="modal-header">
                            <h5 class="modal-title">Upload Primal Approved Document</h5>
                        </div>

                        <form action="#" class="form-inline">
                            <div class="panel-body">
                                <p class="content-group">Example of dropzone file uploader with <code>remove</code> thumbnail option applied to every thumbnail in the preview by setting <code>addRemoveLinks</code> option to <code>true</code>. This will add a link to every file preview to remove or cancel (if already uploading) the file. The <code>dictCancelUpload</code>, <code>dictCancelUploadConfirmation</code> and <code>dictRemoveFile</code> options are used for the wording.</p>

                                <p class="text-semibold">Removable thumbnails example:</p>
                                <form action="#" class="dropzone" id="dropzone_remove"></form>
                            </div>

                            <div class="modal-footer text-center">
                                <button type="submit" class="btn btn-primary">Sign me in <i class="icon-plus22"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /inline form modal -->
        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

<?php require_once('incl/footer.php');?>