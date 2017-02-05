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
                            <li aria-expanded="false" class=""><a href="index.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 12px; line-height: 16px; margin-top: 0px; border-radius: 0px; ">OVERVIEW</a></li>
                            <li aria-expanded="true" class="uk-active"><a href="indcomp1.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 12px; line-height: 16px; margin-top: 0px; border-radius: 0px;">COMPETITION</a></li>
                            <li aria-expanded="false" class=""><a href="indplan.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 12px; line-height: 16px; margin-top: 0px; border-radius: 0px;">PLANNING</a></li>
                        </ul>
                    </div>                    
                </div>          
            </div>
        </div>
        
        <div class="uk-grid uk-grid-collapse" style="height: 100%; padding: 60px;">
            <div class="uk-width-10-10 " style="height: 100%;">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-10-10">
                        <div class="uk-button-group" style="margin-left: 20px;" >
                            <a class="uk-button" href="indcomp1.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 15px; line-height: 15px; padding-top: 5px; ">Volume</a>
                            <a class="uk-button" href="indcomp2.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 15px; line-height: 15px; padding-top: 5px; ">Volume Growth</a>
                            <a class="uk-button uk-active" href="indcomp3.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 15px; line-height: 15px; padding-top: 5px; ">% Increase in Volume for each Marketing unit</a>
                            <a class="uk-button" href="indcomp4.php" style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 15px; line-height: 15px; padding-top: 5px; ">% Increase in Volume for each Promotion unit</a>
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
                                    labels: ['COMP 1', 'ABInBev', 'COMP 2', 'COMP 3', 'COMP 4', 'COMP 5', 'COMP 6', 'COMP 7', 'COMP 8', 'COMP 9', 'COMP 10', 'COMP 11', 'COMP 12', 'COMP 13', 'COMP 14', 'COMP 15', 'COMP 16', 'COMP 17', 'COMP 18', 'COMP 19', 'COMP 20', 'COMP 21', 'COMP 22', 'COMP 23', 'COMP 24', 'COMP 25'],
                                    // Our series array that contains series objects or in this case series data arrays
                                    series: 
                                    [
                                      [26,25,24,23,22,21,20,19,18,17,16,15,14,13,12,11,10,9,8,7,6,5,4,3,2,1]
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


                                new Chartist.Bar('.ct-chart', data);
                            </script> 
                        </div>
                    </div>
                </div>        
            </div>
        </div>
        
        
        
        
        
                
        
    </body>
</html>
