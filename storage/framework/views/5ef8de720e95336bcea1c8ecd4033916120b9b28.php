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
    <link href="<?php echo e(asset('storage/img/favicon.png')); ?>" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

<!-- Css Styles -->
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/elegant-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/nice-select.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/jquery-ui.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/slicknav.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('storage/css/font-awesome.min.css')); ?>">
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
        <a href="#"><img src="<?php echo e(asset('storage/img/language.png')); ?>" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="wishlist"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="shoping-cart"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
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
    
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="./">Home</a></li>
            <li><a href="./shop-grid">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="./shoping-cart">Shoping Cart</a></li>
                    <li><a href="./checkout">Check Out</a></li>
                    <li><a href="./blog-details">Company Profile</a></li>
                </ul>
            </li>
            <li><a href="./blog">Blog</a></li>
            <li><a href="./contact">Contact</a></li>
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

<?php echo $__env->make('partials.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</header>
<!-- Header Section End -->

<?php echo $__env->yieldContent('content'); ?>

<!-- Footer Section Begin -->
<footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="footer__about__logo">
                    <a href="./"><img src="<?php echo e(asset('storage/img/logo.png')); ?>" alt=""></a>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        
                        <ul>
                            <h4>JAKARTA SELATAN</h4>
                            <li>Alamat : Graha STK Jl. Taman Marga Satwa. Pasar Minggu, Jakarta Selatan 12550</li>
                            <li>No. Telp: (021) - 39703970</li>
                            <li>Email: telemarketing@hsp.net.id</li>
                        </ul>
                        <br>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                    <ul>
                        <h4>JAKARTA TIMUR</h4>
                        <li>Alamat : Jl. Tanah Merdeka No. 1 RT 010 RW 003 Rambutan Ciracas Jakarta Timur </li>
                        <li>No. Telp: (021) - 39703970</li>
                        <li>Email: telemarketing@hsp.net.id</li>
                    </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer__widget">
                        <h6>Link terkait</h6>
                        <ul>
                            <li><a href="#">Tentang Kita</a></li>
                            <li><a href="#">Kebijakan Pribadi</a></li>
                            <li><a href="#">Peta Situs Kami</a></li>
                            <li><a href="#">Pelayanan Kami</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="footer__widget">
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> HSP E-COMMERCE | </i> by <a href="https://hsp.net.id" target="_blank">HSPNET</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
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

</html><?php /**PATH C:\xampp\htdocs\Ecommerce\resources\views/layouts/main.blade.php ENDPATH**/ ?>