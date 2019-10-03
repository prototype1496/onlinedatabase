
<?php
include '../../../OnlineDataBase/controller/Session.php';
     require_once '../../DataBaseConnection/dataBaseConnection.php';
   
     require_once '../../Model/AdminPresidentModel.php';
      $user = new AdminPresidentModel();
      

  
 
   
 
?>
<!DOCTYPE html>
<html class=" js no-touch no-mobile no-phone no-tablet mobilegradea">
   <!--<![endif]--><!-- Specific Page Data --><!-- End of Data --><head>
    <meta charset="utf-8">
    <title>Profile</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid">
    <meta name="description" content="User Profile Pages - Responsive Admin HTML Template">
    <meta name="author" content="Venmond">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">
    
    
    <!-- CSS -->
       
    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="../../css/profilpiccss/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/profilpiccss/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
    <link href="../../css/profilpiccss/css/font-entypo.css" rel="stylesheet" type="text/css">    

    <!-- Fonts CSS -->
    <link href="../../css/profilpiccss/css/fonts.css" rel="stylesheet" type="text/css">
               
    <!-- Plugin CSS -->
    <link href="../../css/profilpiccss/plugins/jquery-ui/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    
    <link href="../../css/profilpiccss/plugins/prettyPhoto-plugin/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="../../css/profilpiccss/plugins/isotope/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="../../css/profilpiccss/plugins/pnotify/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">    
	<link href="../../css/profilpiccss/plugins/google-code-prettify/prettify.css" rel="stylesheet" type="text/css"> 
   
         
    <link href="../../css/profilpiccss/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="../../css/profilpiccss/plugins/tagsInput/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="../../css/profilpiccss/plugins/bootstrap-switch/bootstrap-switch.css" rel="stylesheet" type="text/css">    
    <link href="../../css/profilpiccss/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
    <link href="../../css/profilpiccss/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="../../css/profilpiccss/plugins/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css">            

	<!-- Specific CSS -->
	    
     
    <!-- Theme CSS -->
    <link href="../../css/profilpiccss/css/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="../../css/profilpiccss/css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    


        
    <!-- Responsive CSS -->
        	<link href="../../css/profilpiccss/css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 

	   <link href="../../MDB/css/mdb.min.css" rel="stylesheet" type="text/css"> 
 
 
    <!-- for specific page in style css -->
        
    <!-- for specific page responsive in style css -->
        
    
    <!-- Custom CSS -->
<!--    <link href="custom/custom.css" rel="stylesheet" type="text/css">-->



    <!-- Head SCRIPTS -->
<!--    <script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script type="text/javascript" src="js/modernizr.js"></script> -->
    <script type="text/javascript" src="../../css/profilpiccss/js/mobile-detect.min.js"></script> 
    <script type="text/javascript" src="../../css/profilpiccss/js/mobile-detect-modernizr.js"></script> 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->
    
</head>    

<body id="pages" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix breakpoint-975 nav-left-medium sticky-menu-active" data-active="pages " data-smooth-scrolling="1" style="padding-top: 63px;">     
     
<div class="vd_body">
<!-- Header Start -->
  <header class="header-1" id="header">
      <div class="vd_top-menu-wrapper">
        <div class="container ">
          <div class="vd_top-nav vd_nav-width  ">
          <div class="vd_panel-header">
          	<div class="logo">
                    <a href="index.php"><img alt="logo" src="../../css/profilpiccss/img/logo.png"></a>
            </div>
            <!-- logo -->
            <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation." data-step="1">
            		                	<span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Medium Nav Toggle" data-action="nav-left-medium">
	                    <i class="fa fa-bars"></i>
                    </span>
                                		                    
<!--    comback and remover the java script            	<span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom" data-original-title="Small Nav Toggle" data-action="nav-left-small">
	                    <i class="fa fa-ellipsis-v"></i>
                    </span> -->
                                       
            </div>
            <div class="vd_panel-menu left-pos visible-sm visible-xs">
                                 
                        <span class="menu" data-action="toggle-navbar-left">
                            <i class="fa fa-ellipsis-v"></i>
                        </span>  
                            
                              
            </div>
            <div class="vd_panel-menu visible-sm visible-xs">
                	<span class="menu visible-xs" data-action="submenu">
	                    <i class="fa fa-bars"></i>
                    </span>        
                          
                        <span class="menu visible-sm visible-xs" data-action="toggle-navbar-right">
                            <i class="fa fa-comments"></i>
                        </span>                   
                   	 
            </div>                                     
            <!-- vd_panel-menu -->
          </div>
          <!-- vd_panel-header -->
            
          </div>    
          <div class="vd_container">
          	<div class="row">
            	<div class="col-sm-5 col-xs-12">
            		
