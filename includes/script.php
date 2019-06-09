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