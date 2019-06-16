<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="">
<title>Life Force</title>
<!-- Bootstrap Core CSS -->
<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
<!-- Menu CSS -->
<link href="bower_components/morrisjs/morris.css" rel="stylesheet">
<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Slab" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  <link href="css/horizontal-timeline.css" rel="stylesheet">
</head>
<body>
<!-- Preloader starts -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<!-- preloader ends -->
<div id="wrapper">
  <!-- Navigation starts -->
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom: 0">
    <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu" style="color: #F19119;"></i></a>
      <div class="top-left-part"><a class="logo" href="index.php"><span class="hidden-xs"><img src="images/pss-added/pss-logo.png" style="margin-top: -5px;"></span></a></div>
      <ul class="nav navbar-top-links navbar-left hidden-xs">
        <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu" style="color: #F19119;"></i></a></li>
       
      </ul>
      <ul class="nav navbar-top-links navbar-right pull-right">
     
        <li class="dropdown"> <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="images/users/hritik.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Admin</b> </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
             <li role="separator" class="divider"></li>
            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
          </ul>
          <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
      </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
  </nav>
    <!-- Navigation ends --> 
    
      <!-- side-Navigation starts -->
    <div class="navbar-default sidebar nicescroll" role="navigation">
    <div class="sidebar-nav navbar-collapse ">
      <ul class="nav" id="side-menu">
        <li class="sidebar-search hidden-sm hidden-md hidden-lg">
          <!--<div class="input-group custom-search-form">
            <input type="text" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>-->
          <!-- /input-group -->
        </li>

        <li class="active"> <a href="index.php" class="waves-effect"><i class="fa fa-home"></i> Home </a>
        </li>
        <li> <a href="#" class="waves-effect"><i class="fa fa-bar-chart"></i> Progress Report</a>
          
        </li>
        <li> <a href="#" class="waves-effect"><i class="fa fa-envelope"></i> Query<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="view-query.php">View Your Query</a> </li>
            <li><a href="submit-query.php">Submit Your Query</a></li>
          </ul>
          <!-- /.nav-second-level -->
        </li>
        <li> <a href="#" class="waves-effect"><i class="fa fa-picture-o"></i> Diseases Photo<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="#">View Disease Photo</a></li>
            <li><a href="#">Submit Disease Photo</a></li>
          </ul>
        </li>
        <li> <a href="#" class="waves-effect"><i class="fa fa-folder-open"></i> Medical Reports<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="#">View Medical Report</a></li>
<li><a href="#">Submit Medical Report</a></li>
          </ul>
        </li>
        <li> <a href="#" class="waves-effect"><i class="fa fa-pencil-square-o"></i> Subscription<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="#">Renew Subscription</a> </li>
            <li> <a href="#">View All Subscription</a> </li>
          </ul>
          <!-- /.nav-second-level -->
        </li>
        <!--<li> <a href="map-google.html" class="waves-effect"><i class="ti-location-pin fa-fw"></i> Google Map</a> </li>
        <li> <a href="map-vector.html" class="waves-effect"><i class="ti-ink-pen fa-fw"></i> Vector Map</a> </li>
        <li> <a href="#" class="waves-effect"><i class="ti-files fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li><a href="blank.html">Blank Page</a></li>
            <li><a href="login.html">Login Page</a></li>
