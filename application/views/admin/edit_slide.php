<div class="row">
    <div class="col-lg-6">
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Harga Mobil <?= $mobil['nama']; ?></h6>
            </div>
            <div class="card-body">
                <?= form_open_multipart('admin/data_mobil/edit_slide_proses/1/' . $mobil['id']); ?>
                <div class="form-group">
                    <label for="gambar1">Gambar 1</label>
                    <div class="row">
                        <div class="col-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar1" id="gambar1_input">
                                <label for="gambar1_input" class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <input type="submit" class="btn btn-primary" value="Ubah">
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
                <?= form_open_multipart('admin/data_mobil/edit_slide_proses/2/' . $mobil['id']); ?>
                <div class="form-group">
                    <label for="gambar2">Gambar 2</label>
                    <div class="row">
                        <div class="col-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar2" id="gambar2_input">
                                <label for="gambar2_input" class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <input type="submit" class="btn btn-primary" value="Ubah">
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
                <?= form_open_multipart('admin/data_mobil/edit_slide_proses/3/' . $mobil['id']); ?>
                <div class="form-group">
                    <label for="gambar3">Gambar 3</label>
                    <div class="row">
                        <div class="col-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar3" id="gambar3_input">
                                <label for="gambar3_input" class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <input type="submit" class="btn btn-primary" value="Ubah">
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
                <?= form_open_multipart('admin/data_mobil/edit_slide_proses/4/' . $mobil['id']); ?>
                <div class="form-group">
                    <label for="gambar4">Gambar 4</label>
                    <div class="row">
                        <div class="col-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar4" id="gambar4_input">
                                <label for="gambar4_input" class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <input type="submit" class="btn btn-primary" value="Ubah">
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
                <?= form_open_multipart('admin/data_mobil/edit_slide_proses/5/' . $mobil['id']); ?>
                <div class="form-group">
                    <label for="gambar5">Gambar 5</label>
                    <div class="row">
                        <div class="col-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar5" id="gambar5_input">
                                <label for="gambar5_input" class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <input type="submit" class="btn btn-primary" value="Ubah">
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
                <?= form_open_multipart('admin/data_mobil/edit_slide_proses/6/' . $mobil['id']); ?>
                <div class="form-group">
                    <label for="gambar6">Gambar 6</label>
                    <div class="row">
                        <div class="col-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar6" id="gambar6_input">
                                <label for="gambar6_input" class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <input type="submit" class="btn btn-primary" value="Ubah">
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
                <?= form_open_multipart('admin/data_mobil/edit_slide_proses/7/' . $mobil['id']); ?>
                <div class="form-group">
                    <label for="gambar7">Gambar 7</label>
                    <div class="row">
                        <div class="col-10">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar7" id="gambar7_input">
                                <label for="gambar7_input" class="custom-file-label">Pilih file</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <input type="submit" class="btn btn-primary" value="Ubah">
                        </div>
                    </div>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0">Slide</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        Gambar 1
                        <img src="<?= base_url('assets/img/slide/' . $slide['gambar1']); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-6">
                        Gambar 2
                        <img src="<?= base_url('assets/img/slide/' . $slide['gambar2']); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-6">
                        Gambar 3
                        <img src="<?= base_url('assets/img/slide/' . $slide['gambar3']); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-6">
                        Gambar 4
                        <img src="<?= base_url('assets/img/slide/' . $slide['gambar4']); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-6">
                        Gambar 5
                        <img src="<?= base_url('assets/img/slide/' . $slide['gambar5']); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-6">
                        Gambar 6
                        <img src="<?= base_url('assets/img/slide/' . $slide['gambar6']); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-sm-6">
                        Gambar 7
                        <img src="<?= base_url('assets/img/slide/' . $slide['gambar7']); ?>" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>