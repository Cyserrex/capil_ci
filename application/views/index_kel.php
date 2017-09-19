        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-map"></i> Total Kelurahan</span>
              <div class="count green"><?php echo $TOTAL_KEL ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-map"></i> Total <b>RT</b> /Kelurahan</span>
              <div class="count green"><?php echo $TOTAL_RT ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-map"></i> Total <b>RW</b> /Kelurahan</span>
              <div class="count green">38</div>
            </div>           
            
            
          </div>
          <!-- /top tiles -->

        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3 style="padding-top: 7%;"><i class="fa fa-line-chart"></i> Penduduk <small>Grafik pertumbuhan penduduk per Kelurahan</small></h3>
                  </div>
                <div class="pull-right">
                  <div class="col-md-7">
                    <div style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="fa fa-map-marker"></i>
                      <label for="exampleSelect1">Kelurahan</label>
                      <select class="form-control" id="exampleSelect1">
                        <option>Sungai Miai</option>
                        <option>Pangeran</option>                        
                      </select>
                    </div>
                  </div>
                  <div class="col-md-5">
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
                    <h2><i class="fa fa-exchange"></i> Perbandingan</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-xs-12 bg-white progress_summary">
                    <div>
                      <p>Laki-laki</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                          <div class="progress-bar bg-blue" role="progressbar" data-transitiongoal="40" style="height: 20px !important;">40%</div>
                        </div>

                      </div>
                    </div>
                    <div>
                      <p>Perempuan</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 100%; height: 20px !important;">
                          <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="60" style="height: 20px !important;">60%</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Jumlah RT dan RW</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-xs-12 bg-white progress_summary">

                      <div class="row">
                        
                        <div class="col-xs-2">
                          <span>RT</span>
                        </div>
                        <div class="col-xs-8">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="89"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span>89</span>
                        </div>
                      </div>
                      <div class="row">
                        

                        <div class="col-xs-2">
                          <span>RW</span>
                        </div>
                        <div class="col-xs-8">
                          <div class="progress progress_sm">
                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="79"></div>
                          </div>
                        </div>
                        <div class="col-xs-2 more_info">
                          <span>79</span>
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
    <script src="<?=base_url()?>vendor/cart/chartist.js"></script>

    <script type="text/javascript">
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
    </script>
  
  </body>
