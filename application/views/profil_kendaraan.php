<div class="container mt-3">
    <?php if ($slide) : ?>
        <h3 class="row-harga-title">
            <?= $mobil['nama']; ?>
        </h3>
        <img src="<?= base_url('assets/img/slide/' . $slide['gambar1']); ?>" style="width:100%" id="slidemobil-big" alt="">
        <table class="slide-wrapper table table-responsive table-bordered">
            <tr>
                <td>
                    <img src="<?= base_url('assets/img/slide/' . $slide['gambar2']); ?>" class="slidemobil-item" id="slidemobil-item" alt="">
                </td>
                <td>
                    <img src="<?= base_url('assets/img/slide/' . $slide['gambar1']); ?>" class="slidemobil-item" id="slidemobil-item" alt="">
                </td>
                <td>
                    <img src="<?= base_url('assets/img/slide/' . $slide['gambar1']); ?>" class="slidemobil-item" id="slidemobil-item" alt="">
                </td>
                <td>
                    <img src="<?= base_url('assets/img/slide/' . $slide['gambar1']); ?>" class="slidemobil-item" id="slidemobil-item" alt="">
                </td>
                <td>
                    <img src="<?= base_url('assets/img/slide/' . $slide['gambar1']); ?>" class="slidemobil-item" id="slidemobil-item" alt="">
                </td>
                <td>
                    <img src="<?= base_url('assets/img/slide/' . $slide['gambar1']); ?>" class="slidemobil-item" id="slidemobil-item" alt="">
                </td>
                <td>
                    <img src="<?= base_url('assets/img/slide/' . $slide['gambar1']); ?>" class="slidemobil-item" id="slidemobil-item" alt="">
                </td>
            </tr>
        </table>
    <?php endif; ?>
    <h3 class="row-harga-title">Video</h3>
    <?= $mobil['video']; ?>
    <h3 class="row-harga-title mt-5">Deskripsi</h3>
    <p>
        <?= $mobil['deskripsi']; ?>
    </p>
    <h3 class="row-harga-title mt-5">Harga</h3>
    <table class="table table-striped table-hover">
        <?php foreach ($this->db->get_where('tb_tipe', ['id_mobil' => $mobil['id']])->result_array() as $row) : ?>
            <tr>
                <td><?= $row['nama']; ?></td>
                <td><?= 'Rp' . number_format($row['harga'], '0', ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="2" class="text-right">
                <a href="<?= base_url('simulasi_kredit'); ?>" class="btn btn-danger btn-lg">Simulasi Kredit</a>
            </td>
        </tr>
    </table>
    <div class="card shadow bg-light" id="hubungikami">
        <div class="card-header">
            <h4 class="m-0 text-danger">
                Hubungi Kami
            </h4>
        </div>
        <div class="card-body">
            <?= $this->session->flashdata('message'); ?>
            <?= form_open(base_url('hubungi_kami/kirim_pesan/' . $mobil['id'])); ?>
            <div class="form-group">
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="No Handphone" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <textarea name="isi_pesan" id="isi_pesan" rows="5" class="form-control" required>Saya mau info lebih lanjut terkait <?= $mobil['nama']; ?>.</textarea>
            </div>
            <?= $captcha['image']; ?>
            <div class="form-group mt-2">
                <input type="text" class="form-control" name="captcha" id="captcha" placeholder="Kode keamanan" required>
            </div>
            <input type="submit" class="btn btn-danger">
            <?= form_close(); ?>
        </div>
    </div>

</div>