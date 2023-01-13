<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unit 3C | Unit Computing Certification Center</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo_unit3c.png">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .container-fluid {
            padding: 10px 120px;
        }

        .banner {
            background-image: url(<?= base_url("../"); ?>assets/images/banner3.png);
            /* background-image: linear-gradient(to bottom, rgba(255,0,0,0) 95%,white 100%), url(assets/images/banner2.png); */
            background-repeat: no-repeat;
            background-size: cover;
            height: 80vh;
            text-align: center;
        }

        .banner .banner-text {
            margin-top: 100px;
        }

        .supporter {
            margin: 100px;
        }

        .supporter h4 {
            margin: 50px 0 40px 0;
        }

        .row {
            margin: auto;
        }

        .supporter img {
            max-width: 250px;
            padding: 10px;
        }

        .kenapa .row {
            background-color: #F4F4F5;
            padding: 100px;
        }

        .kenapa h4 {
            padding: 20px;
        }

        .produk h4 {
            margin: 50px 0 100px 0;
        }

        .produk {
            margin: 100px;
        }

        .carouselExampleIndicators {
            height: 70vh;
        }

        .carousel-inner {
            background-color: #F4F4F5;
            height: max-content;
        }

        .carousel-inner img {
            width: 100px;
            height: 100px;
        }

        .carousel-content {
            padding: 20px 0;
            margin: 0 100px 100px 100px;
        }

        .testi h4 {
            margin: 80px 0 20px 0;
        }

        .ajakan {
            border-radius: 5px;
            padding: 50px;
            margin: 100px;
            background-color: #32DE84;
        }

        .footerLine {
            margin: 100px 100px 0 100px;
        }

        .footerLine .card-group {
            padding-top: 90px;
        }

        .footer img {
            max-width: 150px;
            margin-left: 15px;
        }

        .footerEnd {
            border-radius: 5px 5px 0 0;
            margin: 100px 100px 0 100px;
            background-color: #32DE84;
            height: max-content;
            padding: 5px 0 5px 0;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url(); ?>" id="home"><img src="<?= base_url("../"); ?>assets/images/logo_unit3c.png" alt="Bootstrap" width="40" height="45"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                            <a class="nav-link fs-5 .text-dark" href="#">Silabus</a>
                        </li> -->
                    <li class="nav-item">
                        <?php if ($role) {
                            if ($role == "1") {
                                echo '<a class="nav-link fs-5 .text-dark" aria-current="page" href="';
                                echo base_url("Pengguna/kelas");
                                echo '" id="kelas">Kelas</a>';
                            } else if ($role == "2") {
                                echo '<a class="nav-link fs-5 .text-dark" aria-current="page" href="';
                                echo base_url("Pengguna/kelas");
                                echo '" id="kelas">Kelas</a>';
                            }
                        } else {
                            echo '<a class="nav-link fs-5 .text-dark" aria-current="page" href="';
                            echo base_url("Pengguna/kelas");
                            echo '" id="kelas">Kelas</a>';
                        }

                        ?>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fs-5 .text-dark" href="<?= base_url("Pengguna/kategori"); ?>" id="kategori">Kategori</a>
                        <!-- <a class="nav-link dropdown-toggle fs-5 .text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Kategori
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Security Training</a></li>
                                <li><a class="dropdown-item" href="#">Network and Cloud Training</a></li>
                                <li><a class="dropdown-item" href="#">Architecture and Technologies Training</a></li>
                                <li><a class="dropdown-item" href="#">Data Solutions Training</a></li>
                            </ul> -->
                    </li>
                </ul>
                <div>
                    <?php if ($role) {
                        if ($role == "1") {
                            echo '<label>Halo Peserta ';
                            echo $nama;
                            echo '</label>&ensp;';
                            echo '<a href="';
                            echo base_url("Peserta/dashboardPeserta");
                            echo '" type="button" class="btn btn-outline-secondary" id="dashboard">Dashboard</a>&ensp;';
                            echo '<a href="';
                            echo base_url("Login/logout");
                            echo '" type="button" class="btn btn-dark" id="logout">Logout</a>';
                        } else if ($role == "2") {
                            echo '<label>Halo Mentor ';
                            echo $nama;
                            echo '</label>&ensp;';
                            echo '<a href="';
                            echo base_url("Mentor/dashboardMentorKelas");
                            echo '" type="button" class="btn btn-outline-secondary" id="dashboard">Dashboard</a>&ensp;';
                            echo '<a href="';
                            echo base_url("Login/logout");
                            echo '" type="button" class="btn btn-dark" id="logout">Logout</a>';
                        }
                    } else {
                        echo '<a href="';
                        echo base_url("Registrasi");
                        echo '" type="button" class="btn btn-outline-dark" id="daftar">Daftar</a>&ensp;';
                        echo '<a href="';
                        echo base_url("Login");
                        echo '" type="button" class="btn btn-success" id="masuk">Masuk</a>';
                    }
                    ?>
                    <!-- <a class="btn btn-outline-secondary" href="<?= base_url("Dashboard"); ?>" id="dashboard">Dashboard</a>
                    <a href="<?= base_url("Registrasi"); ?>" type="button" class="btn btn-outline-dark" id="daftar">Daftar</a>
                    <a href="<?= base_url("Login"); ?>" type="button" class="btn btn-success" id="masuk">Masuk</a>
                    <a onclick="logout()" class="btn btn-dark" id="logout">Logout</a> -->
                </div>
            </div>
        </div>
    </nav>