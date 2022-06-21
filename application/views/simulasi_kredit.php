<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-8">
            <div class="simulasi-form bg-light p-3">
                <h5>Simulasi Kredit</h5>
                <div class="form-group">
                    <input type="text" class="form-control" id="harga_mobil" placeholder="Harga Mobil">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="uang_muka" placeholder="Uang Muka">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="suku_bunga" placeholder="Suku Bunga">
                </div>
                <div class="form-group">
                    <select class="form-control" id="tenor">
                        <option value="" disabled selected>Tenor</option>
                        <option value="1">1 Tahun</option>
                        <option value="2">2 Tahun</option>
                        <option value="3">3 Tahun</option>
                        <option value="4">4 Tahun</option>
                        <option value="5">5 Tahun</option>
                        <option value="6">6 Tahun</option>
                    </select>
                </div>
                <button class="btn btn-danger" id="hitung_btn">Hitung Angsuran</button>

                <div class="angsuran-box">
                    <div class="jumlah_pinjaman mt-3 p-3 border border-dark" style="background: #fff;">
                        Jumlah Pinjaman
                        <h4 id="pinjaman">Rp. 130.000</h4>

                    </div>
                    <div class="uang-muka-box mt-3 bg-success text-light p-3">
                        Total Uang Muka (DP)
                        <h4 id="totaldp">Rp. 74.100.100</h4>
                    </div>
                    <div class="angsuran-bulan mt-3 bg-info text-light p-3">
                        Angsuran per Bulan
                        <h4 id="angsuran">Rp. 74.100.100</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>