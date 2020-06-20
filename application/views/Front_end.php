<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Flava</title>

        <script src='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.js'></script>
        <link
            href='https://api.mapbox.com/mapbox-gl-js/v1.0.0/mapbox-gl.css'
            rel='stylesheet'/>

        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link
            href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900"
            rel="stylesheet">
        <link
            rel="stylesheet"
            href="<?php echo base_url("assets/front/fonts/icomoon/style.css") ?>">

        <link
            rel="stylesheet"
            href="<?php echo base_url("assets/front/css/bootstrap.min.css") ?>">
        <link
            rel="stylesheet"
            href="<?php echo base_url("assets/front/css/jquery-ui.css") ?>">
        <link
            rel="stylesheet"
            href="<?php echo base_url("assets/front/css/owl.carousel.min.css") ?>">
        <link
            rel="stylesheet"
            href="<?php echo base_url("assets/front/css/owl.theme.default.min.css") ?>">
        <link
            rel="stylesheet"
            href="<?php echo base_url("assets/front/css/owl.theme.default.min.css") ?>">

        <link
            rel="stylesheet"
            href="<?php echo base_url("assets/front/css/jquery.fancybox.min.css") ?>">

        <link
            rel="stylesheet"
            href="<?php echo base_url("assets/front/css/bootstrap-datepicker.css") ?>">

        <link
            rel="stylesheet"
            href="<?php echo base_url("assets/front/fonts/flaticon/font/flaticon.css") ?>">

        <link
            rel="stylesheet"
            href="<?php echo base_url("assets/front/css/aos.css") ?>">

        <link
            rel="stylesheet"
            href="<?php echo base_url("assets/front/css/style.css") ?>">

    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <div class="site-wrap">

            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <header
                class="site-navbar py-4 js-sticky-header site-navbar-target"
                role="banner">

                <div class="container-fluid">
                    <div class="d-flex align-items-center">
                        <div class="site-logo mr-auto w-25">
                            <a href="Home">
                                <b>Flava</b></a>
                        </div>

                        <div class="mx-auto text-center">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                   
                                    <li>
                                        <a href="#courses-section" class="nav-link">Home</a>
                                    </li>
                                    <li>
                                        <a href="#programs-section" class="nav-link">Women</a>
                                    </li>
                                    <li>
                                        <a href="#teachers-section" class="nav-link">About us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <div class="ml-auto w-25">
                            <nav class="site-navigation position-relative text-right" role="navigation">
                                <ul
                                    class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                    <li class="cta">
                                        <a href="#contact-section">
                                            <span>Contact Us</span></a>
                                    </li>
                                </ul>
                            </nav>
                            <a
                                href="#"
                                class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right">
                                <span class="icon-menu h3"></span></a>
                        </div>
                    </div>
                </div>

            </header>

            <div class="intro-section" id="home-section">


            <div class="site-section courses-title" id="courses-section">

                
            </div>
            <div
                class="site-section courses-entry-wrap"
                data-aos="fade-up"
                data-aos-delay="100">
                <div class="container">
                    <div class="row">

                        <div class="owl-carousel col-10 nonloop-block-14">

                            <?php foreach($data as $row){ ?>
                            <div class="course bg-white h-100 align-self-stretch">
                                <figure class="m-0">
                                    <a href="#"><img
                                        src="<?= base_url("images/").$row["gambar"] ?>"
                                        alt="Image"
                                        class="img-fluid"></a>
                                </figure>
                                <div class="course-inner-text py-4 px-4">
                                    <span class="course-price">Rp.<?= $row["harga"] ?>,-</span>

                                    <h3>
                                        <a href="#"><?= $row["judul_komik"] ?></a>
                                    </h3>
                                    <p>Pengarang:
                                        <?= $row["pengarang"] ?>
                                        <br>
                                        Penerbit :
                                        <?= $row["penerbit"] ?></p>
                                </div>
                                <div class="d-flex border-top stats">
                                    <div class="py-3 px-4">
                                        <span class="icon-users"></span>
                                        <?= $row["tersedia"] ?>
                                        komik tersedia</div>
                                    <div class="py-3 px-4 w-20 ml-auto border-left">
                                        <span class="icon-chat"></span>
                                        <?= $row["tersewa"] ?>
                                        tersewa</div>
                                </div>
                            </div>
                            <?php } ?>

                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-7 text-center">
                            <button class="customPrevBtn btn btn-primary m-1">Prev</button>
                            <button class="customNextBtn btn btn-primary m-1">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section" id="programs-section">
                <div class="container">
                    <div class="row mb-5 justify-content-center">
                        <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                            <h2 class="section-title">Maps</h2>
                            <p>the location of RentalKomik Jogja</p>
                        </div>
                        <!-- <div class="site-wrap"> <p> <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7906.496209001693!2d110.39024844372796!3d-7.763492096982406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59a4cbeb03a9%3A0xb1b98532a6c04f0d!2sSoropadan%2C+Condongcatur%2C+Kec.+Depok%2C+Kabupaten+Sleman%2C+Daerah+Istimewa+Yogyakarta!5e0!3m2!1sid!2sid!4v1561722460827!5m2!1sid!2sid"
                        width="1600" height="600" frameborder="0" style="border:0"
                        allowfullscreen="allowfullscreen"></iframe> </p> </div> -->
                        <div id='map' style='width: 1500px; height: 500px;'></div>
                        <script>
                        
                            mapboxgl.accessToken = 'pk.eyJ1IjoicHJhbnRvZSIsImEiOiJjanhvN21vazcwNDQ3M2hxc2N6aXVxdWhiIn0.CHMfOliQ9Ni' +
                                    'fz8_j-XUQoA';
                                    
                            var map = new mapboxgl.Map(
                                {container: 'map', style: 'mapbox://styles/mapbox/streets-v11'}
                            );
                            var marker = new mapboxgl.Map.Marker({position: new mapboxgl.Map.LatLng(-7.764990, 110.395767),map: map});
                        // Maaf maps nya tidak berfungsi dengan baik karena harus menggunakan API dari google dan brbayar jadi saya hanya bisa menggunakan mapbox
                        </script>

                    </div>

                </div>
            </div>

            <div class="site-section" id="teachers-section">
                <div class="future-blobs">
                    <div class="blob_2">
                        <img src="<?php echo base_url("assets/front/images/blob_2.svg") ?>" alt="Image">
                    </div>
                    <div class="blob_1">
                        <img src="<?php echo base_url("assets/front/images/blob_1.svg") ?>" alt="Image">
                    </div>
                </div>
                <div class="container">

                    <div class="row mb-5 justify-content-center">
                        <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
                            <h2 class="section-title">Develpoer</h2>
                            <p class="mb-5">Program ini menggunakan template dari Colorlib sebagai Front-End
                                dan Admin-LTE sebagai Back-End, serta Mysql sebagai database</p>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100"></div>

                        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                            <div class="teacher text-center">

                                <img
                                    src="<?php echo base_url("assets/front/images/person_1.jpg") ?>"
                                    alt="Image"
                                    class="img-fluid w-50 rounded-circle mx-auto mb-4">
                                <div class="py-2">
                                    <h3 class="text-black">Pranto Suwarno</h3>
                                    <p class="position">Developer</p>
                                    <p>saya berasal dari Jambi, dan kini sedang menempuh pendidikan S1 di
                                        Universitas Mercu Buana Yogyakarta.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300"></div>
                    </div>
                </div>
            </div>

            <div
                class="site-section bg-image overlay"
                style="background-image: url('images/hero_1.jpg');">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-8 text-center testimony">
                            <img
                                src="<?php echo base_url("assets/front/images/person_4.jpg") ?>"
                                alt="Image"
                                class="img-fluid w-25 mb-4 rounded-circle">
                            <h3 class="mb-4">Pranto Suwaarno</h3>
                            <blockquote>
                                <p>Kita bukan yang paling menderita</p>
                                <p>&ldquo; Apakah kamu mengira bahwa kamu akan masuk surga, padahal belum datang
                                    kepadamu (cobaan) seperti yang dialami orang-orang yang terdahulu sebelum kamu.
                                    Mereka ditimpa kemelaratan, penderitaan dan diguncang (dengan berbagai cobaan)
                                    sehingga Rasul dan orang-orang beriman bersamanya berkata, "Kapankah datang
                                    pertolongan Allah?" Ingatlah, sesungguhnya pertolongan Allah itu dekat. (Q.S. Al
                                    Baqarah: 214). &rdquo;</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section pb-0">

                <div class="future-blobs">
                    <div class="blob_2">
                        <img src="<?php echo base_url("assets/front/images/blob_2.svg") ?>" alt="Image">
                    </div>
                    <div class="blob_1">
                        <img src="<?php echo base_url("assets/front/images/blob_1.svg") ?>" alt="Image">
                    </div>
                </div>
                <div class="container">
                    <div
                        class="row mb-5 justify-content-center"
                        data-aos="fade-up"
                        data-aos-delay="">
                        <div class="col-lg-8 text-center">
                            <h2 class="section-title">
                                Educational Background</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div
                            class="col-lg-4 ml-auto align-self-start"
                            data-aos="fade-up"
                            data-aos-delay="100">

                            <div class="p-4 rounded bg-white why-choose-us-box">

                                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                    <div class="mr-3">
                                        <span class="custom-icon-inner">
                                            <span class="icon icon-graduation-cap"></span></span></div>
                                    <div>
                                        <h3 class="m-0">TK Cut Mutia PTPN VI Kayu Aro</h3>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                    <div class="mr-3">
                                        <span class="custom-icon-inner">
                                            <span class="icon icon-university"></span></span></div>
                                    <div>
                                        <h3 class="m-0">SDN 75/III Bedeng Delapan</h3>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                    <div class="mr-3">
                                        <span class="custom-icon-inner">
                                            <span class="icon icon-graduation-cap"></span></span></div>
                                    <div>
                                        <h3 class="m-0">SMPN 14 Kerinci</h3>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                    <div class="mr-3">
                                        <span class="custom-icon-inner">
                                            <span class="icon icon-university"></span></span></div>
                                    <div>
                                        <h3 class="m-0">SMKN 1 Kerinci</h3>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                    <div class="mr-3">
                                        <span class="custom-icon-inner">
                                            <span class="icon icon-graduation-cap"></span></span></div>
                                    <div>
                                        <h3 class="m-0">Universitas Mercu Buana Yogyakarta</h3>
                                    </div>
                                </div>

                                <!-- <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                                <div class="mr-3"> <span class="custom-icon-inner"> <span class="icon
                                icon-university"></span></span></div> <div> <h3 class="m-0">Best Teachers</h3>
                                </div> </div> -->

                            </div>

                        </div>
                        <div class="col-lg-7 align-self-end" data-aos="fade-left" data-aos-delay="200">
                            <img
                                src="<?php echo base_url("assets/front/images/person_transparent.png") ?>"
                                alt="Image"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-section bg-light" id="contact-section">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-md-7">

                            <h2 class="section-title mb-3">Message Us</h2>
                            <p class="mb-5">Jika ada pertanyaan, keritik, maupun saran bisa anda kirim
                                melalui fitur di bawah ini.</p>

                            <form method="post" data-aos="fade">
                                <div class="form-group row">
                                    <div class="col-md-6 mb-3 mb-lg-0">
                                        <input type="text" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Last name">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <textarea
                                            class="form-control"
                                            id=""
                                            cols="30"
                                            rows="10"
                                            placeholder="Write your message here."></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">

                                        <input
                                            type="submit"
                                            class="btn btn-primary py-3 px-5 btn-block btn-pill"
                                            value="Send Message">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer-section bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>About RentalKomik Jogja</h3>
                            <p>RentalKomik Jogja adalah layanan untuk memudahkan konsumen dalam melihat dan
                                memilih komik yang akan di rental.</p>
                        </div>

                        <div class="col-md-3 ml-auto">
                            <h3>Links</h3>
                            <ul class="list-unstyled footer-links">
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                    <a href="#">Comics</a>
                                </li>
                                <li>
                                    <a href="#">Maps</a>
                                </li>
                                <li>
                                    <a href="#">Portofolio</a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-4">
                            <h3>Social Media</h3>
                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3">
                                    <span class="custom-icon-inner">
                                        <span class="icon icon-graduation-cap"></span></span></div>
                                <a href="https://www.facebook.com/prantosoearno" target="_blank">Facebook</a>

                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3">
                                    <span class="custom-icon-inner">
                                        <span class="icon icon-graduation-cap"></span></span></div>
                                <a href="https://www.instagram.com/pranto_soearno/" target="_blank">Instagram</a>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3">
                                    <span class="custom-icon-inner">
                                        <span class="icon icon-graduation-cap"></span></span></div>
                                <a href="https://github.com/Prantoe" target="_blank">Github</a>
                            </div>

                        </div>

                    </div>

                    <div class="row pt-5 mt-5 text-center">
                        <div class="col-md-12">
                            <div class="border-top pt-5">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY
                                    3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script>
                                    All rights reserved | This template is made with
                                    <i class="icon-heart" aria-hidden="true"></i>
                                    by
                                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY
                                    3.0. -->
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </footer>

        </div>
        <!-- .site-wrap -->

        <script src="<?php echo base_url("assets/front/js/jquery-3.3.1.min.js") ?>"></script>
        <script
            src="<?php echo base_url("assets/front/js/jquery-migrate-3.0.1.min.js") ?>"></script>
        <script src="<?php echo base_url("assets/front/js/jquery-ui.js") ?>"></script>
        <script src="<?php echo base_url("assets/front/js/popper.min.js") ?>"></script>
        <script src="<?php echo base_url("assets/front/js/bootstrap.min.js") ?>"></script>
        <script src="<?php echo base_url("assets/front/js/owl.carousel.min.js") ?>"></script>
        <script src="<?php echo base_url("assets/front/js/jquery.stellar.min.js") ?>"></script>
        <script src="<?php echo base_url("assets/front/js/jquery.countdown.min.js") ?>"></script>
        <script
            src="<?php echo base_url("assets/front/js/bootstrap-datepicker.min.js") ?>"></script>
        <script src="<?php echo base_url("assets/front/js/jquery.easing.1.3.js") ?>"></script>
        <script src="<?php echo base_url("assets/front/js/aos.js") ?>"></script>
        <script src="<?php echo base_url("assets/front/js/jquery.fancybox.min.js") ?>"></script>
        <script src="<?php echo base_url("assets/front/js/jquery.sticky.js") ?>"></script>
        <script src="<?php echo base_url("assets/front/js/main.js") ?>"></script>

    </body>
</html>