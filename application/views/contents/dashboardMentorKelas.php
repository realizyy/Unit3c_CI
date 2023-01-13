<!-- Modal Tambah -->
<div class="modal" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kelas</h1><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url("Mentor/tambahKelas") ?>" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Poster</label><br>
                        <input class="form-control" type="text" value="" name="gambar">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Training</label>
                        <input class="form-control" type="text" value="" name="judul">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lokasi</label>
                        <input class="form-control" type="text" value="" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <input class="form-control" type="number" value="" name="kategori">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Durasi</label>
                        <input class="form-control" type="number" value="" name="durasi">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Harga</label>
                        <input class="form-control" type="number" value="" name="harga">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="dashboardContent">
    <div class="dataKelas">
        <div class="kelas container">
            <?= $this->session->flashdata('message'); ?>
            <div class="btnTambah mt-5">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambah">Tambah</button>
            </div>
            <table id="example" class="table table-striped table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Training</th>
                        <th>Lokasi</th>
                        <th>Kategori</th>
                        <th>Durasi</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php $i = 1;
                foreach ($semuaKelas as $kelas) :
                ?>
                    <?php
                    $this->load->model('MentorModel');
                    $kategori = $this->MentorModel->getKategoriKelas($kelas['id_kategori']);
                    ?>
                    <tbody id="dataTable">
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $kelas['judul'] ?></td>
                            <td><?= $kelas['lokasi'] ?></td>
                            <td><?= $kategori['kategori'] ?></td>
                            <td><?= $kelas['durasi'] ?> hari</td>
                            <td>Rp <?= $kelas['harga'] ?></td>
                            <td>
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?= $kelas['id_kelas'] ?>">Edit</button>&nbsp
                                <a href="<?= base_url("Mentor/hapusKelas/" . $kelas['id_kelas']) ?>" type="button" class="btn btn-danger" onclick="confirm('yakin?')">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    <!-- Modal edit -->
                    <div class="modal" id="edit<?= $kelas['id_kelas'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $kelas['judul'] ?></h1><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url("Mentor/ubahKelas/" . $kelas['id_kelas']) ?>" method="post">
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Poster</label><br>
                                            <input class="form-control" type="text" value="<?= $kelas['gambar'] ?>" name="gambar">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Training</label>
                                            <input class="form-control" type="text" value="<?= $kelas['judul'] ?>" name="judul">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Lokasi</label>
                                            <input class="form-control" type="text" value="<?= $kelas['lokasi'] ?>" name="lokasi">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Kategori</label>
                                            <input class="form-control" type="text" value="<?= $kelas['id_kategori'] ?>" name="kategori">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Durasi</label>
                                            <input class="form-control" type="number" value="<?= $kelas['durasi'] ?>" name="durasi">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Harga</label>
                                            <input class="form-control-plaintext" type="number" value="<?= $kelas['harga'] ?>" name="harga">
                                        </div>
                                    </div>
                                    <div class="modal-footer"><button type="submit" class="btn btn-success" data-bs-dismiss="modal">Simpan</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php $i++;
                endforeach ?>
            </table>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "lengthChange": false,
            "searching": false,
            "info": false,
            "paging": false,
            "ordering": false,
        });
    });
</script>