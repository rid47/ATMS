
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        
	<!-- Since css is not found I'm adding it using php tag...	
	<!--
        
        
        <link rel="stylesheet" href="design/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <!--
        <link rel="stylesheet" href="design/bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <!--
        <link rel="stylesheet" href="design/bower_components/Ionicons/css/ionicons.min.css">
        <!-- jvectormap -->
        <!--
        <link rel="stylesheet" href="design/bower_components/jvectormap/jquery-jvectormap.css">
	-->
        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> 
         <!-- Font Awesome -->
        <link rel="stylesheet" href=<?php echo base_url('design/bower_components/font-awesome/css/font-awesome.min.css')?>>
        <!-- Ionicons -->
        <link rel="stylesheet" href=<?php echo base_url('design/bower_components/Ionicons/css/ionicons.min.css')?>>
        <!-- jvectormap -->
        <link rel="stylesheet" href=<?php echo base_url('design/bower_components/jvectormap/jquery-jvectormap.css');?>>
		
		

		
	

		

		<!-- Datepicker CSS -->
	        <!--
                <link rel="stylesheet" type="text/css" href="css/datepicker.css" />

		
        <!-- Theme style -->
        <!--
        <link rel="stylesheet" href="design/dist/css/AdminLTE.min.css">
        -->
        <link rel="stylesheet" href=<?php echo base_url('design/dist/css/AdminLTE.min.css')?>>
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <!--
        <link rel="stylesheet" href="design/dist/css/skins/_all-skins.min.css">
        <!-- Main CSS -->
        
        <link rel="stylesheet" href=<?php echo base_url('design/dist/css/skins/_all-skins.min.css')?>>
        <!--
	<link href="design/bower_components/bootstrap/dist/css/main.css" rel="stylesheet" media="screen" />
         -->
         <link href=<?php echo base_url('design/bower_components/bootstrap/dist/css/main.css')?> rel="stylesheet" media="screen" />
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" 

href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style>
<script type="text/javascript" 

src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">

                <!-- Logo -->
                 <a href="<?php echo base_url('Welcome')?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b></b>TMS</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">Toll Management</span>
                </a>

                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">                                                                                                                                                                                                                                          
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        
                                        
                            </li>
                            
						<li class="list-box user-profile hidden-xs">
						<a id="drop4" href="#" class="user-avtar animated rubberBanddropdown-toggle" data-toggle="dropdown">
                                                    <i class="glyphicon glyphicon-king"></i> <?php echo $this->session->userdata('name')?><i class="fa fa-gears"></i>
                            
						</a>
						<ul class="dropdown-menu sm user-settings">
			
							<li>
								<a href=<?php echo base_url('AccountSettingsController');?>> <i class="fa fa-sun-o"></i> Change Password</a>
							</li>
							<hr class="less-margin">
							<li>
								<a href=<?php echo base_url('Welcome/logout')?>> <i class="fa fa-sign-out"></i> Logout</a>
							</li>
						</ul>
					</li>
                        </ul>
                    </div>

                </nav>
				
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>
						
					
             

                       <li class="highlight">
						<a href="<?php echo base_url('Welcome')?>">
							<i class="fa fa-desktop"></i>
							<span>Dashboard</span>
							<span class="current-page"></span>
						</a>
					
						<li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Report</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
								<li><a href=<?php echo base_url('Report/AvcAccuracyController')?>><i class="fa fa-circle-o"></i>AVC accuracy report</a></li>
