<!-- Modal -->
<div class="modal" id="bayarBerhasil" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Pembayaran Berhasil</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#32DE84" class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
                </svg>
            </div>
            <div class="modal-footer">
                <a href="materi.html" type="button" class="btn btn-primary">Buka Materi</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal detail kursus -->
<div class="modal" id="mendaftar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Daftar ' + result[2].data[i].judul + '</h1><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Poster</label><br><img src="' + result[2].data[i].gambar + '" class="img-thumbnail w-50 h-50" alt="' + result[2].data[i].gambar + '"></div>
                <div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Training</label><input class="form-control" type="text" value="' + result[2].data[i].judul + '" aria-label="Disabled input example" disabled readonly></div>
                <div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Lokasi</label><input class="form-control" type="text" value="' + result[2].data[i].lokasi + '" aria-label="Disabled input example" disabled readonly></div>
                <div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Kategori</label><input class="form-control" type="text" value="' + kategori(result[2].data[i].id_kategori, result) + '" aria-label="Disabled input example" disabled readonly></div>
                <div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Durasi</label><input class="form-control" type="text" value="' + result[2].data[i].durasi + ' hari" aria-label="Disabled input example" disabled readonly></div>
                <div class="mb-3"><label for="exampleFormControlInput1" class="form-label">Harga</label><input class="form-control-plaintext" type="text" value="Rp ' + result[2].data[i].harga + '" aria-label="Disabled input example" disabled readonly></div>
            </div>
            <div class="modal-footer"><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bayarBerhasil">Bayar</button></div>
        </div>
    </div>
</div>

<div class="kelas container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php $i = 1;
        foreach ($semuaKelas as $kelas) :
        ?>
            <?php
            $this->load->model('PenggunaModel');
            $kategori = $this->PenggunaModel->getKategoriKelas($kelas['id_kategori']);
            // var_dump($kategori);
            // die;
            ?>
            <div class="col">
                <div class="card h-100">
                    <img src="<?= base_url("../"); ?><?= $kelas['gambar'] ?>" class="card-img-top" alt="<?= $kelas['gambar'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $kelas['judul'] ?></h5>
                        <table>
                            <tr>
                                <td>Training</td>
                                <td>:</td>
                                <td><?= $kelas['judul'] ?></td>
                            </tr>
                            <tr>
                                <td>Lokasi</td>
                                <td>:</td>
                                <td><?= $kelas['lokasi'] ?></td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td>:</td>
                                <td><?= $kategori['kategori'] ?></td>
                            </tr>
                            <tr>
                                <td>Durasi</td>
                                <td>:</td>
                                <td><?= $kelas['durasi'] ?> hari</td>
                            </tr>
                        </table>
                        <div class="text-end">
                            <?php if ($role == '1') {
                                echo '<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#mendaftar';
                                echo $kelas['id_kelas'], '">Daftar</button>';
                            } else if ($role == '2') {
                                echo '<a href="';
                                echo base_url("Mentor/dashboardMentorKelas");
                                echo '" type="button" class="btn btn-warning"';
                                echo $kelas['id_kelas'], '">Edit</a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal edit -->
            <div class="modal" id="mendaftar<?= $kelas['id_kelas'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $kelas['judul'] ?></h1><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?= base_url("Peserta/mendaftarKursus/" . $kelas['id_kelas']) ?>" method="post">
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="form-label">Poster</label><br>
                                    <input class="form-control" type="text" value="<?= $kelas['gambar'] ?>" name="gambar" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Training</label>
                                    <input class="form-control" type="text" value="<?= $kelas['judul'] ?>" name="judul" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Lokasi</label>
                                    <input class="form-control" type="text" value="<?= $kelas['lokasi'] ?>" name="lokasi" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kategori</label>
                                    <input class="form-control" type="text" value="<?= $kelas['id_kategori'] ?>" name="kategori" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Durasi</label>
                                    <input class="form-control" type="number" value="<?= $kelas['durasi'] ?>" name="durasi" disabled readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Harga</label>
                                    <input class="form-control-plaintext" type="number" value="<?= $kelas['harga'] ?>" name="harga" disabled readonly>
                                </div>
                            </div>
                            <div class="modal-footer"><button type="submit" class="btn btn-success" data-bs-dismiss="modal">Daftar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        <?php $i++;
        endforeach ?>
    </div>
</div>

<script src="bootstrap/js/bootstrap.js"></script>
<!-- <script src="bootstrap/js/bootstrap.bundle.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="assets/js/jquery-3.6.1.min.js"></script>