<div class="vd_menu-search">
  <form id="search-box" method="post" action="#">
    <input name="search" class="vd_menu-search-text width-60" placeholder="Search" type="text">
    <div class="vd_menu-search-category"> <span data-action="click-trigger"> <span class="separator"></span> <span class="text">Category</span> <span class="icon"> <i class="fa fa-caret-down"></i></span> </span>
      <div class="vd_mega-menu-content width-xs-2 center-xs-2 right-sm" data-action="click-target" style="display: none;">
        <div class="child-menu">
          <div class="content-list content-menu content">
            <ul class="list-wrapper">
              <li>
                <label>
                  <input value="all-files" type="checkbox">
                  <span>First Name</span></label>
              </li>
              <li>
                <label>
                  <input value="photos" type="checkbox">
                  <span>Last Name</span></label>
              </li>
              <li>
                <label>
                  <input value="illustrations" type="checkbox">
                  <span>Gender</span></label>
              </li>
              <li>
                <label>
                  <input value="video" type="checkbox">
                  <span>Religon</span></label>
              </li>
            
            </ul>
          </div>
        </div>
      </div>
    </div>
    <span class="vd_menu-search-submit"><i class="fa fa-search"></i> </span>
  </form>
</div>
                </div>
                <div class="col-sm-7 col-xs-12">
              		<div class="vd_mega-menu-wrapper">
                    	<div class="vd_mega-menu pull-right">
            				<ul class="mega-ul">
    <li id="top-menu-1" class="one-icon mega-li"> 
      <a href="index.php" class="mega-link" data-action="click-trigger">
    	<span class="mega-icon"><i class="fa fa-users"></i></span> 
		<span class="badge vd_bg-red">1</span>        
      </a>
      <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 right-xs left-sm" data-action="click-target" style="display: none;">
        <div class="child-menu">  
           <div class="title"> 
           	   Membership Requests
               <div class="vd_panel-menu">
                     <span data-original-title="Find User" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-search"></i>
                    </span>                 
                     <span data-original-title="Message Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                                                                              
                </div>
           </div>                 
		   <div class="content-grid column-xs-2 column-sm-3 height-xs-4">	
           <div data-rel="scroll" class="mCustomScrollbar _mCS_1" style="overflow: hidden;"><div class="mCustomScrollBox mCS-light" id="mCSB_1" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;"><div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">
                       <ul class="list-wrapper"></ul>    

               </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
               <div class="closing text-center" style="">
               		<a href="#">See All Requests <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content --> 
    </li>
      
    <li id="top-menu-3" class="one-icon mega-li"> 
      <a href="index.php" class="mega-link" data-action="click-trigger">
    	<span class="mega-icon"><i class="fa fa-globe"></i></span> 
<!--		<span class="badge vd_bg-red">51</span>     THIS IS FOR SHOWING THE NUMBER OF NOTIFICATIONS   -->
      </a>
      <div class="vd_mega-menu-content  width-xs-3 width-sm-4  center-xs-3 left-sm" data-action="click-target" style="display: none;">
        <div class="child-menu">  
           <div class="title"> 
           		Notifications 
               <div class="vd_panel-menu">
                     <span data-original-title="Notification Setting" data-toggle="tooltip" data-placement="bottom" class="menu">
                        <i class="fa fa-cog"></i>
                    </span>                   
<!--                     <span class="text-menu" data-original-title="Settings" data-toggle="tooltip" data-placement="bottom">
                        Settings
                    </span> -->                                                              
                </div>
           </div>                 
		   <div class="content-list">	
           	   <div data-rel="scroll" class="mCustomScrollbar _mCS_3" style="overflow: hidden;"><div class="mCustomScrollBox mCS-light" id="mCSB_3" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;"><div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">	
               <ul class="list-wrapper pd-lr-10">

               </ul>
               </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
               <div class="closing text-center" style="">
               		<a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content -->         
    </li>  
     
    <li id="top-menu-profile" class="profile mega-li"> 
        <a href="#" class="mega-link" data-action="click-trigger"> 
            <span class="mega-image">
                <img src="../../profile_uploads/<?php echo ($_SESSION['user_pic']);?>" alt="profile pic">               
            </span>
            <span class="mega-name">
                
