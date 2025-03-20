<?php
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
    <title>Gallery - Wedding App</title>
    
    <!-- CSS Custom -->
    <link rel="stylesheet" href="asset/styless.css">
    
    
    <?php include 'layout/head.php'; ?>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
   
    <?php include 'layout/navbar.php'; ?>

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
        <section class="content">
            <div class="container-fluid">
                <div class="gallery">
                    <img src="asset/img/wedding/galeri14.jpg" alt="Gallery Image" data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="asset/img/wedding/galeri14.jpg" alt="Gallery Image" data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="asset/img/wedding/galeri14.jpg" alt="Gallery Image" data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="asset/img/wedding/galeri14.jpg" alt="Gallery Image" data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="asset/img/wedding/galeri14.jpg" alt="Gallery Image" data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="asset/img/wedding/galeri14.jpg" alt="Gallery Image" data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="asset/img/wedding/galeri14.jpg" alt="Gallery Image" data-bs-toggle="modal" data-bs-target="#imageModal">
                    <img src="asset/img/wedding/galeri14.jpg" alt="Gallery Image" data-bs-toggle="modal" data-bs-target="#imageModal">
                </div>
            </div>
        </section>
        
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6">
                    <img id="mainImage" src="asset/img/wedding/galeri14.jpg" class="img-fluid main-image" alt="Wedding Package">
                    <div class="mt-3">
                        <img src="asset/img/wedding/galeri13.jpg" class="thumbnail active">
                        <img src="asset/img/wedding/galeri12.jpg" class="thumbnail">
                        <img src="asset/img/wedding/galeri11.jpg" class="thumbnail">
                        <img src="asset/img/wedding/galeri10.jpg" class="thumbnail">
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Luxury Wedding Package</h2>
                    <p class="text-muted">Paket pernikahan eksklusif dengan dekorasi mewah dan fasilitas lengkap.</p>
                    <h5>Pilih Tema</h5>
                    <select id="theme" class="form-select">
                        <option value="Rustic">Rustic</option>
                        <option value="Garden Party">Garden Party</option>
                        <option value="Classic Elegant">Classic Elegant</option>
                        <option value="Modern">Modern</option>
                    </select>
                    <h5 class="mt-3">Pilih Venue</h5>
                    <select id="venue" class="form-select">
                        <option value="Ballroom">Ballroom</option>
                        <option value="Outdoor Garden">Outdoor Garden</option>
                        <option value="Beach Wedding">Beach Wedding</option>
                    </select>
                    <h3 class="mt-3">$2,500</h3>
                    <button class="btn btn-primary" id="addToCart">Add to Cart</button>
                    <button class="btn btn-outline-secondary">Add to Wishlist</button>
                    <div id="cartMessage" class="mt-3"></div>
                    <h5 class="mt-4">Cart:</h5>
                    <div id="cartItems"></div>
          
                    <ul class="nav nav-tabs mt-4">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#description">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#comments">Comments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#rating">Rating</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="description">
                            <p>Detail lengkap mengenai paket pernikahan ini...</p>
                        </div>
                        <div class="tab-pane fade" id="comments">
                            <textarea class="form-control" placeholder="Leave a comment..."></textarea>
                        </div>
                        <div class="tab-pane fade" id="rating">
                            <p>Rate this package:</p>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="" id="modalImage" alt="Preview">
            </div>
        </div>
    </div>
</div>

   <!-- Footer -->
   <?php include 'layout/footer.php'; ?>
   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   <!-- JQuery -->
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <!-- Script Chart.js -->
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <!-- AdminLTE JS -->
   <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <!-- LightBox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
   <!-- JS Custom -->
   <script src="asset/js/main.js"></script>

</body>
</html>
