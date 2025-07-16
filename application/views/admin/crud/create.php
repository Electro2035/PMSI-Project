<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tambah Data Laundry - E-Laundry</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="<?=base_url()?>assets/web/img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/web/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/web/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/web/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/web/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h3 class="mb-4">Tambah Data Laundry</h3>

        <!-- Form mulai di sini -->
        <form action="<?= base_url('admin/crud_store') ?>" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Laundry</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Singkat</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="layanan" class="form-label">Layanan</label>
                <input type="text" class="form-control" id="layanan" name="layanan">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Laundry (Rp)</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="2"></textarea>
            </div>
            <div class="mb-3">
                <label for="jam_buka" class="form-label">Jam Buka</label>
                <input type="text" class="form-control" id="jam_buka" name="jam_buka">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="no_telp" name="no_telp">
            </div>
            <div class="mb-3">
                <label for="Jarak" class="form-label">Jarak</label>
                <input type="text" class="form-control" id="Jarak" name="Jarak">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('admin/crud') ?>" class="btn btn-secondary">Kembali</a>
        </form>
        <!-- Form berakhir di sini -->
    </div>

    <!-- Script tetap -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/wow/wow.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?=base_url()?>assets/web/js/main.js"></script>
</body>

</html>
