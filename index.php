<?php
    
//  This sets the timezone to IST
    date_default_timezone_set('Asia/Kolkata'); 


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sales Drivers for ABInBev</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Sales Drivers">
        <meta name="author" content="Amit Ghasghase">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon"> 
        
        <!-- Javascript includes -->        
        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="js/uikit.js"></script>  
        
        <!-- FontAwesome includes -->
        <script src="https://use.fontawesome.com/4cc5491472.js"></script>
        
        <!-- CSS includes -->
        <link rel="stylesheet" type="text/css" href="css/uikit.almost-flat.css" >
        <link rel="stylesheet" type="text/css" href="fa2/css/font-awesome.min.css"> 
        <link rel="stylesheet" type="text/css" href="css/custom.css"> 
        
        <!-- Notify CSS and JavaScript -->
        <link rel="stylesheet" href="css/components/notify.css">
        <script src="js/components/notify.js"></script>              
        
        <!-- Slideshow CSS and JavaScript -->
        <link rel="stylesheet" href="css/components/slideshow.css">
        <script src="js/components/slideshow.js"></script>              

        <!-- Accordian Effect CSS and JavaScript -->
        <link rel="stylesheet" href="css/components/accordion.css">
        <script src="js/components/accordion.js"></script>    

        <!-- Off-Canvas CSS and JavaScript -->
        <script src="js/core/offcanvas.js"></script>    
        
        <!-- Tooltips CSS and JavaScript -->
        <link rel="stylesheet" href="css/components/tooltip.css">
        <script src="js/components/tooltip.js"></script>   
        
        <!-- Plot.ly JS Includes -->
        <!--<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>-->
<!--        <script src="js/plotly-latest.min.js"></script>
        <script src="js/figure.js"></script>-->

        <!-- Chartist JS Includes -->
        <!--<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>-->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
        <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>

        <!-- Chart.js JS Includes -->
<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>-->

        <!-- Google Charts JS Includes -->
