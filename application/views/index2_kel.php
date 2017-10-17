        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-map"></i> Total Kelurahan</span>
              <div class="count green">123</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-map"></i> Total <b>RT</b> /Kelurahan</span>
              <div class="count green">456</div>
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
        <div class="x_title">
          <h2><i class="fa fa-map"></i> Sebaran Penduduk Per Kelurahan</h2>
          <div class="clearfix"></div>
        </div>
            <script src="<?=base_url()?>vendor/highcharts/code/highmaps.js"></script>
            <div id="container2" style="min-width: 510px; max-width: 1500px; height: 700px; margin: 0 auto"></div>
            <!-- MODAL POP UP KELURAHAN -->
            <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="modal_kel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Tutup</span></button>
                  <h4 class="modal-title nama_kel"></h4>
                </div>              
                <div class="modal-body">
                  <div class="row">
                    <div class="col-md-4">
                      <table id="data_detail_map">
                        <tr>
                          <td><b>Alamat</b></td>
                          <td>:</td>
                          <td>Belum ada dalam database</td>
                        </tr>
                        <tr>
                          <td><b>Lurah</b></td>
                          <td>:</td>
                          <td>Belum ada dalam database</td>
                        </tr>
                        <tr>
                          <td><b>Telepon</b></td>
                          <td>:</td>
                          <td>Belum ada dalam database</td>
                        </tr>
                        <tr>
                          <td><b>Luas</b></td>
                          <td>:</td>
                          <td>Belum ada dalam database</td>
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
      <div class="clearfix"></div>
    </div>
  </div>
  </div>

  <div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="dashboard_graph">

        <div class="row x_title">
          <div class="col-md-6">
            <h2 style="padding-top: 7%;"><i class="fa fa-line-chart"></i> Grafik Penduduk Per Kelurahan</h2>
          </div>
        </div>
        <!-- FULL SIZE col-md-12 -->
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div id="container" style="min-width: 510px; max-width: 1000px; height: 800px; margin: 0 auto"></div>
        
        </div>
      <div class="clearfix"></div>
    </div>
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
            categories: ['2015', '2016', '2017']
    },
    yAxis: {
          title: {
            text: 'Populasi',
            align: 'high'
        },
    },
    credits: {
        enabled: false
    },
    series: [ 
            <?php 
            foreach ($kel as $row )
            {
            ?>
              {
                name: '<?php echo ucwords(strtolower($row["NAMA_KEL"])) ?>',
                data: [<?php echo $row['JML_PEND'] ?>]
              },
            <?php
            }
            ?>
    ]
});

// Instanciate the map
$(function () {

    // Initiate the chart
    $('#container2').highcharts('Map', {
      title: {
            text: 'Kepadatan Penduduk'
      },
      subtitle: {
        text: 'Scroll untuk memperbesar peta wilayah'
      },
      legend: {
                layout: 'vertical',
                align: 'left',
                verticalAlign: 'bottom'
            },
      mapNavigation: {
            enabled: true,
            enableDoubleClickZoomTo: true
        },
      colorAxis: {
            min: 1,
            max: 40000,
            minColor: '#afafff',
            maxColor: '#00005b',
        },
      series: [ { 
        point:{
            events:{
                click: function(){
                    $('.imagepreview').attr('src', '<?=base_url()?>gambar/kantor_kelurahan/'+this.gbr);
                    $('.nama_kel').text('Kelurahan '+this.name);
                    $('#imagemodal').modal('show');
                }
            }
        },
        "cursor": 'pointer',
        "type": "map",
        "name": "Kepadatan",
        "data": [
      <?php 
        foreach ($kel as $row)
        {
        ?>
          {
            "name": "<?php echo ucwords(strtolower($row['NAMA_KEL'])) ?>",
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
        } } ],
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