<!--                PHP CODE FOR DESPLAYING THE USER-->
                
                <?php echo ($_SESSION['Type']); ?> <i class="fa fa-caret-down fa-fw"></i> 
            </span>
        </a> 
      <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm" data-action="click-target" style="display: none;">
        <div class="child-menu"> 
        	<div class="content-list content-menu">
                <ul class="list-wrapper pd-lr-10">
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">View Profile</div> </a> </li>
                              
                    <li class="line"></li>                
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-cogs"></i></div> <div class="menu-text">Settings</div> </a> </li>
                    <li> <a href="#"> <div class="menu-icon"><i class="  fa fa-key"></i></div> <div class="menu-text">Lock</div> </a> </li>
                    <li> <a href="../../Controller/Logout.php"> <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>  <div class="menu-text">Sign Out</div> </a> </li>
                    <li class="line"></li>                
                    <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-question-circle"></i></div> <div class="menu-text">Help</div> </a> </li>
                    <li> <a href="#"> <div class="menu-icon"><i class=" glyphicon glyphicon-bullhorn"></i></div> <div class="menu-text">Report a Problem</div> </a> </li>              
                </ul>
            </div> 
        </div> 
      </div>     
  
    </li>               
 
	</ul>
<!-- Head menu search form ends -->                         
                        </div>
                    </div>
                </div>

            </div>
          </div>
        </div>
        <!-- container --> 
      </div>
      <!-- vd_primary-menu-wrapper --> 

  </header>
  <!-- Header Ends --> 
<div class="content">
  <div class="container">
    <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">
	
	<div class="navbar-menu clearfix">
        <div class="vd_panel-menu hidden-xs">
            <span data-original-title="Expand All" data-toggle="tooltip" data-placement="bottom" data-action="expand-all" class="menu" data-intro="<strong>Expand Button</strong><br/>To expand all menu on left navigation menu." data-step="4">
                <i class="fa fa-sort-amount-asc"></i>
            </span>                   
        </div>
    	<h3 class="menu-title hide-nav-medium hide-nav-small">User Management</h3>
        <div class="vd_menu">
        	 <ul>
    <li>
    	<a href="#" data-action="click-trigger">
        	<span class="menu-icon"><i class="fa fa-dashboard"></i></span> 
            <span class="menu-text">Dashboard</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"></span></span>
       	</a>
     
    </li>  
       
    <li>
    	<a href="#" data-action="click-trigger">
        	<span class="menu-icon"><i class="fa fa-users"> </i></span> 
            <span class="menu-text">User Management</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu" data-action="click-target" style="display: none;">
            <ul>  
                <li>
                    <a href="addUser3.php">
                        <span class="menu-text">Add User</span>  
                    </a>
                </li> 
                <li>
                    <a href="#">
                        <span class="menu-text">View Users</span>  
						                                   
                    </a>
                </li> 
                
                  <li>              <a href="membersPrivalges.php">
                                    <span class="menu-text">Member Privileges</span>  

                                                    </a>
                                                </li>   
                                                <li>
                                                    <a href="ActivateMember.php">
                                                        <span class="menu-text">Activate User</span>  

                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="DeActivateMember.php">
                                                        <span class="menu-text">Deactivate User</span>  

                                                    </a>
                                                </li>  
                
                
            </ul>   
      	</div>
    </li> 
    <li>
    	<a href="javascript:void(0);" data-action="click-trigger">
        	<span class="menu-icon entypo-icon"><i class="fa fa-user"> </i></span> 
            <span class="menu-text">Member Management</span>  
            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
       	</a>
     	<div class="child-menu" data-action="click-target" style="display: none;">
            <ul>  
                <li>
                    <a href="AddUser_2.php">
                        <span class="menu-text">Add Member</span>  
                    </a>
                </li> 
                <li>
                    <a href="viewMembersList.php">
                        <span class="menu-text">View Members</span>                                      
                    </a>
                </li>                                
        
                                                                                                                                                                                                                          
            </ul>   
      	</div>
    </li>               
      
                 
</ul>
<!-- Head menu search form ends -->         </div>             
    </div>
    <div class="navbar-spacing clearfix">
    </div>
    <div class="vd_menu vd_navbar-bottom-widget">
        <ul>
            <li>
                <a href="../../Controller/Logout.php">
                    <span class="menu-icon"><i class="fa fa-sign-out"></i></span>          
                    <span class="menu-text">Logout</span>             
                </a>
                
            </li>
        </ul>
    </div>     
