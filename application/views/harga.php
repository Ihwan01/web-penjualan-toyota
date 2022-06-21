<div class="container mt-2">
    <?php foreach ($mobil as $row) : ?>
        <div class="row row-harga">
            <div class="col-sm-6">
                <h6 class="row-harga-title">Harga <?= $row['nama']; ?></h6>
                <img src="<?= base_url('assets/img/' . $row['gambar']); ?>" class="img-fluid" alt="">
            </div>
            <div class="col-sm-6">
                <table class="table table-striped table-harga">
                    <tr>
                        <th>Type</th>
                        <th>Harga</th>
                    </tr>
                    <?php foreach ($this->db->get_where('tb_tipe', ['id_mobil' => $row['id']])->result_array() as $tipe) : ?>
                        <tr>
                            <td><?= $tipe['nama']; ?></td>
                            <td><?= ($tipe['harga'] != 0) ? 'Rp. ' . $tipe['harga'] : '-'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    <?php endforeach; ?>
</div>