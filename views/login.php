<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>
    <meta charset="utf-8">
    <title>Shivnaresh Sports</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="KaijuThemes">
    <link type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
    <link type='text/css'  href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet"> 
    <link href="<?php echo base_url() ?>assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">              <!-- Skylo -->
    <link href="<?php echo base_url() ?>assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/styles.css" type="text/css" rel="stylesheet"> 
    </head>
    <body class="focused-form animated-content">   
<div class="container" id="login-form">
	<a href="index.php" class="login-logo"><img src="<?php echo base_url() ?>assets/img/logo-dark.png" style="width: 165px;height: 76px;"></a>
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
				<!--Form Started-->
				<div class="panel-heading">
				   <h2></h2>
			    </div>
				<?php echo form_open("login/userlogin"); ?>		
					<div class="panel-body">
					    <?php if(!empty($error)) { ?>
							<div class="col-xs-12" id="err">
								<p style="text-align:center;color:red;" id="err_msg"><?php echo $error; ?></p>
							</div>
						 <?php } ?> 
						<div class="form-horizontal" id="validate-form">
							<div class="form-group mb-md">
		                        <div class="col-xs-12">
		                        	<div class="input-group">							
										<span class="input-group-addon">
											<i class="material-icons">account_circle</i>
										</span>
										<input type="text" class="form-control" name="email" id="email" placeholder="Email"  required>
									</div>
		                        </div>
							</div>
							<div class="form-group mb-md">
		                        <div class="col-xs-12">
		                        	<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">vpn_key</i>
										</span>
										<input type="password"  id="password" class="form-control" name="password" placeholder="Password" required>
									</div>
		                        </div>
							</div>
						</div>	
					</div>	
					<!-- End Form -->
					<div class="panel-footer">
						<div class="clearfix text-center">
						    <input type="submit" class="btn btn-primary btn-raised pull-center" name="submit" value="Log In" />
						    <span><a class="btn btn-primary btn-raised pull-center" href="<?php echo site_url('signup/index'); ?>">Signup</span></a>
						</div>
						
					</div>

					<?php echo form_close(); ?>
					
				</div>
			</div>
		</div>
</div>
<!-- Load site level scripts -->
<script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script src="<?php echo base_url() ?>assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script src="<?php echo base_url() ?>assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->
<script src="<?php echo base_url() ?>assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script src="<?php echo base_url() ?>assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script src="<?php echo base_url() ?>assets/plugins/progress-skylo/skylo.js"></script> 		<!-- Skylo -->

<script src="<?php echo base_url() ?>assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script src="<?php echo base_url() ?>assets/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

<script src="<?php echo base_url() ?>assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->

<script src="<?php echo base_url() ?>assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script src="<?php echo base_url() ?>assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script src="<?php echo base_url() ?>assets/plugins/dropdown.js/jquery.dropdown.js"></script> <!-- Fancy Dropdowns -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-material-design/js/material.min.js"></script> <!-- Bootstrap Material -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-material-design/js/ripples.min.js"></script> <!-- Bootstrap Material -->
<script src="<?php echo base_url() ?>assets/js/application.js"></script>
<script src="<?php echo base_url() ?>assets/demo/demo.js"></script>
<script src="<?php echo base_url() ?>assets/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->
    <!-- Load page level scripts-->
    <!-- End loading page level scripts-->
    </body>


</html>