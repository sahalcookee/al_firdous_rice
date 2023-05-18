<!DOCTYPE html>
<html lang="en">
<?php include 'assets/includes/head.php';?>
<body>
    <!-- nav-section -->
    <section>
        <?php include 'assets/includes/navbar.php';?>
    </section>

    <!-- banner section  -->
    <section class="mt-4 pb-5">
        <div class="container">
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner rounded-5">
                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="assets/images/h-banner.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="assets/images/h-banner.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- section-1  -->
    <section class="py-5 position-relative">
        <img class="position-absolute h-s1-decor-1" src="assets/images/h-s1-rice-1.png" alt="">
        <img class="position-absolute end-0" src="assets/images/h-s1-rice-2.png" alt="">
        <div class="container">
            <div>
                <h2 class="main-h fw-bold text-center blk-prime h-s1-h mx-auto max-w">Discover the Secret to Perfect Rice Every Time!</h2>
            </div>
            <div>
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="assets/images/h-s1-banner-img.png" alt="">
                    </div>
                    <div class="col-12">
                        <div class="rounded rounded-5 h-s1-yellow-div position-relative">
                            <div class="text-center">
                                <p class="body-p fw-bold fs-4 max-w mx-auto">We are a company that specializes in bringing you the finest products under five distinct brands - Akbar, Alhind, Alif Laila, Firdous, and Abusalam. Each brand has its unique focus, but all are united by a passion for quality and excellence.</p>
                                <p class="body-p fw-semibold mt-4">With our years of experience in the industry, we have become experts in bringing you the very best in [mention the types of products you offer]. Our commitment to exceptional quality, attention to detail, and customer satisfaction has made us a trusted name in the industry. Thank you for choosing our products, and we look forward to bringing you the very best that our brands have to offer.</p>
                                <div class="mt-5">
                                    <a class="d-inline-flex bg-white rounded-pill px-4 py-3 text-decoration-none align-items-center text-black h-s1-butn" href="#">
                                        <p class="body-p fw-semibold fs-5 m-0">Read our story</p>
                                        <img class="ms-3" src="assets/images/butn-icon.svg" alt="">
                                    </a>
                                </div>
                            </div>
                            <img class="position-absolute start-0 bottom-0" src="assets/images/h-s1-grain-img.png" alt="">
                            <img class="position-absolute end-0 bottom-0 h-s1-grain-2" src="assets/images/h-s1-grain-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- script -->
    <?php include 'assets/includes/common_script.php';?>
</body>
</html>