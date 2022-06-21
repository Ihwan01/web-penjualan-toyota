<div class="row">
    <div class="col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Buat Artikel</h6>
            </div>
            <div class="card-body">
                <?= form_open_multipart('admin/artikel/buat'); ?>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul">
                </div>
                <div class="form-group">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" name="url" id="url" readonly>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select name="kategori" id="kategori" class="custom-select">
                        <option value="news">News</option>
                        <option value="event">Event</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="konteninput">Konten</label>
                    <textarea class="form-control" name="konteninput" id="konteninput"></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Gambar</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="judul">Gambar Sampul</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="featured_img" id="featured_img_input">
                        <label for="featured_img_input" class="custom-file-label">Pilih file</label>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" class="btn btn-primary">
        <?= form_close(); ?>
    </div>
</div>