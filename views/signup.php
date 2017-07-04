<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
		<div class="container">
		     <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel-heading">
						<h1>Signup New User</h1>
					</div>
					     <?php echo form_open("signup/register"); ?>
					        <?php if(!empty($error)) { ?>
							<div class="col-xs-12" id="err">
								<p style="text-align:center;color:red;" id="err_msg"><?php echo $error; ?></p>
							</div>
						 <?php } ?> 
						 
					        <div class="form-group">
						      <label for="email">Name:</label>
						      <input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
                                  <?php echo form_error('name','<span class="help-block">','</span>'); ?>
						    </div>

						    <div class="form-group">
						      <label for="email">Email:</label>
						      <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
                                  <?php echo form_error('email','<span class="help-block">','</span>'); ?>
						    </div>

						    <div class="form-group">
						      <label for="pwd">Password:</label>
						        <input type="password" class="form-control" name="password" placeholder="Password" required="">
                                <?php echo form_error('password','<span class="help-block">','</span>'); ?>
						    </div>

						    <input type="submit" class="btn btn-primary btn-raised pull-center" name="signup" value="Signup" />
					 <?php echo form_close(); ?>

                </div>

		     </div>


		</div>
</body>