        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
        <div class="row tile_count agm">
            <div class="agama col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><img id="religion" src="<?=base_url()?>css/images/islam.png" height="20" width="20"> Islam</span>
              <div class="count green"><?php echo number_format($ISLAM, 0, ',', '.'); ?></div>
            </div>
            <div class="agama col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><img id="religion" src="<?=base_url()?>css/images/kristen.png" height="20" width="20"> Kristen</span>
              <div class="count green"><?php echo number_format($KRISTEN, 0, ',', '.'); ?></div>
            </div>
            <div class="agama col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><img id="religion" src="<?=base_url()?>css/images/kristen.png" height="20" width="20"> Katolik</span>
              <div class="count green"><?php echo number_format($KATHOLIK, 0, ',', '.'); ?></div>
            </div>  
            <div class="agama col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><img id="religion" src="<?=base_url()?>css/images/hindu.png" height="20" width="20"> Hindu</span>
              <div class="count green"><?php echo number_format($HINDU, 0, ',', '.'); ?></div>
            </div> 
            <div class="agama col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><img id="religion" src="<?=base_url()?>css/images/budha.png" height="20" width="20"> Budha</span>
              <div class="count green"><?php echo number_format($BUDHA, 0, ',', '.'); ?></div>
            </div>          
            <div class="agama col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><img id="religion" src="<?=base_url()?>css/images/konghucu.png" height="20" width="20"> Konghucu</span>
              <div class="count green"><?php echo number_format($KHONGHUCU, 0, ',', '.'); ?></div>
            </div> 
            <div class="agama col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><img id="religion" src="<?=base_url()?>css/images/kepercayaan.png" height="20" width="20"> Kepercayaan</span>
              <div class="count green"><?php echo number_format($KEPERCAYAAN, 0, ',', '.'); ?></div>
            </div> 
       </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3><i class="fa fa-line-chart"></i> Penduduk <small>Grafik pertumbuhan penduduk per Agama</small></h3>
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

                <div class="col-md-8">
                <span class="ct-chart ct-golden-section"></span>
                

                  <!--div id="chart_plot_01" class="demo-placeholder"></div-->
                </div>
                <div class="col-md-4">
                  <div class="x_title">
                    <h2>Jumlah Agama</h2>
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
                        <div class="col-xs-3">
                          <span>Kepercayaan</span>
                        </div>
                        <div class="col-xs-7">
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
new Chartist.Line('.ct-chart', {
  labels: ['2015', '2016', '2017'],
  series: [
    [<?php echo $ISLAM ?>, 0, 0],
    [<?php echo $KRISTEN ?>, 0, 0],
    [<?php echo $KATHOLIK ?>, 0, 0],
    [<?php echo $HINDU ?>, 0, 0],
    [<?php echo $BUDHA ?>, 0, 0],
    [<?php echo $KHONGHUCU ?>, 0, 0],
    [<?php echo $KEPERCAYAAN ?>, 0, 0]
  ],
}, {
  fullWidth: true,
  chartPadding: {
    right: 40
  },
  axisY: {
          onlyInteger: false,
          offset: 45
        }
});
    </script>
  
  </body>
