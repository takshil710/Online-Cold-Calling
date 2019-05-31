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
				<a href="#">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Post a Task</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post">
        <div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Select Caller</label>
									<br/>
                                    <div class="col-sm-8"><select name="selectcaller" id="selector1" class="form-control1">				
									<?php 
							  	foreach($call_all_data as $cad)
								{?>
										<option value="<?php echo $cad->uid; ?>">
									<?php echo $cad->fname; ?>								
								  </option><?php }?>
										
									</select></div>
								</div><br/>
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Task Name</label>
              <input type="text" placeholder="Taskname"  name="tname" required>
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Date of entry</label>
        <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" name=" entrydate" required>
            </div>
            
            
            <div class="col-md-6 form-group1">
              <label class="control-label">Features</label>
              <input type="text" placeholder="Features" name="features" required>
              
            </div><br/>
            
         	<div class="vali-form">
               <div class="col-md-12 form-group1 ">
              <label class="control-label">Description</label>
              <input type="text"  placeholder="Description..." name="description" required>
            </div> <div class="clearfix"> </div>
            </div>
             
          
             <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Price</label>
              <input type="text" placeholder="Price" name="price" required>
               
            </div>
             
           
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group"></div>
             <div class="clearfix"> </div>
             <div class="clearfix"> </div>
          
            <div class="col-md-12 form-group">
              <input type="submit" class="btn btn-primary"  value="submit" name="add_task">
             
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

