<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kitab</title>
    <link rel="icon" href="{{ asset ('assets/frontend/pillowmart/pillowmart/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/frontend/pillowmart/pillowmart/css/style.css')}}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/logokitab.jpg')}}" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="./index">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./about">about</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        product
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="./product_list"> product list</a>
                                        <a class="dropdown-item" href="./single-product">product details</a>

                                    </div>
                                </li>
                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_3"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="login.html">
                                            login

                                        </a>
                                        <a class="dropdown-item" href="checkout.html">product checkout</a>
                                        <a class="dropdown-item" href="cart.html">shopping cart</a>
                                        <a class="dropdown-item" href="confirmation.html">confirmation</a>
                                        <a class="dropdown-item" href="elements.html">elements</a>
                                    </div>
                                </li> --}}

                                {{-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_2"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        blog
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_2">
                                        <a class="dropdown-item" href="blog.html"> blog</a>
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                    </div>
                                </li> --}}

                                <li class="nav-item">
                                    <a class="nav-link" href="./contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex align-items-center">
                            <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <a href="cart.html">
                                <i class="flaticon-shopping-cart-black-shape"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="search_input" id="search_input_box">
            <div class="container ">
                <form class="d-flex justify-content-between search-inner">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>product list</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!-- product list part start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product_sidebar">
                        <div class="single_sedebar">
                            <form action="#">
                                <input type="text" name="#" placeholder="Search keyword">
                                <i class="ti-search"></i>
                            </form>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">Category <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">Category 1</a></p>
                                    <p><a href="#">Category 2</a></p>
                                    <p><a href="#">Category 3</a></p>
                                    <p><a href="#">Category 4</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">Type <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">Type 1</a></p>
                                    <p><a href="#">Type 2</a></p>
                                    <p><a href="#">Type 3</a></p>
                                    <p><a href="#">Type 4</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product_list">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/product/ibnu.jpg')}}" alt="#" class="img-fluid">
                                    <h3> <a href="./single-product"> kitab Tafsir Ibnu Katsir</a> </h3>
                                    <p>Keistimewaan kitab tafsir dibandingkan kitab-kitab lain sejenisnya.penulisan teks dan tahqiq lengkap,
                                        menuliskan semua hadits yang sahih dan semua ayat yang menjadi pendukungnya,menyebutkan perawi hadits
                                        dengan dlengkapi sumber-sumber hadits.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/product/maram.jpg')}}" alt="#" class="img-fluid">
                                        <h3> <a href="./single-product">Terjemah Bulughul Maram</a> </h3>
                                        <p>Keistimewaan Kitab Bulughul Maram atau Bulugh al-Maram min Adillat al-Ahkam,
                                        Kitab ini merupakan kitab hadis tematik yang memuat hadis-h</p>
                                    </div>

                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/product/showi.jpg')}}" alt="#" class="img-fluid">
                                    <h3> <a href="./single-product"> Kitab Showi</a> </h3>
                                    <p> Keistimewaan Kitab Showi ini menjelaskan Tafsir al-Jalalain secara panjang lebar, dan sering mengutip pendapat
                                        para ahli tafsir sebelumnya. Tafsir ini dicetak dalam 4 jilid tebal, Imam al Karkhi menggunakan
                                        al-manhaj al-lughowi (metode kebahasaan) dalam hasyiah ini,
                                        dengan lebih detail dalam menjelaskan aspek qiroat dan mufrodat2 yang asing.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/product/fathulizar.jpg')}}" alt="#" class="img-fluid">
                                    <h3> <a href="./single-product"> Kitab Fathulizar</a> </h3>
                                    <p>Keistimewaan Dalam kitab fathulizar ini memuat beberapa faidah penting tentang pernikahan, meliputi senggama,
                                        rahasia di balik waktu melakukannya, tatacaranya, serta rahasia dan keunikan
                                        penciptaan seorang gadis. </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/product/ahlaq.jpg')}}" alt="#" class="img-fluid">
                                    <h3> <a href="./single-product">Kitab Ahlaq</a> </h3>
                                    <p> Keistimewaan kitab al-Akhlaq lil Banin dan al-Akhlaq lil Banat yang berisi tentang etika anak-anak baik laki-laki maupun perempuan.
                                        Karya tulisnya yang ringkas dan mudah dicerna membuat karangan beliau digunakan sebagai bahan kurikulum
                                        di berbagai madrasah diniyah maupun pesantren-pesantren</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/product/safinah.jpg')}}" alt="#" class="img-fluid">
                                        <h3> <a href="./single-product">Kitab Sapinah</a> </h3>
                                        <p> Keistimewaan Kitab Safinah Seperti kitab-kitab fikih pada umumnya yang membahas tentang Rukun Islam (syahadat, shalat, puasa, zakat, dan haji)
                                            serta hal-hal pendukung tentang syarat sahnya ibadah kepada Allah, </p>
                                    </div>
                                </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/product/qurotuluyun.jpg')}}" alt="#" class="img-fluid">
                                    <h3> <a href="./single-product">Kitab Qurotuluyun</a> </h3>
                                    <p>Keistimewaan Kitab Ini sama saja seperti kitab fathulizar menjelaskan tentang bab nikah,hanya saja lebih
                                        memperdalam ke pada hal lebih dalam lagi.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/product/talim.jpg')}}" alt="#" class="img-fluid">
                                        <h3> <a href="./single-product">Terjemah Kitab Ta'lim Mutalim</a> </h3>
                                        <p> </p>
                                    </div>
                                </div>

                            <div class="col-lg-6 col-sm-6">
                                    <div class="single_product_item">
                                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/product/fathulizar.jpg')}}" alt="#" class="img-fluid">
                                        <h3> <a href="./single-product">Kitab Fathulizar</a> </h3>
                                        <p>Keistimewaan kitab inilah sebuah kitab yang kecil dan praktis bentuknya tapi tinggi kedudukannya dan besar manfaatnya.
                                            Memuat beberapa faidah penting tentang perkawinan. Meliputi bersenggama,
                                            rahasia di balik waktu melakukannya, tata caranya, serta rahasia
                                            dan keunikan penciptaan seorang gadis.</p>
                                    </div>
                                </div>
                        </div>
                        <div class="load_more_btn text-center">
                            <a href="#" class="btn_3">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

    <!-- client review part here -->
    {{-- <section class="client_review">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="client_review_slider owl-carousel">
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/client.png')}}" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/client_1.png')}}" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                        <div class="single_client_review">
                            <div class="client_img">
                                <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/client_2.png')}}" alt="#">
                            </div>
                            <p>"Working in conjunction with humanitarian aid agencies, we have supported programmes to help alleviate human suffering.</p>
                            <h5>- Micky Mouse</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- client review part end -->

    <!-- feature part here -->
    {{-- <section class="feature_part section_padding">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6">
                    <div class="feature_part_tittle">
                        <h3>Credibly innovate granular
                        internal or organic sources
                        whereas standards.</h3>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_content">
                        <p>Seamlessly empower fully researched growth strategies and interoperable internal or “organic” sources. Credibly innovate granular internal or “organic” sources whereas high standards in web-readiness.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/icon/feature_icon_1.svg')}}" alt="#">
                        <h4>Credit Card Support</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/icon/feature_icon_2.svg')}}" alt="#">
                        <h4>Online Order</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/icon/feature_icon_3.svg')}}" alt="#">
                        <h4>Free Delivery</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature_part">
                        <img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/icon/feature_icon_4.svg')}}" alt="#">
                        <h4>Product with Gift</h4>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- feature part end -->

    {{-- <!-- subscribe part here -->
    <section class="subscribe_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="subscribe_part_content">
                        <h2>Dapatkan promosi & pembaruan!</h2>
                        <div class="subscribe_form">
                            <input type="email" placeholder="Enter your mail">
                            <a href="#" class="btn_1">Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe part end --> --}}

    <!--::footer_part start::-->
    <footer class="footer_part">
            <div class="footer_iner">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-8">
                            <div class="footer_menu">
                                <div class="footer_logo">
                                    {{-- <a href="index.html"><img src="{{ asset ('assets/frontend/pillowmart/pillowmart/img/logo.png')}}" alt="#"></a> --}}
                                </div>
                                <div class="footer_menu_item">
                                    <a href="index.html">Home</a>
                                    <a href="about.html">About</a>
                                    <a href="product_list.html">Products</a>
                                    {{-- <a href="#">Pages</a> --}}
                                    <a href="blog.html">Blog</a>
                                    <a href="contact.html">Contact</a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-4">
                            <div class="social_icon">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="copyright_part">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-12">
                            <div class="copyright_text">
                                <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                                <div class="copyright_link">
                                    <a href="#">Turms & Conditions</a>
                                    <a href="#">FAQ</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/mixitup.min.js')}}"></script>
    <!-- particles js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/slick.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/waypoints.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/contact.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.form.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/mail-script.js')}}"></script>
    <!-- custom js -->
    <script src="{{ asset ('assets/frontend/pillowmart/pillowmart/js/custom.js')}}"></script>
</body>

</html>
