<?php include('../template/header-admin.php') ?>
<?php include('../template/header-admin-menu.php') ?>


<!-- batas konten atas -->
<div id="layoutSidenav_content">
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="home"></i></div>
                            Dashboard
                        </h1>
                        <div class="page-header-subtitle">Terimakasih anda berhasil Login sebagai Admin</div>
                    </div>
                   
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">


        <!-- grafik awal harian -->
        <div class="row">
            <div class="col-xxl-12 col-xl-12 mb-4">
                <div class="card h-100">
                    <div class="card-body h-100 p-5">
                        <div class="row align-items-center">
                                               
                            <div class="card-header">Grafik Harian</div>
                            <div class="card-body">
                                <div class="chart-area"><canvas id="grafik_harian" width="100%" height="30"></canvas></div>
                            </div>
                            <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->                      

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- grafik akhir harian -->

        <!-- grafik awal bulanan -->
        <div class="row">
            <div class="col-xxl-12 col-xl-12 mb-4">
                <div class="card h-100">
                    <div class="card-body h-100 p-5">
                        <div class="row align-items-center">
                                               
                            <div class="card-header">Grafik Bulanan</div>
                            <div class="card-body">
                                <div class="chart-area"><canvas id="grafik_bulanan" width="100%" height="30"></canvas></div>
                            </div>
                            <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->                      

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- grafik akhir bulanan -->

        <!-- grafik awal tahunan -->
        <div class="row">
            <div class="col-xxl-12 col-xl-12 mb-4">
                <div class="card h-100">
                    <div class="card-body h-100 p-5">
                        <div class="row align-items-center">
                                               
                            <div class="card-header">Grafik Tahunan</div>
                            <div class="card-body">
                                <div class="chart-area"><canvas id="grafik_tahunan" width="100%" height="30"></canvas></div>
                            </div>
                            <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->                      

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- grafik akhir tahunan -->

    </div>
</main>
<?php include('../template/footer.php') ?>

<script>
    // Set new default font family and font color to mimic Bootstrap's default styling
(Chart.defaults.global.defaultFontFamily = "Metropolis"),
'-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = "#858796";

function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + "").replace(",", "").replace(" ", "");
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = typeof thousands_sep === "undefined" ? "," : thousands_sep,
        dec = typeof dec_point === "undefined" ? "." : dec_point,
        s = "",
        toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return "" + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : "" + Math.round(n)).split(".");
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || "").length < prec) {
        s[1] = s[1] || "";
        s[1] += new Array(prec - s[1].length + 1).join("0");
    }
    return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("grafik_bulanan");
var myLineChart = new Chart(ctx, {
    type: "line",
    data: {
        labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
        ],
        datasets: [{
            label: "Earnings",
            lineTension: 0.3,
            backgroundColor: "rgba(0, 97, 242, 0.05)",
            borderColor: "rgba(0, 97, 242, 1)",
            pointRadius: 3,
            pointBackgroundColor: "rgba(0, 97, 242, 1)",
            pointBorderColor: "rgba(0, 97, 242, 1)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
            pointHoverBorderColor: "rgba(0, 97, 242, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 1,
            data: [
                <?php 
                $c_jan = mysqli_query($koneksi,"SELECT COUNT(*) AS jumlah_data
                                                FROM tb_clear_temper
                                                WHERE tgl_permintaan LIKE '2024-01%'");
                echo mysqli_num_rows($c_jan);
                ?>,
                10,
                5,
                15,
                10,
                20,
                15,
                0,
                0,
                30,
                25,
                40
            ]
        }]
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
                    unit: "date"
                },
                gridLines: {
                    display: false,
                    drawBorder: false
                },
                ticks: {
                    maxTicksLimit: 12
                }
            }],
            yAxes: [{
                ticks: {
                    maxTicksLimit: 5,
                    padding: 10,
                    // Include a dollar sign in the ticks
                    callback: function(value, index, values) {
                        return "$" + number_format(value);
                    }
                },
                gridLines: {
                    color: "rgb(234, 236, 244)",
                    zeroLineColor: "rgb(234, 236, 244)",
                    drawBorder: false,
                    borderDash: [2],
                    zeroLineBorderDash: [2]
                }
            }]
        },
        legend: {
            display: false
        },
        tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            titleMarginBottom: 10,
            titleFontColor: "#6e707e",
            titleFontSize: 14,
            borderColor: "#dddfeb",
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            intersect: false,
            mode: "index",
            caretPadding: 10,
            callbacks: {
                label: function(tooltipItem, chart) {
                    var datasetLabel =
                        chart.datasets[tooltipItem.datasetIndex].label || "";
                    return datasetLabel + ": $" + number_format(tooltipItem.yLabel);
                }
            }
        }
    }
});

</script>
<script src="../template/chart-area-tahunan.js"></script>
