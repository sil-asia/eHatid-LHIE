<!DOCTYPE html>
<html lang="en">
  <?php $this->load->view('internal/common/header')?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       <?php $this->load->view('internal/common/sidebar.php')?>

       <?php $this->load->view('internal/common/page_head.php')?>

        <div class="right_col" role="main">

           <h3> <?php echo $module;?></h3> 

           
          <div class="row" style="display: inline-block;" >

            <div class="tile_count">
            <div class="col-md-2 col-sm-4  tile_stats_count" data-toggle="tooltip" title="Total Organizations">
              <span class="count_top"><i class="fa fa-user"></i> Total Citizens Profiled</span>
              <div class="count"><?php echo($organizations)?></div>
              <span class="count_bottom"><i class="green">+<?php echo($org_week)?> </i> new profiled citizens </span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count" data-toggle="tooltip" title="Total Buyers">
              <span class="count_top"><i class="fa fa-clock-o"></i> Number patients serviced</span>
              <div class="count"><?php echo($buyers)?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>+<?php echo($buyers_week)?> </i> New patients serviced</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count" data-toggle="tooltip" title="Total Product Views">
              <span class="count_top"><i class="fa fa-user"></i> Total Approved Claims</span>
              <div class="count"><?php echo $views?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i> +<?php echo($views_week)?> </i> New Claims Approved</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count" data-toggle="tooltip" title="Total Products Posted">
              <span class="count_top"><i class="fa fa-user"></i> Total Reports Generated</span>
              <div class="count"><?php echo $all_products_posted?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>+<?php echo($all_products_posted_week)?> </i> New Reports Generated</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count" data-toggle="tooltip" title="Total Products Vetted">
              <span class="count_top"><i class="fa fa-user"></i> Total Health Workers</span>
              <div class="count"><?php echo $all_products_vetted?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>+<?php echo($all_products_vetted_week)?> </i> New Health Workers</span>
            </div>
            <div class="col-md-2 col-sm-4  tile_stats_count" data-toggle="tooltip" title="Total Resource Material Views">
              <span class="count_top"><i class="fa fa-user"></i> Total Claims for Processing</span>
              <div class="count"><?php echo $all_products_submitted?></div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>+<?php echo $all_products_submitted_week?> </i> New Claims for Processing</span>
            </div>
          </div>
          <div class="filter">
                      <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                        <i class=" fa fa-calendar"></i>
                       <b class="caret"></b>
                      </div>
                    </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_title">
                    <div class="col-md-6">
                      <h3> Claims </h3>
                    </div>
                    
                  </div>
                <div class="dashboard_graph x_panel">
                  
                  <div class="x_content">
                    <div class="demo-container" style="height:250px">
                      <div id="system_views" class="demo-placeholder"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-4 col-sm-6 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Health Workers<small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php echo(base_url()."Dashboard/view_all_product_counts")?>">View All</a>
                           
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <?php foreach ($product_views as $pv)
                    {?>
                          <div class="widget_summary">
                          <div class="w_left w_25">
                            <span><?php echo ($pv->name)?></span>
                          </div>
                          <div class="w_center w_55">
                            <div class="progress">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="80"aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($pv->rate)?>%;">
                                <span class="sr-only"><?php echo ($pv->rate)?></span>
                              </div>
                            </div>
                          </div>
                          <div class="w_right w_20">
                            <span><?php echo ($pv->count)?></span>
                          </div>
                          <div class="clearfix"></div>
                        </div>



                    <?php } ?>



                    
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6 ">
                <div class="x_panel tile fixed_height_320">
                  <div class="x_title">
                    <h2>Health Facilities <small>Sessions</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 ">
                          <p class="">Product</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 ">
                          <p class="">Count</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                        <td>
                        <canvas class="product_pie" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                          </td>
                      <td>
                        <table class="tile_info">

                          <?php foreach($product_count as $pc)
                          {?>
                             <tr>
                            <td>
                              <p><i class="fa fa-square <?php echo($pc->color)?>"></i><?php echo($pc->name)?> </p>
                            </td>
                            <td><?php echo($pc->rate)?>%</td>
                          </tr>
                          <tr>

                          <?php }?>

                         
                          
                        </table>
                      </td>
                    </tr>
                  </table>
                  </div>
                </div>
              </div>

             <div class="col-md-4 col-sm-6 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Barangays<small>Views</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="<?php echo(base_url()."Dashboard/view_all_buyer_counts")?>">View All</a>
                           
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <?php foreach ($buyer_views as $pv)
                    {?>
                          <div class="widget_summary">
                          <div class="w_left w_25">
                            <span><?php echo ($pv->name)?></span>
                          </div>
                          <div class="w_center w_55">
                            <div class="progress">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="80"aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($pv->rate)?>%;">
                                <span class="sr-only"><?php echo ($pv->rate)?></span>
                              </div>
                            </div>
                          </div>
                          <div class="w_right w_20">
                            <span><?php echo ($pv->count)?></span>
                          </div>
                          <div class="clearfix"></div>
                        </div>



                    <?php } ?>



                    
                  </div>
                </div>
              </div>

            </div>
          </div>


                <div class="clearfix"></div>
              </div>
            </div>

          </div>
         
        </div>
          <!-- /top tiles -->
        <!-- footer content -->
   <?php $this->load->view('internal/common/botton_foot.php')?>
        
        <!-- /footer content -->
      </div>
    </div>

   <?php $this->load->view('internal/common/footer.php')?>
   <script>

    
    $(document).ready(function(){
      init_view_plot();
      init_chart_pie();
      $('[data-toggle="tooltip"]').tooltip();  

    });
    function init_view_plot()
    {

   var system_views_settings = {
        grid: {
            show: true,
            aboveData: true,
            color: "#3f3f3f",
            labelMargin: 10,
            axisMargin: 0,
            borderWidth: 0,
            borderColor: null,
            minBorderMargin: 5,
            clickable: true,
            hoverable: true,
            autoHighlight: true,
            mouseActiveRadius: 100
        },
        series: {
            lines: {
                show: true,
                fill: true,
                lineWidth: 2,
                steps: false
            },
            points: {
                show: true,
                radius: 4.5,
                symbol: "circle",
                lineWidth: 3.0
            }
        },
        legend: {
            position: "ne",
            margin: [0, -25],
            noColumns: 0,
            labelBoxBorderColor: null,
            labelFormatter: function (label, series) {
                return label + '&nbsp;&nbsp;';
            },
            width: 40,
            height: 1
        },
        colors: ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'],
        shadowSize: 0,
        tooltip: true,
        tooltipOpts: {
            content: "%s: %y.0",
            xDateFormat: "%d/%m",
            shifts: {
                x: -30,
                y: -50
            },
            defaultTheme: false
        },
        yaxis: {
            min: 0
        },
        xaxis: {
            mode: "time",
            minTickSize: [1, "day"],
            timeformat: "%d/%m/%y"
           
        }
    };
         var arr_data1 = [ <?php foreach($view_array as $data){

          echo('[gd('.date('Y', strtotime($data->date)).','.date('m', strtotime($data->date)).','.date('d', strtotime($data->date)).'),'.$data->count.'],');


         }?>
        
    ];
 
      if ($("#system_views").length) {
        console.log('Plot1');

        $.plot($("#system_views"), [{
            label: "Claims",
            data: arr_data1,
            lines: {
                fillColor: "rgba(150, 202, 89, 0.12)"
            },
            points: {
                fillColor: "#fff"
            }
        }], system_views_settings);
    }
 

    }


   </script>
   <script>
    function init_chart_pie() {

    if (typeof (Chart) === 'undefined') { return; }

    console.log('init_chart_doughnut');

    if ($('.product_pie').length) {

        var chart_doughnut_settings = {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
                labels: [
                  <?php foreach($product_count as $pc)
                          {
                             echo('"'. $pc->name.'",');
                           }?>

                  
                ],
                datasets: [{
                    data: [ <?php foreach($product_count as $pc)
                          {
                             echo($pc->rate.",");
                           }?>],
                    backgroundColor: [
                       <?php foreach($product_count as $pc)
                          {
                             echo('"'.$pc->color.'",');
                           }?>
                    ],
                    hoverBackgroundColor: [
                        "#CFD4D8",
                        "#B370CF",
                        "#E95E4F",
                        "#36CAAB",
                        "#49A9EA"
                    ]
                }]
            },
            options: {
                legend: false,
                responsive: false
            }
        }

        $('.product_pie').each(function () {

            var chart_element = $(this);
            var chart_doughnut = new Chart(chart_element, chart_doughnut_settings);

        });

    }

}
   </script>
   <script>

    $(function() {
      var url="<?php echo base_url();?>";

      $("#reportrange").on("apply.daterangepicker", function(e, a) {
                window.location = url+"Dashboard/view/" + a.startDate.toISOString()+"/"+a.endDate.toISOString();
          
});
});


</script>

    
    
  </body>
</html>
