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
	<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="js/jquery.bvalidator.js" type="text/javascript"></script>
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
<link rel="stylesheet" href="css/bvalidator.css" type="text/css" />
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- date picker -->
    
    <!-- color picker -->
    
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
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
			
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Add a Caller
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal " method="post" id="frm">
                              
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label" >First Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="fname" value="<?php echo $fetchc[0]->fname ?>" data-bvalidator="required,alpha">
                                      </div>
                                  </div>
                                   <div class="form-group">
                                      <label class="col-sm-2 control-label">Last Name</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="lname" value="<?php echo $fetchc[0]->lname ?>" data-bvalidator="required,alpha">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Contact Number</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="contact" value="<?php echo $fetchc[0]->cnumber ?>" data-bvalidator="required,minlength[10],maxlength[10],digit">
                                      </div>
                                  </div>
                                 
                               <div class="form-group">
                                      <label class="col-sm-2 control-label">Email ID</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="email_id" value="<?php echo $fetchc[0]->emailid ?>" data-bvalidator="required,email">
                                      </div>
                                  </div>
                                 
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Password</label>
                                      <div class="col-sm-10">
                                          <input type="password" class="form-control" name="pass"  value="<?php echo $fetchc[0]->pass ?>" data-bvalidator="required,minlength[4],maxlength[8],alphanum">
                                      </div>
                                  </div>
                                   <button type="submit" class="btn btn-primary" name="edit_caller">Submit</button>
                              </form>
                          </div>
                      </section>
                      
                      
                      
                  </div>
              </div>
              <!-- Basic Forms & Horizontal Forms-->
              
              
              <!-- Inline form-->
              

              
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
   <!-- <script src="js/jquery.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>
  

  </body>
</html>
