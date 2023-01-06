<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HSP | Ecommerce</title>

    <!-- Google Font -->
    <link href="img/favicon.png" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/elegant-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/jquery-ui.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/slicknav.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/style.css')); ?>">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">Harga: <span>Rp. 1000</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>Indonesia</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> telemarketing@hsp.net.id</li>
                <li>Gratis pengiriman untuk semua pesanan</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> telemarketing@hsp.net.id</li>
                                <li>Gratis pengiriman untuk semua pesanan</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="<?php echo e(asset('storage/img/language.png')); ?>" alt="">
                                <div>Indonesia</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Masuk</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?php echo e(asset('storage/img/logo.png')); ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.html">Home</a></li>
                            <li class="active"><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">Harga: <span>Rp.1000</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Semua Kategori</span>
                        </div>
                        <ul>
                            <li><a href="#">Router</a></li>
                            <li><a href="#">Wireless Card</a></li>
                            <li><a href="#">LAN Card</a></li>
                            <li><a href="#">Bridge</a></li>
                            <li><a href="#">HUB</a></li>
                            <li><a href="#">Switch</a></li>
                            <li><a href="#">Access Point</a></li>
                            <li><a href="#">Repeaters</a></li>
                            <li><a href="#">NIC</a></li>
                            <li><a href="#">Konektor</a></li>
                            <li><a href="#">Kabel</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    Semua Kategori
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Apa yang kamu butuhkan?">
                                <button type="submit" class="site-btn">CARI</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0812-2222-7754</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="<?php echo e(asset('storage/img/breadcrumb.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Detail Barang</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Halaman Awal</a>
                            <a href="./index.html">Barang</a>
                            <span>Detail Barang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6><span class="icon_tag_alt"></span> Mau Diskon? <a href="#">Klik disini</a> Masukan voucher mu
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Detail Barang</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nama Depan<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Nama Belakang<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input">
                                <p>Provinsi<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Alamat<span>*</span></p>
                                <input type="text" placeholder="Alamat Lengkap" class="checkout__input__add">
                                <input type="text" placeholder="Patokan">
                            </div>
                            <div class="checkout__input">
                                <p>Kota/Kabupaten<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Kelurahan/Desa<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input">
                                <p>Kode Pos<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>No. Telpon<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Email<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="acc">
                                    Buat Akun?
                                    <input type="checkbox" id="acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Buat akun dengan memasukkan informasi di bawah ini. Jika Anda adalah pelanggan yang kembali
                                silahkan login di bagian atas halaman</p>
                            <div class="checkout__input">
                                <p>Kata Sandi<span>*</span></p>
                                <input type="text">
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="diff-acc">
                                    Kirim ke alamat lain?
                                    <input type="checkbox" id="diff-acc">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input">
                                <p>Catatan<span>*</span></p>
                                <input type="text"
                                    placeholder="Catatan tentang pesanan Anda, misal catatan khusus untuk pengiriman.">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="checkout__order">
                                <h4>Keranjang Saya</h4>
                                <div class="checkout__order__products">Produk <span>Total</span></div>
                                <ul>
                                    <li>Router <span>Rp. 150.000,-</span></li>
                                    <li>LAN CARD <span>Rp.100.000,-</span></li>
                                    <li>kabel lan<span>Rp. 200.000,-</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Subtotal <span>Rp.450.000,-</span></div>
                                <div class="checkout__order__total">Total <span>Rp.450.000,-</span></div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc-or">
                                        Buat Akun?
                                        <input type="checkbox" id="acc-or">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Pastikan alamat anda jelas agar pengiriman bisa berjalan dengan lancar.</p>
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        Pembayaran
                                        <input type="checkbox" id="payment">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="paypal">
                                        Bayar
                                        <input type="checkbox" id="paypal">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <button type="submit" class="site-btn">Buat Pesanan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.html"><img src="<?php echo e(asset('storage/img/logo.png')); ?>" alt=""></a>
                        </div>
                        <ul>
                            <li>Alamat : Graha STK Jl. Taman Marga Satwa. Pasar Minggu, Jakarta Selatan 12550</li>
                            <li>No. Telp: (021) - 39703970</li>
                            <li>Email: telemarketing@hsp.net.id</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Link terkait</h6>
                        <ul>
                            <li><a href="#">Tentang Kita</a></li>
                            <li><a href="#">Tentang Toko</a></li>
                            <li><a href="#">Keamanan Belanja</a></li>
                            <li><a href="#">Informasi Pengiriman</a></li>
                            <li><a href="#">Kebijakan Pribadi</a></li>
                            <li><a href="#">Peta Situs Kami</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Siapa Kita</a></li>
                            <li><a href="#">Pelayanan Kami</a></li>
                            <li><a href="#">Proyek</a></li>
                            <li><a href="#">Kontak</a></li>
                            <li><a href="#">Inovasi</a></li>
                            <li><a href="#">Testimoni</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Bergabunglah dengan Kami Sekarang</h6>
                        <p>Dapatkan update Email tentang toko terbaru kami dan penawaran khusus.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> HSP E-COMMERCE | </i> by <a href="https://hsp.net.id" target="_blank">HSPNET</a>
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?php echo e(asset('storage/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('storage/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('storage/js/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('storage/js/jquery-ui.min.js')); ?>"></script>
    <script src="<?php echo e(asset('storage/js/jquery.slicknav.js')); ?>"></script>
    <script src="<?php echo e(asset('storage/js/mixitup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('storage/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('storage/js/main.js')); ?>"></script>

</body>
</html><?php /**PATH C:\xampp\htdocs\hsp-ecommerce\resources\views//checkout.blade.php ENDPATH**/ ?>