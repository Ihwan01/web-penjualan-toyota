<a href="<?= base_url('admin/data_mobil/'); ?>tambah_data" class="btn btn-primary mb-3">Tambah Data Baru</a>
<!-- Basic Card Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Data Mobil</h6>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($mobil as $row) : ?>
                    <tr>
                        <td><?= $i++ . '.'; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['gambar']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>admin/data_mobil/detail/<?= $row['id']; ?>" class="btn btn-sm btn-info"><i class="fas fa-info"></i></a>
                            <a href="<?= base_url('admin/data_mobil/edit/' . $row['id']); ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="<?= base_url('admin/data_mobil/edit/' . $row['id']); ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>