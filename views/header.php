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
    <meta name="author" content="Appslure Websolution">
    <style>
       
        .progress { position:relative; width:100%; border: 1px solid #ddd; padding: 1px; border-radius: 3px; height: 20px !important;}
        .bar { background-color: #03a9f4; width:0%; height:20px !important; border-radius: 3px; }
        .percent { position:absolute; display:inline-block; top:3px; left:48%; }
       
    </style>
    <link rel="shortcut icon" href="assets/img/logo-icon-dark.png">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>

    <link type='text/css'  href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet"> 

    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">        <!-- Font Awesome -->

    <link href="assets/css/styles.css" type="text/css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link href="assets/plugins/codeprettifier/prettify.css" type="text/css" rel="stylesheet">                <!-- Code Prettifier -->
    <link href="assets/plugins/dropdown.js/jquery.dropdown.css" type="text/css" rel="stylesheet">            <!-- iCheck -->

    <link href="assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">

    <link href="assets/plugins/form-daterangepicker/daterangepicker-bs3.css" type="text/css" rel="stylesheet">    <!-- DateRangePicker -->
    <link href="assets/plugins/fullcalendar/fullcalendar.css" type="text/css" rel="stylesheet">                   <!-- FullCalendar -->
    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" type="text/css" rel="stylesheet">
    <link href="assets/less/card.less" type="text/css" rel="stylesheet"> 

    <link href="assets/plugins/chartist/dist/chartist.min.css" type="text/css" rel="stylesheet"> <!-- chartist -->
   
</head>

<!--Body Section Started-->
<body class="animated-content infobar-overlay">
       

       <!--Switcher.php-->
       <div class="demo-options">
                <div class="demo-body">
                    <div class="tabular">
                        <div class="tabular-row">
                            <div class="tabular-cell">Fixed Header</div>
                            <div class="tabular-cell demo-switches text-right">
                                <div class="togglebutton checkbox-primary">
                                    <label>
                                        <input type="checkbox" name="demo-fixedheader" />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="tabular-row">
                            <div class="tabular-cell">Boxed Layout</div>
                            <div class="tabular-cell demo-switches text-right">
                                    <div class="togglebutton toggle-primary">
                                        <label>
                                            <input type="checkbox" name="demo-layoutboxed">
                                        </label>
                                    </div>
                                </div>
                        </div>
                        <div class="tabular-row">
                            <div class="tabular-cell">Collapse Leftbar</div>
                            <div class="tabular-cell demo-switches text-right">
                                    <div class="togglebutton toggle-primary">
                                        <label>
                                            <input type="checkbox" name="demo-collapseleftbar">
                                        </label>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="demo-body">
                    <div class="option-title">Brand</div>
                    <ul id="demo-header-color" class="demo-color-list">
                        <li><span data-addclass="navbar-brand-default" class="brand-switcher demo-default"></span></li>
                        <li><span data-addclass="navbar-brand-primary" class="brand-switcher demo-primary"></span></li>
                        <li><span data-addclass="navbar-brand-success" class="brand-switcher demo-success"></span></li> 
                        <li><span data-addclass="navbar-brand-danger" class="brand-switcher demo-danger"></span></li>
                        <li><span data-addclass="navbar-brand-warning" class="brand-switcher demo-warning"></span></li>
                        <li><span data-addclass="navbar-brand-info" class="brand-switcher demo-info"></span></li> 
                        <li><span data-addclass="navbar-brand-inverse" class="brand-switcher demo-inverse"></span></li> 
                    </ul>
                </div>

                <div class="demo-body">
                    <div class="option-title">Topnav</div>
                    <ul id="demo-header-color" class="demo-color-list">
                        <li><span data-addclass="navbar-cyan" class="topnav-switcher demo-cyan"></span></li>
                        <li><span data-addclass="navbar-light-blue" class="topnav-switcher demo-light-blue"></span></li>
                        <li><span data-addclass="navbar-blue" class="topnav-switcher demo-blue"></span></li>
                        <li><span data-addclass="navbar-indigo" class="topnav-switcher demo-indigo"></span></li>
                        <li><span data-addclass="navbar-deep-purple" class="topnav-switcher demo-deep-purple"></span></li> 
                        <li><span data-addclass="navbar-purple" class="topnav-switcher demo-purple"></span></li> 
                        <li><span data-addclass="navbar-pink" class="topnav-switcher demo-pink"></span></li> 
                        <li><span data-addclass="navbar-red" class="topnav-switcher demo-red"></span></li>
                        <li><span data-addclass="navbar-teal" class="topnav-switcher demo-teal"></span></li>
                        <li><span data-addclass="navbar-green" class="topnav-switcher demo-green"></span></li>
                        <li><span data-addclass="navbar-light-green" class="topnav-switcher demo-light-green"></span></li>
                        <li><span data-addclass="navbar-orange" class="topnav-switcher demo-orange"></span></li>               
                        <li><span data-addclass="navbar-deep-orange" class="topnav-switcher demo-deep-orange"></span></li>
                        
                        <li><span data-addclass="navbar-bluegray" class="topnav-switcher demo-bluegray"></span></li>
                        
                        
                        <li><span data-addclass="navbar-gray" class="topnav-switcher demo-gray"></span></li> 
                        
                        <li><span data-addclass="navbar-default" class="topnav-switcher demo-default"></span></li>
                        <li><span data-addclass="navbar-bleachedcedar" class="topnav-switcher demo-bleachedcedar"></span></li>
                        <li><span data-addclass="navbar-brown" class="topnav-switcher demo-brown"></span></li>
                    </ul>
                </div>

                <div class="demo-body">
                    <div class="option-title">Sidebar</div>
                    <ul id="demo-sidebar-color" class="demo-color-list">
                        <li><span data-addclass="sidebar-cyan" class="leftbar-switcher demo-cyan"></span></li>
                        <li><span data-addclass="sidebar-light-blue" class="leftbar-switcher demo-light-blue"></span></li>
                        <li><span data-addclass="sidebar-blue" class="leftbar-switcher demo-blue"></span></li>
                        <li><span data-addclass="sidebar-indigo" class="leftbar-switcher demo-indigo"></span></li>
                        <li><span data-addclass="sidebar-deep-purple" class="leftbar-switcher demo-deep-purple"></span></li> 
                        <li><span data-addclass="sidebar-purple" class="leftbar-switcher demo-purple"></span></li> 
                        <li><span data-addclass="sidebar-pink" class="leftbar-switcher demo-pink"></span></li> 
                        <li><span data-addclass="sidebar-red" class="leftbar-switcher demo-red"></span></li>
                        <li><span data-addclass="sidebar-teal" class="leftbar-switcher demo-teal"></span></li>
                        <li><span data-addclass="sidebar-green" class="leftbar-switcher demo-green"></span></li>
                        <li><span data-addclass="sidebar-light-green" class="leftbar-switcher demo-light-green"></span></li>
                        <li><span data-addclass="sidebar-orange" class="leftbar-switcher demo-orange"></span></li>               
                        <li><span data-addclass="sidebar-deep-orange" class="leftbar-switcher demo-deep-orange"></span></li>
                        
                        <li><span data-addclass="sidebar-bluegray" class="leftbar-switcher demo-bluegray"></span></li>
                        
                        
                        <li><span data-addclass="sidebar-gray" class="leftbar-switcher demo-gray"></span></li> 
                        
                        <li><span data-addclass="sidebar-default" class="leftbar-switcher demo-default"></span></li>
                        <li><span data-addclass="sidebar-bleachedcedar" class="leftbar-switcher demo-bleachedcedar"></span></li>
                        <li><span data-addclass="sidebar-brown" class="leftbar-switcher demo-brown"></span></li>
                    </ul>
                </div>
       </div>


       <!--Footer Script Attached-->


    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <!-- Load jQuery -->
    <script src="assets/js/jqueryui-1.10.3.min.js"></script>
    <!-- Load jQueryUI -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Load Bootstrap -->
    <script src="assets/js/enquire.min.js"></script>
    <!-- Load Enquire -->

    <script src="assets/plugins/velocityjs/velocity.min.js"></script>
    <!-- Load Velocity for Animated Content -->
    <script src="assets/plugins/velocityjs/velocity.ui.min.js"></script>

    <script src="assets/plugins/progress-skylo/skylo.js"></script>
    <!-- Skylo -->

    <script src="assets/plugins/wijets/wijets.js"></script>
    <!-- Wijet -->

    <script src="assets/plugins/sparklines/jquery.sparklines.min.js"></script>
    <!-- Sparkline -->

    <script src="assets/plugins/codeprettifier/prettify.js"></script>
    <!-- Code Prettifier  -->

    <script src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>
    <!-- Bootstrap Tabdrop -->

    <script src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->

    <script src="assets/plugins/dropdown.js/jquery.dropdown.js"></script>
    <!-- Fancy Dropdowns -->
    <script src="assets/plugins/bootstrap-material-design/js/material.min.js"></script> <!-- Bootstrap Material -->
    <script src="assets/plugins/bootstrap-material-design/js/ripples.min.js"></script> <!-- Bootstrap Material -->

    <script src="assets/js/application.js"></script>
    <script src="assets/demo/demo.js"></script>
    <script src="assets/demo/demo-switcher.js"></script>

    <!-- End loading site level scripts -->

        <!-- Load page level scripts-->

    <!-- Charts -->
    <script src="assets/plugins/charts-flot/jquery.flot.min.js"></script>                 <!-- Flot Main File -->
    <script src="assets/plugins/charts-flot/jquery.flot.pie.min.js"></script>             <!-- Flot Pie Chart Plugin -->
    <script src="assets/plugins/charts-flot/jquery.flot.stack.min.js"></script>           <!-- Flot Stacked Charts Plugin -->
    <script src="assets/plugins/charts-flot/jquery.flot.resize.min.js"></script>          <!-- Flot Responsive -->
    <script src="assets/plugins/charts-flot/jquery.flot.tooltip.min.js"></script>         <!-- Flot Tooltips -->
    <script src="assets/plugins/charts-flot/jquery.flot.spline.js"></script>              <!-- Flot Curved Lines -->
    <script src="assets/plugins/easypiechart/jquery.easypiechart.min.js"></script>        <!-- EasyPieChart-->
    <script src="assets/plugins/curvedLines-master/curvedLines.js"></script>              <!-- marvinsplines -->

    <script src="assets/plugins/form-daterangepicker/moment.min.js"></script>             <!-- Moment.js for Date Range Picker -->

                     <!-- Date Range Picker -->
    <script src="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>               <!-- Datepicker -->
    <!-- <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> --> <!-- DateTime Picker -->

    <!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>   -->    <!-- jVectorMap -->
    <!-- <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>  --> <!--World Map-->
    <script src="assets/plugins/chartist/dist/chartist.min.js"></script> <!-- chartist -->
    <script src="assets/demo/demo-formvalidation.js"></script>

    <script src="assets/plugins/datatables/jquery.dataTables.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>

    <script src="assets/plugins/form-jasnyupload/fileinput.min.js"></script>                        <!-- File Input -->

    <script src="assets/plugins/form-daterangepicker/moment.min.js"></script>                       <!-- Moment.js for Date Range Picker -->

    <script src="assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js"></script>             <!-- Color Picker -->

    <script src="assets/plugins/form-daterangepicker/daterangepicker.js"></script>                  <!-- Date Range Picker -->
    <script src="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>                 <!-- Datepicker -->
    <script src="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js"></script>                 <!-- Timepicker -->
    <script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> <!-- DateTime Picker -->

    <script src="assets/plugins/clockface/js/clockface.js"></script>                                    <!-- Clockface -->


    <script src="assets/demo/demo-pickers.js"></script>

    <script src="assets/demo/demo-datatables.js"></script>

   <script src="assets/demo/demo-index.js"></script>                                     
   <!-- Initialize scripts for this page-->
   <!-- End loading page level scripts-->
</body>
</html>



