<?php

require 'config.php';
require 'cek.php';


if(isset($_GET['pages'])){
    $pages = $_GET['pages'];

    switch ($pages){
        case 'dashboard':
            include 'pages/ViewDashboard.php';
            break;
        case 'data-balita':
            include 'pages/DataBalita/ViewDataBalita.php';
            break;
        case 'z-score':
            include 'pages/Zscore/ViewZscore.php';
            break;
        case 'antropometri':
            include 'pages/ViewAntropometri.php';
            break;
        case 'detail-balita':
            include 'pages/DataBalita/DetailBalita/ViewDetailBalita.php';
            break;
        case 'z-scoretbu':
            include 'pages/Zscore/ViewZscoreTBU.php';
            break;   
        case 'z-scorebbtb':
            include 'pages/Zscore/ViewZscoreBBTB.php';
            break;   
                        
        default:
            echo "<center><h3>Maaf, Halaman Tidak ditemukan ! </h3></center>";
            break;
    }
}else{
    include "pages/ViewDashboard.php";
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dashboard - Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark  ">
            <a class="navbar-brand" href="index.php"><b>Admin</b>LTE</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="index.php?pages=data-balita">
                                <div class="sb-nav-link-icon"><i class="fas fa-baby"></i></div>
                                Data Balita
                            </a>
                            <a class="nav-link" href="index.php?pages=z-score">
                                <div class="sb-nav-link-icon"><i class="far fa-sticky-note"></i></div>
                                Kategori & Z-Score
                            </a>
                            <a class="nav-link" href="index.php?pages=antropometri">
                                <div class="sb-nav-link-icon"><i class="far fa-file-alt"></i></div>
                                Standar Antropometri
                            </a>
                            <a class="nav-link" href="logout.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-sign-out-alt"></i></div>
                                Sign out
                            </a>                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: <?= $_SESSION['username'];?></div>
                        
                    </div>
                </nav>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
       
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
   
        
            <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="assets/demo/datatables-demo.js"></script>
        
    </body>
</html>
