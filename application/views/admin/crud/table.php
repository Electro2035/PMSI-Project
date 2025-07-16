<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-Laundry | Web GIS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    <style>


    </style>
</head>

<body>
    <div class="data-table-container">
        <div class="card card-body shadow border-0" style="margin-top: 20px;">
            <div class="card-header-custom">
                <h4><i class="fas fa-fw fa-users"></i> Data Laundry</h4>
            </div>

            <div class="card-body">
                <a href="<?= base_url('admin/crud_create') ?>" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Laundry</a>

                <div class="data-table-controls">
                    <div class="d-flex align-items-center">
                        <label for="entries-select" class="me-2">Show</label>
                        <select class="form-select form-select-sm" id="entries-select" style="width: auto;">
                            <option value="7">7</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                        </select>
                        <span class="ms-2">entries</span>
                    </div>
                    <div class="input-group input-group-sm w-auto">
                        <span class="input-group-text" id="search-addon">Search:</span>
                        <input type="text" class="form-control" placeholder="" aria-label="Search" aria-describedby="search-addon">
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped text-center">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Layanan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jam Buka</th>
                                <th scope="col">No. Telepon</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($laundries)): ?>
                                <?php $no = 1; foreach ($laundries as $laundry): ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= htmlspecialchars($laundry->nama) ?></td>
                                    <td><?= htmlspecialchars($laundry->deskripsi) ?></td>
                                    <td><?= htmlspecialchars($laundry->layanan) ?></td>
                                    <td>Rp<?= number_format($laundry->harga, 0, ',', '.') ?></td>
                                    <td><?= htmlspecialchars($laundry->alamat) ?></td>
                                    <td><?= htmlspecialchars($laundry->jam_buka) ?></td>
                                    <td><?= htmlspecialchars($laundry->no_telp) ?></td>
                                    <td>
                                        <div class="action-buttons">
                                            <a href="<?= base_url('admin/crud_edit/' . $laundry->id) ?>" class="btn btn-info btn-sm" style="background-color: #6f42c1; border-color: #6f42c1; color: white;">Ubah</a>
                                            <a href="<?= base_url('admin/crud_delete/' . $laundry->id) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="11" class="text-center">Tidak ada data laundry.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div class="data-table-pagination">
                    <small class="me-3">Showing 1 to <?= count($laundries) ?> of <?= count($laundries) ?> entries</small>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-sm">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/wow/wow.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/web/lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="<?=base_url()?>assets/web/js/main.js"></script>
</body>

</html>