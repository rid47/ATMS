<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bootstrap.gallery/everest-v3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2017 06:39:28 GMT -->
<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Toll Admin Panel" />
		<meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Wrapbootstrap, Bootstrap" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="shortcut icon" href="img/favicon.ico">
		<title>TMS | Log in</title>

		<!-- Bootstrap CSS -->
		<link href="design/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">

		<!-- Animate CSS -->
		<link href="design/bower_components/bootstrap/dist/css/animate.css" rel="stylesheet" media="screen">

		<!-- Main CSS -->
		<link href="design/bower_components/bootstrap/dist/css/main.css" rel="stylesheet" media="screen">

		<!-- Main CSS -->
		<link href="design/bower_components/bootstrap/dist/css/login.css" rel="stylesheet">

		<!-- Font Awesome -->
		<link href="design/bower_components/bootstrap/dist/fonts/font-awesome.min.css" rel="stylesheet">

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>

	<body style="background-color:#136a8a;text-align:center">
		<!-- Container Fluid starts -->
		<div class="container-fluid">
			<div class="row" >
                           
				<div class="col-md-push-4 col-md-4 col-sm-push-3 col-sm-6 col-sx-12">

					<!-- Header end -->
					<div class="login-container" >
						<div class="login-wrapper" style =' background-color: #FFFFFF'>
							<div id="login" class="show" text-align: center>
								<div class="login-header" style='background-color: #bed6da'>
                                                                    
                                                                       
                                                                    <h4 style='color: #000'><b>&nbsp;Toll Management System</b></h4>
								</div>
                                                                
   
								<form action="<?php echo base_url('LoginController/check');?>" method="post">
                                                                    
                                                                    
                                                                    <?php
                                                                    if ($this->session->flashdata('fail') != '') {
                                                                        
                                                                        ?>
                                                                        <br />
                                                                        <div class="alert alert-danger text-center alert-dismissible">
                                                                           
                                                                                                                            
                                                                            <strong><?php echo $this->session->flashdata('fail'); ?></strong>
                                                                        </div>
                                                                        <?php
                                                                    }
                                                                    ?>
                                                                    		
                                                                    
									<div class="form-group has-feedback">
										<label class="control-label" for="userName">User Name</label>
										<input type="text" class="form-control" name = "uname" required id="userName" placeholder="User Name" autofocus>
										<i class="fa fa-user text-info form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label class="control-label" for="passWord">Password</label>
										<input type="password" class="form-control" required name="pass" id="passWord" placeholder="*********" >
										<i class="fa fa-key text-danger form-control-feedback"></i>
									</div>
                                                                        <div class="form-group has-feedback">
                                                                            <label class="control-label" >Role</label>
                                                                                <select id="SelectClass" class="form-control" name = "role">
                                                                                        <option value="1">Super Admin</option>
                                                                                        <option value="2">Admin</option>
                                                                                        <option value="3">Operator</option>

                                                                                </select>
                                                                                
									</div>
                                                                    </br>
									<input type="submit" value="Login" class="btn btn-info btn-lg btn-block">
								</form>
                                                                
                                                                  
								<a href="#forgot-pwd" class="underline text-info">Forgot Password?</a>
                                                                <br/><br/>
                                                                
                                                                </div>
								
							

		

							<div id="forgot-pwd" class="form-action hide">
								<div class="login-header">
									<h4>Reset your Password</h4>
								</div>
								<form action="<?php echo base_url('LoginController/resetPass');?>" method="post">
									<div class="form-group has-feedback">
										<label class="control-label" for="password3">Email</label>
                                                                                        <input type="text" class="form-control" required name="email" id="password3">
										<i class="fa fa-user text-info form-control-feedback"></i>
									</div>
									
									<input type="submit" value="Reset" class="btn btn-danger btn-lg btn-block">
								</form>
								
							</div>
                                                         <div text-align: center>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;Copyright &copy; 2018 DataSoft Systems Bangladesh Limited
                                                                </div>       
                                                                

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Container Fluid ends -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="design/bower_components/bootstrap/dist/js/jquery.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="design/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

		<script type="text/javascript">
			(function($) {
				// constants
				var SHOW_CLASS = 'show',
					HIDE_CLASS = 'hide',
					ACTIVE_CLASS = 'active';

				$('a').on('click', function(e){
					e.preventDefault();
					var a = $(this),
					href = a.attr('href');

					$('.active').removeClass(ACTIVE_CLASS);
					a.addClass(ACTIVE_CLASS);

					$('.show')
					.removeClass(SHOW_CLASS)
					.addClass(HIDE_CLASS)
					.hide();

					$(href)
					.removeClass(HIDE_CLASS)
					.addClass(SHOW_CLASS)
					.hide()
					.fadeIn(550);
				});
			})(jQuery);
		</script>
	</body>

<!-- Mirrored from bootstrap.gallery/everest-v3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jul 2017 06:39:28 GMT -->
</html>
