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
                            <div class="uk-width-1-3">
                                <div class="uk-panel uk-panel-hover" style="border-radius: 0px; border-color: #eeeeee; ">
                                    <div class="uk-grid uk-grid-collapse">
                                        <a class="uk-width-10-10" style="text-decoration: none;" href="index.php">
                                            <p>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #8d8e8e; font-size: 100px; line-height: 100px; vertical-align: middle; text-align: right;">34</span>
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
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #8d8e8e; font-size: 100px; line-height: 100px; vertical-align: middle; text-align: right;">10</span>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #8d8e8e; font-size: 30px; line-height: 50px; vertical-align: top; ">%</span>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #e4354f; font-size: 30px; line-height: 50px; vertical-align: top; "><i class="uk-icon-caret-down uk-icon-small"></i></span>
                                            </p>
                                            <p style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 300; color: #8d8e8e; font-size: 20px; line-height: 20px;">Volume Market Share<span style="text-shadow: none; font-family: 'Source Sans Pro'; font-weight: 200; color: #8d8e8e; font-size: 10px; line-height: 10px;">  (Over last week)</span></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-3">
                                <div class="uk-panel uk-panel-hover" style="border-radius: 0px; border-color: #eeeeee; background-color: #efefef;">
                                    <div class="uk-grid uk-grid-collapse">
                                        <a class="uk-width-10-10" style="text-decoration: none;" href="indoverview2.php">
                                            <p>
                                                <span style="text-shadow: none; font-family: 'Dosis'; font-weight: 300; color: #8d8e8e; font-size: 100px; line-height: 100px; vertical-align: middle; text-align: right;">8</span>
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
                                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                                    // Our series array that contains series objects or in this case series data arrays
                                    series: 
                                    [
                                      [5, -2, 4, -2, 4, 7]
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
