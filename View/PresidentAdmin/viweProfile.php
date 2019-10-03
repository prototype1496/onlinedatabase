
<?php
include '../../../OnlineDataBase/controller/Session.php';
     require_once '../../DataBaseConnection/dataBaseConnection.php';
   
     require_once '../../Model/AdminPresidentModel.php';
      $user = new AdminPresidentModel();
      
    $id =  $_GET['country']; 
  $memeber_details =  $user->getmember_details($id);
    $row  = mysqli_fetch_array($memeber_details);
  
  $memeber_careea_ocupation =  $user->get_careea_ocupation($id);
 
  
  $memeber_education_details =  $user->get_education_details($id);
  
    $memeber_cirtification_details =  $user->get_certification_details($id);

  
  
 
   
 
?>
<!DOCTYPE html>
<html class=" js no-touch no-mobile no-phone no-tablet mobilegradea">
   <!--<![endif]--><!-- Specific Page Data --><!-- End of Data --><head>
    <meta charset="utf-8">
    <title>Profile</title>
    
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

<body id="pages" class="  full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix breakpoint-975 nav-left-medium sticky-menu-active" data-active="pages " data-smooth-scrolling="1" style="padding-top: 63px;">     
     
<div class="vd_body">
<!-- Header Start -->
   <header class=" header-1" id="header">
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
<!--               <ul class="list-wrapper">
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar.jpg"></div> 
                         </a>
                        <div class="menu-text"> Gabriella Montagna
                            <div class="menu-info">
                                <div class="menu-date">San Diego</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                                                                   
                                </div>                                
                            </div>
                        </div> 
                     </li>
                    <li class="warning"> 
                    		<a href="#"> 
                    			<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-2.jpg"></div>  
                            </a>                            
                            <div class="menu-text">  Jonathan Fuzzy
                            	<div class="menu-info">
                                    <div class="menu-date">Seattle</div>                                                                         
                                    <div class="menu-action">
                                        <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-check"></i>
                                        </span> 
                                        <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                            <i class="fa fa-times"></i>
                                        </span>                                                                            
                                    </div>                                
                            	</div>                            
                            </div> 
                     </li>    
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-3.jpg"></div> 
                         </a>    
                        <div class="menu-text">  Sakura Hinata
                            <div class="menu-info">
                                <div class="menu-date">Hawaii</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                             
                                </div>                                
                            </div>                                                     
                        </div> 
                    </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-4.jpg"></div> 
                         </a>    
                        <div class="menu-text">  Rikudou Sennin
                            <div class="menu-info">
                                <div class="menu-date">Las Vegas</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </div>                                
                            </div>                                                        
                        </div> 
                    </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-5.jpg"></div>  
                         </a>   
                        <div class="menu-text">  Kim Kardiosun
                            <div class="menu-info">
                                <div class="menu-date">New York</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </div>                                
                            </div>                                                          
                        </div> 
                     </li>
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-6.jpg"></div>
                         </a>    
                        <div class="menu-text">   Brad Pita
                            <div class="menu-info">
                                <div class="menu-date">Seattle</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </div>                                
                            </div>                             
                        </div> 
                    </li>                                     
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-7.jpg"></div> 
                         </a>   
                        <div class="menu-text">  Celline Dior
                            <div class="menu-info">
                                <div class="menu-date">Los Angeles</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                             
                                </div>                                
                            </div>                              
                        </div> 
                    </li> 
                    <li> <a href="#"> 
                    		<div class="menu-icon"><img alt="example image" src="img/avatar/avatar-8.jpg"></div>
                         </a>    
                        <div class="menu-text">  Goerge Bruno Marz
                            <div class="menu-info">
                                <div class="menu-date">Las Vegas</div>                                                                         
                                <div class="menu-action">
                                    <span class="menu-action-icon vd_green vd_bd-green" data-original-title="Approve" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span class="menu-action-icon vd_red vd_bd-red" data-original-title="Reject" data-toggle="tooltip" data-placement="bottom">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                              
                                </div>                                
                            </div>                              
                        </div> 
                    </li>                                                                                
                    
               </ul>-->
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
               </div><div class="mCSB_scrollTools" style="position: absolute; display: none;"><div class="mCSB_draggerContainer"><div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="position:relative;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
               <div class="closing text-center" style="">
               		<a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
               </div>                                                                       
           </div>                              
        </div> <!-- child-menu -->                      
      </div>   <!-- vd_mega-menu-content -->         
    </li>  
     
    <li id="top-menu-profile" class="profile mega-li "> 
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

                                                <li>
                                                    <a href="membersPrivalges.php">
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
                                        <a href="#;" data-action="click-trigger">
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
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                  <li><a href="index.php">Home</a> </li>
               
                <li class="active">Member Profile Pages</li>
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
              <h1>Member Profile</h1>
            </div>
          </div>
          <div class="  vd_content-section clearfix">
            <div class="row">
              <div class=" animated slideInLeft col-sm-3">
                <div class="panel widget light-widget panel-bd-top">
                  <div class="panel-heading no-title"> </div>
                  <div  class="panel-body">
                      <div class="text-center vd_info-parent "> <img alt="Profile Pic" src="../../profile_uploads/<?php  echo $row['profile_photo']?>"> </div>
                    <div class="row">
                      <div class="col-xs-12"> <a class="btn vd_btn vd_bg-dark-blue btn-xs btn-block no-br"><i class="fa fa-check-circle append-icon"></i><?php echo $row['type'] ?></a> </div>
                      <div class="col-xs-12"> <a class="btn vd_btn vd_bg-grey btn-xs btn-block no-br"><i class="fa fa-envelope append-icon"></i><?php echo $row['snetwork_name'] ?></a> </div>
                    </div>
                    <h2 class="font-semibold mgbt-xs-5"><?php echo $row['fname']." ". $row['lname'] ?></h2>
                    <br><center><h4 >Member Type : <?php echo $row['type'] ?></h4></center>
       
                    <p>The mortal of FFWPU is to reach the world and as many people as we can.</p>
                    <div class="mgtp-20">
                      <table class="table table-striped table-hover">
                        <tbody>
                        
                          <tr>
                            <td>Member Since</td>
                            <td><?php echo$row['date_joined']?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- panel widget -->
                
         
                <!-- panel widget --> 
              </div>
              <div class="col-sm-9 animated slideInRight">
                <div class="tabs widget">
  <ul class="nav nav-tabs widget">
    <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
      <li> <a data-toggle="tab" href="#friends-tab"> Family Members  <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    <li> <a data-toggle="tab" href="#projects-tab"> Addresses  <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>

    
    <li> <a data-toggle="tab" href="#photos-tab"> Academics <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>    
  

    <li> <a data-toggle="tab" href="#groups-tab"> Awards <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    
  </ul>
  <div class="tab-content">
    <div id="profile-tab" class="tab-pane active">
      <div class="pd-20">