<li><a href=<?php echo base_url('Report/DailyPassController')?>><i class="fa fa-circle-o"></i>Daily Pass Report  </a></li>
<li><a href=<?php echo base_url('Report/DiscrepancyController')?>><i class="fa fa-circle-o"></i>Discrepancy Report</a></li>
<li><a href=<?php echo base_url('Report/ExemptController')?>><i class="fa fa-circle-o"></i>Exempt Report</a></li>
<li><a href=<?php echo base_url('Report/OperatorEfficiencyController')?>><i class="fa fa-circle-o"></i>Operator Efficiency Report</a></li>
<li><a href=<?php echo base_url('Report/RevenueController')?>><i class="fa fa-circle-o"></i>Revenue Report </a></li>
<li><a href=<?php echo base_url('Report/ShiftDetailsReportController')?>><i class="fa fa-circle-o"></i>Shift Details Report </a></li>
<li><a href=<?php echo base_url('Report/TrafficCountController')?>><i class="fa fa-circle-o"></i>Traffic Count Report  </a></li>
<li><a href=<?php echo base_url('Report/VehicleFrequecnyController')?>><i class="fa fa-circle-o"></i>Vehicle Frequency Report</a></li>
<li><a href=<?php echo base_url('Report/WeighStationController')?>><i class="fa fa-circle-o"></i>Weigh Station Report  </a></li>
<li><a href=<?php echo base_url('Report/WeeklyTrafficCensusController')?>><i class="fa fa-circle-o"></i>Weekly traffic census  </a></li>
								
                               
                            </ul>
                        </li>
                     <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Management</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
								<li><a href=<?php echo base_url('Management/ShiftAssignmentController')?>><i class="fa fa-circle-o"></i>Shift Assignment</a></li>
								<li><a href=<?php echo base_url('Management/ShiftConfigurationController')?>><i class="fa fa-circle-o"></i>Shift Configuration  </a></li>
								<li><a href=<?php echo base_url('Management/PlazaConfigurationController')?>><i class="fa fa-circle-o"></i>Plaza Configuration</a></li>
								<li><a href=<?php echo base_url('Management/LaneConfigurationController')?>><i class="fa fa-circle-o"></i>Lane Configuration</a></li>
								<li><a href=<?php echo base_url('Management/VehicleClassManagementController')?>><i class="fa fa-circle-o"></i>Vehicle Class Management</a></li>
								<li><a href=<?php echo base_url('Management/ClassWiseTarrifController')?>><i class="fa fa-circle-o"></i>Class wise tariff Management</a></li>
								<li><a href=<?php echo base_url('Management/UserConfigurationController')?>><i class="fa fa-circle-o"></i>User Account Configuration</a></li>
								
								
                               
                            </ul>
                        </li>				
      
</li>
			 
                          
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            
		
			<div class="content-wrapper">
                <!-- Content Header (Page header) -->
                
			
				<section class="content-header">
                    
                    <!--                
                    <h1>
                       
                        
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>

                      

        <!-- ./wrapper -->
<!-- Main Container starts -->
			

		        <!--
			<div class="main-container">

				<!-- Container fluid Starts -->
				<!--
                                <div class="container-fluid">
				
				

					<!-- Current Stats Start -->
			
					<!--
                                        <div class="current-stats">
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
								<div class="danger-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class A</small>
										<h3 class="no-margin no-padding">19%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="success-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class B</small>
										<h3 class="no-margin no-padding text-white">7%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="info-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class C</small>
										<h3 class="no-margin no-padding">16%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="brown-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class D</small>
										<h3 class="no-margin no-padding">5%</h3>
									</div>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
								<div class="linkedin-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class E</small>
										<h3 class="no-margin no-padding">14%</h3>
									</div>
								</div>
							</div>
							</div>
							<div class="row">
							
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
								<div class="danger-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class F</small>
										<h3 class="no-margin no-padding">9%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="success-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class G</small>
										<h3 class="no-margin no-padding text-white">7%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="info-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class H</small>
										<h3 class="no-margin no-padding">23%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="brown-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class I</small>
										<h3 class="no-margin no-padding">11%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
								<div class="linkedin-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class J</small>
										<h3 class="no-margin no-padding">1%</h3>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
					
					<!-- Current Stats End -->
        <!-- jQuery 3 -->
       
       
        <!-- Bootstrap 3.3.7 -->
        <script type="text/javascript" 

src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src=<?php echo base_url('design/bower_components/fastclick/lib/fastclick.js')?>></script>
        <!-- AdminLTE App -->
        <script src=<?php echo base_url('design/dist/js/adminlte.min.js')?>></script>
        <!-- Sparkline -->
        
        
        <!--
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        -->
        <!-- SlimScroll -->
        <script src=<?php echo base_url('design/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')?>></script>
    
        <!-- AdminLTE for demo purposes -->
        <script src=<?php echo base_url('design/dist/js/demo.js')?>></script>
 
