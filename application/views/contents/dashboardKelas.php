<div class="dashboardContent">
    <div class="daftarKelas">
        <?= $this->session->flashdata('message'); ?>
        <div class="progres">
            <h5>Sedang dipelajari</h5>
            <?php $i = 1;
            foreach ($kelasDipelajari as $kelas) :
            ?>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $kelas['judul'] ?>
                        <a href="<?= base_url("Modul/index/" . $kelas['id_transaksi']) ?>" class="btn btn-success rounded">Lanjut Belajar</a>
                    </li>
                </ul>
            <?php $i++;
            endforeach ?>
        </div>
        <div class="selesai">
            <h5>Selesai</h5>
            <?php $i = 1;
            foreach ($kelasSelesai as $kelas) :
            ?>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $kelas['judul'] ?>
                        <a href="<?= base_url("Modul/sertifikat/" . $kelas['id_transaksi']) ?>" class=" btn btn-outline-secondary rounded">Lihat Sertifikat</a>
                    </li>
                </ul>
            <?php $i++;
            endforeach ?>
        </div>
    </div>
</div>