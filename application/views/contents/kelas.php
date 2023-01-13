<!-- Modal -->
<div class="modal" id="bayarBerhasil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Pembayaran Berhasil</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#32DE84" class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z"/>
                    <path d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z"/>
                    </svg>
            </div>
            <div class="modal-footer">
            <a href="materi.html" type="button" class="btn btn-primary">Buka Materi</a>
            </div>
        </div>
    </div>
</div>

<div class="kelas container">
    <div class="btnTambah mt-5">
        <button class="btn btn-success">Tambah</button>
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
        <tbody id="dataTable">
        </tbody>
    </table>
    <div class="row row-cols-1 row-cols-md-3 g-4">

    </div>
</div>
