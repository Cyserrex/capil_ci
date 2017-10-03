        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-map"></i> Total Kecamatan</span>
              <div class="count green">29</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-map"></i> Total <b>RT</b> /Kecamatan</span>
              <div class="count green">29</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-map"></i> Total <b>RW</b> /Kecamatan</span>
              <div class="count green">38</div>
            </div>           
            
            
          </div>
          <!-- /top tiles -->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h2 style="padding-top: 7%;"><i class="fa fa-line-chart"></i> Grafik Penduduk Per Kecamatan</h2>
                  </div>
                <div class="pull-right">
                  <div class="col-md-7">
                    <div style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="fa fa-map-marker"></i>
                      <label for="exampleSelect1">Kecamatan</label>
                      <select class="form-control" id="exampleSelect1">
                        <option>Banjarmasin Utara</option>
                        <option>Banjarmasin Tengah</option>                        
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
                  <div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>

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
          <br />
        </div>
        <div class="row">
       <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dashboard_graph">
        <div class="x_title">
          <h2><i class="fa fa-map"></i> Sebaran Penduduk Per Kecamatan</h2>
          <div class="clearfix"></div>
        </div>
            <script src="<?=base_url()?>vendor/highcharts/code/highmaps.js"></script>
            <div id="container2" style="min-width: 510px; max-width: 1000px; height: 700px; margin: 0 auto"></div>
            <!-- MODAL POP UP KECAMATAN -->
            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="modal_kec" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
                  <h4 class="modal-title nama_kec"></h4>
                </div>              
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-4">
                      <table id="data_detail_map">
                        <tr>
                          <td><b>Alamat</b></td>
                          <td>:</td>
                          <td>Tes</td>
                        </tr>
                        <tr>
                          <td><b>Camat</b></td>
                          <td>:</td>
                          <td>Tes</td>
                        </tr>
                        <tr>
                          <td><b>Telepon</b></td>
                          <td>:</td>
                          <td>Tes</td>
                        </tr>
                        <tr>
                          <td><b>Luas</b></td>
                          <td>:</td>
                          <td>Tes</td>
                        </tr>
                      </table>
                    </div>
                    <div class="col-md-8">
                      <img src="" class="imagepreview" style="width: 100%;" >
                    </div>
                  </div>
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
            headerFormat: '<span style="font-size:10px">Tahun {point.key}</span><table>',
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
            name: 'Banjarmasin Selatan',
            data: [<?php echo $kec[4]['JML_PEND'] ?>, 0, 0]

        }, {
            name: 'Banjarmasin Timur',
            data: [<?php echo $kec[3]['JML_PEND'] ?>, 0, 0]

        }, {
            name: 'Banjarmasin Barat',
            data: [<?php echo $kec[2]['JML_PEND'] ?>, 0, 0]

        }, {
            name: 'Banjarmasin Utara',
            data: [<?php echo $kec[0]['JML_PEND'] ?>, 0, 0]

        }, {
            name: 'Banjarmasin Tengah',
            data: [<?php echo $kec[1]['JML_PEND'] ?>, 0, 0]

        }]
    });

// Instanciate the map
$(function () {

    // Initiate the chart
    $('#container2').highcharts('Map', {
      title: {
            text: 'Kepadatan Penduduk'
      },
      mapNavigation: {
            enabled: true,
            enableDoubleClickZoomTo: true
        },
      colorAxis: {
            min: 1,
            max: 225000,
            minColor: '#afafff',
            maxColor: '#00005b',
        },
      series: [
      {
        point:{
            events:{
                click: function(){
                    $('.imagepreview').attr('src', '<?=base_url()?>gambar/kantor_kecamatan/'+this.gbr);
                    $('.nama_kec').text('Kecamatan '+this.name);
                    $('#imagemodal').modal('show');
                }
            }
        },
        "cursor": 'pointer',    
        "type": "map",
        "name": "Kepadatan",
        "data": [
        <?php 
        foreach ($kec as $row)
        {
        ?>
          {
            "name": "<?php echo ucwords(strtolower($row['NAMA_KEC'])) ?>",
            "value": "<?php echo $row['JML_PEND'] ?>",
            "lk" : "<?php echo $row['PRIA'] ?>",
            "prm" : "<?php echo $row['WANITA'] ?>",
            "gbr" : "<?php echo $row['gbr'] ?>",
            "path": "<?php echo $row['koor'] ?>"
          },
        <?php
        }
        ?>
        ],
        dataLabels: {
            enabled: true,
            format: '{point.name}',
            style: {
                color: '#000000'
            }
        }
      }
    ],
    tooltip: {
            backgroundColor: 'none',
            borderWidth: 0,
            shadow: false,
            useHTML: true,
            padding: 0,
            pointFormat: '<span class="f32"><span class="flag {point.flag}">' +
                '</span></span> {point.name}<br>' +
                '<span style="font-size:25px">{point.value} Jiwa</span><br>' +
                '<span style="font-size:20px"><i class="fa fa-male"></i> {point.lk} Jiwa</span><br>' +
                '<span style="font-size:20px"><i class="fa fa-female"></i> {point.prm} Jiwa</span>',
            positioner: function () {
                return { x: 0, y: 250 };
            }
        },
    });
});
    </script>
  
  
  </body>
