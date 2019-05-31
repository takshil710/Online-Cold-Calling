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
                              List of Tasks
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Task name</th>
                                 <th><i class="icon_calendar"></i>Date of entry</th>
                                 
                                 <th><i class="icon_pin_alt"></i> Description</th>
                                 <th><i class="icon_mobile"></i> Price</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
                              <?php 
							  foreach($task_all_data as $task)
							  {
							  ?>
                              <tr>
                                 <td><?php echo $task->tname; ?></td>
                                 <td><?php echo $task->date_of_entry;?></td>
                                 <td><?php echo $task->description;?></td>
                                 <td><?php echo $task->price?></td>
                                
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_task.php?edit_task=<?php echo $task->tskid;?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                              <a class="btn btn-danger" href="control.php?del_task=<?php echo $task->tskid;?>"><i class="icon_close_alt2"></i></a>
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
