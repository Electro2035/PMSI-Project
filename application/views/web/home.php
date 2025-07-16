<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>E-Laundry | Web GIS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?=base_url()?>assets/web/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?=base_url()?>assets/web/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/web/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?=base_url()?>assets/web/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?=base_url()?>assets/web/css/style.css" rel="stylesheet">


    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="<?=base_url()?>assets/fotolaundry1.jpg" alt="" style="height: 100%; width:100%;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Selamat Datang di E-Laundry!</h5>
                                <h1 class="display-3 text-white animated slideInDown">Platform Informasi Laundry di Kranji Kota Bekasi</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Dapatkan informasi lengkap mengenai alamat tempat laundry di Kranji Kota Bekasi yang paling dekat dengan lokasi rumahmu.</p>
                                <a href="<?=base_url('home/map')?>"class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Open Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="<?=base_url()?>assets/fotolaundry2.jpg" alt=""  style="height: 100%; width:100%;">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Temukan Lokasi Laundry Terdekat!</h5>
                                <h1 class="display-3 text-white animated slideInDown">Lokasi Terjangkau dan Terpercaya</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Lokasi Laundry yang strategis dan memudahkan pencarian pengguna. Tentunya lokasi aman dan terpercaya.</p>
                                <a href="<?=base_url('home/map')?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Open Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Card Start -->
    <div class="container card-container-section">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">laundry</h6>
                <h2 class="mb-5">Daftar Laundry</h2>
            </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php if (!empty($laundries)): ?>
                <?php foreach ($laundries as $laundry): ?>
                    <div class="col wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card h-100 shadow-sm">
                            <?php if (!empty($laundry->image_path)): ?>
                                <img src="<?= base_url($laundry->image_path) ?>" class="card-img-top-custom" alt="Foto Laundry">
                            <?php else: ?>
                                <img src="<?=base_url()?>assets/fotolaundry1.jpg ?>" class="card-img-top-custom" alt="No Image">
                            <?php endif; ?>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= htmlspecialchars($laundry->nama) ?></h5>
                                <p class="card-text-detail text-center"></i><?= htmlspecialchars($laundry->deskripsi) ?></p>
                                <p class="card-text-detail"><i class="fas fa-concierge-bell me-2"></i>Layanan: <?= htmlspecialchars($laundry->layanan) ?></p>
                                <p class="card-price"><i class="fas fa-dollar-sign me-2"></i>Harga: Rp<?= number_format($laundry->harga, 0, ',', '.') ?></p>
                                <p class="card-text-detail"><i class="fas fa-map-marker-alt me-2"></i>Alamat: <?= htmlspecialchars($laundry->alamat) ?></p>
                                <p class="card-text-detail"><i class="fas fa-clock me-2"></i>Jam Buka: <?= htmlspecialchars($laundry->jam_buka) ?></p>
                                <p class="card-text-detail"><i class="fas fa-phone me-2"></i>Telepon: <?= htmlspecialchars($laundry->no_telp) ?></p>
                                <p class="card-text-detail"><i class="fas fa-route me-2"></i>Jarak: <?= htmlspecialchars($laundry->Jarak) ?> Km</p>

                                <div class="card-actions">
                                    <a href="<?= base_url('home/map') ?>" class="btn btn-primary btn-sm"><i class="fas fa-map-marked-alt"></i> Lihat Peta</a>
                                    <?php /* if ($this->session->userdata('user_role') === 'admin'): ?>
                                        <a href="<?= base_url('admin/crud_edit/' . $laundry->id) ?>" class="btn btn-info btn-sm" style="background-color: #6f42c1; border-color: #6f42c1; color: white;"><i class="fas fa-edit"></i> Ubah</a>
                                        <a href="<?= base_url('admin/crud_delete/' . $laundry->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fas fa-trash-alt"></i> Hapus</a>
                                    <?php endif; */ ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12">
                    <div class="card no-data-card">
                        <p>Tidak ada data laundry yang tersedia saat ini.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Card End -->

    <!-- Map Section Start -->
    <div class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Peta</h6>
        <h2 class="mb-5">Informasi Peta Daerah Kranji Kota Bekasi</h2>
    </div>
    <iframe src="<?=base_url('home/map')?>" width="1260" height="650"></iframe>
    <!-- Map Section End -->

    <!-- Back to Top -->
    <a href="" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/wow/wow.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url()?>assets/web/js/main.js"></script>
</body>

</html>
