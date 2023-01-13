<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Unit 3C | Unit Computing Certification Center</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo_unit3c.png">
    <link rel="stylesheet" href="<?= base_url("../assets/"); ?>bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url("../assets/"); ?>css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <style>
        .container-fluid {
            padding: 10px 120px;
        }

        .banner {
            background-image: url(assets/images/banner3.png);
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

        .logoBrand {
            box-shadow: .125rem .125rem .125rem 0px rgba(0, 0, 0, 0.05);
            padding: 23px 120px;
        }

        .dashboardContent {
            background-color: #F4F4F5;
            width: 100%;
            height: 100vh;
            padding-left: 300px;
        }

        .userImage img {
            width: 40px;
            height: 40px;
            margin: -1px;
            /* margin: 8px 0 7px 0; */
        }

        .navbar {
            box-shadow: .125rem .125rem .125rem 0px rgba(0, 0, 0, 0.05);
        }

        .daftarKelas,
        .dataKelas {
            margin: 50px;
        }

        .daftarKelas h5 {
            padding: 10px 0;
        }

        .daftarKelas ul {
            padding: 10px 0;
        }

        .sideNav a {
            padding: 0 102px;
        }

        .sideNav .list-group {
            margin-bottom: 100vh;
        }

        .sideNav {
            position: fixed;
        }

        .content {
            height: fit-content;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white sticky-top shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url("../"); ?>assets/images/logo_unit3c.png" alt="Bootstrap" width="40" height="45"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <span class="fs-5 text-dark">Selamat Datang <?= $nama ?></span>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="userImage nav-link dropdown-toggle fs-5 .text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="rounded-circle" src="<?= base_url("../"); ?>assets/images/person1.jpg" alt="">
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                            <li><a class="dropdown-item" href="<?= base_url("Login/logout"); ?>">Keluar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content d-flex">
        <div class="sideNav bg-white">
            <ul class="list-group list-group-flush text-center">
                <?php
                if ($role) {
                    if ($role == "1") {
                        echo '<li class="list-group-item ';
                        if (base_url(uri_string()) == base_url("Peserta/dashboardPeserta")) {
                            echo 'list-group-item-success';
                        }
                        echo '"><a href="';
                        echo base_url("Peserta/dashboardPeserta");
                        echo '" class="link-success text-decoration-none">Home</a></li>';

                        echo '<li class="list-group-item ';
                        if (base_url(uri_string()) == base_url("Peserta/dashboardPesertaKelas")) {
                            echo 'list-group-item-success';
                        }
                        echo '"><a href="';
                        echo base_url("Peserta/dashboardPesertaKelas");
                        echo '" class="link-success text-decoration-none">Kelas</a></li>';
                    } else if ($role == "2") {
                        echo '<li class="list-group-item ';
                        if (base_url(uri_string()) == base_url("Mentor/dashboardMentorKelas")) {
                            echo 'list-group-item-success';
                        }
                        echo '"><a href="';
                        echo base_url("Mentor/dashboardMentorKelas");
                        echo '" class="link-success text-decoration-none">Kelas</a></li>';
                    }
                } else {
                    echo '<a class="nav-link fs-5 .text-dark" aria-current="page" href="';
                    echo base_url("Pengguna/kelas");
                    echo '" id="kelas">Kelas</a>';
                }
                ?>

            </ul>
        </div>
        <?php $this->load->view($content); ?>

    </div>

    <div class="footer">
    </div>

    <script src="<?= base_url("../assets/"); ?>bootstrap/js/bootstrap.js"></script>
    <!-- <script src="bootstrap/js/bootstrap.bundle.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <!-- <script>
        $(document).ready(function() {
            $('.sideBarKelas').removeClass('list-group-item-success');
            $('.sideBarHome').addClass('list-group-item-success');
            $('#content').load('dashboardHome.php');

            $('#dashboardHome').click(function(e) {
                e.preventDefault();

                var menu = $(this).attr('id');

                if (menu == "dashboardHome") {
                    $('.sideBarKelas').removeClass('list-group-item-success');
                    $('.sideBarHome').addClass('list-group-item-success');
                    $('#content').load('dashboardHome.php');
                } else if (menu == "dashboardKelas") {
                    $('.sideBarHome').removeClass('list-group-item-success');
                    $('.sideBarKelas').addClass('list-group-item-success');
                    $('#content').load('dashboardKelas.php');
                }
            });

            $('#dashboardKelas').click(function(e) {
                e.preventDefault();

                var menu = $(this).attr('id');

                if (menu == "dashboardKelas") {
                    $('.sideBarHome').removeClass('list-group-item-success');
                    $('.sideBarKelas').addClass('list-group-item-success');
                    $('#content').load('dashboardKelas.php');
                } else if (menu == "dashboardHome") {
                    $('.sideBarKelas').removeClass('list-group-item-success');
                    $('.sideBarHome').addClass('list-group-item-success');
                    $('#content').load('dashboardHome.php');
                }
            });
        });
    </script> -->

</body>

</html>