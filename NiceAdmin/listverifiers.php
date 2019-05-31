<?php
	include("control.php");
	include("entryadmin.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

<?php
    	include("title.php");
	?>
	<script src="jquery.js" type="text/javascript"></script>
<script src="jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="jquery.bvalidator.js" type="text/javascript"></script>
<script type="text/javascript"> 

    $(document).ready(function () {
	
        $('#frm').bValidator();
    });
	
	
</script> 
<script>
 function test(val)
 	{
		$.ajax({
			
				type:"post",
				url:"control.php",
				data:'cid='+val,
				success:function(data)
				{
					$("#state_id").html(data);		
				}
		});
		
	}
</script>
<link rel="stylesheet" href="bvalidator.css" type="text/css" />
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <?php
	  	include("header.php");
	  ?>      
      <!--header end-->

      <!--sidebar start-->
      <?php
	  	include("sidebar.php");
	  ?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row"></div>
              <!-- page start-->
              <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
              <div class="row"></div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              List of Verifiers
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i>First name</th>
                                 <th><i class="icon_calendar"></i> Last name</th>
                                 
                                 <th><i class="icon_pin_alt"></i> Email ID</th>
                                 <th><i class="icon_mobile"></i> Mobile</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <?php 
							  foreach($verifier_all_data as $vad)
                              {
								  ?>
							  <tr>
                                 <td><?php echo $vad->fname; ?></td>
                                 <td><?php echo $vad->lname; ?></td>
                                 <td><?php echo $vad->emailid; ?></td>
                                 <td><?php echo $vad->cnumber; ?></td>
                                
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_verifier.php?edit_verifier=<?php echo $vad->verid;?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="control.php?del_verifier=<?php echo $vad->verid;?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
                             <?php
							  }
							  ?>
                             
                            
                             
                             
                            
                           
                                                           
                           </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></scrip>
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