<!--        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->

        
        
        
        <!-- Google Font Includes -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500|Roboto:100,300|Source+Sans+Pro:200,300,400" rel="stylesheet">
      
        
    </head>
    <body style="padding: 0px;">     
        
        <div class="uk-navbar uk-hidden-touch" style=" background: #ffffff; border-radius: 0px; border: none; padding: 0px 5px; border-bottom: 1px solid #eeeeee;">
            <a class="uk-navbar-brand" href="index.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size:12px; line-height: 40px;"><img style="margin-right: 10px; height: 15px; width: auto;" src="img/logo.png"></a>
            <div class="uk-navbar-flip">
                <ul class="uk-navbar-nav" style="">
                    <li><a href="index.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 12px; line-height: 40px; border-bottom: 1px solid #DA314B;">INDUSTRY</a></li>
                    <li><a href="prodoverview.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 12px; line-height: 40px;">PRODUCT</a></li>
                </ul>
            </div>
        </div>        
        
        

        <div class="uk-grid uk-grid-collapse uk-navbar navbarclean uk-hidden-notouch" style="border-bottom: none; border-radius: 0px; background: #ffffff; /* background: transparent; */">
            <div class="uk-width-10-10 ">
                <p class="uk-text-center" style="padding: 10px;  margin-bottom: 0px; height: 20px; ">
                    <a class="uk-float-left" style="color: #8d8e8e;" href="#my-id"  data-uk-offcanvas><i class="uk-icon-bars uk-icon-small"></i></a>
                </p>
                <div id="my-id" class="uk-offcanvas" aria-hidden="true">
                    <div class="uk-offcanvas-bar" style="background: #F0F2F3;" >
                        <ul class="uk-nav uk-nav-side uk-nav-parent-icon uk-width-medium-2-3" data-uk-nav>
                            <li class="" style="height: 100px; background: #ffffff;"></li>
                            <li><a style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 12px; line-height: 20px; border-left: 1px solid #DA314B;" href="index.php">INDUSTRY</a></li>                  
                            <li><a style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 12px; line-height: 20px;" href="prodoverview.php">PRODUCT</a></li>                                                          
                        </ul>                        
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="uk-grid uk-grid-collapse" style="height: 100%; margin-top: 40px;">
            <div class="uk-width-10-10 " style="height: 100%;">
                <div class="uk-grid">
                    <div class="uk-width-medium-9-10 uk-container-center uk-row-first">
                        <ul class="uk-tab">
                            <li aria-expanded="true" class="uk-active"><a href="index.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 12px; line-height: 16px; margin-top: 0px; border-radius: 0px; ">OVERVIEW</a></li>
                            <li aria-expanded="false" class=""><a href="indcomp1.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 12px; line-height: 16px; margin-top: 0px; border-radius: 0px;">COMPETITION</a></li>
                            <li aria-expanded="false" class=""><a href="indplan.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 12px; line-height: 16px; margin-top: 0px; border-radius: 0px;">PLANNING</a></li>
                        </ul>
                    </div>                    
                </div>          
            </div>
        </div>
        
        <div class="uk-grid uk-grid-collapse" style="height: 100%; padding: 60px;">
            <div class="uk-width-10-10 " style="height: 100%;">
                        <div class="uk-grid" style="">
                            <div class="uk-width-1-3" >
                                <div class="uk-panel uk-panel-hover" style="border-radius: 0px; border-color: #eeeeee; background-color: #efefef;">
                                    <div class="uk-grid uk-grid-collapse">
                                        <a class="uk-width-10-10" style="text-decoration: none; " href="index.php">
                                            <p>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #8d8e8e; font-size: 100px; line-height: 100px; vertical-align: middle; text-align: right;">31.31</span>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #8d8e8e; font-size: 30px; line-height: 50px; vertical-align: top; ">%</span>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #1abc9c; font-size: 30px; line-height: 50px; vertical-align: top; "><i class="uk-icon-caret-up uk-icon-small"></i></span>
                                            </p>
                                            <p style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 20px; line-height: 20px;">Volume Growth<span style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 200; color: #8d8e8e; font-size: 10px; line-height: 10px;">  (Over last week)</span></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-panel uk-panel-hover" style="border-radius: 0px; border-color: #eeeeee;">
                                    <div class="uk-grid uk-grid-collapse">
                                        <a class="uk-width-10-10" style="text-decoration: none;" href="indoverview1.php">
                                            <p>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #8d8e8e; font-size: 100px; line-height: 100px; vertical-align: middle; text-align: right;">0.40</span>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #8d8e8e; font-size: 30px; line-height: 50px; vertical-align: top; ">%</span>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #e4354f; font-size: 30px; line-height: 50px; vertical-align: top; "><i class="uk-icon-caret-down uk-icon-small"></i></span>
                                            </p>
                                            <p style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 20px; line-height: 20px;">Volume Market Share<span style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 200; color: #8d8e8e; font-size: 10px; line-height: 10px;">  (Over last week)</span></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-panel uk-panel-hover" style="border-radius: 0px; border-color: #eeeeee;">
                                    <div class="uk-grid uk-grid-collapse">
                                        <a class="uk-width-10-10" style="text-decoration: none;" href="indoverview2.php">
                                            <p>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #8d8e8e; font-size: 100px; line-height: 100px; vertical-align: middle; text-align: right;">0.31</span>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #8d8e8e; font-size: 30px; line-height: 50px; vertical-align: top; ">%</span>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #1abc9c; font-size: 30px; line-height: 50px; vertical-align: top; "><i class="uk-icon-caret-up uk-icon-small"></i></span>
                                            </p>
                                            <p style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 20px; line-height: 20px;">Revenue Growth<span style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 200; color: #8d8e8e; font-size: 10px; line-height: 10px;">  (Over last week)</span></p>
                                        </a>
                                    </div>
                                </div>
                    </div>
                </div>
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-10-10">     
                        <div class="uk-grid uk-grid-collapse">
                            <div class="ct-chart ct-perfect-fourth" style="width: 100%; height: 300px; margin-top: 50px;"></div>
                            <script type="text/javascript">
                                var data = {
                                    // A labels array that can contain any sort of values
                                    labels: ["Sun Jan 06 2013 00:00:00 GMT+0530",
"Sun Jan 13 2013 00:00:00 GMT+0530",
"Sun Jan 20 2013 00:00:00 GMT+0530",
"Sun Jan 27 2013 00:00:00 GMT+0530",
"Sun Feb 03 2013 00:00:00 GMT+0530",
"Sun Feb 10 2013 00:00:00 GMT+0530",
"Sun Feb 17 2013 00:00:00 GMT+0530",
"Sun Feb 24 2013 00:00:00 GMT+0530",
"Sun Mar 03 2013 00:00:00 GMT+0530",
"Sun Mar 10 2013 00:00:00 GMT+0530",
"Sun Mar 17 2013 00:00:00 GMT+0530",
"Sun Mar 24 2013 00:00:00 GMT+0530",
"Sun Mar 31 2013 00:00:00 GMT+0530",
"Sun Apr 07 2013 00:00:00 GMT+0530",
"Sun Apr 14 2013 00:00:00 GMT+0530",
"Sun Apr 21 2013 00:00:00 GMT+0530",
"Sun Apr 28 2013 00:00:00 GMT+0530",
"Sun May 05 2013 00:00:00 GMT+0530",
"Sun May 12 2013 00:00:00 GMT+0530",
"Sun May 19 2013 00:00:00 GMT+0530",
"Sun May 26 2013 00:00:00 GMT+0530",
"Sun Jun 02 2013 00:00:00 GMT+0530",
"Sun Jun 09 2013 00:00:00 GMT+0530",
"Sun Jun 16 2013 00:00:00 GMT+0530",
"Sun Jun 23 2013 00:00:00 GMT+0530",
"Sun Jun 30 2013 00:00:00 GMT+0530",
"Sun Jul 07 2013 00:00:00 GMT+0530",
"Sun Jul 14 2013 00:00:00 GMT+0530",
"Sun Jul 21 2013 00:00:00 GMT+0530",
"Sun Jul 28 2013 00:00:00 GMT+0530",
"Sun Aug 04 2013 00:00:00 GMT+0530",
"Sun Aug 11 2013 00:00:00 GMT+0530",
"Sun Aug 18 2013 00:00:00 GMT+0530",
"Sun Aug 25 2013 00:00:00 GMT+0530",
"Sun Sep 01 2013 00:00:00 GMT+0530",
"Sun Sep 08 2013 00:00:00 GMT+0530",
"Sun Sep 15 2013 00:00:00 GMT+0530",
"Sun Sep 22 2013 00:00:00 GMT+0530",
"Sun Sep 29 2013 00:00:00 GMT+0530",
"Sun Oct 06 2013 00:00:00 GMT+0530",
"Sun Oct 13 2013 00:00:00 GMT+0530",
"Sun Oct 20 2013 00:00:00 GMT+0530",
"Sun Oct 27 2013 00:00:00 GMT+0530",
"Sun Nov 03 2013 00:00:00 GMT+0530",
"Sun Nov 10 2013 00:00:00 GMT+0530",
"Sun Nov 17 2013 00:00:00 GMT+0530",
"Sun Nov 24 2013 00:00:00 GMT+0530",
"Sun Dec 01 2013 00:00:00 GMT+0530",
"Sun Dec 08 2013 00:00:00 GMT+0530",
"Sun Dec 15 2013 00:00:00 GMT+0530",
"Sun Dec 22 2013 00:00:00 GMT+0530",
"Sun Dec 29 2013 00:00:00 GMT+0530",
"Sun Jan 05 2014 00:00:00 GMT+0530",
"Sun Jan 12 2014 00:00:00 GMT+0530",
"Sun Jan 19 2014 00:00:00 GMT+0530",
"Sun Jan 26 2014 00:00:00 GMT+0530",
"Sun Feb 02 2014 00:00:00 GMT+0530",
"Sun Feb 09 2014 00:00:00 GMT+0530",
"Sun Feb 16 2014 00:00:00 GMT+0530",
"Sun Feb 23 2014 00:00:00 GMT+0530",
"Sun Mar 02 2014 00:00:00 GMT+0530",
"Sun Mar 09 2014 00:00:00 GMT+0530",
"Sun Mar 16 2014 00:00:00 GMT+0530",
"Sun Mar 23 2014 00:00:00 GMT+0530",
"Sun Mar 30 2014 00:00:00 GMT+0530",
"Sun Apr 06 2014 00:00:00 GMT+0530",
"Sun Apr 13 2014 00:00:00 GMT+0530",
"Sun Apr 20 2014 00:00:00 GMT+0530",
"Sun Apr 27 2014 00:00:00 GMT+0530",
"Sun May 04 2014 00:00:00 GMT+0530",
"Sun May 11 2014 00:00:00 GMT+0530",
"Sun May 18 2014 00:00:00 GMT+0530",
"Sun May 25 2014 00:00:00 GMT+0530",
"Sun Jun 01 2014 00:00:00 GMT+0530",
"Sun Jun 08 2014 00:00:00 GMT+0530",
"Sun Jun 15 2014 00:00:00 GMT+0530",
"Sun Jun 22 2014 00:00:00 GMT+0530",
"Sun Jun 29 2014 00:00:00 GMT+0530",
"Sun Jul 06 2014 00:00:00 GMT+0530",
"Sun Jul 13 2014 00:00:00 GMT+0530",
"Sun Jul 20 2014 00:00:00 GMT+0530",
"Sun Jul 27 2014 00:00:00 GMT+0530",
"Sun Aug 03 2014 00:00:00 GMT+0530",
"Sun Aug 10 2014 00:00:00 GMT+0530",
"Sun Aug 17 2014 00:00:00 GMT+0530",
"Sun Aug 24 2014 00:00:00 GMT+0530",
"Sun Aug 31 2014 00:00:00 GMT+0530",
"Sun Sep 07 2014 00:00:00 GMT+0530",
"Sun Sep 14 2014 00:00:00 GMT+0530",
"Sun Sep 21 2014 00:00:00 GMT+0530",
"Sun Sep 28 2014 00:00:00 GMT+0530",
"Sun Oct 05 2014 00:00:00 GMT+0530",
"Sun Oct 12 2014 00:00:00 GMT+0530",
"Sun Oct 19 2014 00:00:00 GMT+0530",
"Sun Oct 26 2014 00:00:00 GMT+0530",
"Sun Nov 02 2014 00:00:00 GMT+0530",
"Sun Nov 09 2014 00:00:00 GMT+0530",
"Sun Nov 16 2014 00:00:00 GMT+0530",
"Sun Nov 23 2014 00:00:00 GMT+0530",
"Sun Nov 30 2014 00:00:00 GMT+0530",
"Sun Dec 07 2014 00:00:00 GMT+0530",
"Sun Dec 14 2014 00:00:00 GMT+0530",
"Sun Dec 21 2014 00:00:00 GMT+0530",
"Sun Dec 28 2014 00:00:00 GMT+0530",
"Sun Jan 04 2015 00:00:00 GMT+0530",
"Sun Jan 11 2015 00:00:00 GMT+0530",
"Sun Jan 18 2015 00:00:00 GMT+0530",
"Sun Jan 25 2015 00:00:00 GMT+0530",
"Sun Feb 01 2015 00:00:00 GMT+0530",
"Sun Feb 08 2015 00:00:00 GMT+0530",
"Sun Feb 15 2015 00:00:00 GMT+0530",
"Sun Feb 22 2015 00:00:00 GMT+0530",
"Sun Mar 01 2015 00:00:00 GMT+0530",
"Sun Mar 08 2015 00:00:00 GMT+0530",
"Sun Mar 15 2015 00:00:00 GMT+0530",
"Sun Mar 22 2015 00:00:00 GMT+0530",
"Sun Mar 29 2015 00:00:00 GMT+0530",
"Sun Apr 05 2015 00:00:00 GMT+0530",
"Sun Apr 12 2015 00:00:00 GMT+0530",
"Sun Apr 19 2015 00:00:00 GMT+0530",
"Sun Apr 26 2015 00:00:00 GMT+0530",
"Sun May 03 2015 00:00:00 GMT+0530",
"Sun May 10 2015 00:00:00 GMT+0530",
"Sun May 17 2015 00:00:00 GMT+0530",
"Sun May 24 2015 00:00:00 GMT+0530",
"Sun May 31 2015 00:00:00 GMT+0530",
"Sun Jun 07 2015 00:00:00 GMT+0530",
"Sun Jun 14 2015 00:00:00 GMT+0530",
"Sun Jun 21 2015 00:00:00 GMT+0530",
"Sun Jun 28 2015 00:00:00 GMT+0530",
"Sun Jul 05 2015 00:00:00 GMT+0530",
"Sun Jul 12 2015 00:00:00 GMT+0530",
"Sun Jul 19 2015 00:00:00 GMT+0530",
"Sun Jul 26 2015 00:00:00 GMT+0530",
"Sun Aug 02 2015 00:00:00 GMT+0530",
"Sun Aug 09 2015 00:00:00 GMT+0530",
"Sun Aug 16 2015 00:00:00 GMT+0530",
"Sun Aug 23 2015 00:00:00 GMT+0530",
"Sun Aug 30 2015 00:00:00 GMT+0530",
"Sun Sep 06 2015 00:00:00 GMT+0530",
"Sun Sep 13 2015 00:00:00 GMT+0530",
"Sun Sep 20 2015 00:00:00 GMT+0530",
"Sun Sep 27 2015 00:00:00 GMT+0530",
"Sun Oct 04 2015 00:00:00 GMT+0530",
"Sun Oct 11 2015 00:00:00 GMT+0530",
"Sun Oct 18 2015 00:00:00 GMT+0530",
"Sun Oct 25 2015 00:00:00 GMT+0530",
"Sun Nov 01 2015 00:00:00 GMT+0530",
"Sun Nov 08 2015 00:00:00 GMT+0530",
"Sun Nov 15 2015 00:00:00 GMT+0530",
"Sun Nov 22 2015 00:00:00 GMT+0530",
"Sun Nov 29 2015 00:00:00 GMT+0530",
"Sun Dec 06 2015 00:00:00 GMT+0530",
"Sun Dec 13 2015 00:00:00 GMT+0530",
"Sun Dec 20 2015 00:00:00 GMT+0530",
"Sun Dec 27 2015 00:00:00 GMT+0530",
"Sun Jan 03 2016 00:00:00 GMT+0530",
"Sun Jan 10 2016 00:00:00 GMT+0530",
"Sun Jan 17 2016 00:00:00 GMT+0530",
"Sun Jan 24 2016 00:00:00 GMT+0530",
"Sun Jan 31 2016 00:00:00 GMT+0530",
"Sun Feb 07 2016 00:00:00 GMT+0530",
"Sun Feb 14 2016 00:00:00 GMT+0530",
"Sun Feb 21 2016 00:00:00 GMT+0530",
"Sun Feb 28 2016 00:00:00 GMT+0530",
"Sun Mar 06 2016 00:00:00 GMT+0530",
"Sun Mar 13 2016 00:00:00 GMT+0530",
"Sun Mar 20 2016 00:00:00 GMT+0530",
"Sun Mar 27 2016 00:00:00 GMT+0530",
"Sun Apr 03 2016 00:00:00 GMT+0530",
"Sun Apr 10 2016 00:00:00 GMT+0530",
"Sun Apr 17 2016 00:00:00 GMT+0530",
"Sun Apr 24 2016 00:00:00 GMT+0530",
"Sun May 01 2016 00:00:00 GMT+0530",
"Sun May 08 2016 00:00:00 GMT+0530",
"Sun May 15 2016 00:00:00 GMT+0530",
"Sun May 22 2016 00:00:00 GMT+0530",
"Sun May 29 2016 00:00:00 GMT+0530",
"Sun Jun 05 2016 00:00:00 GMT+0530",
"Sun Jun 12 2016 00:00:00 GMT+0530",
"Sun Jun 19 2016 00:00:00 GMT+0530",
"Sun Jun 26 2016 00:00:00 GMT+0530",
"Sun Jul 03 2016 00:00:00 GMT+0530",
"Sun Jul 10 2016 00:00:00 GMT+0530",
"Sun Jul 17 2016 00:00:00 GMT+0530",
"Sun Jul 24 2016 00:00:00 GMT+0530",
"Sun Jul 31 2016 00:00:00 GMT+0530",
"Sun Aug 07 2016 00:00:00 GMT+0530",
"Sun Aug 14 2016 00:00:00 GMT+0530",
"Sun Aug 21 2016 00:00:00 GMT+0530",
"Sun Aug 28 2016 00:00:00 GMT+0530",
"Sun Sep 04 2016 00:00:00 GMT+0530",
"Sun Sep 11 2016 00:00:00 GMT+0530",
"Sun Sep 18 2016 00:00:00 GMT+0530",
"Sun Sep 25 2016 00:00:00 GMT+0530",
"Sun Oct 02 2016 00:00:00 GMT+0530",
"Sun Oct 09 2016 00:00:00 GMT+0530",
"Sun Oct 16 2016 00:00:00 GMT+0530",
"Sun Oct 23 2016 00:00:00 GMT+0530",
"Sun Oct 30 2016 00:00:00 GMT+0530",
"Sun Nov 06 2016 00:00:00 GMT+0530",
"Sun Nov 13 2016 00:00:00 GMT+0530",
"Sun Nov 20 2016 00:00:00 GMT+0530",
"Sun Nov 27 2016 00:00:00 GMT+0530",
"Sun Dec 04 2016 00:00:00 GMT+0530",
"Sun Dec 11 2016 00:00:00 GMT+0530",
"Sun Dec 18 2016 00:00:00 GMT+0530",
"Sun Dec 25 2016 00:00:00 GMT+0530"],
                                    // Our series array that contains series objects or in this case series data arrays
                                    series: 
                                    [
                                      [0.795511613662223,
1.12161833801461,
0.939355138781136,
1.37122580765026,
0.8051993018497,
0.946934370016294,
0.948674757757294,
1.09814707723538,
0.926432626191044,
1.16637630996889,
1.00124027687569,
1.17332456726558,
0.889963996198945,
1.01086052261281,
1.06688915269846,
0.96558704960026,
1.05359016636728,
1.00308583968388,
1.00278667203365,
1.1987559710398,
0.920226833694675,
0.896458753050766,
1.11494519388134,
0.993041196154666,
1.14267386556859,
1.40832686463947,
0.611701357450845,
1.02610397379974,
0.998884317896837,
1.00160100927118,
0.976981792971875,
1.0254178243062,
0.978717551593987,
1.25830898916176,
0.882636018160185,
0.960064396767228,
0.854057234459899,
0.999560520112081,
0.97807508085412,
0.978049270164449,
1.07386512339125,
0.986069683930799,
0.978331652285563,
0.919875643487689,
1.02574138488429,
0.994993503714239,
1.25126916532966,
0.617611066082752,
1.1608264862454,
1.29306524412919,
1.15967759682066,
0.802819218171597,
0.821607221128186,
1.05045992812546,
0.950158446702909,
1.30475492755546,
0.773944520163409,
1.0660022259113,
0.991039936360565,
0.923358827534146,
1.09956470220443,
1.10488864596841,
0.996841552047617,
0.973961937811499,
1.00871655515641,
1.06792104283427,
1.12888249058905,
0.854161945453665,
1.18886364930199,
0.912735897946553,
1.02144032240831,
1.16036981791274,
0.881405104605086,
0.996550645858809,
1.06045394283311,
0.958533565857951,
1.01932761537565,
1.51157630874031,
0.651390251464844,
0.963269517575927,
1.05858938321223,
0.972041250204229,
0.999786079091543,
1.01245494693901,
0.978792636080629,
1.27883096101877,
0.831038624736398,
1.01566703871962,
0.865585657330754,
0.948596032960276,
1.06529404602884,
0.96212555531747,
0.949914526716354,
1.03028151889712,
1.01481511233572,
0.925734923753179,
0.921742919867835,
1.10833386577981,
1.24958508030497,
0.659668141042797,
1.03586117947772,
1.13923732147352,
1.23547331993531,
0.909773481209505,
0.713512653361256,
1.09745485610127,
0.991037072761184,
1.3452272786458,
0.810696184439532,
1.04523749090928,
0.909822516544174,
0.948421577991977,
1.08516045984982,
1.2050458666653,
0.962262885808892,
1.03435969087533,
1.08381030679012,
0.885758256518694,
1.03932543861815,
0.941282960441886,
1.30786428651394,
0.729286949171977,
0.99567597450179,
1.26415941823957,
0.927744364980172,
0.967643004669269,
1.05048738694173,
1.1495494187458,
0.893546570724164,
1.47730120611134,
0.632544121406848,
1.04397523673735,
1.05698564283966,
0.986822766998191,
0.941311945784084,
1.07023762122046,
0.960266423091053,
1.03860552124973,
1.20930745317227,
0.865856667708978,
0.876127891754637,
1.03175593504742,
0.947719069115673,
1.10198878011676,
0.898229706979168,
0.99619332765416,
1.07052047598418,
0.838966874473116,
0.974244380651075,
1.11814551613812,
1.15746252172036,
0.698609131293665,
1.03532000901061,
1.0304809992134,
1.28538527371717,
0.989835204756412,
0.653319945203032,
1.1037145153973,
1.03378451515218,
1.03806670453546,
1.34130712796319,
0.855946140988506,
0.880259169390949,
1.03592715413735,
0.981642984027108,
0.963559792989197,
1.09228850482789,
1.09089101371595,
0.925560356675345,
0.92023988593137,
1.12211972883612,
1.0130527949737,
0.923757439003213,
1.01497282790962,
1.01388931745174,
1.0066959902805,
1.27881588966775,
0.899757018475086,
0.901064371739653,
1.21028712681916,
0.933899098295628,
1.35273085240201,
0.792292740581456,
0.874286640790308,
1.06226217005056,
1.00511387360411,
0.971130204478977,
1.0080237341632,
1.02600314970568,
0.951660345823859,
1.17638364341522,
0.837976545269278,
0.938406681439034,
1.01111929635231,
1.01309630920567,
0.971498802768188,
0.976371489741782,
1.03325621467679,
0.960349161678705,
0.994425088214601,
1.0022766817483,
0.981702050443639,
1.19293383069737,
0.682111237013509,
1.02609813222637,
1.07368072854916]
                                    ]
                                };

                                var options = {
                                    axisX: {
                                        // We can disable the grid for this axis
                                        showGrid: false,
                                        // and also don't show the label
                                        showLabel: false
                                    },
                                    axisY: {
                                        // We can disable the grid for this axis
                                        showGrid: false,
                                        // and also don't show the label
                                        showLabel: false
                                    }
                                };


                                new Chartist.Line('.ct-chart', data);
                            </script> 
                        </div>
                    </div>
                </div>        
            </div>
        </div>
        
        
        
        
        
                
        
    </body>
</html>
