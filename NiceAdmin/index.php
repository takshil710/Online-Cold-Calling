<?php
	include("control.php");
	
	
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

    <title>Cold Calling System</title>
    <!--start of validation here-->
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
<!--End of validation here-->
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      <form class="login-form" method="post" id="frm">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Username" autofocus name="name" data-bvalidator="required,alpha">
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="pass" data-bvalidator="required,minlength[4],maxlength[8],alphanum">
            </div>
            <?php
				if(isset($_GET['msg']))
				{
					?>
                    <p style="color:red">incorrect username and password</p>
                    <?php
				}
			?>
            <?php
				if(isset($_GET['msg1']))
				{
					?>
                    <p style="color:red">you must login to see this page</p>
                    <?php
				}
			?>
            <?php
				if(isset($_GET['msg3']))
				{
					?>
                    <p style="color:red">you have been succesfully logged out</p>
                    <?php
				}
			?>
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
          
        </div>
      </form>

    </div>


  </body>
</html>
