<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="booking-form p-3 bg-light">
                <h5>Booking Service</h5>
                <?= $this->session->flashdata('message'); ?>
                <form action="<?= base_url('booking_service/proses'); ?>" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe_mobil">Tipe Mobil</label>
                        <select type="text" class="form-control" name="tipe_mobil" id="tipe_mobil" required>
                            <option value="">New Innova</option>
                            <option value="">New Avanza</option>
                            <option value="">New Alphard</option>
                            <option value="">Sienta</option>
                            <option value="">Vios</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_polisi">No Polisi</label>
                        <input type="text" class="form-control" name="no_polisi" id="no_polisi" required>
                    </div>
                    <div class="form-group">
                        <label for="atas_nama_stnk">Atas Nama (STNK)</label>
                        <input type="text" class="form-control" name="atas_nama_stnk" id="atas_nama_stnk" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe_service">Tipe Service</label>
                        <select type="text" class="form-control" name="tipe_service" id="tipe_service" required>
                            <option value="">Berkala</option>
                            <option value="">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_service">Tanggal Service</label>
                        <input type="datetime-local" class="form-control" name="tanggal_service" id="tanggal_service" required>
                    </div>
                    <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <textarea class="form-control" name="keluhan" id="keluhan" required></textarea>
                    </div>
                    <input type="submit" class="btn btn-danger" value="Kirim">
                </form>
            </div>
        </div>
    </div>
</div>