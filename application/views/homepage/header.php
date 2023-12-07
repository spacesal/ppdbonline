<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PPDB</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/'); ?>foto/logo_albiruni.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/'); ?>css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!"><img src="<?= base_url('assets/'); ?>foto/logo_albiruni.png" width="20" height="20"></a>
            <a class="navbar-brand" href="#!">PPDB AL-BIRUNI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?php echo site_url('home'); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/about'); ?>">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('home/contact'); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">WELCOME TO WEB PPDB AL-BIRUNI</h1>
                        <p class="lead text-white-50 mb-4">Website Pendaftaran Peserta Didik Baru Sekolah AL-BIRUNI Tahun Ajaran 2024/2025</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                            <a class="btn btn-primary btn-lg px-4 me-sm-3" href="<?php echo site_url('home/login')?>">LOGIN</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="<?php echo site_url('register')?>">REGISTER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>