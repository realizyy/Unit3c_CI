<div class="footer fixed-bottom">
    <div class="container text-center position-absolute top-50 start-50 translate-middle">
        <div class="row gap-4">
            <div class="col">
                <a href="<?= base_url("Modul/" . $back) ?>" class="text-decoration-none link-dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                        <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                    </svg>
                    <span>Halaman sebelumnya</span></a>
                <?php

                ?>

            </div>
            <div class="col-7">
                <?php echo $modul ?>
            </div>
            <div class="col">
                <?php
                if (base_url(uri_string()) != base_url("Modul/index/" . $id_transaksi)) {
                    echo '';
                } else if (base_url(uri_string()) == base_url("Modul/sertifikat/" . $id_transaksi)) {
                    echo '';
                } else if (base_url(uri_string()) == base_url("Modul/hasilUjian")) {
                    echo '
                        <a href="';
                    echo base_url("Modul/"), $next;
                    echo '" class="text-decoration-none link-dark">
                        <span>Halaman berikutnya</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg></a>
                    ';
                } else {
                    echo '
                        <a href="';
                    echo base_url("Modul/" . $next);
                    echo '" class="text-decoration-none link-dark">
                        <span>Halaman berikutnya</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                        </svg></a>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<script src="bootstrap/js/bootstrap.js"></script>
<!-- <script src="bootstrap/js/bootstrap.bundle.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>