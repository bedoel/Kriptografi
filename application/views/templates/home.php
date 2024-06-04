<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.html">KRIPTOGRAFI</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>Kelompok Bahari Jaya Abadi</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li>
                    <hr class="dropdown-divider" />
                </li>
                <li><a class="dropdown-item" href="#!">Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Crypt</div>
                    <a class="nav-link" href="<?= base_url('Kripto/enkripsi'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Enkripsi
                    </a>
                    <a class="nav-link" href="<?= base_url('Kripto/dekripsi'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Dekripsi
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Enkripsi</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Enkripsi</li>
                </ol>
                <div class="row">
                </div>
                <form action="<?= base_url('Kripto/process'); ?>" method="POST">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3 mb-md-0">
                                <input class="form-control" id="password" name="password" type="text" placeholder="Enter your Password" />
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" id="pkey" name="pkey" type="text" placeholder="Enter your Key" />
                                <label for="pkey">Key</label>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="usertext" placeholder="Leave a text here" id="usertext" style="height: 200px"></textarea>
                                <label for="usertext">Text</label>
                            </div>
                        </div>
                        <div class="mt-2 text-end">
                            <button class="btn btn-primary me-2" type="submit" name="action" value="enkripsi">Enkripsi</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Bahari Jaya Abadi 2024</div>

                </div>
            </div>
        </footer>
    </div>
</div>