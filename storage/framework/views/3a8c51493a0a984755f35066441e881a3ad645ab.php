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
            <div class="header__cart__price">Harga: <span>Rp.150.000</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>Indonesia</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Indonesia</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Masuk</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Beranda</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li><a href="#">Halaman</a>
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
                <li><i class="fa fa-envelope"></i>  telemarketing@hsp.net.id</li>
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
                                    <li><a href="#">Indonesia</a></li>
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
                            <li><a href="./index.html">Beranda</a></li>
                            <li><a href="./shop-grid.html">Shop</a></li>
                            <li><a href="#">Halaman</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="./blog.html">Blog</a></li>
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
                        <div class="header__cart__price">Harga: <span>Rp.50.000</span></div>
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
                                <button type="submit" class="site-btn">Cari</button>
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

    <!-- Blog Details Hero Begin -->
    <section class="blog-details-hero set-bg" data-setbg="<?php echo e(asset('storage/img/blog/details/details-hero.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>PT. Parsaoran Global Datatrans </h2>
                        <ul>
                            <li>Internet Services</li>
                            <li>Connectivity</li>
                            <li>Solution</li>
                            <li>Data Center</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Hero End -->

    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Cari...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Kategori</h4>
                            <ul>
                                <li><a href="#">Semua</a></li>
                                <li><a href="#">Modem (20)</a></li>
                                <li><a href="#">Tiang (5)</a></li>
                                <li><a href="#">Kabel (9)</a></li>
                                <li><a href="#">Router (10)</a></li>
                            </ul>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Berita Terbaru</h4>
                            <div class="blog__sidebar__recent">
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="<?php echo e(asset('storage/img/blog/sidebar/sr-1.jpg')); ?>">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Koneksi Jaringan</h6>
                                        <span>Sep 05, 2022</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="<?php echo e(asset('storage/img/blog/sidebar/sr-2.jpg')); ?>">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Fiber Optic</h6>
                                        <span>Okt 21, 2022</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="<?php echo e(asset('storage/img/blog/sidebar/sr-3.jpg')); ?>">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Jaringan 5G</h6>
                                        <span>Nov 05, 2022</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Cari</h4>
                            <div class="blog__sidebar__item__tags">
                                <a href="#">Router</a>
                                <a href="#">HUB</a>
                                <a href="#">Access Point</a>
                                <a href="#">LAN CARD</a>
                                <a href="#">Switch</a>
                                <a href="#">Bridge</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <img src="<?php echo e(asset('storage/img/blog/details/details-pic.jpg')); ?>">
                        <p>Perkembangan IT & multimedia yang sangat cepat menjadikan Internet sebagai suatu sarana media yang sangat berperan dalam industri telekomunikasi dan bidang lainnya. Berangkat dari hal tersebut, HSPnet menyadari betul pentingnya jaringan internet terbentuk guna kepentingan industri dan bisnis

                            . Dengan memiliki jaringan yang terpadu maka kelancaran akan bisnis
                            dapat terjaga serta memudahkan bagi pengguna. Hal tersebut mendasari
                            visi HSPnet dan menjadi dorongan bagi segenap pendiri dan manajemen HSPnet untuk melangkah kedepan
                            menyongsong suatu abad modern yang maju dengan jaringan internet.</p>
                        <h3>PT. Parsaoran Global Datatrans dengan Branding HSPnet </h3>
                        <p>PT. Parsaoran Global Datatrans (HSPNet) menyediakan berbagai fasilitas dan inovasi seperti 
                            penyediaan layanan internet, solusi jaringan terintegrasi, peralatan komputer yang aman di Indonesia. 
                            Melalui berbagai layanan dan produk yang ditawarkan, kami mencoba menjadi penyedia layanan Internet yang berfokus 
                            pada hubungan yang erat antara masyarakat dan pelanggan dengan dunia luar sehingga menciptakan hubungan yang harmonis dengan kami.</p>
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <ul>
                                        <li><span>Kategori:</span> Provider Internet</li>
                                        <li><span>Tags:</span> All, Trending, Cooking, Healthy Food, Life Style</li>
                                    </ul>
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Post You May Like</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo e(asset('storage/img/blog/blog-1.jpg')); ?>">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> Jakarta, 05/08/2022</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Kerjasama Infrastruktur Telekomunikasi & Multimedia
                                Di Modernland Industrial Estate</a></h5>
                            <p>Hari ini PT Parsaoran Global Datatrans (PT PGD) dengan PT Modernland Industrial Estat (MIE) melakukan 
                                penandatangan perjanjian kerjasama Penyediaan Infrastruktur Telekomunikasi dan Multimedia untuk di kawasan industri Modernland Cikande </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo e(asset('storage/img/blog/blog-2.jpg')); ?>">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> Tasikmalaya, 25/10/2022</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Kolaborasi HSP & Plaza Asia Tasikmalaya</a></h5>
                            <p>Akhir Oktober lalu (25/10/2022) PT Parsaoran Global Datatrans (HSP) melakukan penandatangan kerjasama dengan PT Asia Sanprima Jaya (Mall Plaza Asia)Tasikmalaya 
                                untuk layanan Internet Broadband & Dedicated di kawasan Mall Plaza Asia. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo e(asset('storage/img/blog/blog-3.jpg')); ?>">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> Jakarta, 25/08/2022</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Employee Gathering 2022 & HUT HSP KE-12</a></h5>
                            <p>Setelah 2 (dua) tahun tidak dapat menyelenggarakan acara Employee Gathering karena pandemic Covid-19. Di tahun ini keluarga besar HSP dan Jujung 
                                berkesempatan kembali menyelenggarakan acara Employee Gathering pada 25 hingga 27 Agustus 2022 berlokasi di kota Yogyakarta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->

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
</html><?php /**PATH C:\xampp\htdocs\hsp-ecommerce\resources\views//blog-details.blade.php ENDPATH**/ ?>