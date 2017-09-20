        <!-- page content Y -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Penduduk</span>
              <div class="count green"><?php echo number_format($TOTAL, 0, ',', '.'); ?></div>
              <!--span class="count_bottom"><i class="green">4% </i> Dari tahun lalu</span-->
            </div>
            
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> Total Laki-laki</span>
              <div class="count"><i class="fa fa-male"></i> <?php echo number_format($TOT_LK, 0, ',', '.'); ?></div>
              <!--span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> Dari tahun lalu</span-->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"></i> Total Perempuan</span>
              <div class="count"><i class="fa fa-female"></i> <?php echo number_format($TOT_PRM, 0, ',', '.'); ?></div>
              <!--span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> Dari tahun lalu</span-->
            </div>
            
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3 style="padding-top: 7%;"><i class="fa fa-line-chart"></i> Penduduk <small>Grafik pertumbuhan penduduk</small></h3>
                  </div>
                <div class="pull-right">                  
                  <div class="col-md-12">
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

                <div class="col-md-9 col-sm-9 col-xs-12">
                <div id="container1" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2><i class="fa fa-exchange"></i> Perbandingan</h2>
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

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">
                <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="x_title">
                          <h2><i class="fa fa-graduation-cap"></i> Pendidikan</h2>
                          <div class="clearfix"></div>
                        </div>
                        <?php
                        $TOTAL              = $BLM_SEKOLAH+$BLM_TMT_SD+$TMT_SD+$SLTP+$SLTA+$D_I_II+$DIII+$SI+$SII+$SIII;
                        $persen_blm_sekolah = round(($BLM_SEKOLAH / $TOTAL) * 100,1);
                        $persen_blm_tmt_sd  = round(($BLM_TMT_SD / $TOTAL) * 100,1);
                        $persen_tmt_sd      = round(($TMT_SD / $TOTAL) * 100,1);
                        $persen_sltp        = round(($SLTP / $TOTAL) * 100,1);
                        $persen_slta        = round(($SLTA / $TOTAL) * 100,1);
                        $persen_d_i_ii      = round(($D_I_II / $TOTAL) * 100,1);
                        $persen_diii        = round(($DIII / $TOTAL) * 100,1);
                        $persen_si          = round(($SI / $TOTAL) * 100,1);
                        $persen_sii         = round(($SII / $TOTAL) * 100,1);
                        $persen_siii        = round(($SIII / $TOTAL) * 100,1);
                        ?>
                        <div class="col-md-12 col-sm-12 col-xs-6">
                          <div>
                            <p>Tidak/Belum Sekolah</p>
                            <div class="row">
                            <div class="col-md-8">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $persen_blm_sekolah ?>" style="height: 20px !important;"></div>
                              </div>                              
                            </div>
                            <div class="col-md-2 more_info">
                                  <span><?php echo number_format($BLM_SEKOLAH, 0, ',', '.'); ?></span>
                            </div>
                            </div>
                          </div>
                          <div>
                            <p>Belum Tamat SD</p>
                            <div class="row">
                            <div class="col-md-8">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $persen_blm_tmt_sd ?>" style="height: 20px !important;"></div>
                              </div>                              
                            </div>
                            <div class="col-md-2 more_info">
                                  <span><?php echo number_format($BLM_TMT_SD, 0, ',', '.'); ?></span>
                            </div>
                            </div>
                          </div>
                          <div>
                            <p>Tamat SD</p>
                            <div class="row">
                            <div class="col-md-8">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $persen_tmt_sd ?>" style="height: 20px !important;"></div>
                              </div>                              
                            </div>
                            <div class="col-md-2 more_info">
                                  <span><?php echo number_format($TMT_SD, 0, ',', '.'); ?></span>
                            </div>
                            </div>
                          </div>
                          <div>
                            <p>Tamat SLTP</p>
                            <div class="row">
                            <div class="col-md-8">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $persen_sltp ?>" style="height: 20px !important;"></div>
                              </div>                              
                            </div>
                            <div class="col-md-2 more_info">
                                  <span><?php echo number_format($SLTP, 0, ',', '.'); ?></span>
                            </div>
                            </div>
                          </div>
                          <div>
                            <p>Tamat SLTA</p>
                            <div class="row">
                            <div class="col-md-8">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $persen_slta ?>" style="height: 20px !important;"></div>
                              </div>                              
                            </div>
                            <div class="col-md-2 more_info">
                                  <span><?php echo number_format($SLTA, 0, ',', '.'); ?></span>
                            </div>
                            </div>
                          </div>
                          <div>
                            <p>Tamat DI/DII</p>
                            <div class="row">
                            <div class="col-md-8">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $persen_d_i_ii ?>" style="height: 20px !important;"></div>
                              </div>                              
                            </div>
                            <div class="col-md-2 more_info">
                                  <span><?php echo number_format($D_I_II, 0, ',', '.'); ?></span>
                            </div>
                            </div>
                          </div>
                          <div>
                            <p>Tamat DIII</p>
                            <div class="row">
                            <div class="col-md-8">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $persen_diii ?>" style="height: 20px !important;"></div>
                              </div>                              
                            </div>
                            <div class="col-md-2 more_info">
                                  <span><?php echo number_format($DIII, 0, ',', '.'); ?></span>
                            </div>
                            </div>
                          </div>
                          <div>
                            <p>Tamat S1</p>
                            <div class="row">
                            <div class="col-md-8">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $persen_si ?>" style="height: 20px !important;"></div>
                              </div>                              
                            </div>
                            <div class="col-md-2 more_info">
                                  <span><?php echo number_format($SI, 0, ',', '.'); ?></span>
                            </div>
                            </div>
                          </div>
                          <div>
                            <p>Tamat S2</p>
                            <div class="row">
                            <div class="col-md-8">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $persen_sii ?>" style="height: 20px !important;"></div>
                              </div>                              
                            </div>
                            <div class="col-md-2 more_info">
                                  <span><?php echo number_format($SII, 0, ',', '.'); ?></span>
                            </div>
                            </div>
                          </div>
                          <div>
                            <p>Tamat S3</p>
                            <div class="row">
                            <div class="col-md-8">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $persen_siii ?>" style="height: 20px !important;"></div>
                              </div>                              
                            </div>
                            <div class="col-md-2 more_info">
                                  <span><?php echo number_format($SIII, 0, ',', '.'); ?></span>
                            </div>
                            </div>
                          </div>
                        </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12" style="margin-left: 5px;">
                        <div class="x_title">
                          <h2><i class="fa fa-calendar-o"></i> Usia</h2>
                          <div class="clearfix"></div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-6">
                          <div>
                            <p>Usia 0-4 thn</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40" style="height: 20px !important;"><?php echo '1'; ?></div>
                              </div>

                            </div>
                          </div>
                          <div>
                            <p>Usia 5-9 thn</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>Usia 10-14 thn</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>Usia 15-19 thn</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>Usia 20-24 thn</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>Usia 25-29 thn</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>Usia 30-34 thn</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>Usia 35-39 thn</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>Usia 40-44 thn</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>Usia 45-49 thn</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="90" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>

                        </div>
                </div>

                <div class="col-md-5 col-sm-5 col-xs-12" style="margin-left: 5px;">
                  <div class="x_title">
                    <h2><i class="fa fa-pie-chart"></i> Pie</h2>
                    <div class="clearfix"></div>
                  </div>
                      <div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                </div>

                <div class="clearfix"></div>
              </div>
            </div>
          </div>

          

          <br />


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
    <script src="<?=base_url()?>vendor/cart/chartist.js"></script>

    <script src="<?=base_url()?>vendor/highcharts/code/highcharts.js"></script>
    <script src="<?=base_url()?>vendor/highcharts/code/modules/exporting.js"></script>
    <script type="text/javascript">
    Highcharts.setOptions({
        lang: {
            numericSymbols: [' Ribu', ' Juta']
        }
    });
    //CHART GRAPH
    Highcharts.chart('container1', {

    title: {
        text: false
    },

    yAxis: {
        title: {
            text: 'Jumlah Penduduk'
        }
    },
    xAxis: {
            categories: [
                '2015',
                '2016',
                '2017'
            ],
            crosshair: true
        },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },


    series: [{
        name: 'Laki-laki',
        data: [<?php echo $TOT_LK ?>, 0, 0]
    }, {
        name: 'Perempuan',
        data: [<?php echo $TOT_PRM ?>, 0, 0]
    }]

});



      Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
    return {
        radialGradient: {
            cx: 0.5,
            cy: 0.3,
            r: 0.7
        },
        stops: [
            [0, color],
            [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
        ]
    };
});

      //CHART PIE
      $(document).ready(function () {
      // Build the chart
      Highcharts.chart('container2', {
          chart: {
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              type: 'pie'
          },
          title: {
              text: 'Capil PIE'
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: false
                  },
                  showInLegend: true
              }
          },
          series: [{
              name: 'Angkanya',
              colorByPoint: true,
              data: [{
                  name: 'Satu',
                  y: 56.33
              }, {
                  name: 'Dua',
                  y: 24.03,
                  sliced: true,
                  selected: true
              }, {
                  name: 'Tiga',
                  y: 10.38
              }, {
                  name: 'Empat',
                  y: 4.77
              }, {
                  name: 'Lima',
                  y: 0.91
              }, {
                  name: 'Enam',
                  y: 0.2
              }]
          }]
      });
  });
    </script>
	
  </body>