<li><a href="login2.html">Login Page 2</a></li>
<li><a href="profile.html">Profile</a></li>
            <li><a href="invoice.html">Invoice</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="register.html">Register</a></li>
            <li><a href="recoverpw.html">Recover Password</a></li>
            <li><a href="lock-screen.html">Lock Screen</a></li>
            <li><a href="400.html">Error 400</a></li>
            <li><a href="403.html">Error 403</a></li>
            <li><a href="404.html">Error 404</a></li>
            <li><a href="500.html">Error 500</a></li>
            <li><a href="503.html">Error 503</a></li>
          </ul>
          <!-- /.nav-second-level 
        </li>
        <li> <a href="inbox.html" class="waves-effect"><i class="ti-email fa-fw"></i> Inbox</a> </li>
        <li> <a href="calendar.html" class="waves-effect"><i class="ti-calendar fa-fw"></i> Calender</a> </li>
        <li> <a href="#" class="waves-effect"><i class="ti-share fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="#">Second Level Item</a> </li>
            <li> <a href="#">Second Level Item</a> </li>
            <li> <a href="#" class="waves-effect">Third Level <span class="fa arrow"></span></a>
              <ul class="nav nav-third-level">
                <li> <a href="#">Third Level Item</a> </li>
                <li> <a href="#">Third Level Item</a> </li>
                <li> <a href="#">Third Level Item</a> </li>
                <li> <a href="#">Third Level Item</a> </li>
              </ul>
              <!-- /.nav-third-level 
            </li>
          </ul>
          <!-- /.nav-second-level 
        </li>-->
        <li class="active"><a href="#" class="waves-effect" style="background-color: #89461B;"><i class="fa fa-mobile" aria-hidden="true" style="color: #fff;"></i> <span class="hide-menu" style="color: #fff;">SMS Reminders</span></a>
  <ul style="list-style-type: decimal;" class="collapse in" aria-expanded="true">
    <li style="padding: 10px;">
      Dose Reminder: Our system will remind you to take daily dose. <b>Subscribed.</b>
      <a class="link-css" href="#"><u>Unsubscribe me, Please</u></a>
    </li>
    <hr style="margin: 0; padding : 0;">
    <li style="padding: 10px;">
      Progress report reminder: Receive message by sms suggesting you to submit progress report. <b>Subscribed.</b>
      <a class="link-css" href="#"><u>Unsubscribe me, Please</u></a>
    </li>
  </ul>
        </li>
        <li><a href="#" class="waves-effect" style="background-color: #89461B;"> <i class="fa fa-envelope" aria-hidden="true" style="color: #fff;"></i> <span class="hide-menu" style="color: #fff;">Email Reminders</span></a>
  <ul style="list-style-type: decimal;" class="collapse">
    <li style="padding: 10px;">
      Renewal Reminder: Receive mail to tell you when to renew. <b>Subscribed.</b>
      <a class="link-css" href="#"><u>Unsubscribe me, Please</u></a>
    </li>
    <hr style="margin: 0; padding : 0;">
    <li style="padding: 10px;">
      Progress report reminder: Receive mail, suggesting you to submit progress report. <b>Subscribed.</b>
      <a class="link-css" href="#"><u>Unsubscribe me, Please</u></a>
    </li>
  </ul>
        </li>
      </ul>
    </div>
    <!-- /.sidebar-collapse -->
  </div>
    <!-- side-Navigation ends -->  
  
  <!-- Page Content -->
  <div id="page-wrapper">
  			 <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg hide-quit" data-toggle="modal" data-target="#myModal">View Dr Shah Video</button>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content video-popup-content">
        <div class="modal-header video-popup">
        Welcome to Patient Support
        
          <button type="button" class="close" data-dismiss="modal">Quit</button>
    
        </div>
        <div class="modal-body">
        <video id="form-submit" controls autoplay>
					<source src="images/pss-added/Food and Diet Tips for Vitiligo Patients by Dr Rajesh Shah, MD Homeopathy.mp4" type="video/mp4" />
				</video>
		
        </div>
     
      </div>
      
    </div>
  </div>
  
  
    <div class="container-fluid">
      <!--<div class="row bg-title">
      </div>-->
      <!-- /.row -->
      
      <div class="row">
    <ul class="rslides">
  <li><img src="images/111.jpg" alt=""></li>
  <li><img src="images/222.jpg" alt=""></li>
  <li><img src="images/333.jpg" alt=""></li>
