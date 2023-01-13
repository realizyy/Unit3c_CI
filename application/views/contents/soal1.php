<div class="soal container">
    <div class="row gap-5">
        <div class="col-3">
            <div class="card bg-light p-3">
                <div class="nomorSoal">
                    <a href="" class="btn btn-dark">1</a>
                    <a href="<?= base_url("Modul/soal2/" . $id_transaksi) ?>" class="btn btn-outline-dark">2</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="pertanyaan">
                <h5>Apa itu Lorem Ipsum?</h5>
                <div class="list-group" role="group" aria-label="Basic radio toggle button group">
                    <table>
                        <tr>
                            <td>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio1">A</label>
                            </td>
                            <td>
                                <label for="">Dummy Text</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio2">B</label>
                            </td>
                            <td>
                                <label for="">Dummy Bear</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio3">C</label>
                            </td>
                            <td>
                                <label for="">Dummy an</label>
                            </td>
                        </tr>
                    </table>
                </div>

                <a href="<?= base_url("Modul/soal2/" . $id_transaksi) ?>" class="btn btn-dark mt-3">Selanjutnya</a>
            </div>
        </div>
    </div>
</div>