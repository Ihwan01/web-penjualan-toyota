<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Semua Artikel</h6>
    </div>
    <div class="card-body">
        <?= $this->session->flashdata('message'); ?>
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>URL</th>
                    <th>Konten</th>
                    <th>Gambar Sampul</th>
                    <th>Tanggal</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($artikel as $row) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row['judul']; ?></td>
                        <td><?= $row['url']; ?></td>
                        <td><?= $row['konten']; ?></td>
                        <td><?= $row['featured_img']; ?></td>
                        <td><?= $row['date_created']; ?></td>
                        <td><?= $row['kategori']; ?></td>
                        <td>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="modalHapusLabel">Hapus artikel ini?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                <p>
                    Apakah anda yakin ingin menghapus artikel ini?<br>Tekan "Ya" untuk menghapus
                </p>
            </div>
            <div class="modal-footer bg-light">
                <a href="<?= base_url('admin/artikel/hapus/' . $row['id']); ?>" class="btn btn-success">Ya</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>