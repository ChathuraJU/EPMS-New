<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> EPMS | KGH </title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">

	<link href="global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="global_assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<link href="global_assets/css/style.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="global_assets/js/plugins/loaders/pace.min.js"></script>
	<script src="global_assets/js/core/libraries/jquery.min.js"></script>
	<script src="global_assets/js/core/libraries/bootstrap.min.js"></script>
	<script src="global_assets/js/plugins/loaders/blockui.min.js"></script>
	<script src="global_assets/js/core/libraries/jasny_bootstrap.min.js"></script>		
	<script src="global_assets/js/core/libraries/jquery_ui/interactions.min.js"></script>

	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="global_assets/js/plugins/visualization/d3/d3.min.js"></script>          
	<script src="global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="global_assets/js/plugins/ui/moment/moment.min.js"></script>
	<script src="global_assets/js/plugins/pickers/daterangepicker.js"></script>
	<script src="global_assets/js/plugins/forms/wizards/stepy.min.js"></script>			<!--form-->
	<script src="global_assets/js/plugins/forms/selects/select2.min.js"></script>	
	<script src="global_assets/js/plugins/forms/selects/selectboxit.min.js"></script>	
	<script src="global_assets/js/plugins/forms/styling/uniform.min.js"></script>		<!--form-->
	<script src="global_assets/js/plugins/notifications/jgrowl.min.js"></script>		<!--date picker-->
	<script src="global_assets/js/plugins/pickers/anytime.min.js"></script>				<!--date picker-->
	<script src="global_assets/js/plugins/pickers/pickadate/picker.js"></script>		<!--date picker-->
	<script src="global_assets/js/plugins/pickers/pickadate/picker.date.js"></script>	<!--date picker-->
	<script src="global_assets/js/plugins/pickers/pickadate/legacy.js"></script>		<!--date picker-->
	<script src="global_assets/js/plugins/uploaders/fileinput/plugins/purify.min.js"></script>		<!--image uploader-->
	<script src="global_assets/js/plugins/uploaders/fileinput/plugins/sortable.min.js"></script>	<!--image uploader-->
	<script src="global_assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>			<!--image uploader-->
	<script src="global_assets/js/plugins/tables/datatables/datatables.min.js"></script>			<!--responsive datatable-->
	<script src="global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script> <!--responsive datatable-->
	<script src="global_assets/js/plugins/tables/footable/footable.min.js"></script>
	<script src="global_assets/js/plugins/forms/styling/switch.min.js"></script>		<!--radio button -->
	<script src="global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
	<script src="global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script src="global_assets/js/plugins/uploaders/fileinput/fileinput.min.js"></script>
	<script src="global_assets/js/plugins/extensions/contextmenu.js"></script>
	<script src="global_assets/js/plugins/visualization/sparkline.min.js"></script>
	<script src="global_assets/js/plugins/notifications/bootbox.min.js"></script>
	<script src="global_assets/js/plugins/notifications/sweet_alert.min.js"></script>
	<script src="global_assets/js/plugins/uploaders/dropzone.min.js"></script>
	
	<script src="assets/js/app.js"></script>
	<script src="global_assets/js/demo_pages/dashboard.js"></script>


	<!-- <script src="global_assets/js/demo_pages/wizard_stepy.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/picker_date.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/uploader_bootstrap.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/datatables_responsive.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/form_checkboxes_radios.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/form_validation.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/datatables_advanced.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/datatables_data_sources.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/form_input_groups.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/table_responsive.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/table_elements.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/form_select2.js"></script> -->
	<!-- <script src="global_assets/js/demo_pages/components_modals.js"></script> -->
	<script src="global_assets/js/demo_pages/uploader_dropzone.js"></script>
	<!-- <script src="global_assets/js/demo_pages/form_layouts.js"></script> need??? -->
	<script src="global_assets/js/demo_pages/datatables_api.js"></script>



	<!-- /theme JS files -->
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="dashboard.php"><img src="global_assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

				<li class="dropdown">
					<a href="notifi_alerts.php" class="dropdown-toggle" data-toggle="dropdown">
						<i class=" icon-bell3"></i>
						<span class="visible-xs-inline-block position-right">Alerts</span>
						<span class="badge bg-warning-400">9</span>
					</a>
					
					<div class="dropdown-menu dropdown-content">
						<div class="dropdown-content-heading">
							Alerts
							<ul class="icons-list">
								<li><a href="#"><i class="icon-sync"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body width-350">
							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>

								<div class="media-body">
									Drop the IE <a href="#">specific hacks</a> for temporal inputs
									<div class="media-annotation">4 minutes ago</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-warning text-warning btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-commit"></i></a>
								</div>
								
								<div class="media-body">
									Add full font overrides for popovers and tooltips
									<div class="media-annotation">36 minutes ago</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-info text-info btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-branch"></i></a>
								</div>
								
								<div class="media-body">
									<a href="#">Chris Arney</a> created a new <span class="text-semibold">Design</span> branch
									<div class="media-annotation">2 hours ago</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-success text-success btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-merge"></i></a>
								</div>
								
								<div class="media-body">
									<a href="#">Eugene Kopyov</a> merged <span class="text-semibold">Master</span> and <span class="text-semibold">Dev</span> branches
									<div class="media-annotation">Dec 18, 18:36</div>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<a href="#" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class="icon-git-pull-request"></i></a>
								</div>
								
								<div class="media-body">
									Have Carousel ignore keyboard events
									<div class="media-annotation">Dec 12, 05:46</div>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>
			</ul>

			<p class="navbar-text"><span class="label bg-success">Online</span></p>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown language-switch">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="global_assets/images/flags/gb.png" class="position-left" alt="">
						English
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li><a class="deutsch"><img src="global_assets/images/flags/de.png" alt=""> Sinhala </a></li>
						<li><a class="ukrainian"><img src="global_assets/images/flags/ua.png" alt=""> Tamil </a></li>
						<li><a class="english"><img src="global_assets/images/flags/gb.png" alt=""> English </a></li>

					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="visible-xs-inline-block position-right">Messages</span>
						<span class="badge bg-warning-400">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Messages
							<ul class="icons-list">
								<li><a href="notifi_msg.php"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							<li class="media">
								<div class="media-left">
									<img src="global_assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">5</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">James Alexander</span>
										<span class="media-annotation pull-right">04:58</span>
									</a>

									<span class="text-muted">who knows, maybe that would be the best thing for me...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left">
									<img src="global_assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">4</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Margo Baker</span>
										<span class="media-annotation pull-right">12:16</span>
									</a>

									<span class="text-muted">That was something he was unable to do because...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="global_assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Jeremy Victorino</span>
										<span class="media-annotation pull-right">22:48</span>
									</a>

									<span class="text-muted">But that would be extremely strained and suspicious...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="global_assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Beatrix Diaz</span>
										<span class="media-annotation pull-right">Tue</span>
									</a>

									<span class="text-muted">What a strenuous career it is that I've chosen...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="global_assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Richard Vango</span>
										<span class="media-annotation pull-right">Mon</span>
									</a>
									
									<span class="text-muted">Other travelling salesmen live a life of luxury...</span>
								</div>
							</li>
						</ul>

						<div class="dropdown-content-footer">
							<a href="notifi_msg.php" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="global_assets/images/placeholders/placeholder.jpg" alt="">
						<span> Dr. Prasad Gunasinghe </span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="profile.php"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="calender.php"><i class="icon-coins"></i> Events </a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="#"><i class="icon-eye-blocked"></i> Lockscreen </a></li>
						<li><a href="#"><i class="icon-switch"></i> Logout</a></li>
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
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="global_assets/images/placeholders/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"> Dr. Prasad Gunasinghe </span>
									<div class="text-size-mini text-muted">
										<i class="icon-office text-size-small"></i> &nbsp;MOIC, Planning Unit
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Dashboard -->
								<li class="active"><a href="dashboard.php"><i class="icon-home4"></i> <span>Dashboard</span></a>
									<ul>
                                        <li>
                                            <a href="dashboard.php"> Admin Dashboard </a>
                                        </li>

                                        <li>
                                            <a href="dashboard.php"> Director Dashboard </a>
                                        </li>

                                        <li>
                                            <a href="dashboard.php"> Chief Accountant Dashboard</a>
                                        </li>

                                        <li>
                                            <a href="dashboard.php"> MOIC Dashboard </a>
                                        </li>

                                        <li>
                                            <a href="dashboard.php"> Surgical Pharmacist Dashboard</a>
                                        </li>

                                        <li>
                                            <a href="dashboard.php"> Consultant Dashboard </a>
                                        </li>

                                        <li>
                                            <a href="dashboard.php"> BME Dashboard </a>
                                        </li>

                                        <li>
                                            <a href="dashboard.php"> User Dashboard </a>
                                        </li> 
									</ul>
								</li>
                                <!-- /Dashboard -->

                                <!-- employee-->
								<li>
									<a href="#"><i class=" icon-users2"></i> <span> Employee Management </span></a>
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
											<a href="user_type.php"> User Type </a>
										</li>

										<li>
											<a href="user_create.php"> Add New User </a>
										</li>

										<li>
											<a href="user_manage.php"> Manage User </a>
										</li>                                  
									</ul>
								</li>
								<!-- /user groups-->

								<!-- utilities-->
								<li>
									<a href="#"><i class="icon-cogs"></i> <span> Utilities </span></a>
									<ul>                                  
										<li>
											<a href="utility_lang.php"> Language </a>
										</li>

										<li>
											<a href="utility_color.php"> Color </a>
										</li>
										<li>
											<a href="utility_restore.php"> Restore </a>
										</li>

										<li>
											<a href="utility_backups.php"> Back-ups </a>
										</li>
									</ul>
								</li>
								<!-- /utilities-->

								<!-- configuration-->
								<li>
									<a href="#"><i class="icon-wrench2"></i> <span> Configuration </span></a>
									<ul>
										<li>
                                            <a href="config_org.php"> Organization Details</a>
                                        </li>

                                        <li>
                                            <a href="config_unit.php"> Create / Manage Unit </a>
                                        </li>

                                        <li>
                                            <a href="config_unitlist.php"> Unit List </a>
                                        </li>
                                        <li>
                                            <a href="config_ward.php"> Create / Manage Ward </a>
                                        </li>

                                        <li>
                                            <a href="config_wardlist.php"> Ward List </a>
                                        </li>

                                        <li>
                                            <a href="config_equip.php"> Manage Equipment </a>
                                        </li>

                                        <li>
                                            <a href="config_equipcat.php"> Equipment Category </a>
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

								<!--requisition-->
								<li>
									<a href="#"><i class=" icon-pencil7"></i> <span> Requisitions </span></a>
									<ul>
										<li>
                                            <a href="req_create.php"> Create Requisitions </a>
                                        </li>

                                        <li>
                                            <a href="req_list.php"> Requisition List </a>
                                        </li>

										<li>
											<a href="reqequip_list.php"> Requisitioned Equipment List </a>
										</li> 

                                        <li>
											<a href="#">Primal Approved Requisitions</a>
											<ul>
												<li>
													<a href="req_primapproved.php"> Primal Approved List </a>
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
										
										<!-- <li>
											<a href="approvedequip.php"> Approved Equipments</a>
										</li> -->
									
										<li> 
											<a href="minapproval_form.php"> Create Ministry Approval Form </a>
										</li>
										
                                        <li>
                                            <a href="req_minrejected.php">Ministry Rejected Requisitions</a>
                                        </li>

										<li>
                                            <a href="req_minapproved.php"> Ministry Approved Requisitions</a>
										</li>

									</ul>
								</li>
								<!--/requisition-->

								<!--tec-->
								<li>
									<a href="#"><i class="icon-users4"></i> <span> Tech Evaluation Committee </span></a>
									<ul>
										<li>   
                                            <a href="tec_createform.php"> Create Technical Evaluation Committee </a> 
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
                                            <a href="tender_track.php"> Tender Tracker </a> 
                                        </li>
                                        
                                        <li>
                                            <a href="tender_post.php"> Post Tender </a>
                                        </li>

                                        <li>
                                           <a href="tender_doc.php"> Tender Documents </a>
                                        </li>

                                        <li>
                                            <a href="tender_pending.php"> Approval Pending Tenders </a>
                                        </li>

                                        <li>
                                            <a href="tender_draft.php"> Draft Tenders </a>
                                        </li>
									</ul>
								</li>
								<!--/tender-->
								<!--bids-->
								<li>
									<a href="#"><i class="icon-hammer2"></i> <span> Bids </span></a>
									<ul>
										<li>
                                            <a href="bid_checklist.php"> Bid Checklists </a>
                                        </li>

                                        <li>
                                            <a href="bid_selected.php"> Selected Bids </a>
                                        </li>

                                        <li>
                                            <a href="bid_rejected.php"> Rejected Bids </a>
                                        </li>

                                        <li>
                                            <a href="bidders.php"> Bidders </a>
                                        </li>

                                        <li>
                                            <a href="bidder_blacklist.php"> Blacklisted Bidders </a>
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
									<a href="payment.php"><i class="icon-coins"></i> <span> Payments </span></a>
									<ul>
										<li>
                                            <a href="pay_fundsalloc.php"> Fund Allocations </a>
                                        </li>

										<li>
											<a href="#">Invoices</a>
											<ul>
												<li><a href="pay_invopend.php"> Pending Invoices </a></li>
												<li><a href="pay_involist.php"> Invoice List </a></li>
											</ul>
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

								<!--notification-->
								<li>
									<a href="#"><i class="icon-bubble-notification"></i> <span> Notifications </span></a>
									<ul>
										<li>
											<a href="notifi_msg.php"> Messages </a>
										</li>

										<li>
											<a href="notifi_alert.php"> Alerts </a>
										</li>

										<li>
											<a href="notifi_all.php"> All </a>
										</li>
									</ul>
								</li>
								<!--/notification-->

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

