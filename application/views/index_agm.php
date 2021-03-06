        <div class="right_col" role="main">
          <!-- grafik penduduk berdasarkan agama -->
          <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="dashboard_graph">
                            <div class="col-md-9 col-sm-9 col-xs-12">                                
                                <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                                <div class="x_title">
                                    <label style="color: black;">Perbandingan</label>
                                    <div class="clearfix"></div>
                                </div>
                                 <?php
                  $TOTAL = $ISLAM+$KRISTEN+$KATHOLIK+$HINDU+$BUDHA+$KHONGHUCU+$KEPERCAYAAN;
                  $persen_islam       = round(($ISLAM / $TOTAL) * 100,3);
                  $persen_kristen     = round(($KRISTEN / $TOTAL) * 100,3);
                  $persen_katholik    = round(($KATHOLIK / $TOTAL) * 100,3);
                  $persen_hindu       = round(($HINDU / $TOTAL) * 100,3);
                  $persen_budha       = round(($BUDHA / $TOTAL) * 100,3);
                  $persen_khonghucu   = round(($KHONGHUCU / $TOTAL) * 100,3);
                  $persen_kepercayaan = round(($KEPERCAYAAN / $TOTAL) * 100,3);
                  ?>
                  <div class="col-xs-12 bg-white progress_summary">

                      <div class="row">                        
                        <div class="col-xs-3">
                          <span>Islam</span>
                        </div>
                        <div class="col-xs-7">
                          <div class="progress progress_sm">
                            <div class="progress-bar" style="background-color: #3F78FF;" role="progressbar" data-transitiongoal="<?php echo $persen_islam ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><?php echo $persen_islam ?>%</span>
                        </div>
                      </div>

                      <div class="row">             
                        <div class="col-xs-3">
                          <span>Kristen</span>
                        </div>
                        <div class="col-xs-7">
                          <div class="progress progress_sm">
                            <div class="progress-bar" style="background-color: #F25E5E;" role="progressbar" data-transitiongoal="<?php echo $persen_kristen ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><?php echo $persen_kristen ?>%</span>
                        </div>
                      </div>

                      <div class="row">             
                        <div class="col-xs-3">
                          <span>Katolik</span>
                        </div>
                        <div class="col-xs-7">
                          <div class="progress progress_sm">
                            <div class="progress-bar" style="background-color: #F4C63D;" role="progressbar" data-transitiongoal="<?php echo $persen_katholik ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><?php echo $persen_katholik ?>%</span>
                        </div>
                      </div>

                      <div class="row">             
                        <div class="col-xs-3">
                          <span>Hindu</span>
                        </div>
                        <div class="col-xs-7">
                          <div class="progress progress_sm">
                            <div class="progress-bar" style="background-color: #D17905;" role="progressbar" data-transitiongoal="<?php echo $persen_hindu ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><?php echo $persen_hindu ?>%</span>
                        </div>
                      </div>

                      <div class="row">             
                        <div class="col-xs-3">
                          <span>Budha</span>
                        </div>
                        <div class="col-xs-7">
                          <div class="progress progress_sm">
                            <div class="progress-bar" style="background-color: #453D3F;" role="progressbar" data-transitiongoal="<?php echo $persen_budha ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><?php echo $persen_budha ?>%</span>
                        </div>
                      </div>

                      <div class="row">             
                        <div class="col-xs-3">
                          <span>Konghucu</span>
                        </div>
                        <div class="col-xs-7">
                          <div class="progress progress_sm">
                            <div class="progress-bar" style="background-color: #59922B;" role="progressbar" data-transitiongoal="<?php echo $persen_khonghucu ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><?php echo $persen_khonghucu ?>%</span>
                        </div>
                      </div>

                      <div class="row">             
                        <div class="col-xs-4">
                          <span>Kepercayaan</span>
                        </div>
                        <div class="col-xs-6">
                          <div class="progress progress_sm">
                            <div class="progress-bar" style="background-color: #0544D3;" role="progressbar" data-transitiongoal="<?php echo $persen_kepercayaan ?>"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span><?php echo $persen_kepercayaan ?>%</span>
                        </div>
                      </div>
                    </div> 
                            </div>
                            <div class="clearfix"></div>
                        </div>
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
            text: 'Grafik Jumlah Penduduk Berdasarkan Agama'
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
            name: 'Islam',
            data: [<?php echo $ISLAM; ?>]

        }, {
            name: 'Kristen',
            data: [<?php echo $KRISTEN; ?>]

        }, {
            name: 'Katholik',
            data: [<?php echo $KATHOLIK; ?>]

        }, {
            name: 'Hindu',
            data: [<?php echo $HINDU; ?>]

        }, {
            name: 'Budha',
            data: [<?php echo $BUDHA; ?>]

        }, {
            name: 'Khonghucu',
            data: [<?php echo $KHONGHUCU; ?>]

        }, {
            name: 'Kepercayaan',
            data: [<?php echo $KEPERCAYAAN; ?>]

        }]
    });
    </script>
  
  </body>

