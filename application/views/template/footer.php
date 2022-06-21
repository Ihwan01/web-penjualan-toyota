<div class="footer mt-4 py-3">
    <div class="container">
        <div class="footer-alamat mb-4">
            <h5 class="text-warning">ALAMAT SHOWROOM</h5>
            <h6>ISTANA AGUNG TOYOTA PANGKAL PINANG</h6>
            <p>Jl. Mayor Syafrie Rahman No. 86, Bukit Besar Kec. Girimaya, Kota Pangkal Pinang Kepulauan Bangka Belitung 33684 <br>
                Contact : <br>
                <i class="fab fa-whatsapp"></i><a href="https://wa.me/6281379679997" class="text-light"> 0813-7967-9997</a>
            </p>
            <h6>ISTANA AGUNG TOYOTA TANJUNG PANDAN</h6>
            <p>Jl. Merdeka No 29 Tanjung Pandan Belitung <br>
                Contact : <br>
                <i class="fab fa-whatsapp"></i><a href="https://wa.me/6281379679997" class="text-light"> 0813-7967-9997</a>
            </p>
        </div>
        <div class="footer-jamkerja mb-4">
            <h5 class="text-warning">HARI & JAM KERJA</h5>
            <p>Senin s.d. Sabtu : 08.00 s.d. 16.30 WIB</p>
        </div>
        <div class="footer-cp mb-4">
            <h5 class="text-warning">CONTACT PERSON</h5>
            <i class="fab fa-whatsapp"></i><a href="https://wa.me/6281379679997" class="text-light"> 0813-7967-9997</a>
        </div>
    </div>
</div>

<script src="<?= base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/lightbox.js'); ?>"></script>
<script>
    $(document).ready(function() {
        $('.nav-bar-button').click(function() {
            $('.nav-bar-mobile').toggleClass('show');
        });

        $('.slidemobil-item').click(function() {
            var source = $(this).attr('src');
            $('#slidemobil-big').attr('src', source);
        })


        $('#hitung_btn').click(function() {
            var harga = parseInt($('#harga_mobil').val());
            var bunga = parseFloat($('#suku_bunga').val());
            var dp = parseInt($('#uang_muka').val());
            var tenor = parseInt($('#tenor').val());
            var pinjaman = parseInt(harga - dp);
            var angsuran = parseInt(pinjaman / (tenor * 12));
            var angsurantotal = parseInt(angsuran + (angsuran * (bunga * 0.01)));
            var totaldp = formatRupiah(parseInt(dp + angsurantotal));
            $('#pinjaman').text('Rp. ' + formatRupiah(pinjaman));
            $('#totaldp').text('Rp. ' + totaldp);
            $('#angsuran').text('Rp. ' + formatRupiah(angsurantotal));
            $('.angsuran-box').addClass('show');
            console.log(formatRupiah('10000', 'Rp. '));
        });

        function formatRupiah(angka) {
            var number_string = angka.toString(),
                sisa = number_string.length % 3,
                rupiah = number_string.substr(0, sisa),
                ribuan = number_string.substr(sisa).match(/\d{3}/g);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            return rupiah;

        }
    });
</script>
</body>

</html>