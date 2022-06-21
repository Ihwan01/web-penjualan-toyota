<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Toyota Istana Agung">
    <meta property="og:image" content="https://istanaagungtoyota.com/assets/img/og-image.jpg">
    <meta property="og:description" content="Dapatkan berbagai promo menarik dari Toyota">
    <meta property="og:url" content="https://istanaagungtoyota.com/">
    <meta name="theme-color" content="#BF2526">
    <title>Toyota Istana Agung</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/lightbox.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">
</head>

<body>
    <div class="topbar">
        <div class="container">
            <span class="topbar-title">TOYOTA ISTANA AGUNG</span>
            <span class="topbar-address float-right">JL. MAYOR SYAFRIE RAHMAN NO.86, BUKITBESAR, GIRIMAYA, PANGKAL PINANG - BANGKA BELITUNG</span>
        </div>
    </div>
    <div class="logobar">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-4 logo-col">
                    <div class="logo">
                        <img src="<?= base_url('assets/img/'); ?>Toyota_Let's_Go_Beyond.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-8 nav-bar-col">
                    <div class="nav-bar">
                        <img src="<?= base_url('assets/img/'); ?>Toyota_Let's_Go_Beyond.png" class="mobile-logo" alt="">
                        <a href="<?= base_url(); ?>" class="nav-bar-item <?php if ($active_page == 'home') echo "active"; ?>">HOME</a>
                        <a href="<?= base_url('harga'); ?>" class="nav-bar-item <?php if ($active_page == 'harga') echo "active"; ?>">HARGA</a>
                        <a href="<?= base_url('news_event'); ?>" class="nav-bar-item <?php if ($active_page == 'newsevent') echo "active"; ?>">NEWS & EVENT</a>
                        <a href="<?= base_url('galeri'); ?>" class="nav-bar-item <?php if ($active_page == 'galeri') echo "active"; ?>">GALERI</a>
                        <a href="<?= base_url('booking_service'); ?>" class="nav-bar-item <?php if ($active_page == 'booking_service') echo "active"; ?>">BOOKING SERVICE</a>
                        <a href="<?= base_url('hubungi_kami'); ?>" class="nav-bar-item <?php if ($active_page == 'hubungi_kami') echo "active"; ?>">HUBUNGI KAMI</a>
                        <button class="nav-bar-button btn"><span class="fas fa-bars fa-2x"></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-bar-mobile">
        <a href="<?= base_url(); ?>" <?php if ($active_page == 'home') echo "class='active'"; ?>>HOME</a>
        <a href="<?= base_url('harga'); ?>" <?php if ($active_page == 'harga') echo "class='active'"; ?>>HARGA</a>
        <a href="<?= base_url('news_event'); ?>" <?php if ($active_page == 'newsevent') echo "class='active'"; ?>>NEWS & EVENT</a>
        <a href="<?= base_url('galeri'); ?>" <?php if ($active_page == 'galeri') echo "class='active'"; ?>>GALERI</a>
        <a href="<?= base_url('booking_service'); ?>" <?php if ($active_page == 'booking_service') echo "class='active'"; ?>>BOOKING SERVICE</a>
        <a href="<?= base_url('hubungi_kami'); ?>" <?php if ($active_page == 'hubungi_kami') echo "class='active'"; ?>>HUBUNGI KAMI</a>
    </div>