<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">

                            <!-- Sidenav Menu Heading (Core)-->
                            <div class="sidenav-menu-heading">Menu Admin</div>
                            <!-- Sidenav Accordion (Dashboard)-->

                            <a class="nav-link collapsed" href="dashboard.php" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                                <div class="nav-link-icon"><i data-feather="home"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link collapsed" href="clear_temper.php" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                                <div class="nav-link-icon"><i data-feather="zap"></i></div>
                                Clear Temper
                            </a>

                            <a class="nav-link collapsed" href="clear_temper_grafik.php" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                Grafik Clear Temper
                            </a>

                            <a class="nav-link collapsed" href="clear_temper_rekap.php" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                                <div class="nav-link-icon"><i data-feather="database"></i></div>
                                Rekap Clear Temper
                                <!-- <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> -->
                            </a>

                            
                        </div>
                    </div>

                    <!-- Sidenav Footer-->
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            <div class="sidenav-footer-subtitle">Logged in as:</div>
                            <div class="sidenav-footer-title"><?= $username ?></div>
                        </div>
                    </div>
                </nav>
            </div>
