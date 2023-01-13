<div class="soal container">
    <div class="row  gap-5">
        <div class="col-3">
            <div class="card bg-light p-3">
                <div class="nomorSoal">
                    <a href="<?= base_url("Modul/soal1/" . $id_transaksi) ?>" class="btn btn-dark">1</a>
                    <a href="" class="btn btn-dark">2</a>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="pertanyaan">
                <h5>Darimana asal Lorem Ipsum?</h5>
                <div class="list-group" role="group" aria-label="Basic radio toggle button group">
                    <table>
                        <tr>
                            <td>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio1">A</label>
                            </td>
                            <td>
                                <label for="">Latin literature</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio2">B</label>
                            </td>
                            <td>
                                <label for="">Lathi</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btnradio3">C</label>
                            </td>
                            <td>
                                <label for="">Ngawi</label>
                            </td>
                        </tr>
                    </table>
                </div>

                <a href="<?= base_url("Peserta/menyelesaikanKursus/" . $id_transaksi) ?>" class="btn btn-dark mt-3">Selesai</a>
            </div>
        </div>
    </div>
</div>