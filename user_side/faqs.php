<?php
	include("control.php");
	
	
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  

<!-- Mirrored from themes.3rdwavemedia.com/Cold Calling/1.5.5/pricing.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 13:55:56 GMT -->
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

<body class="pricing-page">  
    <!-- ******HEADER****** --> 
    <?php 
	include("header.php");
	?><!--//header-->
    
    <div class="headline-bg pricing-headline-bg">
    </div><!--//headline-bg-->
    <section class="story-section section section-on-bg">
        <h2 class="title container text-center">Frequently Asked Questions</h2>
        <div > 
            <div class="faq section has-bg-color" >                    
                <!--//about-->
                <div class="container">
            
            <div class="row">
                <div class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
                    <?php
						$i=0; 
						foreach($faq_select_all as $faq)
						{
							$i++;
					?>
                    <div class="panel">
                        <div class="panel-heading">
                            <h4 class="panel-title"><a data-parent="#accordion"
                            data-toggle="collapse" class="panel-toggle" href="#<?php echo $i;?>"><i class="fa fa-plus-square"></i><?php echo $faq->question;?></a></h4>
                        </div>
            
                        <div class="panel-collapse collapse" id="<?php echo $i;?>">
                            <div class="panel-body">
                                <?php echo $faq->answer;?>
                            </div>
                        </div>
                    </div><!--//panel-->
            		<?php
						}
						?>
                  
                    
                                          
                </div>
            </div><!--//row-->
            <div class="contact-lead text-center">
                <h4 class="title">Have more questions?</h4>
                <a class="btn btn-cta btn-cta-secondary" href="contact.php">Get in touch</a>
            </div>
        </div>
                <!--//team--><!--//press-kit-->
            </div><!--//story-container--> 
        </div><!--//container-->
    </section>
    <!-- ******Pricing Section****** -->
    <!--//pricing-->
    
    <!-- ******FAQ Section****** --> 
    <!--//faq-->
    
    <!-- ******CTA Section****** -->
    <section id="cta-section" class="section cta-section text-center pricing-cta-section">
        <div class="container">
           <h2 class="title">More than <span class="counting">300,000</span> users are using Cold Calling</h2>
           <p class="intro">What are you waiting for?</p>
           <p><a class="btn btn-cta btn-cta-primary" href="https://wrapbootstrap.com/theme/Cold Calling-designed-for-products-WB0N38R04" target="_blank">Get Cold CallingNow</a></p>
        </div><!--//container-->
    </section><!--//cta-section-->
    
    <!-- ******FOOTER****** --> 
    <?php 
	include("footer.php");
	?><!--//footer-->
    
    <!-- Video Modal -->
    <div class="modal modal-video" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="videoModalLabel" class="modal-title sr-only">Video Tour</h4>
                </div>
                <div class="modal-body">
                    <div class="video-container">
                        <iframe src="http://player.vimeo.com/video/28872840?color=ffffff&amp;wmode=transparent" width="720" height="405" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div><!--//video-container-->
                </div><!--//modal-body-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->
    
    <!-- *****CONFIGURE STYLE****** -->  
    <div class="config-wrapper">
        <div class="config-wrapper-inner">
            <a id="config-trigger" class="config-trigger" href="#"><i class="fa fa-cog"></i></a>
            <div id="config-panel" class="config-panel">
                <h5>Choose Colour</h5>
                <ul id="color-options" class="list-unstyled list-inline">
                    <li class="theme-1 active" ><a data-style="assets/css/styles.css" href="#"></a></li>
                    <li class="theme-2"><a data-style="assets/css/styles-2.css" href="#"></a></li>
                    <li class="theme-3"><a data-style="assets/css/styles-3.css" href="#"></a></li>
                    <li class="theme-4"><a data-style="assets/css/styles-4.css" href="#"></a></li>                   
                    <li class="theme-5"><a data-style="assets/css/styles-5.css" href="#"></a></li>                     
                    <li class="theme-6"><a data-style="assets/css/styles-6.css" href="#"></a></li>
                    <li class="theme-7"><a data-style="assets/css/styles-7.css" href="#"></a></li>
                    <li class="theme-8"><a data-style="assets/css/styles-8.css" href="#"></a></li>                    
                    <li class="theme-9"><a data-style="assets/css/styles-9.css" href="#"></a></li>
                    <li class="theme-10"><a data-style="assets/css/styles-10.css" href="#"></a></li>
                </ul><!--//color-options-->
                <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
            </div><!--//configure-panel-->
        </div><!--//config-wrapper-inner-->
    </div><!--//config-wrapper-->
 
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

<!-- Mirrored from themes.3rdwavemedia.com/Cold Calling/1.5.5/pricing.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2016 13:55:56 GMT -->
</html> 

