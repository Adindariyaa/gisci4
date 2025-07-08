<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>GIS | <?= $judul ?> </title>
    <link href="<?= base_url('sb-admin/') ?>css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">



    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <!-- data table -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    </script>

    <style>
        /* Navbar atas */
        .sb-topnav {
            background-color: #24524A !important;
        }

        /* Sidebar background */
        #sidenavAccordion {
            background-color: #24524A !important;
        }

        /* Semua link di sidebar */
        .sb-sidenav-menu .nav-link {
            color: white !important;

        }

        /* Hover effect */
        .sb-sidenav-menu .nav-link:hover {
            background-color: #1d423c !important;
            color: white !important;
        }

        /* Ikon dalam sidebar dan navbar */
        .sb-nav-link-icon i,
        .sb-sidenav-collapse-arrow i,
        .navbar-nav .nav-link i,
        .sb-topnav i {
            color: white !important;
            font-weight: bold !important;
        }

        /* Teks navbar atas */
        .sb-topnav .navbar-brand {
            color: white !important;
            font-weight: bold !important;
        }

        /* Dropdown di kanan atas */
        .navbar-nav .nav-link,
        .navbar-nav .dropdown-menu {
            color: white !important;
            font-weight: bold !important;
        }
    </style>


</head>

<body>
    <nav class="sb-topnav navbar navbar-expand" style="background-color: #24524A;">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="Home">Web GIS Badminton</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars text-white"></i></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?= base_url('login') ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu" style="background-color: #24524A;">

                    <div class="nav">
                        <a class="nav-link" href="<?= base_url('Home') ?>">
                            <div class="sb-nav-link-icon-fill me-2"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <a class="nav-link" href="<?= base_url('Lokasi/pemetaanLokasi') ?>">
                            <div class="sb-nav-link-icon-fill me-2"><i class="bi bi-geo-alt-fill"></i></div>
                            Pemetaan Lokasi
                        </a>
                        <a class="nav-link" href="<?= base_url('Lokasi/inputLokasi') ?>">
                            <div class="sb-nav-link-icon-fill me-2"> <i class="bi bi-pencil-square"></i></div>
                            Input Lokasi
                        </a>
                        <a class="nav-link" href="<?= base_url('Lokasi/index') ?>">
                            <div class="sb-nav-link-icon-fill me-2"><i class="fa-solid fa-map"></i></div>
                            Data Lokasi
                        </a>

                        <?php
                        $uri = service('uri');
                        $segment1 = $uri->getSegment(1); // Lokasi
                        $segment2 = $uri->getSegment(2); // inputLokasi, pemetaanLokasi, index
                        $isLokasi = ($segment1 === 'Lokasi' && in_array($segment2, ['inputLokasi', 'pemetaanLokasi', 'index']));
                        ?>

                        <a class="nav-link" href="<?= base_url('login') ?>">
                            <div class="sb-nav-link-icon-fill me-2"><i class="bi bi-box-arrow-right"></i></div>
                            logout
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4"><?= $judul ?></h1>
                    <hr>
                    <?php if ($page) {
                        echo view($page);
                    } ?>
                </div>
            </main>
            <br>
        </div>
    </div>
    <!-- Bootstrap Bundle (JS + Popper) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="<?= base_url('sb-admin/') ?>js/scripts.js"></script>
    <script>
        // Framework Datatables
        $("#myTable").DataTable({
            responsive: true,
            pageLength: 5,
            order: [
                [0, "asc"]
            ],
            lengthMenu: [5, 10, 25, 50, 100],
            language: {
                search: "Cari:",
                info: "Menampilkan START sampai END dari TOTAL data",
                infoFiltered: "(disaring dari total MAX data)",
                zeroRecords: "Tidak ada data ditemukan",
                lengthMenu: "Tampilkan MENU data per halaman",
                paginate: {
                    first: "Pertama",
                    last: "Terakhir",
                    next: "Berikutnya",
                    previous: "Sebelumnya",
                },
            },
        });
    </script>
</body>

</html>