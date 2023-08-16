
<?= $this->extend('template/index'); ?>

<?= $this->section('page-content'); ?>


                <!-- Begin Page Content -->

                <!-- Page Heading -->
            <div class="container-fluid mt-3">
                <br>
                    <center>
                        <h1> Monitoring Suhu dan Kelembaban</h1>
                    </center>
                <br>
                <div class="card-group">
                <div class="card" style="background-color: #F5F5DC !important;"  id="temperature">

                    <!-- Content Row -->
                    <div class="row mt-3 justify-content-center">
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <img src="<?= base_url(); ?>assets/img/gsuhu.png" width="55"> 
                                        </div>
                                        <div class="col ">
                                            <center>
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Suhu</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="pastesuhu"></div>
                                        </div> 
                                        </center>      
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- kelembaban -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <img src="<?= base_url(); ?>assets/img/gkelembaban.png" width="60"> 
                                        </div>
                                        <div class="col ">
                                            <center>
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                Kelembaban</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="pastekelembaban"></div>
                                        </div> 
                                        </center>      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row mt-3">

                        <!-- Area Chart -->
                        <div class="col-xl-7 col-lg-7 ml-3">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Garafik Suhu</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                foreach ($hidup as $key => $value) {
                  $a1 = $value['awal1'];
                }
                foreach ($mati as $key => $value) {
                  $m1 = $value['akhir1'];
                }
                foreach ($awal as $key => $value) {
                  $t1 = $value['awal'];
                }
                ?>
                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Total Ayam</h6>
                                </div>
                                <div class="mt-4 text-center small">
                                    <span class="mr-2">
                                      <i class="fas fa-circle text-danger"></i> Mati = <?php echo json_decode($m1); ?>%
                                    </span>
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-success"></i> Hidup = <?php echo json_decode($a1); ?> %
                                    </span>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    
                                    <div class="mt-4 text-center small">
                                    <span class="mr-2">
                                        <i class="fas fa-circle text-primary"></i> Jumlah Awal = <?php echo json_decode($t1); ?> Ekor
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

 <!-- Page level plugins -->
 <script src="<?= base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url(); ?>assets/js/demo/chart-area.js"></script>
<script src="<?= base_url(); ?>assets/js/demo/chart-pie.js"></script>
<?php
foreach ($hari as $key => $value) {
  $h[]= $value['labels'];
}
foreach ($nilai as $key => $value) {
  $s[]= $value['nilai'];
}

foreach ($pie as $key => $value) {
  $ta[]= $value['awal'];
  $tm[]= $value['mati'];
  $t[]= $value['total'];
}


?>
<script>
// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: <?php echo json_encode($h); ?>,
    datasets: [
      {
      label: "Suhu rata-rata",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: <?php echo json_encode($s); ?>,
    }
  ],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'date'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          maxTicksLimit: 5,
          padding: 10,
          // Include a celsius sign in the ticks
          callback: function(value, index, values) {
            return number_format(value) + '°' ;
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [2],
          zeroLineBorderDash: [2]
        }
      }],
    },
    legend: {
      display: false
    },
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      titleMarginBottom: 10,
      titleFontColor: '#6e707e',
      titleFontSize: 14,
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      intersect: false,
      mode: 'index',
      caretPadding: 10,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel +' : '+ number_format(tooltipItem.yLabel) + '°' ;
        }
      }
    }
  }
});

// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Ayam Hidup", "Ayam Mati"],
    datasets: [{
      data:[
        <?php echo json_encode($t); ?>,
        <?php echo json_encode($tm); ?>,
    ],
      backgroundColor: ['#32CD32', '#FF0000'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

</script>                   

<?= $this->endSection(); ?>
 