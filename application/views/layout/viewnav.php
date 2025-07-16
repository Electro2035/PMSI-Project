<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="<?= base_url('home') ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary"><i class="fas fa-tshirt"></i> E-Laundry</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-nav ms-auto p-4 p-lg-0">
        <?php
        $current_url = uri_string();
        ?>

        <a href="<?= base_url('home') ?>" class="nav-item nav-link <?= ($current_url == 'home' || $current_url == '') ? 'active' : '' ?>">Home</a>
        <a href="<?= base_url('home/about') ?>" class="nav-item nav-link <?= ($current_url == 'home/about') ? 'active' : '' ?>">About</a>

        <?php if ($this->session->userdata('user_role') === 'admin'): ?>
            <a href="<?= base_url('admin/crud/table') ?>" class="nav-item nav-link <?= ($current_url == 'admin/crud/table') ? 'active' : '' ?>">CRUD</a>
        <?php else: ?>
            <a href="<?= base_url('home/map') ?>" class="nav-item nav-link <?= ($current_url == 'home/map') ? 'active' : '' ?>">Map</a>
        <?php endif; ?>

        <?php if ($this->session->userdata('user_id')): ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-primary" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $this->session->userdata('user_name'); ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Logout</a></li>
                </ul>
            </li>
        <?php else: ?>
            <a href="<?= base_url('auth/login') ?>" class="nav-item nav-link <?= ($current_url == 'auth/login') ? 'active' : '' ?>">Login</a>
        <?php endif; ?>
    </div>
</nav>