<?php
require_once '../../DataBaseConnection/dataBaseConnection.php';




include '../../../OnlineDataBase/controller/Session.php';

 require_once '../../Model/DatabaseAdminModel.php';

     $database_admin_model = new DatabaseAdminModel();
     
       $result = $database_admin_model->get_members_requests();
     
     $numbr = $database_admin_model->get_number_approval_requests();
     
      $member = $database_admin_model->get_members_requests();
     
     
  
    
?>
<!DOCTYPE html>
<html class=" js no-touch no-mobile no-phone no-tablet mobilegradea">
    <!--<![endif]--><!-- Specific Page Data --><!-- End of Data --><head>
        <meta charset="utf-8">
        <title>Approve Members</title>
       

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
                  <span>Religion</span></label>
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
		<span class="badge vd_bg-red"><?php echo $numbr;?></span>        
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
                       <?php
                       while ($row = mysqli_fetch_array($member)) {
                       ?>  
                       <ul class="list-wrapper">
                           
                         
                              <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="profil pic" src="../../profile_uploads/<?php echo ($row['profile_photo']);?>"></div> 
                         </a>
                                  
                                 
                        <div class="menu-text"> <?php echo ($row['fname']." ".$row['lname']);?>
                            <div class="menu-info">
                                                                                                      
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <form method="post" action="../../Controller/DatabaseManager/ActionPerformed.php">
                                            <button name="approve_rqst"  vlaue="<?php echo $row['id']; ?>" class="btn btn-link" type="submit"><span><li class="fa fa-check"></li></span></button>
                                          
                                           <input name="approve_id" type="hidden" value="<?php echo $row['id']; ?>"/>
                                        </form> 
                                        
                                        
                                    </span> 
<!--                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                                                                   -->
                                </div>                                
                            </div>
                        </div> 
                     </li>
                                                               
                       </ul>
                       <?php
                      }
                       ?>
                       
 
               </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
               <div class="closing text-center" style="">
                   <a href="ApproveMember.php">See All Requests <i class="fa fa-angle-double-right"></i></a>
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
<!--		   <div class="content-list">	
           	   <div data-rel="scroll" class="mCustomScrollbar _mCS_3" style="overflow: hidden;"><div class="mCustomScrollBox mCS-light" id="mCSB_3" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;"><div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">	
               <ul class="list-wrapper pd-lr-10">
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_yellow"><i class="fa fa-suitcase"></i></div> 
                            <div class="menu-text"> Someone has give you a surprise 
                            	<div class="menu-info"><span class="menu-date">12 Minutes Ago</span></div>
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_blue"><i class=" fa fa-user"></i></div> 
                            <div class="menu-text">  Change your user profile details
                            	<div class="menu-info"><span class="menu-date">1 Hour 20 Minutes Ago</span></div>
                            </div> 
                    </a> </li>    
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                            <div class="menu-text">  Your setting is updated
                            	<div class="menu-info"><span class="menu-date">12 Days Ago</span></div>                            
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                            <div class="menu-text">  Added new article
                            	<div class="menu-info"><span class="menu-date">19 Days Ago</span></div>                              
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><img alt="example image" src="../../css/profilpiccss/img/avatar/avatar.jpg"></div> 
                            <div class="menu-text">  Change Profile Pic
                            	<div class="menu-info"><span class="menu-date">20 Days Ago</span></div>                              
                            </div> 
                    </a> </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_red"><i class=" fa fa-cogs"></i></div> 
                            <div class="menu-text">  Your setting is updated
                            	<div class="menu-info"><span class="menu-date">12 Days Ago</span></div>                            
                            </div> 
                    </a> </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><i class=" fa fa-book"></i></div> 
                            <div class="menu-text">  Added new article
                            	<div class="menu-info"><span class="menu-date">19 Days Ago</span></div>                              
                            </div> 
                    </a> </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon vd_green"><img alt="example image" src="../../css/profilpiccss/img/avatar/avatar.jpg"></div> 
                            <div class="menu-text">  Change Profile Pic
                            	<div class="menu-info"><span class="menu-date">20 Days Ago</span></div>                              
                            </div> 
                    </a> </li>                                                                                
                    
               </ul>
               </div>
                           <div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
               <div class="closing text-center" style="">
               		<a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              -->
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
                    <li> <a href="viwePersonProfile.php"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">View Profile</div> </a> </li>
                              
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
                                            <span class="menu-icon"><i class="fa fa-table"> </i></span> 
                                            <span class="menu-text">Table Management</span>  
                                            <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
                                        </a>
                                        <div class="child-menu" data-action="click-target" style="display: none;">
                                            <ul>  
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-text">Add City</span>  
                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-text">Add Country</span>  

                                                    </a>
                                                </li> 

                                                <li>
                                                    <a href="#">
                                                        <span class="menu-text">Add Religion</span>  

                                                    </a>
                                                </li>   
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-text">Add Member Type</span>  

                                                    </a>
                                                </li> 
                                                <li>
                                                    <a href="#">
                                                        <span class="menu-text">Add Marital Status</span>  

                                                    </a>
                                                </li>   


                                            </ul>   
                                        </div>
                                    </li> 
                                    <li>
                                        <a href="#" data-action="click-trigger">
                                            <span class="menu-icon entypo-icon"><i class="fa fa-users"> </i></span> 
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
<!--                                                <li>
                                                    <a href="viewMembersList.php">
                                                        <span class="menu-text">View Members</span>                                      
                                                    </a>
                                                </li>      -->
                                                
                                                      <li>
                                                          <a href="ApproveMember.php">
                                                        <span class="menu-text">Approve Member</span>                                      
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
                                    <div class="vd_panel-header">
                                        <ul class="breadcrumb">
                                            <li><a href="index.php">Home</a> </li>

                                            <li class="active">Member List</li>
                                        </ul>
                                        <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step="5" data-position="left">
                                            <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
                                            <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
                                            <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="vd_title-section clearfix">
                                    <div class="vd_panel-header no-subtitle">
                                        <h1> Membership Requests</h1>
                                    </div>
                                </div>

                                <!--main content start-->
                                <section class="animated zoomInDown" id="main-content" style="padding-left:  2%;padding-top:  3%;">
                                    <section class="wrapper">
                                        <div class="table-agile-info">
                                            <div class="panel panel-default">

                                                <div >
                                                    <table class="table table-hover table-responsive" ui-jq="footable" ui-options='{
                                                           "paging": {
                                                           "enabled": true
                                                           },
                                                           "filtering": {
                                                           "enabled": true
                                                           },
                                                           "sorting": {
                                                           "enabled": true
                                                           }}'>
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Surname</th>
                                                                <th data-breakpoints="xs">Gender</th>
                                                                <th data-breakpoints="xs">Contact Number</th>

                                                                <th>Action</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr data-expanded="true">
                                                                <?php
                                                                while ($row = mysqli_fetch_array($result)) {
                                                                    ?>
                                                                <tr>
                                                                    <td><?php echo $row['fname']; ?></td>
                                                                    <td><?php echo $row['lname']; ?></td>
                                                                    <td><?php echo $row['gender']; ?></td>
                                                                    <td><?php echo $row['phone']; ?></td>


                                                                    <td>  <form method="post" action="../../Controller/DatabaseManager/ActionPerformed.php">

                                                                            <button name="view" vlaue="<?php echo $row['id']; ?>" class="btn btn-default"><i class="fa fa-eye"></i></button>
                                                                            <input name="view_id" type="hidden" value="<?php echo $row['id']; ?>"/>
                                                                            
                                                                            <button name="approve"  vlaue="<?php echo $row['id']; ?>" class="btn btn-default"><i class="fa fa-arrow-up"></i></button>
                                                                            <input name="approve_id" type="hidden" value="<?php echo $row['id']; ?>"/>
                                                                            
<!--                                                                            <button name="delete" vlaue="<?php echo $row['id']; ?>" class="btn btn-default"><i class="fa fa-trash-o"></i></button>
                                                                             <input name="delet_id" type="hidden" value="<?php echo $row['id']; ?>"/>
                                                                      -->
                                                                        
                                                                        </form>


                                                                    </td>

                                                                </tr>
                                                                
                                                                <?php
                                                            }
                                                            
                                                            ?>  

                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                    <!-- .vd_content-wrapper --> 

                                    <!-- Middle Content End --> 
                                </section>
                            </div>

                            <!-- .container --> 
                        </div>
                    </div>
                </div>
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
            $(document).ready(function () {
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
                $('#filters').on('click', 'a', function () {
                    var filterValue = $(this).attr('data-filter');
                    $('#filters li').removeClass('active');
                    $(this).parent().addClass('active');
                    $container.isotope({filter: filterValue});
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
