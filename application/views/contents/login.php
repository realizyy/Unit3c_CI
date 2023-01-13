    <div class="container">
        <div class="card p-5 position-absolute top-50 start-50 translate-middle w-25">
            <div class="row">
                <div class="col">
                    <h4>Masuk</h4>
                </div>
                <div class="col text-end">
                    <a href="<?= base_url(); ?>"><img src="<?= base_url("../"); ?>assets/images/logo_unit3c_text.png" alt="" class="img-fluid w-75"></a>
                </div>
            </div>
            <form class="mt-4 mb-4" method="POST" action="<?= base_url("Login/cekPengguna"); ?>" id="loginForm">
                <?= $this->session->flashdata('message'); ?>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="" value="<?= set_value('email') ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="text-center">
                    <button type="submit" name="masuk" class="btn btn-success" id="submit">Masuk</button>
                </div>
            </form>
            <hr>
            <div class="text-center">
                <span>Belum punya akun? <br><a href="<?= base_url("Registrasi"); ?>"><b>Daftar sekarang</b></a></span>
            </div>
        </div>
    </div>