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
                    <h3><i class="fa fa-line-chart"></i> Penduduk <small>Grafik pertumbuhan penduduk</small></h3>
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
                <div class="ct-chart ct-golden-section"></div>               

                  <!--div id="chart_plot_01" class="demo-placeholder"></div-->
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Perbandingan</h2>
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
                          <h2>Pendidikan</h2>
                          <div class="clearfix"></div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-6">
                          <div>
                            <p>Tidak/Belum Sekolah</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40" style="height: 20px !important;">40%</div>
                              </div>

                            </div>
                          </div>
                          <div>
                            <p>Belum tamat SD</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>Tamat SD</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>SLTP</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>SLTA</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>D1 dan D2</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>D3</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>S1</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>S2</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                          <div>
                            <p>S3</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="90" style="height: 20px !important;">60%</div>
                              </div>
                            </div>
                          </div>
                        </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12" style="margin-left: 5px;">
                        <div class="x_title">
                          <h2>Usia</h2>
                          <div class="clearfix"></div>
                        </div>

                        <div class="col-md-12 col-sm-12 col-xs-6">
                          <div>
                            <p>Usia 0-4 thn</p>
                            <div class="">
                              <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40" style="height: 20px !important;">40%</div>
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
                    <h2>Pie</h2>
                    <div class="clearfix"></div>
                  </div>
                      <div class="ct-chart2 ct-major-second"></div>
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
    <script type="text/javascript">
    //CHART GRAPH
      new Chartist.Line('.ct-chart', {
        labels: [2012, 2013, 2014, 2015, 2016, 2017],
        series: [
          [700, 800, 900, 1000, 1100, 1200],
          [600, 700, 800, 900, 1000, 1100],
        ]
      }, {
        width: 800,
        height: 400,
        fullWidth: true,
        
        axisY: {
          onlyInteger: false,
          offset: 50
        },
        //Untuk Mempaskan Tahun
        chartPadding: {
          right: 50
        }
      });


      //CHART PIE
      var data = {
        series: [700, 200, 500, 120, 100, 650, 660],
      };

      var sum = function(a, b) { return a + b };

      new Chartist.Pie('.ct-chart2', data, {
        labelInterpolationFnc: function(value) {
          return Math.round(value / data.series.reduce(sum) * 100) + '%';
        }
      });
    </script>
	
  </body>