</ul>

      </div>
      
      
      <div class="row" style="margin-top: 25px;">
        <div class="col-md-8 col-lg-9 col-sm-12">
          <div class="white-box" style="height: 180px;">
              <h3>Your Treatment Status</h3>
            <section class="cd-horizontal-timeline loaded">
                <div class="timeline">
                
                  <div class="events-wrapper">
                    <div class="events" style="width: 1800px;">
                      <ol>
                        <li><a href="#0" data-date="16/01/2014" class="selected" style="left: 120px;">16 Jan</a></li>
                        <li><a href="#0" data-date="28/02/2014" style="left: 300px;">28 Feb</a></li>
                        <li><a href="#0" data-date="20/04/2014" style="left: 480px;">20 Mar</a></li>
                        <li><a href="#0" data-date="20/05/2014" style="left: 600px;">20 May</a></li>
                        <li><a href="#0" data-date="09/07/2014" style="left: 780px;">09 Jul</a></li>
                        <li><a href="#0" data-date="30/08/2014" style="left: 960px;">30 Aug</a></li>
                        <li><a href="#0" data-date="15/09/2014" style="left: 1020px;">15 Sep</a></li>
                        <li><a href="#0" data-date="01/11/2014" style="left: 1200px;">01 Nov</a></li>
                        <li><a href="#0" data-date="10/12/2014" style="left: 1380px;">10 Dec</a></li>
                        <li><a href="#0" data-date="19/01/2015" style="left: 1500px;">29 Jan</a></li>
                        <li><a href="#0" data-date="03/03/2015" style="left: 1680px;">3 Mar</a></li>
                      </ol>

                      <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.0776953);"></span>
                    </div> <!-- .events -->
                  </div> <!-- .events-wrapper -->
                    
                  <ul class="cd-timeline-navigation">
                    <li><a href="#0" class="prev inactive">Prev</a></li>
                    <li><a href="#0" class="next">Next</a></li>
                  </ul> <!-- .cd-timeline-navigation -->
                </div> <!-- .timeline -->

                <div class="events-content">
                  <ol>
                    <li class="selected" data-date="16/01/2014">
                        <p class="m-t-40"> 
                      		Received Your Medical Reports
                      </p>
                    </li>

                    <li data-date="28/02/2014">                    
                     <p class="m-t-40"> 
                      		Received Your Medical Reports
                      </p>
                    </li>

                    <li data-date="20/04/2014">
                      <p class="m-t-40"> 
                      		Received Your Medical Reports
                      </p>
                    </li>

                    <li data-date="20/05/2014">
                     <p class="m-t-40"> 
                      		Received Your Medical Reports
                      </p>
                    </li>

                    <li data-date="09/07/2014">
                      <p class="m-t-40"> 
                      		Received Your Medical Reports
                      </p>
                    </li>

                    <li data-date="30/08/2014">
                      <p class="m-t-40"> 
                      		Received Your Medical Reports
                      </p>
                    </li>
							
                    <li data-date="15/09/2014">
                      <p class="m-t-40"> 
                      		Received Your Medical Reports
                      </p>
                    </li>

                    <li data-date="01/11/2014">
                      <p class="m-t-40"> 
                      		Received Your Medical Reports
                      </p>
                    </li>

                    <li data-date="10/12/2014">
                      <p class="m-t-40"> 
                      		Received Your Medical Reports
                      </p>
                    </li>

                    <li data-date="19/01/2015">
                     <p class="m-t-40"> 
                      		Received Your Medical Reports
                      </p>
                    </li>

                    <li data-date="03/03/2015">
                      <p class="m-t-40"> 
                      		Received Your Medical Reports
                      </p>
                    </li>
                  </ol>
                </div> <!-- .events-content -->
            </section>
          </div>
        </div>
        <div class="col-md-4 col-lg-3 col-sm-6 ">
          <div class="bg-purple m-b-20">
            <div id="myCarousel" class="carousel vcarousel slide vertical p-20">
              <!-- Carousel items -->
              <div class="carousel-inner ">
                <div class="active item"> <i class="fa fa-map-marker fa-2x text-white"></i>
                  <p class="text-white">25th Jan</p>
                  <h2 class="text-white">Now Get <span class="font-bold">50% Off</span><br/>
                    on buy</h2>
                  <button class="btn btn-default waves-effect waves-light m-t-15">Default</button>
                </div>
                <div class="item"> <i class="fa fa-map-marker fa-2x text-white"></i>
                  <p class="text-white">25th Jan</p>
                  <h2 class="text-white">Now Get <span class="font-bold">50% Off</span><br/>
                    on buy</h2>
                  <button class="btn btn-success waves-effect waves-light m-t-15">Default</button>
                </div>
                <div class="item"> <i class="fa fa-map-marker fa-2x text-white"></i>
                  <p class="text-white">25th Jan</p>
                  <h2 class="text-white">Now Get <span class="font-bold">50% Off</span><br/>
                    on buy</h2>
                  <button class="btn btn-white waves-effect waves-light m-t-15">Default</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="row">
      	<div class="col-md-8 col-lg-9 col-sm-12">
      		<div class="panel panel-warning white-box">
            <div class="panel-heading" style="display: none;"> Personal Information
              <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="ti-minus" style="color: #89461B;"></i></a>  </div>
            </div>
            <div class="panel-wrapper collapse in" aria-expanded="true">
              <div class="panel-body" style="padding: 0;">
              <h3>Personal Information</h3>
              <div class="row">
             	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="upload-img-wrapper">
      					<img src="images/pss-added/upload-photo.jpg" style=" cursor: pointer;width: 90%; margin: 5%;    max-height: 197px;">
      				</div>
             	</div>

              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="row ask">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
                Name:
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                Test Test
              </div>
            </div>
            <div class="row ask">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
                Sex:
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                Male
              </div>
            </div>
            <div class="row ask">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
                Date of birth:
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                5th dec 1990
              </div>
            </div>
            <div class="row ask">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
                Age:
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                26
              </div>
            </div>
            <div class="row ask">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
                E-mail:
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                test@gmail.com
              </div>
            </div>
            <div class="row ask">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
                Telephone:
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                022 8765456
              </div>
            </div>
            <div class="row ask">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
                Mobile:
              </div>
              <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
                9876467808
              </div>
            </div>
            <div class="row ask">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
                Religion:
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                Hindu
              </div>
            </div>
              </div>

             	<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
             		
    				<div class="row ask">
    					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
    						Occupation:
    					</div>
    					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    						Business
    					</div>
    				</div>
    				<div class="row ask">
    					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
    						Language known:
    					</div>
    					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    						Hindi, English
    					</div>
    				</div>
    				<div class="row ask">
    					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
    						Language Prefered:
    					</div>
    					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    						English
    					</div>
    				</div>
    				<div class="row ask">
    					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
    						Introduced by:
    					</div>
    					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    						Banner ad
    					</div>
    				</div>
    				<div class="row ask">
    					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
    						Diseases you are being mainly treated for:
    					</div>
    					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    						All
    					</div>
    				</div>
    				<div class="row ask">
    					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 bold">
    						You also have:
    					</div>
    					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
    						yes
    					</div>
    				</div>
             	</div>

             </div>
              </div>
            </div>
          </div>
      	</div>
      	<div class="col-md-4 col-lg-3 col-sm-6">
      		<!-- <div class="white-box sms-reminder">
      		<h3>SMS Reminder</h3>
      			<ul style="list-style-type: decimal;" class="collapse in" aria-expanded="true">
		<li style="padding: 10px; font-size: 12px;">
			Dose Reminder: Our system will remind you to take daily dose. <b>Subscribed.</b>
			<a class="link-css" href="#"><u>Unsubscribe me, Please</u></a>
		</li>
		<hr style="margin: 0; padding : 0;">
		<li style="padding: 10px; font-size: 12px;">
			Renewal Reminder: Receive message by SMS to tell you when to renew. <b>Subscribed.</b>
			<a class="link-css" href="#"><u>Unsubscribe me, Please</u></a>
		</li>
		<hr style="margin: 0; padding : 0;">
		<li style="padding: 10px; font-size: 12px;">
			Progress report reminder: Receive message by sms suggesting you to submit progress report. <b>Subscribed.</b>
			<a class="link-css" href="#"><u>Unsubscribe me, Please</u></a>
		</li>
	</ul>
      		</div> -->
          <div class="white-box case-study">
            <h3>Case Study</h3>
            <ul class="collapse in casestudynew" aria-expanded="true" style="padding-left: 17px;">
    <li style="padding: 10px; font-size: 12px;">
        He has been developing Lichen Planus over and again almost every two years. He was having it for five years now without any remission.
    </li>
    <hr style="margin: 0; padding : 0;">
    <li style="padding: 10px; font-size: 12px;">
       Middle aged man living with extensive lesions of psoriasis since 15 years, was tired of this illness and would feel suicidal at times.
    </li>
    <hr style="margin: 0; padding : 0;">
    <li style="padding: 10px; font-size: 12px;">
      Treated with allopathic medicines and had required admission in the hospital and was put on heavy doses of steroids.
    </li>
    <hr style="margin: 0; padding : 0;">
    <li style="padding: 10px; font-size: 12px;">
