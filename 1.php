<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<html>
    <head>
        <script src="js/plotly-latest.min.js"></script>
        <script src="js/figure.js"></script>        
    </head>
    <body>

<div id="260ec0d9-e7f9-4644-bae6-5dbc760da9d4" style="width: 100%; height: 100%;" class="plotly-graph-div"></div>
        <script type="text/javascript">
            (function(){
                window.PLOTLYENV={'BASE_URL': 'https://plot.ly'};

                var gd = document.getElementById('260ec0d9-e7f9-4644-bae6-5dbc760da9d4')
                var resizeDebounce = null;

                function resizePlot() {
                    var bb = gd.getBoundingClientRect();
                    Plotly.relayout(gd, {
                        width: bb.width,
                        height: bb.height
                    });
                }

                
                window.addEventListener('resize', function() {
                    if (resizeDebounce) {
                        window.clearTimeout(resizeDebounce);
                    }
                    resizeDebounce = window.setTimeout(resizePlot, 100);
                });
                

                
                Plotly.plot(gd,  {
                    data: figure.data,
                    layout: figure.layout,
                    frames: figure.frames,
                    config: {"mapboxAccessToken": "pk.eyJ1IjoiY2hyaWRkeXAiLCJhIjoiY2lxMnVvdm5iMDA4dnhsbTQ5aHJzcGs0MyJ9.X9o_rzNLNesDxdra4neC_A", "linkText": "Export to plot.ly", "showLink": true}
                });
                
           }());
        </script>        
        
        
        
                                        <div class="indgraph1" id="IndGraph1"  style="width:100%; "></div>
                                        <script type="text/javascript">
                                            indgraph1 = document.getElementById('IndGraph1');
                                            
                                            var data = [
                                              {
                                                x: ['2013-12-04', '2013-12-05', '2013-12-06', '2013-12-07', '2013-12-08', '2013-12-09', '2013-12-10', '2013-12-11', '2013-12-12', '2013-12-13'],
                                                y: [1, 3, 6, 4, 5, 7, 9, 3, 7, 2],
                                                type: 'scatter'
                                              }
                                            ];
 
                                            Plotly.newPlot(indgraph1, data);   
                                        </script>        
        
        
                                        
                                        
                                        
                                        
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
        
                                            
                                            
                                            
                                <script type="text/javascript">
                                    var trace1 = {
                                      x: ['giraffes', 'orangutans', 'monkeys'],
                                      y: [20, 14, 23],
                                      name: 'SF Zoo',
                                      type: 'bar'
                                    };

                                    var trace2 = {
                                      x: ['giraffes', 'orangutans', 'monkeys'],
                                      y: [12, 18, 29],
                                      name: 'LA Zoo',
                                      type: 'bar'
                                    };

                                    var data = [trace1, trace2];

                                    var layout = {barmode: 'stack'};

                                    Plotly.newPlot('myDiv', data, layout);                                
                                </script>                                             
                                            
                                            
                                            
        
                                <div class="uk-grid uk-grid-collapse">
                                    <div class="uk-width-1-1" style="height: 300px;">
                                        <canvas id="myChart" width="400" height="400" style="width: 100%; height: 300px;"></canvas>
                                        <script type="text/javascript">
                                            var ctx = document.getElementById("myChart");
                                            var myChart = new Chart(ctx, {
                                                type: 'line',
                                                data : {
                                                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                                                    datasets: [
                                                        {
                                                            label: "My First dataset",
                                                            fill: false,
                                                            lineTension: 0.1,
                                                            backgroundColor: "rgba(75,192,192,0.4)",
                                                            borderColor: "rgba(75,192,192,1)",
                                                            borderCapStyle: 'butt',
                                                            borderDash: [],
                                                            borderDashOffset: 0.0,
                                                            borderJoinStyle: 'miter',
                                                            pointBorderColor: "rgba(75,192,192,1)",
                                                            pointBackgroundColor: "#fff",
                                                            pointBorderWidth: 1,
                                                            pointHoverRadius: 5,
                                                            pointHoverBackgroundColor: "rgba(75,192,192,1)",
                                                            pointHoverBorderColor: "rgba(220,220,220,1)",
                                                            pointHoverBorderWidth: 2,
                                                            pointRadius: 1,
                                                            pointHitRadius: 10,
                                                            data: [-65, 59, -80, 81, -56, 55, 40],
                                                            spanGaps: false
                                                        }
                                                    ]
                                                }     
                                            }); 
                                        </script>
                                    </div>
                                </div>                                
                                
                                
                                
                                
                                
    </body>
</html>
