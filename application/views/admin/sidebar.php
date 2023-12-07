<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Main</div>
                    <a class="nav-link" href="<?= base_url('admin'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Data</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Calon Siswa Baru
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="<?php echo site_url('siswa/pendaftaran_paud'); ?>">PAUD</a>
                            <a class="nav-link" href="<?php echo site_url('siswa/pendaftaran_sd'); ?>">SD</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-wallet"></i></div>
                        Data Pembayaran
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion">
                            <a class="nav-link" href="<?= base_url('pembayaran/pembayaran_paud'); ?>">PAUD</a>
                            <a class="nav-link" href="<?= base_url('pembayaran/pembayaran_sd'); ?>">SD</a>
                        </nav>
                    </div>
                    <div class="sb-sidenav-menu-heading">SISWA BARU</div>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-clipboard check-fill"></i></div>
                        Siswa Baru
                    </a>

                </div>

        </nav>
    </div>