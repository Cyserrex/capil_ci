        <!-- Info Jumlah Semua Penduduk -->
        <div class="right_col" role="main" style="max-width: 100%">

          <div class="row tile_count">
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-users"></i> Jumlah Semua Penduduk</span>
              <div class="count green"><?php echo number_format($TOTAL, 0, ',', '.'); ?></div>
              <span class="count_bottom">Tahun <?php echo date("Y"); ?></span>
            </div>
          </div>

          <!-- grafik penduduk berdasarkan jenis kelamin -->
          <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard_graph">
                            <!-- <div class="row x_title">
                                <div class="col-md-6">
                                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                                </div>
                                <div class="col-md-6">
                                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                    </div>
                                </div>
                            </div> -->

                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <!-- <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                                <div style="width: 100%;">
                                    <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>
                                </div> -->
                                <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                                <div class="x_title">
                                    <label style="color: black;">Perbandingan</label>
                                    <div class="clearfix"></div>
                                </div>
                                <?php
                                $persen_prm = round(($TOT_PRM / $TOTAL) * 100,2);
                                $persen_lk = round(($TOT_LK / $TOTAL) * 100,2);
                                ?>
                                <div class="col-md-12 col-sm-12 col-xs-6">
                                  <div>
                                    <p>Laki-laki</p>
                                    <div class="">
                                      <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                        <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="<?php echo $persen_lk ?>" style="height: 20px !important;"><?php echo $persen_lk ?>%</div>
                                      </div>

                                    </div>
                                  </div>
                                  <div>
                                    <p>Perempuan</p>
                                    <div class="">
                                      <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                        <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="<?php echo $persen_prm ?>" style="height: 20px !important;"><?php echo $persen_prm ?>%</div>
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
        <!-- /page content -->

        <!-- footer content -->
        <!-- <footer>
          <div class="pull-right">
            WWW.GEOINFOTEK.COM</a>
          </div>
          <div class="clearfix"></div>
        </footer> -->
        <!-- /footer content -->

    <script src="<?=base_url()?>vendor/highcharts/code/highcharts.js"></script>
    <script src="<?=base_url()?>vendor/highcharts/code/modules/exporting.js"></script>

    <script type="text/javascript">
    
    var d=new Date();
    var y=d.getFullYear();

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
            text: 'Grafik Jumlah Penduduk Berdasarkan Jenis Kelamin'
        },
        subtitle: {
            text: 'DISPENDUKCAPIL KOTA BANJARMASIN'
        },
        xAxis: {
            categories: [
                'Tahun '+y
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
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0">{point.y:.0f}</td></tr>',
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
            name: 'Laki-Laki',
            data: [<?php echo $TOT_LK; ?>]

        }, {
            name: 'Perempuan',
            data: [<?php echo $TOT_PRM; ?>]

        }]
    });
    </script>
	
  </body>

