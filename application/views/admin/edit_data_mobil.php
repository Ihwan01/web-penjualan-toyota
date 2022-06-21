<div class="row">
    <div class="col-sm-8">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form Edit Data</h6>
            </div>
            <div class="card-body">
                <form action="<?= base_url('admin/data_mobil/edit/' . $mobil['id']); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_mobil">Nama</label>
                        <input type="text" class="form-control" name="nama_mobil" id="nama_mobil" value="<?= $mobil['nama']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsiinput"><?= $mobil['deskripsi']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="video">Video</label>
                        <textarea class="form-control" name="video" id="video"><?= $mobil['video']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label><br>
                        <input type="file" name="gambar" id="gambar">
                    </div>
                    <img src="<?= base_url('assets/img/' . $mobil['gambar']); ?>" class="img-fluid" alt=""><br>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </form>
            </div>
        </div>
    </div>
</div>