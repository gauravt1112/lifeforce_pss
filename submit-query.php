<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'includes/head.php';?>
</head>
<body>
<!-- Preloader starts -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<!-- preloader ends -->
<div id="wrapper">
  <!-- Navigation starts -->
    <?php include 'includes/navigation.php';?>
    <!-- Navigation ends --> 
    
      <!-- side-Navigation starts -->
    <?php include 'includes/side-navigation.php';?>
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
     
      <!-- form section starts -->
     	<div class="row" style="margin-top: 25px;">
     	<div class="col-md-12">
     	<div class="white-box" style="overflow: auto;">
     		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
     		<h3 style="margin-bottom: 20px;">
     			Submit Your Query
     		</h3>
     		<div class="row form-space">
     		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 center-title-content">
     			   			<label>Types Of Query:</label>
     		</div>
     		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
     			
     			<select class="form-control">
<option value="Medical-query">Medical Query</option>
  						<option value="Administrative-query">Administrative Query</option>
  						<option value="Financial-query">Financial Query</option>
  						<option value="Comments">Comments</option>
  						<option value="Complaints">Complaints</option>
  						<option value="Testimonial">Testimonial</option>
  						<option value="Diseased-photos">Diseased Photos</option>
  						<option value="Medical-reports">Medical Reports</option>
  						<option value="Scanned-copies">Scanned Copies</option>

                      </select>
     		</div>
     		</div>
     		<div class="row form-space">
     		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 center-title-content">
     			   			<label>Date & Time: </label>
     		</div>
     		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
<!--     			<input type="text" class="form-control">-->

      <div id="datetimepicker1" class="input-append date">
        <input data-format="dd/MM/yyyy hh:mm:ss" type="text" class="form-control" placeholder="dd/MM/yyyy hh:mm:ss"></input>
        <span class="add-on">
<!--          <i data-time-icon="icon-time" data-date-icon="icon-calendar">-->
			<i class="fa fa-calendar"></i>
          </i>
        </span>
      </div>
    
     		</div>
     		</div>
     		
     		<div class="row form-space">
     		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 center-title-content">
     			   			<label>Query / Message:</label>
     		</div>
     		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<textarea class="form-control" rows="5"></textarea>
     		</div>
     		</div>
     		
     		<div class="row form-space">
     			<p style="padding-left: 15px; font-size: 11px;">
Attachments (If any disease photos and/or scanned medical reports):
    						</p>
     		</div>
     		
     			<div class="row form-space">
     		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 center-title-content">
     			   			<label>Attachment:</label>
     		</div>
     		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<input class="form-control" type="file" style="border: 1px solid #ccc; width: 70%; float: left; margin-bottom: 10px; border-radius: 5px; border: 1px solid #ccc;">
    							<input class="form-control" type="button" value="Cancel" style="width: 25%; float: right; background-color: #8A461D; color: #fff;">
    							<input class="form-control" type="button" value="Attach Another File" style="width: 70%; margin-bottom: 10px; background-color: #8A461D; color: #fff;">
    				<input class="form-control" type="checkbox" style="width: 20px; float: left;"> <span style="float: left; line-height: 45px; margin-left: 10px;">Send Mail</span>
     		</div>
     		</div>
     		
     		<div class="row form-space">
     			<p style="padding-left: 15px; font-size: 11px;">
    				(In case you face difficulty submitting photos or reports, please submit them one at a time. If you are unable to upload them, please send them to us by email at info@askdrshah.com giving your PIN and name.)
    			</p>
     		</div>
     		
     		<div class="row form-space">
    			<input class="form-control" type="button" value="Send" style="width: 100px; background-color: #8A461D; color: #fff; margin: 0 auto;">
    		</div>
  
     		</div>
     		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-right: 0;">
     			<div class="submit-img-wrapper">
    				<img src="images/pss-added/submit-query.jpg" class="img-responsive" style="width: 100%;">
    			</div>
     		</div>
     		</div>
     		</div>
     	</div>
     	
     <!-- form section ends -->
    
     
         </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /#page-wrapper -->
  <?php include 'includes/footer.php';?>
</div>
<!-- /#wrapper -->
<style>
	label{
		font-size: 13px;
	}
</style>
<!-- jQuery -->
  <?php include 'includes/script.php';?>
</body>
</html>