</div>    
       
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper" style="min-height: 1059px;">
      <div class="vd_container" style="min-height: 1059px;">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class=" animated slideInDown vd_panel-header">
              <ul class="breadcrumb">
                  <li><a href="presidentAdminPanel.php">Home</a> </li>
               
                <li class="active">President's Profile Pages</li>
              </ul>
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step="5" data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
 
            </div>
          </div>
          <div class="vd_title-section clearfix">
            <div class="animated slideInDown  vd_panel-header no-subtitle">
              <h1><?php echo ($_SESSION['Type']);?>s Profile</h1>
            </div>
          </div>
          <div class=" vd_content-section clearfix">
            <div class="row">
              <div class="col-sm-3">
                <div  class="animated slideInLeft panel widget light-widget panel-bd-top">
                  <div class="panel-heading no-title"> </div>
                  <div class="panel-body">
                      <div class="text-center vd_info-parent "> <img alt="Profile Pic" src="../../profile_uploads/<?php echo ($_SESSION['user_pic']);?>"> </div>
                    <div class="row">
                      <div class="col-xs-12"> <a class="btn vd_btn vd_bg-dark-blue btn-xs btn-block no-br"><i class="fa fa-check-circle append-icon"></i><?php echo ($_SESSION['Type']);?></a> </div>
                      <div class="col-xs-12"> <a class="btn vd_btn vd_bg-grey btn-xs btn-block no-br"><i class="fa fa-envelope append-icon"></i><?php echo ($_SESSION['username']);?></a> </div>
                    </div>
                    <h2 class="font-semibold mgbt-xs-5"><?php echo ($_SESSION['Type']);?></h2>
                   
       
                    <p>The mortal of FFWPU is to reach the world and as many people as we can.</p>
                    <div class="mgtp-20">
                      <table class="table table-striped table-hover">
                        <tbody>
                        
                          <tr>
                            <td>Appointed Date</td>
                            <td><?php echo $_SESSION['appoinment_date']?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- panel widget -->
                
         
                <!-- panel widget --> 
              </div>
              <div class="animated slideInRight col-sm-9">
                <div class="tabs widget">
  <ul class="nav nav-tabs widget">
    <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
 
  </ul>
  <div class="tab-content">
    <div id="profile-tab" class="tab-pane active">
      <div class="pd-20">
<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>      
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> ABOUT</h3>
        <div class="row">
            
             <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Title:</label>
              <div class="col-xs-7 controls"><?php echo ($_SESSION['Type']);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
            
     
        </div>
        
        
                <div class="row">
            
             <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Username:</label>
              <div class="col-xs-7 controls"><?php echo ($_SESSION['username']);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
            
     
        </div>
        
                        <div class="row">
            
             <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Date Of Appointment:</label>
              <div class="col-xs-7 controls"><?php echo ($_SESSION['appoinment_date']);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
            
     
        </div>
        <hr class="pd-10">

        <hr class="pd-10">
        
        <!-- row --> 
      </div>
      <!-- pd-20 --> 
    </div>
    <!-- home-tab -->
    
    
    
    
    
    
    
  </div>
  <!-- tab-content --> 
</div>
<!-- tabs-widget -->              </div>
            </div>
            <!-- row --> 
            
          </div>
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 
    
  </div>
  <!-- .container --> 
</div>
<!-- .content -->

<!-- Footer Start -->
  <footer class="footer-1" id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <center><div class="copyright">
                  	Copyright ©2018 FFWPU. All Rights Reserved 
                    </div></center>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->
 

</div>

<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top"> <i class="fa  fa-angle-up"> </i> </a>

<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="../../css/profilpiccss/js/jquery.js"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>      
<![endif]-->
<script type="text/javascript" src="../../css/profilpiccss/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="../../css/profilpiccss/plugins/jquery-ui/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="../../css/profilpiccss/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="../../css/profilpiccss/js/caroufredsel.js"></script> 
<script type="text/javascript" src="../../css/profilpiccss/js/plugins.js"></script>

<script type="text/javascript" src="../../css/profilpiccss/plugins/breakpoints/breakpoints.js"></script>
<script type="text/javascript" src="../../css/profilpiccss/plugins/dataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../css/profilpiccss/plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js"></script> 

<script type="text/javascript" src="../../css/profilpiccss/plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../../css/profilpiccss/plugins/tagsInput/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="../../css/profilpiccss/plugins/bootstrap-switch/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="../../css/profilpiccss/plugins/blockUI/jquery.blockUI.js"></script>
<script type="text/javascript" src="../../css/profilpiccss/plugins/pnotify/js/jquery.pnotify.min.js"></script>

<script type="text/javascript" src="../../css/profilpiccss/js/theme.js"></script>
<script type="text/javascript" src="../../css/profilpiccss/custom/custom.js"></script>
 
<!-- Specific Page Scripts Put Here -->
<script type="text/javascript" src="../../css/profilpiccss/plugins/isotope/isotope.pkgd.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
	"use strict";
		
  // init Isotope
  var $container = $('.isotope').isotope({
    itemSelector: '.gallery-item',
    layoutMode: 'fitRows'
  });
  

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	  $container.isotope('layout');
	});

  // bind filter button click
  $('#filters').on( 'click', 'a', function() {
    var filterValue = $( this ).attr('data-filter');
	$('#filters li').removeClass('active');
	$(this).parent().addClass('active');	
    $container.isotope({ filter: filterValue });
  });

	
});
</script>
<!-- Specific Page Scripts END -->




<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

<!--<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script> -->



</body>
</html>
