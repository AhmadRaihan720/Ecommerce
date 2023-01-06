
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('content'); ?>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="#"><img src="<?php echo e(asset('storage/img/language.png')); ?>" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">Harga: <span>Rp.1000</span></div>
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="<?php echo e(asset('storage/img/language.png')); ?>" alt="">
            <div>Indonesia</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            <a href="#"><i class="fa fa-user"></i> Masuk</a>
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
                        <h2>Berita</h2>
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

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="#">All</a></li>
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
                                        <img src="<?php echo e(asset('storage/img/blog/sidebar/sr-1.jpg')); ?>" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Koneksi Jaringan</h6>
                                        <span>Sep 05, 2022</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="<?php echo e(asset('storage/img/blog/sidebar/sr-2.jpg')); ?>" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text">
                                        <h6>Fiber Optic</h6>
                                        <span>Okt 21, 2022</span>
                                    </div>
                                </a>
                                <a href="#" class="blog__sidebar__recent__item">
                                    <div class="blog__sidebar__recent__item__pic">
                                        <img src="<?php echo e(asset('storage/img/blog/sidebar/sr-3.jpg')); ?>" alt="">
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
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?php echo e(asset('storage/img/blog/blog-2.jpg')); ?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Tasikmalaya, 25/10/2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Kolaborasi HSP & Plaza Asia Tasikmalaya</a></h5>
                                    <p>Akhir Oktober lalu (25/10/2022) PT Parsaoran Global Datatrans (HSP) melakukan penandatangan kerjasama dengan PT Asia Sanprima Jaya (Mall Plaza Asia)Tasikmalaya untuk layanan Internet Broadband & Dedicated di kawasan Mall Plaza Asia. </p>
                                    <a href="#" class="blog__btn">BACA <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?php echo e(asset('storage/img/blog/blog-3.jpg')); ?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>Jakarta, 25/08/2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Employee Gathering 2022 & HUT HSP KE-12</a></h5>
                                    <p>Pada tahun ini keluarga besar HSP dan Jujung berkesempatan kembali menyelenggarakan acara Employee Gathering pada 25 hingga 27 Agustus 2022
                                        berlokasi di kota Yogyakarta, Jawa Tengah </p>
                                    <a href="#" class="blog__btn">BACA <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?php echo e(asset('storage/img/blog/blog-1.jpg')); ?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Jakarta, 05/08/2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Kerjasama Infrastruktur Telekomunikasi & Multimedia
                                        Di Modernland Industrial Estate</a></h5>
                                    <p>Hari ini PT Parsaoran Global Datatrans (PT PGD) dengan PT Modernland Industrial Estat (MIE) melakukan penandatangan perjanjian kerjasama Penyediaan Infrastruktur Telekomunikasi
                                        dan Multimedia untuk di kawasan industri Modernland Cikande </p>
                                    <a href="#" class="blog__btn">BACA <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?php echo e(asset('storage/img/blog/blog-4.jpg')); ?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Jakarta, 17/06/2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">MEET & GREET HSP 2022</a></h5>
                                    <p>Pasca pandemi Covid-19 yang melanda seluruh Indonesia, HSP mendapat kesempatan untuk kembali mengadakan
                                        acara Meet & Greet dengan pelanggan di Main Ballroom Kempinski. </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?php echo e(asset('storage/img/blog/blog-4.jpg')); ?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Jakarta, 17/06/2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">Upacara Penandatanganan UJB & SDCS FIBER OPTIC</a></h5>
                                    <p>PT Parsaoran Global Datatrans (HSP) menandatangani Perjanjian Pasokan Fiber Optik dengan UJB & SDCS FIBER OPTIC BACKBONE NETWORK. </p>
                                    <a href="#" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?php echo e(asset('storage/img/blog/blog-6.jpg')); ?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> Jakarta, 22/04/2022</li>
                                        <li><i class="fa fa-comment-o"></i> 5</li>
                                    </ul>
                                    <h5><a href="#">BUKA PUASA BERSAMA APJATEL 2022</a></h5>
                                    <p>Kamis, 21 April 2022 – HSP ikut berbuka puasa acara yang diselenggarakan oleh APJATEL. </p>
                                    <a href="#" class="blog__btn">BACA<span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
<!-- Blog Section End -->
<?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hsp-ecommerce\resources\views/tentang.blade.php ENDPATH**/ ?>