Had been under allopathic treatment but there was no relief at all. The lesions of Lichen planus were intensely itchy.
    </li>
      <hr style="margin: 0; padding : 0;">
    <li style="padding: 10px; font-size: 12px;">
Had been under allopathic treatment but there was no relief at all. The lesions of Lichen planus were intensely itchy.
    </li>
    <hr style="margin: 0; padding : 0;">
    <li style="padding: 10px; font-size: 12px;">
Had been under allopathic treatment but there was no relief at all. The lesions of Lichen planus were intensely itchy.
    </li>
  </ul>
  <div class="bottom-link">
    <a class="link-css" href="#">Read all case studies</a>
  </div>
          </div>
      	</div>
      </div>
      
      <!--row -->
      <div class="row">
        
        <div class="col-sm-6 col-xs-12 col-md-6 col-lg-6">
          <div class="row">
            <!-- <div class="col-lg-12">
              <div class="white-box ins-on-med">
              <div style="width: 50%; float: left;">
               <li style="line-height: 24px; color: #FF9900; list-style: inside square;"><a onclick="window.open(this.href,this.target,'scrollbars=yes,resizable=yes,width=550,height=670'); return false;" style="font-family: tahoma,verdana,arial; color: #9F4A23; font-weight: normal;
                                                font-size: 11px;" target="_blank" href="http://www.askdrshah.com/app/images/instruction on medicine/english_instruction_on_medicine.jpg">
                                                English</a> </li>
                  <li style="line-height: 24px; color: #FF9900; list-style: inside square;"><a onclick="window.open(this.href,this.target,'scrollbars=yes,resizable=yes,width=550,height=670'); return false;" style="font-family: tahoma,verdana,arial; color: #9F4A23; font-weight: normal;
                                                font-size: 11px;" target="_blank" href="http://www.askdrshah.com/app/images/instruction on medicine/spanish_instruction_on_medicine.jpg">
                                                Spanish</a> </li>
                 <li style="line-height: 24px; list-style: inside square; color: #FF9900;"><a onclick="window.open(this.href,this.target,'scrollbars=yes,resizable=yes,width=550,height=670'); return false;" style="font-family: tahoma,verdana,arial; color: #9F4A23; font-weight: normal;
                                                font-size: 11px;" target="_blank" href="http://www.askdrshah.com/app/images/instruction on medicine/gujrati_instruction_on_medicine.jpg">
                                                Gujarati</a> </li> 
                                                
                    </div>
                    <div>
                    	<li style="line-height: 24px; list-style: inside square; color: #FF9900;"><a onclick="window.open(this.href,this.target,'scrollbars=yes,resizable=yes,width=550,height=670'); return false;" style="font-family: tahoma,verdana,arial; color: #9F4A23; font-weight: normal;
                                                font-size: 11px;" target="_blank" href="http://www.askdrshah.com/app/images/instruction on medicine/hindi_instruction_on_medicine.jpg">
                                                Hindi</a> </li>
                                                <li style="line-height: 24px; list-style: inside square; color: #FF9900;"><a onclick="window.open(this.href,this.target,'scrollbars=yes,resizable=yes,width=550,height=670'); return false;" style="font-family: tahoma,verdana,arial; color: #9F4A23; font-weight: normal;
                                                font-size: 11px;" target="_blank" href="http://www.askdrshah.com/app/images/instruction on medicine/marathi_instruction_on_medicine.jpg">
                                                Marathi</a> </li>
                    </div>                                                         
              </div>
            </div> -->
            <div class="col-lg-12">
              <div class="white-box" style="height: 265px;">
                <h3>Hand Written Testimonial</h3>
                 <ul class="rslides handwrittien" >
                 <!--  <li><img src="images/t1.jpg" class="testimonial-slider" alt=""></li> -->
                  <li><img src="images/t2.jpg" class="testimonial-slider" alt=""></li>
                  <li><img src="images/t3.jpg" class="testimonial-slider" alt=""></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-xs-12 col-sm-6">      
            <div class="row">
            <div class="col-lg-12">

              <div class="white-box submit-testimonial">
                  <h3>Complaint Box</h3>
                  <p style="font-size: 10px;">In case you feel that your query is not attended properly by Life Force staff, please send your complaint in this box. It will be read by Dr Shah directly. (Please do not use this facility to send your medical update.)</p>
              <textarea class="form-control" rows="3" style="width: 97%;"></textarea>
              <div style="padding: 8px 0 8px 0;">
              <input type="button" class="send-button" value="Submit" />
              </div>
              </div>
              
            </div>
         </div> 
         </div>  
         <div class="col-md-3 col-xs-12 col-sm-6">  
          <div class="row">
            <div class="col-lg-12">
          <div class="white-box">
            <div class="user-bg"> 
              <div class="overlay-box">
                <div class="user-content"> <a href="javascript:void(0)"><i class="icon-earphones-alt" style="font-size: 70px; color: white;"></i></a>
                <h4 class="text-white"> <a href="https://v2.zopim.com/widget/popout.html?key=3rL7qGQ9IWCRNgbD8HKeNl8KTphAlfjW" target="_blank" style="    color: white;">Need Help ? </a></h4>
                </div>
              </div>
            </div>
            <div class="user-btm-box">
              <div class="col-md-12 col-sm-12 text-center">
                <h4>Please stay online, our Doctor will be right back</h4>
              </div>
            </div>
          </div>
        </div>
          </div>
        </div> 
      </div>
      <!--/ row -->
      
      <!-- row -->
      <div class="row">
       
        <div class="col-md-4 col-xs-12 col-sm-6">
          <div class="white-box case-photo">
            <h3>Case Photos</h3>
            <ul style="list-style-type: none;" class="scroll-css">
            	<li>
            		<img src="images/pss-added/263667958.png">
            	</li>
            	<hr>
            	<li>
            		<img src="images/pss-added/280609841.png">
            	</li>
            	<hr>
            	<li>
            		<img src="images/pss-added/280609841.png">
            	</li>
            	<hr>
            	<li>
            		<img src="images/pss-added/280609841.png">
            	</li>
            	<hr>
            	<li>
            		<img src="images/pss-added/280609841.png">
            	</li>
            </ul>
            <div class="bottom-link">
		<a class="link-css" href="#">See More Case Photos</a>
	</div>
          </div>
        </div>
        <div class="col-md-4 col-xs-12 col-sm-6">
          <div class="white-box testimonial" >
            <h3>Testimonials</h3>
            
            <div class="message-center scroll-css"> <a href="#">
              <div class="user-img"> <img src="images/pss-added/user.png" alt="user" class="img-circle"> </div>
              <div class="mail-contnet">
                <h5>R. Shaikh, India - Lichen Planus</h5>
                <span class="mail-desc">My Lichen Planus has responded very well to your treatment and I am glad that I am finally free from Lichen Planus. Thanks a lot Dr. Shah for your wonderful medicines.</span> <span class="time">Read All Story | Share Your Story</span> </div>
              </a> <a href="#">
              <div class="user-img"> <img src="images/pss-added/user.png" alt="user" class="img-circle"> </span> </div>
              <div class="mail-contnet">
                <h5>R. Shaikh, India - Lichen Planus</h5>
                <span class="mail-desc">My Lichen Planus has responded very well to your treatment and I am glad that I am finally free from Lichen Planus. Thanks a lot Dr. Shah for your wonderful medicines.</span> <span class="time">Read All Story | Share Your Story</span> </div>
              </a><a href="#">
              <div class="user-img"> <img src="images/pss-added/user.png" alt="user" class="img-circle">  </div>
              <div class="mail-contnet">
                <h5>R. Shaikh, India - Lichen Planus</h5>
                <span class="mail-desc">My Lichen Planus has responded very well to your treatment and I am glad that I am finally free from Lichen Planus. Thanks a lot Dr. Shah for your wonderful medicines.</span> <span class="time">Read All Story | Share Your Story</span> </div>
              </a><a href="#">
              <div class="user-img"> <img src="images/pss-added/user.png" alt="user" class="img-circle">  </div>
              <div class="mail-contnet">
                <h5>R. Shaikh, India - Lichen Planus</h5>
                <span class="mail-desc">My Lichen Planus has responded very well to your treatment and I am glad that I am finally free from Lichen Planus. Thanks a lot Dr. Shah for your wonderful medicines.</span> <span class="time">Read All Story | Share Your Story</span> </div>
              </a><a href="#">
              <div class="user-img"> <img src="images/pss-added/user.png" alt="user" class="img-circle">  </div>
              <div class="mail-contnet">
                <h5>R. Shaikh, India - Lichen Planus</h5>
                <span class="mail-desc">My Lichen Planus has responded very well to your treatment and I am glad that I am finally free from Lichen Planus. Thanks a lot Dr. Shah for your wonderful medicines.</span> <span class="time">Read All Story | Share Your Story</span> </div>
              </a> </div>
              <div class="bottom-link">
    <a class="link-css" data-toggle="modal" data-target="#responsive-modal"><i class="icon-plus"></i> Write Your Testimonial </a>
  </div>
          </div>
        </div>
         <div class="col-sm-6 col-xs-12 col-md-4 col-lg-4">
            <div class="col-lg-12">
              <div class="white-box visual-presentation" style="border-top:none;height: 220px;">
              
                <object width="100%" height="220" align="middle" id="cphoto_banner" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000">
                                    <param value="always" name="allowScriptAccess">
                                    <param value="http://www.askdrshah.com/app/images/understanding.swf" name="movie">
                                    <param value="false" name="menu">
                                    <param value="high" name="quality">
                                    <param value="#ffffff" name="bgcolor">
                                    <embed width="100%" height="220" align="middle" pluginspage="https://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" allowscriptaccess="always" name="cphoto_banner" bgcolor="#ffffff" quality="high" menu="false" src="http://www.askdrshah.com/app/images/understanding.swf" title="Adobe Flash Player"></embed></object>
              </div>
            </div>
       
          <!-- /Portlet -->
            <div class="col-md-12">
              <div class="white-box disease-checker" style="border-top:none;height: 220px;">
             
                <object width="100%" height="220" align="left" style="" id="Object1" codebase="https://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000">
                                    <param value="always" name="allowScriptAccess">
                                    <param value="http://www.askdrshah.com/app/images/body.swf" name="movie">
                                    <param value="false" name="menu">
                                    <param value="high" name="quality">
                                    <param value="#ffffff" name="bgcolor">
                                    <embed width="100%" height="220" align="left" pluginspage="https://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" allowscriptaccess="always" name="cphoto_banner" bgcolor="#ffffff" quality="high" menu="false" src="http://www.askdrshah.com/app/images/body.swf" title="Adobe Flash Player"></embed></object>
              </div>
            
        </div>
        </div>

         
      </div>

      <!--Popup Start -->
        <div id="responsive-modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Modal Content is Responsive</h4>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="control-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-inverse waves-effect waves-light">Save changes</button>
                  </div>
                </div>
              </div>
            </div>



      <!-- Popup End -->
      <!-- /.row -->
      
            <!-- row -->
      	<div class="row">
      		 <!-- <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      		<div class="row">
           <div class="col-lg-12">

              <div class="white-box mail-reminder">
              <h3>Mail Reminder</h3>
                	<ul style="list-style-type: decimal;" class="collapse in" aria-expanded="true">
		<li style="padding: 10px; font-size: 12px;">
			Renewal Reminder: Receive mail to tell you when to renew. <b>Subscribed.</b>
			<a class="link-css" href="#"><u>Unsubscribe me, Please</u></a>
		</li>
		<hr style="margin: 0; padding : 0;">
		<li style="padding: 10px; font-size: 12px;">
			Progress report reminder: Receive mail, suggesting you to submit progress report. <b>Subscribed.</b>
			<a class="link-css" href="#"><u>Unsubscribe me, Please</u></a>
		</li>
	</ul>
              </div>
              
            </div>
          </div>
      		</div>
      		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      			<div class="row">
            <div class="col-md-12">
              <div class="white-box submit-testimonial">
              <h3>Submit Your Testimonial</h3>
              <textarea class="form-control" rows="4" style="width: 97%;"></textarea>
              <div style="padding: 8px 0 8px 0;">
              <input type="button" class="send-button" value="Send" />
              </div>
              </div>
            </div>
          </div>
      		</div> 
      		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
      			
      		</div>-->
      	</div>
      <!-- / row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
      <footer class="footer text-center"> Copyright &copy; 2016 Life Force. All rights reserved. </footer>
  <footer class="footer text-center"> Copyright &copy; 2016 Life Force. All rights reserved. </footer>