<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>      
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> ABOUT</h3>
        <div class="row">
            
             <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">National Registration Card (NRC):</label>
              <div class="col-xs-7 controls"><?php echo $row['nrc'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
            
            
             <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Passport:</label>
              <div class="col-xs-7 controls"><?php echo $row['passport'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
            
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">First Name:</label>
              <div class="col-xs-7 controls"><?php echo $row['fname'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Last Name:</label>
              <div class="col-xs-7 controls"><?php echo $row['lname'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Other Names:</label>
              <div class="col-xs-7 controls"><?php echo $row['oname'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Email:</label>
              <div class="col-xs-7 controls"><?php echo $row['email'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Gender:</label>
              <div class="col-xs-7 controls"><?php echo $row['gender'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Nationality:</label>
              <div class="col-xs-7 controls"><?php echo $row['nationality_id'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Date Of Birth:</label>
              <div class="col-xs-7 controls"><?php echo $row['date_of_birth'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
            
               <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Spiritual Date Of Birth:</label>
              <div class="col-xs-7 controls"><?php echo $row['spiritual_dob'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Department:</label>
              <div class="col-xs-7 controls"><?php echo $row['department'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Social Network Identification:</label>
              <div class="col-xs-7 controls"><?php echo $row['snetwork_name'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
        
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Cell:</label>
              <div class="col-xs-7 controls"><?php echo $row['phone'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
              <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">TelPhone:</label>
              <div class="col-xs-7 controls"><?php echo $row['telephone'] ?></div>
              <!-- col-sm-10 --> 
            </div>      
                  
          </div>
            
                  <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Generation:</label>
              <div class="col-xs-7 controls"><?php echo $row['generation'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
            
                   <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Marital Status:</label>
              <div class="col-xs-7 controls"><?php echo $row['status'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
            
                   <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Spouse Name:</label>
              <div class="col-xs-7 controls"><?php echo $row['spouse_name'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
                
             <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Religion:</label>
              <div class="col-xs-7 controls"><?php echo $row['religon'] ?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
        </div>
        <hr class="pd-10">
<!--        <div class="row">
          <div class="col-sm-7 mgbt-xs-20">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-file-text-o mgr-10 profile-icon"></i> EXPERIENCE</h3>
            <div class="content-list content-menu">
              <ul class="list-wrapper">
                <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Owner</a> at <a href="http://www.venmond.com">Vendroid Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2013 ~ Now</span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">CEO</a> at <a href="http://www.venmond.com">Mc. Dondon</a> <span class="menu-info"><span class="menu-date"> March 2011 ~ February 2013</span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Web Designer</a> at <a href="http://www.venmond.com">Web Design Company Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2010 ~ February 2011</span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Sales</a> at <a href="http://www.venmond.com">Sales Company Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2009 ~ February 2010</span></span> </span> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-5">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-trophy mgr-10 profile-icon"></i> EDUCATION</h3>
            <div class="content-list content-menu">
              <ul class="list-wrapper">
                <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> Bachelor's degree, E-Commerce/Electronic Commerce at <a href="http://www.venmond.com">UCLA</a> <span class="menu-info"><span class="menu-date"> August 2003 ~ July 2008</span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">Web Design Education</a> <span class="menu-info"><span class="menu-date"> March 2006 ~ February 2007</span></span> </span> </li>                
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">St. Louis High School</a> <span class="menu-info"><span class="menu-date"> August 2000 ~ July 2003 </span></span> </span> </li>
                <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">St. Monica Junior High School</a> <span class="menu-info"><span class="menu-date"> August 1998 ~ July 2000</span></span> </span> </li>
              </ul>
            </div>            
          </div>
        </div>-->
        <!-- row -->
        <hr class="pd-10">
        
        <!-- row --> 
      </div>
      <!-- pd-20 --> 
    </div>
    <!-- home-tab -->
    
    <div id="projects-tab" class="tab-pane">
    	<div class="pd-20">
				<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-plus append-icon"></i> Edit </a> </div>         
				<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-home mgr-10 profile-icon"></i> ADDRESSES</h3>        
				<table class="table table-striped table-hover">
							  <thead>
								  <tr>
                                  	 
									  <th>Primary Address</th>                                  
									  <th>Secondary Address</th>
									  <th>Post Code (Zip)</th>
									  
                                                                             
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
                                	
									<td><?php echo $row['primery_address'] ?></td>                    
                                                                         <td><?php echo $row['secondary_address'] ?></td>                                    
									<td class="center"><?php echo $row['postal_code'] ?></td>
									 
                                  
						                                                                       
								</tr>
								
								
								
								
                                                                                          
                                                                   
							  </tbody>
						 </table>
                         <div class="">
                         </div>        
        </div>
    </div>
    
    <div id="photos-tab" class="tab-pane">
      <div class="pd-20">
		<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>        
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-institution mgr-10"></i> ACADEMICS</h3>
      
                <hr class="pd-10">
        <div class="row">
         
          <div class="col-sm-12">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-book mgr-10 profile-icon"></i> EDUCATION</h3>
            <div class="content-list content-menu">
              <ul class="list-wrapper">
                  <?php
                    while (  $education_details  = mysqli_fetch_array($memeber_education_details)){
                        
                   
                    ?>
                  <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> <b>Institution Name: </b><?php echo $education_details['institutiion_name'];?>  </span> <span class="menu-text"><b>Major: </b><?php echo $education_details['major'];?></span> <span class="menu-text"><b>Remarks: </b><?php echo $education_details['edu_remarks'];?><span class="menu-info"><span class="menu-date"> Duration: <?php echo $education_details['duration_start'];?> ~ <?php echo $education_details['duration_end'];?></span></span></span> </li>
               <?php
                }
               ?>
              </ul>
            </div>            
          </div>
        </div>
         
        <hr class="pd-10">
          <div class="row">
         
          <div class="col-sm-12">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-institution mgr-10 profile-icon"></i> Career And Occupation</h3>
            <div class="content-list content-menu">
              <ul class="list-wrapper">
                  <?php
                    while (   $carrea_ocupation  = mysqli_fetch_array($memeber_careea_ocupation)){
                        
                   
                    ?>
                  <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> <b>Affiliated Organization: </b><?php echo $carrea_ocupation['prof_career'];?>  </span> <span class="menu-text"><b>Title: </b><?php echo $carrea_ocupation['position'];?></span> <span class="menu-text"><b>Remarks: </b><?php echo $carrea_ocupation['co_remarks'];?><span class="menu-info"><span class="menu-date"> Duration: <?php echo $carrea_ocupation['duration_start'];?> ~ <?php echo $carrea_ocupation['duration_end'];?></span></span></span> </li>
               <?php
                }
               ?>
              </ul>
            </div>            
          </div>
        </div>
         
        <hr class="pd-10">
        
               <div class="row">
         
          <div class="col-sm-12">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-graduation-cap mgr-10 profile-icon"></i> Certifications </h3>
            <div class="content-list content-menu">
              <ul class="list-wrapper">
                  <?php
                    while (   $certifications  = mysqli_fetch_array($memeber_cirtification_details)){
                        
                   
                    ?>
                  <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> <b>Qualification Name: </b><?php echo $certifications['qualification_name'];?>  </span> <span class="menu-text"><b>Remarks: </b><?php echo $certifications['cert_remarks'];?></span> <span class="menu-text"><b>Issued By: </b><?php echo $certifications['issued_by'];?><span class="menu-info"><span class="menu-date"> Issued Date: <?php echo $certifications['date'];?></span></span></span> </li>
               <?php
                }
               ?>
              </ul>
            </div>            
          </div>
        </div>
         
        <hr class="pd-10">
        
                
                <div class="clearfix"></div>       
        
      </div>
      <!-- pd-20 -->       
    </div> <!-- photos tab -->
    <div id="friends-tab" class="tab-pane">
    	<div class="pd-20">
        	<h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-users mgr-10 profile-icon"></i> FAMILY MEMBERS</h3>
       
        	<div class="content-grid column-xs-3 column-sm-4 column-md-4 column-lg-6 height-xs-4 mgbt-xs-20">	
                       <div>
<ul class="list-wrapper">
                    <li> <a href="#"> 
                    		<span class="menu-icon"><img src="../../css/profilpiccss/img/avatar/avatar.jpg" alt="example image"></span> 
                         </a>
                        <span class="menu-text"> Gabriella Montagna
                            <span class="menu-info">
                                <span class="menu-date">San Diego</span>                                                                         
                                <span class="menu-action">
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Approve" class="menu-action-icon vd_green vd_bd-green">
                                        <i class="fa fa-check"></i>
                                    </span> 
                                    <span data-placement="bottom" data-toggle="tooltip" data-original-title="Reject" class="menu-action-icon vd_red vd_bd-red">
                                        <i class="fa fa-times"></i>
                                    </span>                                                                                                                   
                                </span>                                
                            </span>
                        </span> 
                     </li>
                 
                                                      
                                          
              
                                                                                                
                    
               </ul>
                       </div>                                                                      
                       </div>
        </div><!-- pd-20 -->   
    </div>  <!-- photos tab -->  
    <div id="groups-tab" class="tab-pane">
    	<div class="pd-20">
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-trophy mgr-10 profile-icon"></i> AWARDS</h3>
        	<div class="row">
            	<div class="col-xs-12 col-sm-6">
                    <div class="content-list content-large menu-action-right">
                        <ul class="list-wrapper pd-lr-15">
                        <li>  
                            <div class="menu-icon"><a href="#"><img src="../../css/profilpiccss/img/groups/logo-01.jpg" alt="example image"></a></div> 
                            <div class="menu-text"> 
                                <h4 class="mgbt-xs-0"><a href="#">Groupis Group</a></h4>
                                <div class="menu-info">
                                    <span class="menu-date"> 3467 members </span> 
                                                                                                                                   
                                </div>  
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco...</p>                                                        
                            </div>                                               
                            <div class="menu-action">                                                              
                                <div data-placement="bottom" data-toggle="tooltip" data-original-title="Leave Group" class="menu-action-icon vd_red">
                                    <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                            </div>                                                	  
                        </li>
                        </ul> <!-- list-wrapper -->
                   </div> <!-- content-list -->
                </div> <!-- col-xs-12 col-sm-6 -->

            	<div class="col-xs-12 col-sm-6">
                    <div class="content-list content-large menu-action-right">
                        <ul class="list-wrapper pd-lr-15">
                        <li>  
                            <div class="menu-icon"><a href="#"><img src="../../css/profilpiccss/img/groups/logo-02.jpg" alt="example image"></a></div> 
                            <div class="menu-text"> 
                                <h4 class="mgbt-xs-0"><a href="#">Ztormin Community</a></h4>
                                <div class="menu-info">
                                    <span class="menu-date"> 12597 members </span> 
                                                                                                                                   
                                </div>  
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco...</p>                                                        
                            </div>                                               
                            <div class="menu-action">                                                              
                                <div data-placement="bottom" data-toggle="tooltip" data-original-title="Leave Group" class="menu-action-icon vd_red">
                                    <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                            </div>                                                	  
                        </li>
                        </ul> <!-- list-wrapper -->
                   </div> <!-- content-list -->
                </div> <!-- col-xs-12 col-sm-6 -->
                
            	<div class="col-xs-12 col-sm-6">
                    <div class="content-list content-large menu-action-right">
                        <ul class="list-wrapper pd-lr-15">
                        <li>  
                            <div class="menu-icon"><a href="#"><img src../../css/profilpiccss/img/groups/logo-03.jpg" alt="example image"></a></div> 
                            <div class="menu-text"> 
                                <h4 class="mgbt-xs-0"><a href="#">Book Lovers</a></h4>
                                <div class="menu-info">
                                    <span class="menu-date"> 67 members </span> 
                                                                                                                                   
                                </div>  
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco...</p>                                                        
                            </div>                                               
                            <div class="menu-action">                                                              
                                <div data-placement="bottom" data-toggle="tooltip" data-original-title="Leave Group" class="menu-action-icon vd_red">
                                    <i class="fa fa-times"></i>
                                </div>                                                                                                                                       
                            </div>                                                	  
                        </li>
                        </ul> <!-- list-wrapper -->
                   </div> <!-- content-list -->
                </div> <!-- col-xs-12 col-sm-6 -->

    

                
            </div> <!-- row -->
        </div> <!-- pd-20 --> 
    </div>  <!-- groups tab -->   
    
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
