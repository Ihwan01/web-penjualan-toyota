<div class="row">
    <div class="col-lg-6 col-md-10">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Harga Mobil <?= $mobil['nama']; ?></h6>
            </div>
            <div class="card-body">
                <?= form_open('admin/data_mobil/edit_harga/' . $mobil['id']); ?>
                <div class="form-group">
                    <label for="nama_mobil">Nama</label>
                    <input type="text" class="form-control" name="nama_mobil" id="nama_mobil" value="<?= $mobil['nama']; ?>">
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" name="harga" id="harga" value="<?= $mobil['harga']; ?>">
                </div>
                <input type="submit" class="btn btn-primary">
                <?= form_close(); ?>
            </div>
        </div>
    </div>
</div>