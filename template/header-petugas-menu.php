<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    
                    <div class="sidenav-menu">
                        <div class="nav accordion" id="accordionSidenav">

                            <!-- Sidenav Menu Heading (Core)-->
                            <div class="sidenav-menu-heading">Core</div>
                            <!-- Sidenav Accordion (Dashboard)-->
                            
                            <a class="nav-link collapsed" href="dashboard.php" data-bs-toggle="collapse" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                                Dashboards
                            </a>

                            <a class="nav-link collapsed" href="clear_tamper.php" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                                <div class="nav-link-icon"><i data-feather="file-plus"></i></div>
                                Clear Tamper
                            </a>

                             <a class="nav-link collapsed" href="clear_tamper_regu.php" data-bs-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                                <div class="nav-link-icon"><i data-feather="file-text"></i></div>
                                Clear Tamper Regu
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
