        <!-- page content Y -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Penduduk</span>
              <div class="count green"><?php echo number_format($p->TOTAL, 0, ',', '.'); ?></div>
              <!--span class="count_bottom"><i class="green">4% </i> Dari tahun lalu</span-->
            </div>
            
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"> Total Laki-laki</span>
              <div class="count"><i class="fa fa-male"></i> <?php echo number_format($p->LK, 0, ',', '.'); ?></div>
              <!--span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> Dari tahun lalu</span-->
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"></i> Total Perempuan</span>
              <div class="count"><i class="fa fa-female"></i> <?php echo number_format($p->PRM, 0, ',', '.'); ?></div>
              <!--span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> Dari tahun lalu</span-->
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"></i> Perbandingan</span>
              <?php
              $persen_prm = round(($p->PRM / $p->TOTAL) * 100,2);
              $persen_lk = round(($p->LK / $p->TOTAL) * 100,2);
              ?>
                <div class="row">
                  <div class="col-md-4">
                    <span><b>Laki-laki</b></span>
                  </div>
                  <div class="col-md-8">
                    <div class="progress progress_sm" style="display: inline-block; margin: 0 0 0 5px; width: 100%; height: 20px !important;">
                      <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="<?php echo $persen_lk ?>" style="height: 20px !important;"><?php echo $persen_lk ?>%</div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <span><b>Perempuan</b></span>
                  </div>
                  <div class="col-md-8">
                    <div class="progress progress_sm" style="display: inline-block; margin: 0 0 0 5px; width: 100%; height: 20px !important;">
                      <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="<?php echo $persen_prm ?>" style="height: 20px !important;"><?php echo $persen_prm ?>%</div>
                    </div>
                  </div>
                </div>
            </div>
            
          </div>
          <!-- /top tiles -->


          <div class="row">
              <div class="dashboard_graph">
                <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="x_title">
                          <h2><i class="fa fa-graduation-cap"></i> Pendidikan</h2>
                          <div class="clearfix"></div>
                        </div>
                        <?php
                        /*
                        $tot_pend           = $pen->BLM_SEKOLAH+$pen->BLM_TMT_SD+$pen->TMT_SD+$pen->SLTP+$pen->SLTA+$pen->D_I_II+$pen->DIII+$pen->SI+$pen->SII+$pen->SIII;
                        $persen_blm_sekolah = round(($pen->BLM_SEKOLAH / $tot_pend) * 100,1);
                        $persen_blm_tmt_sd  = round(($pen->BLM_TMT_SD / $tot_pend) * 100,1);
                        $persen_tmt_sd      = round(($pen->TMT_SD / $tot_pend) * 100,1);
                        $persen_sltp        = round(($pen->SLTP / $tot_pend) * 100,1);
                        $persen_slta        = round(($pen->SLTA / $tot_pend) * 100,1);
                        $persen_d_i_ii      = round(($pen->D_I_II / $tot_pend) * 100,1);
                        $persen_diii        = round(($pen->DIII / $tot_pend) * 100,1);
                        $persen_si          = round(($pen->SI / $tot_pend) * 100,1);
                        $persen_sii         = round(($pen->SII / $tot_pend) * 100,1);
                        $persen_siii        = round(($pen->SIII / $tot_pend) * 100,1);
                        */
                        ?>
                        <div class="col-md-12 col-sm-12 col-xs-6">
                          <div id="pendidikan" style="min-width: 310px; max-width: 800px; height: 600px; margin: 0 auto"></div>
                        </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-4">
                        <div class="x_title">
                          <h2><i class="fa fa-calendar-o"></i> Usia</h2>
                          <div class="clearfix"></div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-6">
                          <div id="usia" style="min-width: 300px; max-width: 300px; height: 600px; margin: 0 auto"></div>
                        </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-4">
                  <div class="x_title">
                      <h2><i class="fa fa-tint"></i> Golongan Darah</h2>
                      <div class="clearfix"></div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                      <div id="container2" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
                  </div>
                </div>

                <div class="clearfix"></div>
              </div>
          </div>

          <div class="row">
           <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">

             <!-- ISI2 -->

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

      //CHART PENDIDIKAN
      Highcharts.chart('pendidikan', {
    chart: {
        type: 'bar'
    },
    title: {
        text: false
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Populasi',
            align: 'high'
        },
        labels: {
            overflow: 'justify',
            rotation: -40
        }
    },
    xAxis: {
            categories: [this.name],
            labels: {
                enabled: false
            },
            title: {
                text: 'Pendidikan'
          }
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Tidak/Belum Sekolah',
        data: [<?php echo $pen->BLM_SEKOLAH ?>]
    }, {
        name: 'Belum Tamat SD',
        data: [<?php echo $pen->BLM_TMT_SD ?>]
    }, {
        name: 'Tamat SD',
        data: [<?php echo $pen->TMT_SD ?>]
    }, {
        name: 'Tamat SLTP',
        data: [<?php echo $pen->SLTP ?>]
    }, {
        name: 'Tamat SLTA',
        data: [<?php echo $pen->SLTA ?>]
    }, {
        name: 'Tamat DI/DII',
        data: [<?php echo $pen->D_I_II ?>]
    }, {
        name: 'Tamat DIII',
        data: [<?php echo $pen->DIII ?>]
    }, {
        name: 'Tamat S1',
        data: [<?php echo $pen->SI ?>]
    }, {
        name: 'Tamat S2',
        data: [<?php echo $pen->SII ?>]
    }, {
        name: 'Tamat S3',
        data: [<?php echo $pen->SIII ?>]
    }]
});

      //CHART USIA
      Highcharts.chart('usia', {
    chart: {
        type: 'bar'
    },
    title: {
        text: false
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Populasi',
            align: 'high',
        },
        labels: {
            overflow: 'justify',
            rotation: -40
        }
    },
    xAxis: {
            categories: [this.name],
            labels: {
                enabled: false
            },
            title: {
                text: 'Usia'
          }
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Usia 0-4 tahun',
        data: [<?php echo $usia['U0_4'] ?>]
    }, {
        name: 'Usia 5-9 tahun',
        data: [<?php echo $usia['U5_9'] ?>]
    }, {
        name: 'Usia 10-14 tahun',
        data: [<?php echo $usia['U10_14'] ?>]
    }, {
        name: 'Usia 15-19 tahun',
        data: [<?php echo $usia['U15_19'] ?>]
    }, {
        name: 'Usia 20-24 tahun',
        data: [<?php echo $usia['U20_24'] ?>]
    }, {
        name: 'Usia 25-29 tahun',
        data: [<?php echo $usia['U25_29'] ?>]
    }, {
        name: 'Usia 30-34 tahun',
        data: [<?php echo $usia['U30_34'] ?>]
    }, {
        name: 'Usia 35-39 tahun',
        data: [<?php echo $usia['U35_39'] ?>]
    }, {
        name: 'Usia 40-44 tahun',
        data: [<?php echo $usia['U40_44'] ?>]
    }, {
        name: 'Usia 45-49 tahun',
        data: [<?php echo $usia['U45_49'] ?>]
    }, {
        name: 'Usia 50 tahun keatas',
        data: [<?php echo $usia['U50'] ?>]
    }]
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
              text: false
          },
          tooltip: {
              pointFormat: '{series.name}: <b>{point.y:.0f}</b>'
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                      enabled: true,
                      format: '<b>{point.name}</b>: {point.percentage:.1f}%</b>',
                      style: {
                          color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                      },
                      connectorColor: 'silver'
                  },
                  showInLegend: true
              }
          },
          series: [{
              name: 'Total',
              colorByPoint: true,
              data: [{
                  name: 'A',
                  y: <?php echo $darah->GOL_A ?>
              }, {
                  name: 'B',
                  y: <?php echo $darah->GOL_B ?>
              }, {
                  name: 'O',
                  y: <?php echo $darah->GOL_O ?>
              }, {
                  name: 'AB',
                  y: <?php echo $darah->GOL_AB ?>
              }, {
                  name: 'AB+',
                  y: <?php echo $darah->GOL_AB_PLUS ?>
              }, {
                  name: 'AB-',
                  y: <?php echo $darah->GOL_AB_MIN ?>
              }]
          }]
      });
  });
    </script>
	
  </body>

