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
          <!- /.nav-second-level 
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
              <!- /.nav-third-level 
            </li>
          </ul>
          <!- /.nav-second-level 
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
    <div class="container-fluid">
      <div class="row">
    <ul class="rslides">
  <li><img src="images/111.jpg" alt=""></li>
  <li><img src="images/222.jpg" alt=""></li>
  <li><img src="images/333.jpg" alt=""></li>
</ul>

      </div>
      <!-- /.row -->
     
     
     <!-- timeline starts -->
     	<div class="row" style="margin-top: 25px;">
        <div class="col-md-12">
          <div class="white-box">
                    <h3 style="margin-bottom: 20px;">Your Queries</h3>
            <ul class="timeline">
              <li>
                <div class="timeline-badge success"><i class="fa fa-user" aria-hidden="true"></i> </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Patient</h4>
                 <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago </small> </p>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero laboriosam dolor perspiciatis omnis exercitationem. Beatae, officia pariatur? Est cum veniam excepturi. Maiores praesentium, porro voluptas suscipit facere rem dicta, debitis.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge warning"><i class="fa fa-user" aria-hidden="true"></i> </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Doctor</h4>
                                     <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago </small> </p>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium maiores odit qui est tempora eos, nostrum provident explicabo dignissimos debitis vel! Adipisci eius voluptates, ad aut recusandae minus eaque facere.</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge success"><i class="fa fa-user" aria-hidden="true"></i> </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Patient</h4>
                                     <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago </small> </p>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus numquam facilis enim eaque, tenetur nam id qui vel velit similique nihil iure molestias aliquam, voluptatem totam quaerat, magni commodi quisquam.</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                              <div class="timeline-badge warning"><i class="fa fa-user" aria-hidden="true"></i> </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Doctor</h4>
                                     <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago </small> </p>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates est quaerat asperiores sapiente, eligendi, nihil. Itaque quos, alias sapiente rerum quas odit! Aperiam officiis quidem delectus libero, omnis ut debitis!</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-badge success"><i class="fa fa-user" aria-hidden="true"></i> </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Patient</h4>
                                     <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago </small> </p>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis minus modi quam ipsum alias at est molestiae excepturi delectus nesciunt, quibusdam debitis amet, beatae consequuntur impedit nulla qui! Laborum, atque.</p>
                    
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-badge warning"><i class="fa fa-user" aria-hidden="true"></i> </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4 class="timeline-title">Doctor</h4>
                                     <p><small class="text-muted"><i class="fa fa-clock-o"></i> 11 hours ago </small> </p>
                  </div>
                  <div class="timeline-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt obcaecati, quaerat tempore officia voluptas debitis consectetur culpa amet, accusamus dolorum fugiat, animi dicta aperiam, enim incidunt quisquam maxime neque eaque.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
     	
     <!-- timeline ends -->
     
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
</body>
</html>
