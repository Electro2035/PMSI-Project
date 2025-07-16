<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login | E-Laundry</title>
    <link href="<?=base_url()?>assets/web/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/web/css/style.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4 shadow" style="width: 400px;">
            <h3 class="text-primary text-center mb-4">Login</h3>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
            <?php endif; ?>
            <form action="<?= base_url('auth/login_action') ?>" method="post">
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <button class="btn btn-primary w-100">Login</button>
                <div class="text-center mt-3">
                    <small>Belum punya akun? <a href="<?= base_url('auth/register') ?>">Register</a></small>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