</div>
<!-- /#wrapper -->

<!-- jQuery -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>
<!--Nice scroll JavaScript -->
<script src="js/jquery.nicescroll.js"></script>

<!--Morris JavaScript -->
<script src="bower_components/raphael/raphael-min.js"></script>
<script src="bower_components/morrisjs/morris.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<script src="js/horizontal-timeline.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>


<!-- Custom Theme JavaScript -->
<script src="js/myadmin.js"></script>
<script src="js/dashboard1.js"></script>
<script src="bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
<script>
  $(function() {
  $(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: false,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "Previous",   // String: Text for the "previous" button
  nextText: "Next",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});
  });
  
  
    $(function() {
        $('#datetimepicker1').datetimepicker({
          
        });
      });
</script>
  <script>
  
  $(window).load(function(){
        $('#myModal').modal('show');
        $( ".close" ).slideUp( 300 ).delay( 8000 ).fadeIn( 400 );
        /*setTimeout(function () {
    $("#form-submit").get(0).pause();
}, 1000);*/
    });
    
    $('#myModal').modal({backdrop: 'static', keyboard: false});  
    
    $(".close").click(function(){
document.getElementById('form-submit').pause();
});
  
  
  	$(function(){
    $('.scroll-css').slimScroll({
        height: '340px'
    });

    $('.casestudynew').slimScroll({
        height: '220px'
    });
});

  </script>
</body>
</html>
