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

        <div class="row">
            <div class="col-xxl-6 col-xl-12 mb-4">
                <div class="card h-100">
                    <div class="card-body h-100 p-5">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-xxl-12">
                                <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                    <h1 class="text-primary">PLN Clear Tamper ULP Pandeglang</h1>
                                    <p class="text-gray-700 mb-0">
                                        PLN Clear Tamper ULP Pandeglang adalah sistem keamanan untuk mendeteksi dan menghapus jejak manipulasi pada infrastruktur listrik PLN di Pandeglang, menjaga keandalan pasokan listrik dan kinerja operasional.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="../assets/assets/img/illustrations/at-work.svg" style="max-width: 26rem" /></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-6 col-xl-12 mb-4">
                <div class="card h-100">
                    <div class="card-body h-100 p-5">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-xxl-12">
                                <div class="text-center text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                    <h1 class="text-primary">PLN Clear Tamper ULP Pandeglang</h1>
                                    
                                      <div class="card-header">Area Chart Example</div>
                                        <div class="card-body">
                                            <div class="chart-area"><canvas id="myAreaChart" width="100%" height="30"></canvas></div>
                                        </div>
                                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<?php include('../template/footer.php') ?>
<script src="../template/chart-area-demo.js"></script>
