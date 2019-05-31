<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<!-- Mirrored from themes.3rdwavemedia.com/Cold Calling/1.5.5/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 13:58:22 GMT -->
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

<body class="contact-page">
    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <?php 
		include("header.php");
		?><!--//header-->
        
        <div class="headline-bg contact-headline-bg">
        </div><!--//headline-bg-->

        
        <!-- ******Contact Section****** --> 
        <section class="contact-section section section-on-bg">
            <div class="container">
                <h2 class="title text-center">Contact Us</h2>
                <p class="intro text-center">We’d love to hear from you. </p>
                <form id="contact-form" class="contact-form" method="post" action="#">                    
                    <div class="row text-center">
                        <div class="contact-form-inner col-md-8 col-sm-12 col-xs-12 col-md-offset-2 col-sm-offset-0 xs-offset-0">
                            <div class="row">                                                           
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label class="sr-only" for="cname">Your name</label>
                                    <input type="text" class="form-control" id="cname" name="name" placeholder="Your name" minlength="2" required>
                                </div>                    
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <label class="sr-only" for="cemail">Email address</label>
                                    <input type="email" class="form-control" id="cemail" name="email" placeholder="Your email address" required>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <label class="sr-only" for="cmessage">Your message</label>
                                    <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="12" required></textarea>
                                </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button type="submit" class="btn btn-block btn-cta btn-cta-primary">Send Message</button>
                                </div>                           
                            </div><!--//row-->
                        </div>
                    </div><!--//row-->
                    <div id="form-messages"></div>
                </form><!--//contact-form-->
            </div><!--//container-->
        </section><!--//contact-section-->
        
        <!-- ******Other Contact Section****** --> 
        <section class="contact-other-section section">
            <div class="container text-center">
                <h2 class="title">Other ways to reach us</h2>
                <p class="intro">You can also get in touch lorem ipsum dolor sit amet. Donec ut massa consequat, bibendum metus pellentesque, pellentesque arcu. </p>
                <div class="row">
                    <ul class="other-info list-unstyled col-md-6 col-sm-10 col-xs-12 col-md-offset-3 col-sm-offset-1 xs-offset-0" >
                        <li><i class="fa fa-envelope-o"></i><a href="#">hello@yourwebsite.com</a></li>
                        <li><i class="fa fa-twitter"></i><a href="https://twitter.com/3rdwave_media" target="_blank">@3rdwave_themes</a></li>
                        <li><i class="fa fa-phone"></i><a href="tel:+0800123456">0123456789</a></li>
                        <li><i class="fa fa-map-marker"></i>Shivranjani Cross road<br />
                       Copatechno Pvt Ltd,<br />Ahmedabad,<br />Gujarat,<br />India.</li>
                    </ul>
                </div><!--//row-->
            </div><!--//container-->
        </section><!--//contact-other-section-->
        
        <!-- ******Map Section****** --> 
        <section class="map-section section"><!--//container-->
        </section><!--//map-section-->
        
        <!-- ******CTA Section****** -->
        <section id="cta-section" class="section cta-section text-center contact-cta-section">
            <div class="container">
               <h2 class="title">Ready to promote your product online?</h2>
               <p class="intro">More than <span class="counting">300,000</span> users are using Cold Calling</p>
               <p><a class="btn btn-cta btn-cta-primary" href="https://wrapbootstrap.com/theme/Cold Calling-designed-for-products-WB0N38R04" target="_blank">Get Cold Calling Now</a></p>
            </div><!--//container-->
        </section><!--//cta-section-->

    </div><!--//wrapper-->
    
    <!-- ******FOOTER****** --> 
    <?php 
		include("footer.php");
		?>
        <!--//footer-->
    
    <!-- *****CONFIGURE STYLE****** -->  
    
 
    <!-- Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script> 
    
    <!-- contact page specific js starts -->
    <script type="text/javascript" src="assets/plugins/jquery.validate.min.js"></script>       
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script> 
    <script type="text/javascript" src="assets/plugins/gmaps/gmaps.js"></script> 
    <script type="text/javascript" src="assets/js/contact.js"></script>  
    <script type="text/javascript" src="assets/js/map.js"></script>
    <!-- contact page specific js ends-->  
      
    <script type="text/javascript" src="assets/js/main.js"></script>
    
            
</body>

<!-- Mirrored from themes.3rdwavemedia.com/Cold Calling/1.5.5/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 13:58:27 GMT -->
</html> 

