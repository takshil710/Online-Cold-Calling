<?php
	include("control.php");
	
	
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<!-- Mirrored from themes.3rdwavemedia.com/Cold Calling/1.5.5/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 13:58:27 GMT -->
<head>
    <title>Responsive website template for products</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300' rel='stylesheet' type='text/css'> 
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="login-page access-page has-full-screen-bg">
    <div class="upper-wrapper">
        <!-- ******HEADER****** -->
        <header class="header">  
            <div class="container">       
                <h1 class="logo">
                    <a href="index-2.php"><span class="logo-icon"></span><span class="text">Cold Calling</span></a>
                </h1><!--//logo-->
                                     
            </div><!--//container-->
        </header><!--//header-->
        
        <!-- ******Login Section****** --> 
        <section class="login-section access-section section">
            <div class="container">
                <div class="row">
                    <div class="form-box col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">     
                        <div class="form-box-inner">
                            <h2 class="title text-center">Log in to Cold Calling</h2>                 
                            <div class="row">
                                <div class="form-container col-md-5 col-sm-12 col-xs-12">
                                    <form class="login-form" method="post">              
                                        <div class="form-group email">
                                            <label class="sr-only" for="login-email">Email or username</label>
                                            <input id="login-email" type="email" class="form-control login-email" placeholder="Email or username" name="name">
                                        </div><!--//form-group-->
                                        <div class="form-group password">
                                            <label class="sr-only" for="login-password">Password</label>
                                            <input id="login-password" type="password" class="form-control login-password" placeholder="Password" name="pass">
                                            <p class="forgot-password"><a href="reset-password.php">Forgot password?</a></p>
                                        </div><!--//form-group-->
                                        <button type="submit" class="btn btn-block btn-cta-primary" name="login">Log in</button>
                                        <div class="checkbox remember">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div><!--//checkbox-->
                                         <p class="lead">Don't have a Cold Calling account yet? <br /><a class="signup-link" href="signup.php">Create your account now</a></p>  
                                    </form>
                                </div><!--//form-container-->
                                <div class="social-btns col-md-5 col-sm-12 col-xs-12 col-md-offset-1 col-sm-offset-0 col-sm-offset-0">  
                                    <div class="divider"><span>Or</span></div>                      
                                    <ul class="list-unstyled social-login">
                                        <li></li>
                                        <li><button class="github-btn btn" type="button"><i class="fa fa-github-alt"></i>Log in with Github</button></li>
                                        <li><button class="btn btn-primary active" type="button"><i class="fa fa-linkedin"></i>log in with LinkedIn</button></li>
                                        <li></li>
                                    </ul>
                                </div><!--//social-btns-->
                            </div><!--//row-->
                        </div><!--//form-box-inner-->
                    </div><!--//form-box-->
                </div><!--//row-->
            </div><!--//container-->
        </section><!--//contact-section-->
    </div><!--//upper-wrapper-->
    
    <!-- ******FOOTER****** --> 
    <?php 
		include("footer.php");
		?><!--//footer-->
    
    <!-- *****CONFIGURE STYLE****** -->  
    <!--//config-wrapper-->
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script> 
    <script type="text/javascript" src="assets/js/main.js"></script>
    
            
</body>

<!-- Mirrored from themes.3rdwavemedia.com/Cold Calling/1.5.5/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 13:58:29 GMT -->
</html> 

