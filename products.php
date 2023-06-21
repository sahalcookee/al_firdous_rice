<!DOCTYPE html>
<html lang="en">
<?php include 'assets/includes/head.php';?>
<body>
    <!-- nav-section -->
    <?php include 'assets/includes/navbar.php';?>
    <?php
    function active($currect_page){
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url = end($url_array);  
    if($currect_page == $url){
        echo 'active-nav';
    } 
    }
    ?>

    <!-- section -1  -->
    <section class="mt-lg-4 mt-5 pt-5 pt-lg-0 pb-0 pb-lg-5">
        <div class="yellow-bg d-flex justify-content-between">
            <span class="brown-bg d-inline-block prod-s1-span prod-s1-span-1"></span>
            <div class="text-center py-5 align-self-center">
                <h2 class="main-h2 fw-bold h-s1-h m-0 text-uppercase">Our Products</h2>
                <img class="mt-3 img-fluid" src="assets/images/h-decor.png" alt="">
            </div>
            <span class="brown-bg d-inline-block prod-s1-span prod-s1-span-2"></span>
        </div>
    </section>

    <!-- section-2  -->
    <section class="position-relative py-5 mb-0 mb-lg-5">
        <img class="position-absolute h-s1-decor-1 top-50" src="assets/images/h-s1-rice-1.png" alt="">
        <img class="position-absolute h-s1-decor-2 end-0 bottom-0" src="assets/images/h-s1-rice-2.png" alt="">
        <div class="container">
            <div class="prod-s2-div p-5 position-relative">
                <h2 class="text-center main-h2 fw-bold fs-1 text-uppercase position-absolute translate-middle top-0 start-50 px-5 prod-s2-head">BASMATI</h2>
                <div class="row g-5 justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/alhind.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al Hind</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/alhind-super.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al Hind</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/alhind-whitesella.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al Hind</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/alhind-bukhari.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al Hind</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/alhind-biriyani-blue.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al Hind</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/akbarcity-rozana-green.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Akbar City</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/akbarcity-xxl-green.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Akbar City</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/akbarcityxxl.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Akbar City</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/akbarcity-rozana.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Akbar City</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/alqilal-green.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al Qilal</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/alkilal-orange.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al Qilal</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/alqilal-basmathi.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al Qilal</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="basmati">
                                <img class="h-s4-product-img img-fluid" src="assets/images/alqilal-blck.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al Qilal</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-3  -->
    <section class="py-5 mb-0 mb-lg-5">
        <div class="container">
            <div class="prod-s2-div p-5 position-relative">
                <h2 class="text-center main-h2 fw-bold fs-1 text-uppercase position-absolute translate-middle top-0 start-50 px-5 prod-s2-head">Kaima</h2>
                <div class="row g-5 justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="kaima">
                                <img class="h-s4-product-img img-fluid" src="assets/images/aliflaila.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Alif Laila</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="kaima">
                                <img class="h-s4-product-img img-fluid" src="assets/images/qilaf-jeerakam-brown.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Qilaf</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="kaima">
                                <img class="h-s4-product-img img-fluid" src="assets/images/akbarcity-jeera.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Akbar City</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="kaima">
                                <img class="h-s4-product-img img-fluid" src="assets/images/alqilal-jeerakam.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al qilal</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section-4  -->
    <section class="py-5 mb-0 mb-lg-5">
        <div class="container">
            <div class="prod-s2-div p-5 position-relative">
                <h2 class="text-center main-h2 fw-bold fs-1 text-uppercase position-absolute translate-middle top-0 start-50 px-5 prod-s2-head">Kolam</h2>
                <div class="row g-5 justify-content-center">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="kolam">
                                <img class="h-s4-product-img img-fluid" src="assets/images/alfirdous.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al Firdous</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="kolam">
                                <img class="h-s4-product-img img-fluid" src="assets/images/abusalam.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Abu salam</h5>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="h-s4-item">
                            <a class="text-decoration-none d-inline-grid h-pro-card-a" href="kolam">
                                <img class="h-s4-product-img img-fluid" src="assets/images/alqilal-kolam.png" alt="">
                                <h5 class="body-p brown-bg py-2 d-inline-block text-white h-s4-item-p text-uppercase">Al Qilal</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <?php include 'assets/includes/footer.php';?>

    <!-- script -->
    <?php include 'assets/includes/common_script.php';?>
</body>
</html>