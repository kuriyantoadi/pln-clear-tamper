<?php include('../template/header-admin.php') ?>
<?php include('../template/header-admin-menu.php') ?>
<?php include('../koneksi.php') ?>

<!-- batas konten atas -->
<div id="layoutSidenav_content">
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            Grafik Clear Tamper
                        </h1>
                        <div class="page-header-subtitle">Grafik Clear Tamper Bulanan</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
       
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- grafik akhir bulanan -->

        
    </div>
</main>
<?php include('../template/footer.php') ?>
<?php include('../template/chart-bulanan.php') ?>
