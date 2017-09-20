 <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-venus-mars"></i> Belum Kawin</span>
              <div class="count green"><?php echo number_format($BK, 0, ',', '.'); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-venus-mars"></i> Kawin</span>
              <div class="count green"><?php echo number_format($K, 0, ',', '.'); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-venus-mars"></i> Cerai Hidup</span>
              <div class="count green"><?php echo number_format($CH, 0, ',', '.'); ?></div>
            </div>  
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-venus-mars"></i> Cerai Mati</span>
              <div class="count green"><?php echo number_format($CM, 0, ',', '.'); ?></div>
            </div>             
            
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3 style="padding-top: 7%;"><i class="fa fa-line-chart"></i> Penduduk <small>Grafik Status Kawin</small></h3>
                  </div>
                <div class="pull-right">                  
                  <div class="col-md-13">
                    <div style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="fa fa-calendar"></i>
                      <label for="exampleSelect1">Tahun</label>
                      <select class="form-control" id="exampleSelect1">
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                      </select>
                    </div>
                  </div>
                </div>
                </div>
                <div class="col-md-8 col-sm-9 col-xs-12">
                <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                </div>
                
                <div class="col-md-4 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2><i class="fa fa-exchange"></i> Perbandingan</h2>
                    <div class="clearfix"></div>
                  </div>
                  <?php
                  $TOTAL = $BK+$K+$CH+$CM;
                  $persen_bk       = round(($BK / $TOTAL) * 100,2);
                  $persen_k        = round(($K / $TOTAL) * 100,2);
                  $persen_ch       = round(($CH / $TOTAL) * 100,2);
                  $persen_cm       = round(($CM / $TOTAL) * 100,2);
                  ?>
                  <div class="col-xs-12 bg-white progress_summary">

                    <div class="row">                        
                        <div class="col-xs-4">
                          <span>Belum Kawin</span>
                        </div>
                        <div class="col-xs-6">
                          <div class="progress progress_sm">
                            <div class="progress-bar" style="background-color: #3F78FF;" role="progressbar" data-transitiongoal="<?php echo $persen_bk ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><?php echo $persen_bk ?>%</span>
                        </div>
                      </div>

                      <div class="row">             
                        <div class="col-xs-4">
                          <span>Kawin</span>
                        </div>
                        <div class="col-xs-6">
                          <div class="progress progress_sm">
                            <div class="progress-bar" style="background-color: #F25E5E;" role="progressbar" data-transitiongoal="<?php echo $persen_k ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><?php echo $persen_k ?>%</span>
                        </div>
                      </div>

                      <div class="row">             
                        <div class="col-xs-4">
                          <span>Cerai Hidup</span>
                        </div>
                        <div class="col-xs-6">
                          <div class="progress progress_sm">
                            <div class="progress-bar" style="background-color: #F4C63D;" role="progressbar" data-transitiongoal="<?php echo $persen_ch ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><?php echo $persen_ch ?>%</span>
                        </div>
                      </div>

                      <div class="row">             
                        <div class="col-xs-4">
                          <span>Cerai Mati</span>
                        </div>
                        <div class="col-xs-6">
                          <div class="progress progress_sm">
                            <div class="progress-bar" style="background-color: #D17905;" role="progressbar" data-transitiongoal="<?php echo $persen_cm ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><?php echo $persen_cm ?>%</span>
                        </div>
                      </div>

                  </div>
              </div>
            <div class="clearfix"></div>
          </div>
         </div>
         </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <script src="<?=base_url()?>vendor/highcharts/code/highcharts.js"></script>
    <script src="<?=base_url()?>vendor/highcharts/code/modules/exporting.js"></script>

    <script type="text/javascript">
    Highcharts.setOptions({
        lang: {
            numericSymbols: [' Ribu', ' Juta']
        }
    });

    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: false
        },
        xAxis: {
            categories: [
                '2015',
                '2016',
                '2017'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Penduduk'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">Tahun <b>{point.key}</b></span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.0f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Belum Kawin',
            data: [<?php echo $BK ?>, 0, 0]

        }, {
            name: 'Kawin',
            data: [<?php echo $K ?>, 0, 0]

        }, {
            name: 'Cerai Hidup',
            data: [<?php echo $CH ?>, 0, 0]

        }, {
            name: 'Cerai Mati',
            data: [<?php echo $CM ?>, 0, 0]

        }]
    });
    </script>
  
  </body>
</html>
