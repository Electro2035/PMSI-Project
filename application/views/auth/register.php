<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register | E-Laundry</title>
    <link href="<?= base_url() ?>assets/web/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/web/css/style.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 400px;">
            <h3 class="text-primary text-center mb-3">Register</h3>

            <!-- Kotak pesan validasi -->
            <?php if ($this->session->flashdata('error')) : ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
            <?php endif; ?>

            <?php if (validation_errors()) : ?>
                <div class="alert alert-warning"><?= validation_errors(); ?></div>
            <?php endif; ?>

            <!-- Form -->
            <form action="<?= base_url('auth/register_action') ?>" method="post">
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password (min 5 karakter)" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password2" class="form-control" placeholder="Re-enter Password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
                <div class="text-center mt-3">
                    <small>Sudah punya akun? <a href="<?= base_url('auth/login') ?>">Login</a></small>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
