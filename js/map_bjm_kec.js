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
      colorAxis: {},
      series: [
      {
        "type": "map",
        "name": "Kepadatan",
        "data": [
          {
            "name": "Banjarmasin Selatan",
            "value": <?php echo $BJM_SELATAN ?>,
            "lk" : "812",
            "prm" : "823",
            "path": "M0,-292,54,-354,108,-396,147,-437,186,-488,225,-472L252,-472L274,-482,284,-458,282,-431,296,-407,325,-413,389,-467,406,-464,432,-440,462,-437,473,-450,435,-501,462,-521,489,-542,508,-548,535,-552,538,-531,543,-518,562,-509,574,-483,588,-469,591,-459,601,-486,623,-491,639,-480L655,-480L683,-478L698,-478L757,-392,746,-376L746,-351L747,-317,738,-305,725,-295,709,-289C709,-289,696,-281,696,-274,696,-268,688,-259,688,-259L660,-249,640,-235,626,-228,607,-244,574,-254,535,-267,513,-225,489,-195,473,-165,451,-163,416,-182,397,-204,352,-209,330,-219,352,-267L341,-267L272,-238,234,-217L198,-217L169,-219,159,-230,135,-239,118,-247,92,-252,75,-254,57,-257,51,-263,53,-271L40,-271z"
          },
          {
            "name": "Banjarmasin Barat",
            "value": <?php echo $BJM_BARAT ?>,
            "lk" : "598",
            "prm" : "598",
            "path": "M187,-488,209,-510,235,-558,246,-587,258,-613,279,-622,301,-664,308,-686,319,-727,321,-752,319,-777,306,-787,299,-795,312,-804,349,-801,390,-793,398,-784,412,-785,418,-769,440,-744,462,-728,479,-722,484,-688,490,-666L470,-666L451,-657L436,-655,414,-649,392,-655,380,-663,381,-677,365,-678,358,-663,361,-643,362,-628,358,-620,368,-625,372,-606,375,-587,381,-567,383,-550,398,-553,392,-536,400,-533C400,-533,404,-525,406,-530,408,-534,410,-551,410,-551L418,-558,441,-555,444,-545,454,-543,469,-568,473,-553,482,-537,435,-501,473,-450,462,-437,431,-441,405,-464,390,-467,325,-413,298,-407,283,-429,284,-457,275,-480,252,-472,226,-472z"
          },
          {
            "name": "Banjarmasin Utara",
            "value": <?php echo $BJM_UTARA ?>,
            "lk" : "390",
            "prm" : "390",
            "path": "M480,-718,498,-726,510,-707,518,-703,522,-686L536,-686L545,-683,563,-655,579,-641,597,-634,610,-631,631,-639L631,-656L619,-683L619,-696L626,-711,637,-721,661,-726,693,-731,718,-729,728,-720,726,-704,715,-686,712,-665L712,-646L723,-629,742,-617,770,-616,780,-624,790,-637L790,-643L772,-659,772,-668,785,-697,824,-787,837,-810,843,-814,854,-840,854,-850L854,-862L848,-907,846,-927,837,-908,821,-892,785,-880,768,-870,749,-859,742,-864,727,-859,718,-867,703,-881,683,-893,669,-898L651,-898L624,-896,610,-892,608,-884,616,-865,611,-850,607,-842,595,-836,585,-828,567,-835,553,-843,539,-848,537,-872,536,-890,526,-903,510,-909,488,-915,477,-923,472,-930,464,-938,456,-944,448,-949,437,-939,430,-932,418,-925,411,-921L403,-921L397,-927,394,-935,396,-950C396,-950,399,-956,399,-959,399,-962,388,-975,388,-975L379,-978C379,-978,373,-978,370,-978,367,-978,357,-983,357,-983L349,-987,341,-988,332,-979,324,-967,323,-956,322,-946,326,-927,328,-905,327,-889,321,-875,309,-873,301,-865,302,-854,299,-849,302,-835,301,-822,300,-815,306,-799,312,-804,369,-797,391,-792,399,-784,412,-784,417,-770,434,-751,455,-733,476,-723z"
          },
          {
            "name": "Banjarmasin Timur",
            "value": <?php echo $BJM_TIMUR ?>,
            "lk" : "999",
            "prm" : "982",
            "path": "M755,-395,766,-390,790,-403,799,-406L805,-406L805,-419L823,-418,835,-416C835,-416,848,-419,851,-419,854,-420,860,-422,860,-422L865,-419,878,-427,895,-430,901,-434,919,-427,941,-422,964,-411,976,-405,986,-407,989,-416,985,-430,981,-457,990,-463,993,-475,1000,-488,998,-497,963,-504,939,-522,916,-545,903,-551,895,-562,878,-564,866,-568,854,-574,843,-583,831,-590,821,-601,812,-602,805,-621,790,-637,774,-620,768,-616,742,-617,722,-630,713,-645,712,-662,715,-683,726,-706C733,-723,723,-724,719,-729L706,-730,668,-728,636,-720,626,-711,619,-695,619,-683,626,-668,631,-653L631,-639L605,-632,602,-620,600,-610,603,-592,594,-589,597,-579,604,-570,611,-564,616,-557,606,-550,585,-544,568,-545,548,-555,550,-546,564,-540,568,-529,561,-509,568,-496,575,-481,587,-470,591,-459,599,-481,601,-486,624,-490,638,-481,697,-478z"
          },
          {
            "name": "Banjarmasin Tengah",
            "value": <?php echo $BJM_TENGAH ?>,
            "lk" : "302",
            "prm" : "334",
            "path": "M481,-539,469,-568,455,-544,445,-545,438,-555,418,-557,410,-550,406,-529,392,-536,398,-553,382,-551,367,-625,358,-620,362,-635,358,-663,365,-678,379,-677,380,-664,395,-655,416,-650,449,-657,471,-666L490,-666L480,-717,497,-726,509,-708,518,-702,522,-687,544,-683,556,-666,570,-648,581,-640,605,-633,601,-618,600,-605,603,-593,596,-590,597,-579,610,-565,616,-556,601,-548,588,-545,575,-545,559,-549,548,-555,550,-546,563,-540,568,-528,561,-510,543,-519,534,-552,497,-545z"
          }
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