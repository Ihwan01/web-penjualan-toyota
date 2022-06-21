<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="<?= base_url('profil_kendaraan/index/2'); ?>">
                <img src="<?= base_url('assets/img/'); ?>slide-00.jpg" class="d-block w-100" alt="...">
            </a>
        </div>
        <div class="carousel-item">
            <a href="<?= base_url('profil_kendaraan/index/6'); ?>">
                <img src="<?= base_url('assets/img/'); ?>slide-01.jpg" class="d-block w-100" alt="...">
            </a>
        </div>
        <div class="carousel-item">
            <a href="<?= base_url('profil_kendaraan/index/5'); ?>">
                <img src="<?= base_url('assets/img/'); ?>slide-04.jpg" class="d-block w-100" alt="...">
            </a>
        </div>
        <div class="carousel-item">
            <a href="<?= base_url('profil_kendaraan/index/12'); ?>">
                <img src="<?= base_url('assets/img/'); ?>slide-05.jpg" class="d-block w-100" alt="...">
            </a>
        </div>
        <div class="carousel-item">
            <a href="<?= base_url('profil_kendaraan/index/5'); ?>">
                <img src="<?= base_url('assets/img/'); ?>slide-06.jpg" class="d-block w-100" alt="...">
            </a>
        </div>
        <div class="carousel-item">
            <a href="<?= base_url('profil_kendaraan/index/3'); ?>">
                <img src="<?= base_url('assets/img/'); ?>slide-02.jpg" class="d-block w-100" alt="...">
            </a>
        </div>
        <div class="carousel-item">
            <a href="<?= base_url('profil_kendaraan/index/4'); ?>">
                <img src="<?= base_url('assets/img/'); ?>slide-03.jpg" class="d-block w-100" alt="...">
            </a>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container home-menu-container my-4">
    <div class="row no-gutters home-menu-row">
        <div class="col-3">
            <a href="<?= base_url('harga'); ?>">
                <button class="home-menu btn home-menu-btn">
                    <span class="fas fa-car home-menu-logo"></span>
                    <h2 class="home-menu-title">Daftar Harga</h2>
                </button>
            </a>
        </div>
        <div class="col-3">
            <a href="<?= base_url('booking_service'); ?>">
                <button class="home-menu btn home-menu-btn">
                    <span class="fas fa-tools home-menu-logo"></span>
                    <h2 class="home-menu-title">Booking Service</h2>
                </button>
            </a>
        </div>
        <div class="col-3">
            <a href="<?= base_url('simulasi_kredit'); ?>">
                <button class="home-menu btn home-menu-btn">
                    <span class="fas fa-calculator home-menu-logo"></span>
                    <h2 class="home-menu-title">Simulasi Kredit</h2>
                </button>
            </a>
        </div>
        <div class="col-3">
            <a href="<?= base_url('konsultasi_pembelian'); ?>">
                <button class="home-menu btn home-menu-btn last">
                    <span class="fas fa-user-tie home-menu-logo"></span>
                    <h2 class="home-menu-title">Konsultasi Pembelian</h2>
                </button>
            </a>
        </div>
    </div>
    <h2 class="toyota-promo-title">Toyota Promo</h2>
    <img src="<?= base_url('assets/img/promo.jpg'); ?>" class="img-fluid" alt="">

    <div class="komunitas text-center mt-4 p-4">
        <h2>Komunitas</h2>
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <form action="https://komunitas.istanaagungtoyota.com/" method="post">
                    <div class="form-group text-center">
                        <label for="email">Gabung Bersama Komunitas</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email Anda" name="email" id="email">
                    </div>
                    <input type="submit" class="btn btn-outline-light btn-block text-center" value="Gabung">
                </form>
            </div>
        </div>
    </div>

    <div class="peta mt-4">
        <h2>Peta</h2>
        <div class="row">
            <div class="col-6">
                <h6>Istana Agung Toyota Pangkal Pinang</h6>
                <div class="tampilpeta">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.0402893985674!2d106.11805081453444!3d-2.1382319377513443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e22c72d037ffc73%3A0xbfcca25b244610cf!2sToyota%20Istana%20Agung%20Pangkalpinang!5e0!3m2!1sid!2sid!4v1588733106638!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="col-6">
                <h6>Istana Agung Toyota Tanjung Pandan</h6>
                <div class="tampilpeta">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.248661691999!2d107.63349321453784!3d-2.7424859397209707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e171732188b1723%3A0x8c85acea1362b38!2sToyota%20Istana%20Agung%20Belitung!5e0!3m2!1sid!2sid!4v1588733656229!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>