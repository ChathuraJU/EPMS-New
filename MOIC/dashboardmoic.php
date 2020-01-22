<?php require_once('headermoic.php');?>
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-default" style="border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-right: 1px solid #ddd;">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin">54,390</h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE ID</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-vcard icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin">54,390</h3>
                                <span class="text-uppercase text-size-mini">EMPLOYEE NAME</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-user-tie icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin">54,390</h3>
                                <span class="text-uppercase text-size-mini">UNIT / WARD</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-location4 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="panel panel-body bg-blue-400 has-bg-image">
                        <div class="media no-margin">
                            <div class="media-body">
                                <h3 class="no-margin">54,390</h3>
                                <span class="text-uppercase text-size-mini">DATE</span>
                            </div>

                            <div class="media-right media-middle">
                                <i class="icon-calendar52 icon-3x opacity-75"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->

        <!-- Content area -->
        <div class="content">
            <div class="row">
                <div class="col-md-4">
                <!-- Requests stats colored -->
                    <div class="panel text-center bg-success-400 has-bg-image">
                        <div class="panel-body">
                            <h6 class="text-semibold no-margin-bottom mt-5">Equipment Requests</h6>
                            <div class="opacity-75 content-group">Total</div>
                            <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                        </div>

                        <div class="panel-body panel-body-accent pb-15">
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="text-uppercase text-size-mini opacity-75">Accepted </div>
                                    <h5 class="text-semibold no-margin">2,483</h5>
                                </div>

                                <div class="col-xs-4">
                                    <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                    <h5 class="text-semibold no-margin">1,257</h5>
                                </div>

                                <div class="col-xs-4">
                                    <div class="text-uppercase text-size-mini opacity-75">Pending</div>
                                    <h5 class="text-semibold no-margin">8,472</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Requests stats colored -->
                </div>

                <div class="col-md-4">
                    <!-- Approved equip stats colored -->
                    <div class="panel text-center bg-purple-400 has-bg-image">
                        <div class="panel-body">
                            <h6 class="text-semibold no-margin-bottom mt-5">Primal Approved Equipment Requests</h6>
                            <div class="opacity-75 content-group">Total here</div>
                            <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                        </div>

                        <div class="panel-body panel-body-accent pb-15">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="text-uppercase text-size-mini opacity-75">Direct Purchase</div>
                                    <h5 class="text-semibold no-margin">2,483</h5>
                                </div>

                                <div class="col-xs-6">
                                    <div class="text-uppercase text-size-mini opacity-75">Indirect Purchase</div>
                                    <h5 class="text-semibold no-margin">1,257</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /approved eqp stats colored -->

                </div>

                <div class="col-md-4">
                    <!-- Ministry App equip stats colored -->
                    <div class="panel text-center bg-danger-400 has-bg-image">
                        <div class="panel-body">
                            <h6 class="text-semibold no-margin-bottom mt-5">Minstry Approval Equipment </h6>
                            <div class="opacity-75 content-group">Total here</div>
                            <div class="svg-center position-relative mb-5" id="progress_percentage_three"></div>
                        </div>

                        <div class="panel-body panel-body-accent pb-15">
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="text-uppercase text-size-mini opacity-75">Accepted</div>
                                    <h5 class="text-semibold no-margin">2,483</h5>
                                </div>

                                <div class="col-xs-6">
                                    <div class="text-uppercase text-size-mini opacity-75">Rejected</div>
                                    <h5 class="text-semibold no-margin">1,257</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /ministry app eqp stats colored -->

                </div>

            </div>

            <!-- Content area -->
            <div class="content">
            <div class="row">
						<div class="col-lg-9">

						</div>

						<div class="col-lg-3">

                        	<!-- Calendar widget -->
							<div class="panel has-scroll">
								<div class="datepicker no-border"></div>
							</div>
							<!-- /calendar widget -->

							<!-- Search -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Search Contact</h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a href="#"><i class="icon-stats-bars"></i></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<form action="#">
										<div class="input-group content-group">
												<input type="text" class="form-control input-lg" placeholder="Search our help center">

											<div class="input-group-btn">
												<button type="submit" class="btn btn-primary btn-lg btn-icon"><i class="icon-search4"></i></button>
											</div>
										</div>

									</form>
								</div>
							</div>
                            <!-- /search -->
						</div>
            
            </div>
            <!-- /content area -->


        
    <script src="../global_assets/js/demo_pages/general_widgets_stats.js"></script>
    <script src="../global_assets/js/demo_pages/general_widgets_content.js"></script>
    </div>
    <!-- /main content -->


<?php require_once('footer.php');?>

