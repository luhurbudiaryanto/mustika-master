<?php
/**
* Wedding Mustika Proprietary License
* Copyright (C) 2025 Wedding Mustika
* Dilarang menyalin, mendistribusikan, atau menggunakan kode ini tanpa izin.
* Untuk izin, hubungi: luhurbudiaryanto2@gmail.com
*/
session_start();

if (!isset($_SESSION['username'])) { 

    header("Location: login.php"); // Jika belum login, redirect ke login
    exit();
   
   }


?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Wedding Mustika Organizer</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <link rel="stylesheet" href="asset/styless.css">

</head>
<body>


    <!-- Sidebar -->
    <nav id="sidebar" class="sidebar">
        <div class="sidebar-header">
            <h3>Wedding App</h3>
            <button id="sidebarToggle" class="btn btn-light"><i class="fas fa-bars"></i></button>
        </div>
        <ul class="list-unstyled components">
            <li><a href="index.php"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="products.php"><i class="fas fa-shopping-cart"></i> Layanan</a></li>
            <li><a href="orders.php"><i class="fas fa-file-invoice"></i> Pesanan</a></li>
            <li><a href="profile.php"><i class="fas fa-user"></i> Profil</a></li>
            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </nav>

    <!-- Navbar -->

    <?php include 'layout/navbar.php'; ?>

    <div class="container-fluid">
        <!-- Hero Section -->
        <div class="hero-section d-flex flex-column justify-content-center align-items-center text-center">
            <h1 class="display-4 fw-bold text-white">Wedding Mustika Organizer</h1>
            <p class="lead text-white-50">Mewujudkan pernikahan impian dengan layanan terbaik</p>
            <a href="#about" class="btn btn-lg btn-warning px-4 py-2 fw-bold mt-3">
                <i class="fas fa-heart"></i> Lihat Paket Wedding
            </a>
        </div>
    </div>
    

        <!-- About Us Section -->
        <section class="section about-section py-5 text-center text-white">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left: Text -->
                    <div class="col-md-6">
                        <h2 class="mb-4 fw-bold">Tentang Kami</h2>
                        <p class="lead">
                            <i class="fas fa-gem text-warning"></i> Kami adalah <strong>Wedding Organizer Profesional</strong> 
                            yang siap membantu mewujudkan pernikahan impian Anda dengan dekorasi elegan, layanan terbaik, 
                            dan pengalaman luar biasa.
                        </p>
                        <ul class="list-unstyled mt-4">
                            <li><i class="fas fa-check-circle text-success"></i> Dekorasi Elegan & Premium</li>
                            <li><i class="fas fa-check-circle text-success"></i> Paket Wedding Custom & Fleksibel</li>
                            <li><i class="fas fa-check-circle text-success"></i> Pengalaman 10+ Tahun di Industri</li>
                        </ul>
                        <a href="#" class="btn btn-warning mt-3 px-4 py-2 fw-bold">Lihat Paket Kami</a>
                    </div>
                    <!-- Right: Image -->
                    <div class="col-md-6">
                        <div class="about-img">
                            <img src="https://source.unsplash.com/500x400/?wedding,couple" class="img-fluid rounded shadow-lg" alt="Tentang Kami">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Our Team Section -->
        <section class="section bg-light py-5">
            <div class="container text-center">
                <h2 class="mb-4">Tim Kami</h2>
                <div class="row justify-content-center">
                    <!-- Member 1 -->
                    <div class="col-md-4">
                        <div class="card team-card shadow-lg border-0">
                            <img src="asset/img/wedding/galeri.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Luhur</h5>
                                <p class="card-text text-muted">Design</p>
                            </div>
                        </div>
                    </div>

                    <!-- Member 2 -->
                    <div class="col-md-4">
                        <div class="card team-card shadow-lg border-0">
                            <img src="asset/img/wedding/galeri1.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Budi</h5>
                                <p class="card-text text-muted">Admin</p>
                            </div>
                        </div>
                    </div>

                    <!-- Member 3 -->
                    <div class="col-md-4">
                        <div class="card team-card shadow-lg border-0">
                            <img src="asset/img/wedding/galeri2.jpg" class="card-img-top rounded-circle mx-auto mt-3" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Aryanto</h5>
                                <p class="card-text text-muted">Makeup Artist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="section text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card shadow-lg">
                            <div class="card-header bg-primary text-white text-center">
                                <h3 class="mb-0">Contact Person</h3>
                            </div>
                            <div class="card-body">
                                <p><i class="fas fa-user"></i> <strong>Name:</strong> Wedding Mustika</p>
                                <p><i class="fas fa-phone"></i> <strong>Phone:</strong> +62 812 3456 7890</p>
                                <p><i class="fas fa-envelope"></i> <strong>Email:</strong> contact@weddingapp.com</p>
                                <p><i class="fas fa-map-marker-alt"></i> <strong>Address:</strong> Pekanbaru, Riau, Indonesia</p>
                                <div class="text-center mt-3">
                                    <a href="#" class="btn btn-primary me-2"><i class="fab fa-facebook-f"></i> Facebook</a>
                                    <a href="#" class="btn btn-danger me-2"><i class="fab fa-instagram"></i> Instagram</a>
                                    <a href="#" class="btn btn-dark"><i class="fab fa-tiktok"></i> TikTok</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
   
    <!-- Footer -->
    <?php include 'layout/footer.php'; ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS Custom -->
    <script src="asset/js/main.js"></script>

</body>
</html>