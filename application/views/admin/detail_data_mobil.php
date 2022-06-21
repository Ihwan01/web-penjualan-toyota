<?= $this->session->flashdata('message'); ?>
<div class="row">
    <div class="col-lg-6">
        <!-- Basic Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Mobil</h6>
            </div>
            <div class="card-body">

                <h6 class="text-gray-900">Nama</h6>
                <p><?= $mobil['nama']; ?></p>
                <h6 class="text-gray-900">Deskripsi</h6>
                <p><?= $mobil['deskripsi']; ?></p>
                <h6 class="text-gray-900">Gambar</h6>
                <img src="<?= base_url('assets/img/' . $mobil['gambar']); ?>" alt="" class="img-fluid">
                <h6 class="text-gray-900">Video</h6>
                <h6 class="text-gray-900">Slide</h6>
                <div class="row">
                    <div class="col-sm">
                        <img src="<?= base_url('assets/img/' . $mobil['gambar']); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-sm">
                        <img src="<?= base_url('assets/img/' . $mobil['gambar']); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-sm">
                        <img src="<?= base_url('assets/img/' . $mobil['gambar']); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-sm">
                        <img src="<?= base_url('assets/img/' . $mobil['gambar']); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-sm">
                        <img src="<?= base_url('assets/img/' . $mobil['gambar']); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-sm">
                        <img src="<?= base_url('assets/img/' . $mobil['gambar']); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-sm">
                        <img src="<?= base_url('assets/img/' . $mobil['gambar']); ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <a href="<?= base_url('admin/data_mobil/edit_slide/' . $mobil['id']); ?>" class="btn btn-primary btn-sm mt-2">Edit Slide</a>

            </div>

        </div>
    </div>
    <div class="col-lg-6">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tipe Mobil</h6>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Tipe</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($tipe_mobil as $row) : ?>
                            <tr>
                                <td>
                                    <?= $i++ . '.'; ?>
                                </td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= ($row['harga'] != 0) ? 'Rp. ' . number_format($row['harga'], '0', ',', '.') : '-'; ?></td>
                                <td>
                                    <a href="<?= base_url('admin/data_mobil/edit_harga/' . $row['id']); ?>" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?= base_url('admin/data_mobil/tambah_tipe/' . $mobil['id']); ?>" class="btn btn-block btn-primary">Tambah Tipe</a>

            </div>
        </div>
    </div>
</div>