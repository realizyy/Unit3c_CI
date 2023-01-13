    <div class="container">
        <div class="card p-5 position-absolute top-50 start-50 translate-middle w-25">
            <div class="row">
                <div class="col">
                    <h4>Daftar</h4>
                </div>
                <div class="col text-end">
                    <a href="<?= base_url(); ?>"><img src="<?= base_url("../"); ?>assets/images/logo_unit3c_text.png" alt="" class="img-fluid w-75"></a>
                </div>
            </div>
            <form method="POST" action="<?= base_url("Registrasi/registrasi"); ?>" class="mt-4 mb-4">
                <div class="mb-3">
                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="nama" name="nama" class="form-control" id="inputNama" placeholder="" value="<?= set_value('nama') ?>">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="" value="<?= set_value('email') ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="mb-0 btn-group w-100">
                    <input type="radio" name="user" class="btn-check" id="btnradio1" autocomplete="off" value="1">
                    <label class="btn btn-outline-info" for="btnradio1">Peserta</label>

                    <input type="radio" name="user" class="btn-check" id="btnradio2" autocomplete="off" value="2">
                    <label class="btn btn-outline-warning" for="btnradio2">Mentor</label><br>
                </div>
                <?= form_error('user', '<small class="text-danger pl-3 mt-0">', '</small>') ?>
                <div class="text-center mt-3">
                    <button type="submit" name="daftar" class="btn btn-success">Daftar</button>
                </div>
            </form>
            <hr>
            <div class="text-center">
                <span>Sudah punya akun? <br><a href="<?= base_url("Login"); ?>"><b>Masuk sekarang</b></a></span>
            </div>
        </div>
    </div>