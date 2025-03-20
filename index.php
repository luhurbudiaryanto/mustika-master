<?php
session_start();
/**
* Wedding Mustika Proprietary License
* Copyright (C) 2025 Wedding Mustika
* Dilarang menyalin, mendistribusikan, atau menggunakan kode ini tanpa izin.
* Untuk izin, hubungi: luhurbudiaryanto2@gmail.com
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Wedding Mustika</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    <!-- CSS Custom -->
    <link rel="stylesheet" href="asset/styless.css">
</head>

<body>
    <?php include 'layout/navbar.php'; ?>
    <!-- Konten Dashboard -->
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="card dashboard-card text-white bg-primary">
                        <div class="card-body">
                            <img src="asset/img/wedding/logo2.png" class="profile-img mb-3" alt="User Image">
                            <h4>Wedding Mustika Pekanbaru</h4>
                            <p>Wedding Organizer</p>
                            <ul class="list-unstyled text-start border rounded p-3 bg-light text-dark">
                                <li class="border-bottom pb-2 mb-2"><strong>Followers:</strong> 1,322</li>
                                <li class="border-bottom pb-2 mb-2"><strong>Following:</strong> 543</li>
                                <li class="pb-2"><strong>Friends:</strong> 13,287</li>
                            </ul>
                            <button class="btn btn-light btn-sm">Follow</button>
                            <div class="mt-3 social-icons">
                                <a href="https://www.instagram.com/weddingmustikapekanbaru/" class="btn btn-danger btn-sm">
                                    <i class="fab fa-instagram"></i> Instagram
                                </a>
                                <a href="https://www.tiktok.com/@weddingmustika" class="btn btn-dark btn-sm">
                                    <i class="fab fa-tiktok"></i> TikTok
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card dashboard-card">
                        <div class="card-header text-center">
                            <h3 class="card-title"><i class="fas fa-ring"></i> Wedding Mustika Pekanbaru</h3>
                        </div>
                        <div class="card-body">
                            <p>Wedding Mustika adalah layanan pernikahan terbaik dengan berbagai pilihan tema wedding yang eksklusif.</p>
                            <p>Kami siap membantu Anda mewujudkan pernikahan impian dengan layanan berkualitas tinggi.</p>
                            <a href="#" class="btn btn-primary"><i class="fas fa-info-circle"></i> Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <div class="card-header bg-primary text-white">Activity</div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex align-items-center">
                                    <img src="asset/img/wedding/galeri10.jpg" class="rounded-circle me-2" width="40" height="40" alt="User Image">
                                    <div>
                                        <h6 class="mb-0"><a href="#" class="text-primary text-decoration-none"><strong>Adam Jones</strong></a></h6>
                                        <small class="text-muted">Posted 5 photos - 5 days ago</small>
                                    </div>
                                </div>
                                <p>Lorem ipsum represents a long-held tradition for designers...</p>
                                <button class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-thumbs-up"></i> Like
                                </button>
                                <button class="btn btn-outline-secondary btn-sm">
                                    <i class="fas fa-comment"></i> Comment
                                </button>
                                <div class="comment-box mt-2">
                                    <input type="text" class="form-control comment-input" placeholder="Write a comment...">
                                    <button class="btn btn-primary btn-sm">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Galeri Tema Wedding -->
    <div class="container mt-5">
        <h2 class="text-center mb-4">💍 Galeri Tema Wedding</h2>
        <div class="row">
            <?php 
                $wedding_themes = [
                    ["galeri.jpg", "Tema Rustic", "Nuansa alam yang hangat dan elegan."],
                    ["galeri1.jpg", "Tema Garden Party", "Pernikahan outdoor dengan suasana kebun."],
                    ["galeri2.jpg", "Tema Classic Elegant", "Konsep pernikahan mewah bernuansa klasik."],
                    ["galeri3.jpg", "Tema Modern", "Dekorasi modern minimalis."],
                    ["galeri4.jpg", "Tema Adat", "Pernikahan dengan adat dan budaya khas."],
                    ["galeri5.jpg", "Tema Vintage", "Pernikahan klasik ala zaman dulu."],
                    ["galeri6.jpg", "Tema Beach Wedding", "Pernikahan romantis di tepi pantai."],
                    ["galeri7.jpg", "Tema Bohemian", "Dekorasi boho yang unik dan artistik."],
                    ["galeri8.jpg", "Tema Glamour", "Kemewahan dengan dekorasi elegan."]
                ];
                foreach ($wedding_themes as $theme) {
            ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card gallery-card">
                    <a href="asset/img/wedding/<?= $theme[0] ?>" data-lightbox="wedding" data-title="<?= $theme[1] ?>">
                        <img src="asset/img/wedding/<?= $theme[0] ?>" class="card-img-top gallery-img" alt="<?= $theme[1] ?>">
                    </a>
                    <div class="card-body">
                        <h5><?= $theme[1] ?></h5>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

        
    <!-- Lokasi -->
    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-success text-white text-center">
                <h3 class="mb-0">📍 Lokasi Wedding Mustika</h3>
            </div>
            <div class="card-body text-center">
                <p class="fw-bold">Wedding Mustika Organizer</p>
                <p>Jl. Budi Rahayu No.80, Kel. Rejosari, Tenayan Raya, Pekanbaru, Riau</p>
                <div class="ratio ratio-16x9">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d368.95967787441765!2d101.47452865096903!3d0.5204042004025577!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ad2ac7f85605%3A0x9654b72a60d1eb05!2sWedding%20Mustika%20Organizer!5e1!3m2!1sid!2sid!4v1742264570034!5m2!1sid!2sid" 
                        width="100%" height="400" 
                        style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Footer -->
    <?php include 'layout/footer.php'; ?>    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- LightBox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <!-- JS Custom -->
    <script src="asset/js/main.js"></script>


</body>
</html>