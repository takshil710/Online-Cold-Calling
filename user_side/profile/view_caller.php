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



</head>
<body>
<div id="wrapper">
       <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
            <?php
            	include("header-1.php");
			?> 
			
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <!-- /.navbar-collapse -->
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
				<span>List of Callers</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--faq-->
 	<div class="blank">
	

			<div class="table">
				<table class="table">
                    <tbody>
                        <tr class="table-row">
                            <td class="table-text">
                              <h4>First Name</h4>
                            </td>
                            <td class="table-text">
                            	<h4>Last Name</h4>
                                
                            </td>
                            <td class="table-text">
                            	<h4>Number</h4>
                                
                            </td>
                           <td class="table-text">
                            	<h4>Email Id</h4>
                                
                            </td>
                        </tr>
                                                     <?php 
							  foreach($call_all_data as $cad)
							  {
							  ?>

                        <tr class="table-row">
                            <td class="table-text">
                             <h6><?php echo $cad->fname;?></h6>
                            </td>
                            <td class="table-text">
                            	<h6><?php echo $cad->lname;?></h6>
                                
                            </td>
                            <td class="table-text">
                            	<h6><?php echo $cad->cnumber;?></h6>
                                
                            </td>
                           <td class="table-text">
                            	<h6><?php echo $cad->emailid;?></h6>
                                
                            </td>
                        </tr>
                        <?php
							  }
							 ?>
                       
                        
                        
                        
                        
                        
						
						
						
					<!--	<tr class="table-row">
                            <td class="table-img">
                               <img src="images/in11.jpg" alt="" />
                            </td>
                            <td class="table-text">
                            	<h6> Lorem ipsum</h6>
                                <p>Nullam quis risus eget urna mollis ornare vel eu leo</p>
                            </td>
                            <td>
                            	<span class="ur">urgent</span>
                            </td>
                            <td class="march">
                                in 1 days 
                            </td>
                          
                             <td >
                               <i class="fa fa-star-half-o icon-state-warning"></i>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
	        </div>
	       </div>
	
	<!--//faq-->
		<!---->
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

