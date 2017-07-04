<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Maverickinfra</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-touch-fullscreen" content="yes">
      <meta name="description" content="Paper - Material Admin Theme">
      <meta name="author" content="Maverick Digital">    
            <!--Header Script Started-->

            <!--include 'header_script.php';-->

            <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logo-icon-dark.png">
            <link type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
            <link type='text/css'  href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
            <link href="<?php echo base_url() ?>assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
            <!-- Font Awesome -->
            <link href="<?php echo base_url() ?>assets/css/styles.css" type="text/css" rel="stylesheet">
            <!-- Core CSS with all styles -->
            <link href="<?php echo base_url() ?>assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">
            <!-- Code Prettifier -->
            <link href="<?php echo base_url() ?>assets/plugins/dropdown.js/jquery.dropdown.css" type="text/css" rel="stylesheet">
            <!-- iCheck -->
            <link href="<?php echo base_url() ?>assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">
            <link href="<?php echo base_url() ?>assets/plugins/form-daterangepicker/daterangepicker-bs3.css" type="text/css" rel="stylesheet">
            <!-- DateRangePicker -->
            <link href="<?php echo base_url() ?>assets/plugins/fullcalendar/fullcalendar.css" type="text/css" rel="stylesheet">
            <!-- FullCalendar -->
            <link href="<?php echo base_url() ?>assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" type="text/css" rel="stylesheet">
            <link href="<?php echo base_url() ?>assets/less/card.less" type="text/css" rel="stylesheet">
            <link href="<?php echo base_url() ?>assets/plugins/chartist/dist/chartist.min.css" type="text/css" rel="stylesheet">
            
            <!-- chartist -->

      <!--End of header Script-->
   </head>
   <body class="animated-content infobar-overlay">
      <!--Top Navigation Started-->
      <header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">
         <!-- <div id="page-progress-loader" class="show"></div> -->
         <div class="logo-area">
            <a class="navbar-brand navbar-brand-primary" href="home.php">
            <img class="show-on-collapse img-logo-white" alt="Paper" src="<?php echo base_url() ?>assets/img/logo-icon-white.png">
            <img class="show-on-collapse img-logo-dark" alt="Paper" src="<?php echo base_url() ?>assets/img/logo-icon-dark.png">
            <img class="img-white" alt="Paper" src="<?php echo base_url() ?>assets/img/logo-dark.png">
            <img class="img-dark" alt="Paper" src="<?php echo base_url() ?>assets/img/logo-dark.png">
            </a>
            <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg stay-on-search">
               <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
                  <span class="icon-bg">
                  <i class="material-icons">menu</i>
                  </span>
               </a>
            </span>
            <span id="trigger-search" class="toolbar-trigger toolbar-icon-bg ov-h">
               <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
                  <span class="icon-bg">
                  <i class="material-icons">search</i>
                  </span>
               </a>
            </span>
            <div id="search-box">
               <input class="form-control" type="text" placeholder="Search..." id="search-input"></input>
            </div>
         </div>
         <!-- logo-area -->
         <ul class="nav navbar-nav toolbar pull-right">
            <li class="toolbar-icon-bg appear-on-search ov-h" id="trigger-search-close">
               <a class="toggle-fullscreen"><span class="icon-bg">
               <i class="material-icons">close</i>
               </span></i></a>
            </li>
            <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
               <a href="#" class="toggle-fullscreen"><span class="icon-bg">
               <i class="material-icons">fullscreen</i>
               </span></i></a>
            </li>
         </ul>
      </header>
      <!--End of Top Navigation-->

      <!--Before main Content-->
      <div id="wrapper">
         <div id="layout-static">

            <!--Navigation Started-->

            <div class="static-sidebar-wrapper sidebar-blue">
               <div class="static-sidebar">
                  <div class="sidebar">
                     <div class="widget" id="widget-profileinfo">
                        <div class="widget-body">
                           <div class="userinfo ">
                              <div class="avatar pull-left">
                                 <img src="<?php echo base_url() ?>assets/demo/avatar/avatar_15.png" class="img-responsive img-circle"> 
                              </div>
                              <div class="info">
                                 <span class="username"><?php //echo ucfirst($name); ?></span>
                              </div>
                              <div class="acct-dropdown clearfix dropdown">
                                 <span class="pull-left"><span class="online-status online"></span>Online</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="widget stay-on-collapse" id="widget-sidebar">
                        <!--Navigation Menus-->
                        <nav role="navigation" class="widget-body">
                           <ul class="acc-menu">
                              <li class="nav-separator"><span>Navigation</span></li>
                              <li><a class="withripple" href="home.php"><span class="icon">
                                 <i class="material-icons">home</i></span><span>Dashboard</span></a>
                              </li>
                              <!-- Customize Nav -->
                              <li>
                                 <a class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">account_circle</i></span><span>Users</span></a>
                                 <ul class="acc-menu">
                                    <li><a class="withripple" href="add_user.php">Add User</a></li>
                                    <li><a class="withripple" href="<?php echo site_url('adminuser/index'); ?>">List User</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">list</i></span><span>Services</span></a>
                                 <ul class="acc-menu">
                                    <li><a class="withripple" href="add_service.php">Add Services</a></li>
                                    <li><a class="withripple" href="listservice.php">List Services</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">list</i></span><span>Products</span></a>
                                 <ul class="acc-menu">
                                    <li><a class="withripple" href="add_product.php">Add Products</a></li>
                                    <li><a class="withripple" href="listproduct.php">List Products</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">list</i></span><span>Team</span></a>
                                 <ul class="acc-menu">
                                    <li><a class="withripple" href="add_member.php">Add Member</a></li>
                                    <li><a class="withripple" href="listmember.php">List Member</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">list</i></span><span>Clients</span></a>
                                 <ul class="acc-menu">
                                    <li><a class="withripple" href="add_client.php">Add Client</a></li>
                                    <li><a class="withripple" href="listclient.php">List Client</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a  class="withripple" href="javascript:;"><span class="icon"><i class="material-icons">list</i></span><span>Portfolio Category</span></a>
                                 <ul class="acc-menu">
                                    <li><a class="withripple" href="add_category.php">Add Category</a></li>
                                    <li><a class="withripple" href="listcategory.php">List Category</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a  class="withripple" href="javascript:void(0)"><span class="icon"><i class="material-icons">collections</i></span><span>Portfolio Gallery</span></a>
                                 <ul class="acc-menu">
                                    <li><a class="withripple" href="add_gallery.php">Add Portfolio Gallery</a></li>
                                    <li><a class="withripple" href="listgallery.php">List Portfolio Gallery</a></li>
                                 </ul>
                              </li>
                              
                              <li><a  class="withripple" href="logout.php"><span class="icon"><i class="material-icons">lock</i></span><span>Logout</span></a></li>
                           </ul>
                        </nav>
                        <!--End of Navigation Menus-->
                     </div>
                  </div>
               </div>
            </div>
            <!--Contect Section Started-->
            <div class="static-content-wrapper">
              <div class="static-content">
               <div class="page-content">
                  <ol class="breadcrumb">
                     <li><a href="index-2.html">Home</a></li>
                     <li><a href="#">User</a></li>
                     <li class="active"><a href="#">Edit</a></li>
                  </ol>
                  <div class="col-lg-12">
                     <section class="panel">
                        <header class="panel-heading">
                           <h2 class="panel-title text-success">Edit Users</h2>
                        </header>
                     </section>
                  </div>
                  <div class="container-fluid">
                     <div data-widget-group="group1">
                        <div class="row">
                           <div class="col-sm-12">
                              <div class="col-xs-12" id="err" style="display: none;">
                                 <p style="color:red; font-size: 20px;" id="err_msg"></p>
                              </div>
                              <form name="form" class="form-horizontal" method="POST" action="update_user.php">
                         
                         <input type="hidden" name="id" value="<?php //echo $id; ?>">
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label" for="field-1">User Name</label>
                                    <div class="col-md-6">
                           
                                       <input type="text" id="user_name" name="user_name" value="<?php //echo $fetch['user_name'] ?>" class="form-control" placeholder="User Name" required>
                                       
                                    </div>
                                    <div class="col-md-3 has-success"><p class="help-block"><i class="fa fa-check"></i> Great success!</p></div>
                                 </div>
                         <div class="form-group">
                                    <label class="col-sm-2 control-label" for="field-1">User Email</label>
                                    <div class="col-md-6">
                                       <input type="email" id="user_email" name="user_email" value="<?php //echo $fetch['user_email'] ?>" class="form-control" placeholder="User Email" required> 
                                    </div>
                                    <div class="col-md-3 has-success"><p class="help-block"><i class="fa fa-check"></i> Great success!</p></div>
                                 </div>
                         <div class="form-group">
                                    <label class="col-sm-2 control-label" for="field-1">User Password</label>
                                    <div class="col-md-6">
                                      <input type="text" id="user_password" name="user_password" value="<?php //echo $fetch['password'] ?>" class="form-control" placeholder="User Email" required> 
                                    </div>
                                    <div class="col-md-3 has-success"><p class="help-block"><i class="fa fa-check"></i> Great success!</p></div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-sm-2 control-label">Status</label>
                                    <div class="col-sm-10">
                                         <select name="status" id="status" class="form-control">
                               <?php //if(empty($fetch['user_status'])){ ?>
                                <option value="" selected>Select Status</option>
                                          <option value="Active">Active</option>
                                          <option value="Inactive">Inactive</option>    
                               <?php //} else{ ?>
                                <option value="Active" <?php //if($fetch['user_status'] == 'Active'){ echo 'selected="selected"';} ?> >Active</option>
                                          <option value="Inactive" <?php //if($fetch['user_status'] == 'Inactive'){ echo 'selected="selected"';} ?>>Inactive</option>
                               <?php //} ?>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <div class="col-sm-10 text-center">
                                       <input type="submit" name="submit" id="submit" class="btn btn-success btn-raised"/>  
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- .container-fluid -->
               </div>
               <!-- #page-content -->
            </div>
               <!-- PAGE FOOTER -->
               <footer role="contentinfo">
                  <div class="clearfix">
                     <ul class="list-unstyled list-inline pull-left">
                        <li>
                           <h6 style="margin: 0;">&copy; Maverickindia. All Rights Reserved.</h6>
                        </li>
                     </ul>
                  </div>
               </footer>
            </div>
         </div>
      </div>
      <!--End of Content Section-->

      <!-- Das FAB -->
      <button class="btn btn-primary btn-fab demo-switcher-fab" data-toggle="tooltip" data-placement="top" title="Click for Settings"><i class="material-icons">settings</i></button>
      <script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.min.js"></script>
      <!-- Load jQuery -->
      <script src="<?php echo base_url() ?>assets/js/jqueryui-1.10.3.min.js"></script>
      <!-- Load jQueryUI -->
      <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
      <!-- Load Bootstrap -->
      <script src="<?php echo base_url() ?>assets/js/enquire.min.js"></script>
      <!-- Load Enquire -->
      <script src="<?php echo base_url() ?>assets/plugins/velocityjs/velocity.min.js"></script>
      <!-- Load Velocity for Animated Content -->
      <script src="<?php echo base_url() ?>assets/plugins/velocityjs/velocity.ui.min.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/progress-skylo/skylo.js"></script>
      <!-- Skylo -->
      <script src="<?php echo base_url() ?>assets/plugins/wijets/wijets.js"></script>
      <!-- Wijet -->
      <script src="<?php echo base_url() ?>assets/plugins/sparklines/jquery.sparklines.min.js"></script>
      <!-- Sparkline -->
      <script src="<?php echo base_url() ?>assets/plugins/codeprettifier/prettify.js"></script>
      <!-- Code Prettifier  -->
      <script src="<?php echo base_url() ?>assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>
      <!-- Bootstrap Tabdrop -->
      <script src="<?php echo base_url() ?>assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script>
      <!-- nano scroller -->
      <script src="<?php echo base_url() ?>assets/plugins/dropdown.js/jquery.dropdown.js"></script>
      <!-- Fancy Dropdowns -->
      <script src="<?php echo base_url() ?>assets/plugins/bootstrap-material-design/js/material.min.js"></script> <!-- Bootstrap Material -->
      <script src="<?php echo base_url() ?>assets/plugins/bootstrap-material-design/js/ripples.min.js"></script> <!-- Bootstrap Material -->
      <script src="<?php echo base_url() ?>assets/js/application.js"></script>
      <script src="<?php echo base_url() ?>assets/demo/demo.js"></script>
      <script src="<?php echo base_url() ?>assets/demo/demo-switcher.js"></script>
      <!-- End loading site level scripts -->
      <!-- Load page level scripts-->
      <!-- Charts -->
      <script src="<?php echo base_url() ?>assets/plugins/charts-flot/jquery.flot.min.js"></script>                 <!-- Flot Main File -->
      <script src="<?php echo base_url() ?>assets/plugins/charts-flot/jquery.flot.pie.min.js"></script>             <!-- Flot Pie Chart Plugin -->
      <script src="<?php echo base_url() ?>assets/plugins/charts-flot/jquery.flot.stack.min.js"></script>           <!-- Flot Stacked Charts Plugin -->
      <script src="<?php echo base_url() ?>assets/plugins/charts-flot/jquery.flot.resize.min.js"></script>          <!-- Flot Responsive -->
      <script src="<?php echo base_url() ?>assets/plugins/charts-flot/jquery.flot.tooltip.min.js"></script>         <!-- Flot Tooltips -->
      <script src="<?php echo base_url() ?>assets/plugins/charts-flot/jquery.flot.spline.js"></script>              <!-- Flot Curved Lines -->
      <script src="<?php echo base_url() ?>assets/plugins/easypiechart/jquery.easypiechart.min.js"></script>        <!-- EasyPieChart-->
      <script src="<?php echo base_url() ?>assets/plugins/curvedLines-master/curvedLines.js"></script>              <!-- marvinsplines -->
      <script src="<?php echo base_url() ?>assets/plugins/form-daterangepicker/moment.min.js"></script>             <!-- Moment.js for Date Range Picker -->
      <!-- Date Range Picker -->
      <script src="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>               <!-- Datepicker -->
      <!-- <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> --> <!-- DateTime Picker -->
      <!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>   -->    <!-- jVectorMap -->
      <!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>  --> <!--World Map-->
      <script src="<?php echo base_url() ?>assets/plugins/chartist/dist/chartist.min.js"></script> <!-- chartist -->
      <script src="<?php echo base_url() ?>assets/demo/demo-formvalidation.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/datatables/dataTables.bootstrap.js"></script>
      <script src="<?php echo base_url() ?>assets/plugins/form-jasnyupload/fileinput.min.js"></script>                        <!-- File Input -->
      <script src="<?php echo base_url() ?>assets/plugins/form-daterangepicker/moment.min.js"></script>                       <!-- Moment.js for Date Range Picker -->
      <script src="<?php echo base_url() ?>assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js"></script>         <!-- Color Picker -->
      <script src="<?php echo base_url() ?>assets/plugins/form-daterangepicker/daterangepicker.js"></script>               <!-- Date Range Picker -->
      <script src="<?php echo base_url() ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>             <!-- Datepicker -->
      <script src="<?php echo base_url() ?>assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js"></script>             <!-- Timepicker -->
      <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> <!-- DateTime Picker -->
      <script src="<?php echo base_url() ?>assets/plugins/clockface/js/clockface.js"></script>                             <!-- Clockface -->
      <script src="<?php echo base_url() ?>assets/demo/demo-pickers.js"></script>
      <script src="<?php echo base_url() ?>assets/demo/demo-datatables.js"></script>
      <script src="<?php echo base_url() ?>assets/demo/demo-index.js"></script>                                     
      <!-- Initialize scripts for this page-->
      <!-- End loading page level scripts-->
   </body>
</html>