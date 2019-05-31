<?php include("../control.php");
		include("entryuser.php");
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
		<?php
        include("title.php");
        ?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cold Calling Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!--<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />--> 
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

</head>
<body>
<div id="wrapper">
        <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
            
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <?php
            include("header-1.php");
			?><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <?php
            include("sidebar_client.php");
			?>
        </nav>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		   <div class="banner">
		    	<h2>
				<a href="post_task.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Validation</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form>
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Firstname</label>
              <input type="text" placeholder="Firstname" required>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Lastname</label>
              <input type="text" placeholder="Lastname" required>
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" placeholder="Email" required>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Url</label>
              <input type="text" placeholder="Current Website Url" required>
            </div>
             <div class="clearfix"> </div>
              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Language</label>
            <select>
            	<option value="">English</option>
            	<option value="">Japanese</option>
            	<option value="">Russian</option>
            	<option value="">Arabic</option>
            	<option value="">Spanish</option>
            </select>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group1 ">
              <label class="control-label">Your Comment</label>
              <textarea  placeholder="Your Comment..." required>Your Comment.....</textarea>
            </div>
             <div class="clearfix"> </div>
            <div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Phone Number</label>
              <input type="text" placeholder="Phone Number" required>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Mobile Number</label>
              <input type="text" placeholder="Mobile Number" required>
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" placeholder="Create a password" required>
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Repeated password</label>
              <input type="password" placeholder="Repeated password" required>
            </div>
            <div class="clearfix"> </div>
            </div>
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Number</label>
              <input type="text" placeholder="Number" required>
               <p class=" hint-block">Numeric values from 0-***</p>
            </div>
             <div class="clearfix"> </div>
           
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Date</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" required>
            </div>
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <div class="checkbox1">
                <label>
                  <input type="checkbox" ng-model="model.winner" required class="ng-invalid ng-invalid-required">
                  Are you a winner?
                </label>
              </div>
            </div>
             <div class="clearfix"> </div>
              <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Select</label>
            <select>
            	<option value="">Contrary</option>
            	<option value="">Contrary1</option>
            	<option value="">Contrary2</option>
            	<option value="">Contrary3</option>
            	<option value="">Contrary4</option>
            </select>
            </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
 	<!--//grid-->
		<!--footer-->
<?php
include("footer.php");
?>
		</div>
		</div>
		<div class="clearfix"> </div>
       </div>
     
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

